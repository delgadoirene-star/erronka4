# IsardVDI & Proxmox "Copy-Paste" Deployment Guide

**Version:** 3.2 (Complete Implementation Guide)
**Prerequisites:**
1.  **6 VMs created** in IsardVDI/Proxmox with **Debian 12** installed.
2.  **SSH Access** to all VMs (User: `debian` or `root`).
3.  **Internet Access** on the Gateway VM's WAN interface.

---

## 🛑 PHASE 0: VM Creation Specs (Manual Step)

Create these VMs in your hypervisor.

| VM Name | vCPU | RAM | HDD | Network 1 (WAN) | Network 2 (LAN) |
|---|---|---|---|---|---|
| **ZG-Gateway** | 1 | 1GB | 10GB | Bridge (Internet) | Internal (Isolated) |
| **ZG-App** | 2 | 4GB | 20GB | - | Internal (Isolated) |
| **ZG-Data** | 2 | 4GB | 20GB | - | Internal (Isolated) |
| **ZG-SecOps** | 4 | 8GB | 40GB | - | Internal (Isolated) |
| **ZG-OT** | 1 | 2GB | 10GB | - | Internal (Isolated) |
| **ZG-Client** | 2 | 4GB | 20GB | - | Internal (Isolated) |

---

## 🌍 PHASE 1: ZG-GATEWAY IMPLEMENTATION

**Log in to `ZG-Gateway` via SSH.**

### 1.1. Identify Network Interfaces (CRITICAL)
*Debian 12 on KVM usually names interfaces `ens18`, `ens19`, etc., NOT `eth0`.*

Run this command to see your interfaces:
```bash
ip -br link
```
*   The one with an IP address (from DHCP) is your **WAN**.
*   The one that is "DOWN" or has no IP is your **LAN**.

**👇 COPY & PASTE THIS BLOCK (Update names if needed) 👇**

```bash
# SET YOUR INTERFACE NAMES HERE
WAN_IF="ens18"   # Replace with YOUR WAN interface
LAN_IF="ens19"   # Replace with YOUR LAN interface

# Become root
sudo -i

# Install basic tools
apt update && apt install -y vim curl wget nftables isc-dhcp-server

# Configure Interfaces
cp /etc/network/interfaces /etc/network/interfaces.bak
cat <<EOF > /etc/network/interfaces
source /etc/network/interfaces.d/*
auto lo
iface lo inet loopback
allow-hotplug $WAN_IF
iface $WAN_IF inet dhcp
allow-hotplug $LAN_IF
iface $LAN_IF inet static
    address 192.168.1.1
    netmask 255.255.0.0
    up ip addr add 192.168.10.1/24 dev $LAN_IF
    up ip addr add 192.168.20.1/24 dev $LAN_IF
    up ip addr add 192.168.50.1/24 dev $LAN_IF
    up ip addr add 192.168.200.1/24 dev $LAN_IF
EOF

# Enable IP Forwarding
echo "net.ipv4.ip_forward=1" > /etc/sysctl.d/99-routing.conf
sysctl -p /etc/sysctl.d/99-routing.conf

# Restart Networking
systemctl restart networking

# Configure DHCP
sed -i "s/INTERFACESv4=""/INTERFACESv4=\"$LAN_IF\"/" /etc/default/isc-dhcp-server
cat <<EOF > /etc/dhcp/dhcpd.conf
default-lease-time 600;
max-lease-time 7200;
authoritative;
subnet 192.168.10.0 netmask 255.255.255.0 {
  range 192.168.10.100 192.168.10.200;
  option routers 192.168.10.1;
  option domain-name-servers 8.8.8.8;
}
subnet 192.168.20.0 netmask 255.255.255.0 {
  range 192.168.20.100 192.168.20.200;
  option routers 192.168.20.1;
  option domain-name-servers 8.8.8.8;
}
subnet 192.168.50.0 netmask 255.255.255.0 {
  range 192.168.50.100 192.168.50.200;
  option routers 192.168.50.1;
}
subnet 192.168.200.0 netmask 255.255.255.0 {
  range 192.168.200.100 192.168.200.200;
  option routers 192.168.200.1;
}
EOF
systemctl restart isc-dhcp-server

# Configure NFTables
cat <<EOF > /etc/nftables.conf
#!/usr/sbin/nft -f
flush ruleset
table ip filter {
    chain input {
        type filter hook input priority 0; policy drop;
        iifname "lo" accept
        ct state established,related accept
        tcp dport 22 accept
        ip protocol icmp accept
    }
    chain forward {
        type filter hook forward priority 0; policy drop;
        ct state established,related accept
        ip saddr 192.168.10.0/24 ip daddr 192.168.20.0/24 tcp dport { 80, 443 } accept
        ip saddr 192.168.20.0/24 ip daddr 192.168.20.0/24 tcp dport { 5432, 6379 } accept
        ip saddr 192.168.200.0/24 accept
        iifname "$LAN_IF" oifname "$WAN_IF" accept
    }
    chain output {
        type filter hook output priority 0; policy accept;
    }
}
table ip nat {
    chain postrouting {
        type nat hook postrouting priority 100; policy accept;
        oifname "$WAN_IF" masquerade
    }
}
EOF
ft -f /etc/nftables.conf
systemctl enable nftables
```

---

## 💾 PHASE 2: ZG-DATA IMPLEMENTATION

**Log in to `ZG-Data`.**

```bash
sudo -i
apt update && apt install -y curl
curl -fsSL https://get.docker.com -o get-docker.sh && sh get-docker.sh
mkdir -p /opt/zabala-data && cd /opt/zabala-data
cat <<EOF > docker-compose.yml
version: '3.8'
services:
  postgres:
    image: postgres:16-alpine
    container_name: zabala-postgres
    restart: always
    environment:
      POSTGRES_USER: zabala_user
      POSTGRES_PASSWORD: secure_password_123
      POSTGRES_DB: zabala_db
    volumes:
      - ./pgdata:/var/lib/postgresql/data
    ports:
      - "5432:5432"
  redis:
    image: redis:7-alpine
    container_name: zabala-redis
    restart: always
    command: redis-server --requirepass secure_redis_123
    ports:
      - "6379:6379"
EOF
docker compose up -d
```

---

## 💻 PHASE 3: ZG-APP IMPLEMENTATION

**Log in to `ZG-App`.**

```bash
sudo -i
apt update && apt install -y curl git
curl -fsSL https://get.docker.com -o get-docker.sh && sh get-docker.sh
mkdir -p /opt/zabala-app && cd /opt/zabala-app
cat <<EOF > docker-compose.yml
version: '3.8'
services:
  api:
    image: php:8.4-apache
    container_name: zabala-api
    restart: always
    environment:
      DB_HOST: 192.168.20.20
      DB_USER: zabala_user
      DB_PASS: secure_password_123
      DB_NAME: zabala_db
      REDIS_HOST: 192.168.20.20
      REDIS_PASS: secure_redis_123
    ports:
      - "80:80"
    volumes:
      - ./src:/var/www/html
EOF
# Clone or copy src files here.
docker compose up -d
```

---

## 🛡️ PHASE 4: ZG-SECOPS IMPLEMENTATION

**Log in to `ZG-SecOps`.**

```bash
sudo -i
apt update && apt install -y curl git
curl -fsSL https://get.docker.com -o get-docker.sh && sh get-docker.sh
sysctl -w vm.max_map_count=262144
echo "vm.max_map_count=262144" >> /etc/sysctl.conf

#Wazuh
mkdir -p /opt/wazuh && cd /opt/wazuh
git clone https://github.com/wazuh/wazuh-docker.git .
docker compose -f generate-indexer-certs.yml run --rm generator
docker compose up -d

# Honeypots
mkdir -p /opt/honeypots && cd /opt/honeypots
cat <<EOF > docker-compose.yml
version: '3'
services:
  conpot:
    image: honeycomb/conpot:latest
    container_name: honey-conpot
    ports:
      - "5020:502"
      - "1610:161"
  dionaea:
    image: dinotools/dionaea:latest
    container_name: honey-dionaea
    ports:
      - "21:21"
      - "445:445"
    cap_add:
      - NET_ADMIN
EOF
docker compose up -d
```

---

## 🏭 PHASE 5: ZG-OT IMPLEMENTATION

**Log in to `ZG-OT`.**

```bash
sudo -i
apt update && apt install -y curl
curl -fsSL https://get.docker.com -o get-docker.sh && sh get-docker.sh
mkdir -p /opt/openplc && cd /opt/openplc
cat <<EOF > docker-compose.yml
version: '3.8'
services:
  openplc:
    image: thiagoralves/openplc:v3
    container_name: ot-plc
    ports:
      - "8080:8080"
      - "502:502"
    privileged: true
EOF
docker compose up -d
```

---

## 🗄️ PHASE 7: DATABASE MIGRATIONS

**Log in to `ZG-App`.**

```bash
cd /opt/zabala-app
docker compose exec -T api apt update && docker compose exec -T api apt install -y postgresql-client
# Run SQL files from migrations folder
docker compose exec -T api /bin/bash -c \
  for f in /var/www/html/migrations/*.sql; do
    echo "Applying $f..."
    export PGPASSWORD=$DB_PASS
    psql -h $DB_HOST -U $DB_USER -d $DB_NAME -f "$f"
  done
' 
```

---
**Deployment Complete.**
