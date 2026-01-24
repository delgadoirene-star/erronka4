# OT Arrisku Ebaluazioa - Zabala Gailetak

## 1. Sistema Kritikoen Identifikazioa

### Sistema Kritikoak (Galleta Produkzioa)

| Sistema | Mota | Fabrikatzailea | Kritikotasuna | Justifikazioa |
|---------|------|----------------|---------------|---------------|
| PLC Siemens S7-1500 | Kontrolagailua | Siemens | KRITIKOA | Produkzio prozesua geldituko litzateke |
| SCADA WinCC | Gainbegiratzea | Siemens | ALTUA | Produkzioa ikusi/aldatu ezin |
| HMI Touchscreen (3x) | Interfazea | Siemens | ERTAINA | Eskuzko kontrola oraindik posiblea |
| Nahasketa Makina Motor | Aktuadorea | ABB | KRITIKOA | Galleta nahasketa gelditu |
| Labe Kontrol Sistema | Tenperatura | Omron | KRITIKOA | Erreketa arriskua |
| Produktu Konbeiadorea | Garraio sistema | Generic | BAXUA | Eskuzko ordezkoa posible |

## 2. Mehatxuen Identifikazioa (OT-specific)

| Mehatxua | Probabilitatea | Inpaktua | Arriskua | Kontrol Aktuala |
|----------|----------------|----------|----------|-----------------|
| **Ransomware SCADA-n** | ERTAINA | KRITIKOA | ALTUA | ❌ Antivirus zaharkitua |
| **Produktu Formula Aldaketa** (sabotajea) | BAXUA | KRITIKOA | ERTAINA | ⚠️ RBAC baina ez 2FA |
| **PLC Programaren Aldaketa** | BAXUA | MUY ALTUA | ALTUA | ❌ Ez dago Change Control |
| **Labe Tenperatura Manipulazioa** | BAXUA | KRITIKOA | ERTAINA | ⚠️ Alarma fisikala baina ez log |
| **Network Flooding DoS** | ERTAINA | ALTUA | ALTUA | ❌ Ez dago rate limiting |
| **USB Malware (PLC)** | ALTUA | MUY ALTUA | KRITIKOA | ❌ USB ez blokeatuta |
| **Insider Threat** (langile haserre) | BAXUA | ALTUA | ERTAINA | ⚠️ Acceso logging baina ez analisia |

## 3. Security Level (SL) Target

Galleta produkziorako **SL-2 (Security Level 2)** beharrezkoa:
- Protection against intentional violations using simple means
- Protection against insider threats

**Justifikazioa:** Produktu kontsumoa (osasuna), erreputazio galera eta galera ekonomikoa.
