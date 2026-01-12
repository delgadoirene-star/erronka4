# Aktiboen Erregistroa
## Zabala Gailetak S.A. - Informazioaren Segurtasuna Kudeatzeko Sistema

**Dokumentuaren IDa:** ASR-001  
**Bertsioa:** 1.0  
**Data:** 2026ko Urtarrilaren 8a  
**Sailkapena:** Oso Konfidentziala  
**Jabea:** Informazioaren Segurtasuneko Arduradun Nagusia (CISO)  
**Berrikuspen Maiztasuna:** Hiruhilekoa  
**Hurrengo Berrikuspen Data:** 2026ko Apirilaren 8a

---

## 1. Dokumentuaren Kontrola

### 1.1 Bertsio Historia

| Bertsioa | Data | Egilea | Aldaketak |
|----------|------|--------|-----------|
| 1.0 | 2026-01-08 | CISO | Hasierako aktiboen erregistroaren sorrera |

### 1.2 Helburua

Aktiboen Erregistro hau Zabala Gailetak-en jabetzakoak edo kontrolpekoak diren informazio-aktiboen inbentario osoa da. Honako hauek babesten ditu:
- ISO/IEC 27001:2022 betetzea (A eranskina 5.9 kontrola)
- Arriskuen ebaluazioa eta kudeaketa
- Negozioaren jarraitutasun plangintza
- Intzidentzien erantzuna
- Aktiboen bizi-zikloaren kudeaketa
- Aseguruak eta finantza-txostenak

### 1.3 Esparrua

Erregistro honek barne hartzen ditu:
- **IT Aktiboak:** Zerbitzariak, sare ekipamendua, lan-estazioak, gailu mugikorrak, softwarea
- **OT Aktiboak:** PLCak, SCADA sistemak, txertatutako sistemak dituen industria ekipamendua
- **Datu Aktiboak:** Datu-baseak, fitxategiak, babeskopiak, jabetza intelektuala
- **Aktibo Fisikoak:** Instalazioak, ekipamendua (informazioaren segurtasunarekin lotura dutenak)
- **Giza Aktiboak:** Informazioaren segurtasunerako kritikoak diren funtsezko langileak eta rolak
- **Zerbitzuak:** Hirugarrenen zerbitzuak eta hodeiko plataformak

### 1.4 Aktiboen Sailkapena

Aktiboak honela sailkatzen dira:
- **Konfidentzialtasuna:** Publikoa, Barnekoa, Konfidentziala, Oso Konfidentziala
- **Osotasuna:** Baxua, Ertaina, Altua, Kritikoa
- **Eskuragarritasuna:** Baxua (72 orduko etenaldia onargarria), Ertaina (24 ordu), Altua (8 ordu), Kritikoa (4 ordu)

---

## 2. IT Aktiboak

### 2.1 Zerbitzariak eta Azpiegitura

| Aktibo IDa | Aktibo Izena | Mota | Kokapena | Jabea | Zaintzailea | Sailkapena (K/O/E) | Helburua | Balioa (€) | Azken Eguneratzea |
|------------|--------------|------|----------|-------|-------------|--------------------|----------|------------|-------------------|
| SRV-001 | Web Aplikazio Zerbitzaria | Birtuala (AWS EC2) | eu-west-1a | IT Kudeatzailea | IT Taldea | OK/A/K | Eskaerak kudeatzeko web app | 15.000 | 2026-01-08 |
| SRV-002 | Datu-base Zerbitzaria (Nagusia) | Birtuala (AWS RDS) | eu-west-1a | IT Kudeatzailea | IT Taldea | OK/K/K | Bezero/eskaera datu-basea (MongoDB) | 25.000 | 2026-01-08 |
| SRV-003 | Datu-base Zerbitzaria (Replika) | Birtuala (AWS RDS) | eu-west-1b | IT Kudeatzailea | IT Taldea | OK/K/A | Datu-base erreplikazioa | 25.000 | 2026-01-08 |
| SRV-004 | Fitxategi Zerbitzaria | Fisikoa | Datu Zentroa | IT Kudeatzailea | IT Taldea | K/A/A | Dokumentu biltegiratzea, unitate partekatuak | 8.000 | 2026-01-08 |
| SRV-005 | SCADA Zerbitzaria | Fisikoa | Datu Zentroa | OT Kudeatzailea | OT Taldea | K/K/K | Produkzio monitorizazioa | 20.000 | 2026-01-08 |
| SRV-006 | Babeskopia Zerbitzaria | Fisikoa | Datu Zentroa | IT Kudeatzailea | IT Taldea | OK/K/A | Babeskopia biltegiratzea | 12.000 | 2026-01-08 |
| SRV-007 | Domeinu Kontrolatzailea | Birtuala (lokala) | Datu Zentroa | IT Kudeatzailea | IT Taldea | OK/K/K | Active Directory, autentifikazioa | 10.000 | 2026-01-08 |
| SRV-008 | Email Zerbitzaria (M365) | Hodeia (Microsoft) | Globala | IT Kudeatzailea | Microsoft | K/E/A | Emaila eta kolaborazioa | 5.000/urte | 2026-01-08 |
| SRV-009 | Garapen Zerbitzaria | Birtuala (lokala) | Datu Zentroa | IT Kudeatzailea | Dev Taldea | B/E/B | Probak eta garapena | 5.000 | 2026-01-08 |
| SRV-010 | ELK Stack (SIEM) | Birtuala (AWS) | eu-west-1a | CISO | Segurtasun Taldea | OK/A/A | Segurtasun monitorizazioa eta erregistroa | 18.000 | 2026-01-08 |

**Sailkapen Legenda:**
- **K (Konfidentzialtasuna):** P=Publikoa, B=Barnekoa, K=Konfidentziala, OK=Oso Konfidentziala
- **O (Osotasuna):** B=Baxua, E=Ertaina, A=Altua, K=Kritikoa
- **E (Eskuragarritasuna):** B=Baxua (72h), E=Ertaina (24h), A=Altua (8h), K=Kritikoa (4h)

**IT Zerbitzarien Balio Osoa:** 143.000 €

### 2.2 Sare Ekipamendua

| Aktibo IDa | Aktibo Izena | Mota | Kokapena | IP Helbidea | Jabea | Sailkapena (K/O/E) | Helburua | Balioa (€) | Azken Eguneratzea |
|------------|--------------|------|----------|-------------|-------|--------------------|----------|------------|-------------------|
| NET-001 | Core Switch | Cisco Catalyst 9300 | Datu Zentroa | 10.0.0.1 | IT Kudeatzailea | K/K/K | Sare bideratze nagusia | 15.000 | 2026-01-08 |
| NET-002 | Suebakia (Nagusia) | Fortinet FortiGate 200F | Datu Zentroa | 10.0.0.2 | IT Kudeatzailea | K/K/K | Perimetro segurtasuna | 12.000 | 2026-01-08 |
| NET-003 | Suebakia (Babeskopia) | Fortinet FortiGate 200F | Datu Zentroa | 10.0.0.3 | IT Kudeatzailea | K/K/A | Failover suebakia | 12.000 | 2026-01-08 |
| NET-004 | Bulego Switch-a | Cisco SG350 | Bulego Eraikina | 10.1.0.1 | IT Kudeatzailea | B/E/E | Bulego sarea | 2.500 | 2026-01-08 |
| NET-005 | Produkzio Switch-a | Cisco IE-3400 | Produkzio Solairua | 10.2.0.1 | OT Kudeatzailea | K/K/K | OT sarea (industria mailakoa) | 8.000 | 2026-01-08 |
| NET-006 | WiFi Kontrolatzailea | Ubiquiti UniFi Dream Machine Pro | Bulegoa | 10.1.0.10 | IT Kudeatzailea | K/E/E | WiFi kudeaketa | 1.500 | 2026-01-08 |
| NET-007 | WiFi AP-1 | Ubiquiti UAP-AC-Pro | Bulego Solairua 1 | 10.1.1.101 | IT Kudeatzailea | B/E/E | Bulego WiFi estaldura | 300 | 2026-01-08 |
| NET-008 | WiFi AP-2 | Ubiquiti UAP-AC-Pro | Bulego Solairua 2 | 10.1.1.102 | IT Kudeatzailea | B/E/E | Bulego WiFi estaldura | 300 | 2026-01-08 |
| NET-009 | WiFi AP-3 (Gonbidatuak) | Ubiquiti UAP-AC-Pro | Harrera | 10.1.2.101 | IT Kudeatzailea | P/B/E | Gonbidatuen WiFi (isolatua) | 300 | 2026-01-08 |
| NET-010 | OT Suebakia | Fortinet FortiGate 100F | Produkzioa | 10.2.0.2 | OT Kudeatzailea | K/K/K | IT/OT segmentazioa | 8.000 | 2026-01-08 |
| NET-011 | IDS/IPS | Suricata (software) | Birtuala | 10.0.0.10 | CISO | K/A/A | Intrusio detekzioa | 0 (OSS) | 2026-01-08 |
| NET-012 | VPN Gateway | OpenVPN | Birtuala | VPN endpoint | IT Kudeatzailea | OK/A/A | Urruneko sarbidea | 0 (OSS) | 2026-01-08 |

**Sare Ekipamenduaren Balio Osoa:** 59.900 €

### 2.3 Lan-estazioak eta Ordenagailu Eramangarriak

| Aktibo IDa | Aktibo Mota | Kopurua | Kokapena | Jabea | Sailkapena (K/O/E) | SE | Balioa (€) | Oharrak |
|------------|-------------|---------|----------|-------|--------------------|----|------------|-|
| WRK-001-050 | Mahaigainekoa - Bulegoa | 50 | Bulegoa | IT Kudeatzailea | K/E/E | Windows 11 Pro | 50.000 | Langile estandarren lan-estazioak |
| WRK-051-065 | Eramangarria - Kudeaketa | 15 | Mugikorra | IT Kudeatzailea | OK/A/A | Windows 11 Pro | 22.500 | Exekutibo eta kudeatzaileen eramangarriak |
| WRK-066-070 | Eramangarria - Garatzailea | 5 | Bulegoa/Mugikorra | IT Kudeatzailea | K/A/E | Windows 11 Pro / macOS | 10.000 | Garapen taldea |
| WRK-071-080 | Bezero Arina - Produkzioa | 10 | Produkzio Solairua | OT Kudeatzailea | K/E/A | Linux (txertatua) | 8.000 | SCADA HMI terminalak |
| WRK-081-090 | Tableta Industriala | 10 | Produkzio Solairua | OT Kudeatzailea | K/K/A | Windows 10 IoT | 15.000 | Produkzio monitorizazio mugikorra |

**Lan-estazioen Balio Osoa:** 105.500 €

### 2.4 Gailu Mugikorrak

| Aktibo IDa | Aktibo Mota | Kopurua | Jabea | Sailkapena (K/O/E) | SE | MDM Izena Emanda | Balioa (€) | Oharrak |
|------------|-------------|---------|-------|--------------------|----|------------------|------------|---------|
| MOB-001-030 | Smartphonea (Enpresa) | 30 | IT Kudeatzailea | K/E/E | iOS / Android | Bai | 24.000 | Enpresaren jabetzakoa, langileei esleituta |
| MOB-031-050 | Smartphonea (BYOD) | 20 | Langileak | K/B/B | iOS / Android | Partziala | 0 | Langilearen jabetzakoa enpresako email sarbidearekin |
| MOB-051-055 | Tableta (iPad) | 5 | IT Kudeatzailea | K/E/E | iOS | Bai | 4.000 | Salmenta eta exekutiboen erabilera |

**Gailu Mugikorren Balio Osoa:** 28.000 €

### 2.5 Softwarea eta Lizentziak

| Aktibo IDa | Software Izena | Mota | Saltzailea | Lizentzia Mota | Kopurua | Jabea | Sailkapena (K/O/E) | Balioa (€/urte) | Berritze Data | Oharrak |
|------------|----------------|------|------------|----------------|---------|-------|--------------------|-----------------|---------------|---------|
| SW-001 | Microsoft 365 E3 | Produktibitatea | Microsoft | Harpidetza | 80 erabiltzaile | IT Kudeatzailea | K/E/A | 12.800 | Hilero | Emaila, Office, OneDrive |
| SW-002 | Windows Server 2022 | SE | Microsoft | Betiko | 5 lizentzia | IT Kudeatzailea | K/A/K | 5.000 | N/A | Zerbitzari sistema eragilea |
| SW-003 | MongoDB Enterprise | Datu-basea | MongoDB Inc. | Harpidetza | 2 zerbitzari | IT Kudeatzailea | OK/K/K | 15.000 | 2026-06-01 | Datu-base plataforma |
| SW-004 | Fortinet FortiCare | Segurtasun Laguntza | Fortinet | Harpidetza | 3 gailu | IT Kudeatzailea | K/K/K | 4.500 | 2026-12-31 | Suebaki laguntza eta eguneraketak |
| SW-005 | Veeam Backup | Babeskopia | Veeam | Betiko | 10 VM | IT Kudeatzailea | OK/K/A | 3.000 | 2026-09-15 | Babeskopia softwarea |
| SW-006 | Node.js | Runtime | OpenJS Foundation | Kode Irekia | Mugagabea | IT Kudeatzailea | K/A/K | 0 | N/A | Web app backend |
| SW-007 | React | Framework | Meta | Kode Irekia | Mugagabea | IT Kudeatzailea | B/E/E | 0 | N/A | Web app frontend |
| SW-008 | ELK Stack (Elastic, Logstash, Kibana) | SIEM | Elastic | Kode Irekia | Norberak ostatatua | CISO | OK/A/A | 0 | N/A | Segurtasun monitorizazioa |
| SW-009 | Siemens TIA Portal | PLC Programazioa | Siemens | Betiko | 2 eserleku | OT Kudeatzailea | K/K/A | 8.000 | N/A | PLC garapena |
| SW-010 | WinCC SCADA | HMI/SCADA | Siemens | Betiko | 1 zerbitzari + 10 bezero | OT Kudeatzailea | K/K/K | 25.000 | 2026-08-01 | Produkzio monitorizazioa |
| SW-011 | Symantec Endpoint Protection | Antibirusa | Broadcom | Harpidetza | 100 endpoint | IT Kudeatzailea | K/A/A | 3.500 | 2026-10-15 | Endpoint segurtasuna |
| SW-012 | Slack | Komunikazioa | Slack | Harpidetza | 80 erabiltzaile | IT Kudeatzailea | K/E/E | 4.800 | Hilero | Talde kolaborazioa (aukerakoa) |
| SW-013 | GitHub Enterprise | Bertsio Kontrola | GitHub | Harpidetza | 10 erabiltzaile | IT Kudeatzailea | K/A/E | 2.500 | 2026-11-20 | Kode biltegia |
| SW-014 | SonarQube | Kode Kalitatea | SonarSource | Kode Irekia | Norberak ostatatua | IT Kudeatzailea | B/E/E | 0 | N/A | Kode analisi estatikoa |

**Software Urteko Kostu Osoa:** 84.100 €  
**Software Betiko Balio Osoa:** 38.000 €

### 2.6 Hodeiko Zerbitzuak

| Aktibo IDa | Zerbitzu Izena | Hornitzailea | Zerbitzu Mota | Jabea | Sailkapena (K/O/E) | Hileko Kostua (€) | Urteko Kostua (€) | Datu Kokapena | Oharrak |
|------------|----------------|--------------|---------------|-------|--------------------|-------------------|-------------------|---------------|---------|
| CLD-001 | EC2 Instances | AWS | IaaS | IT Kudeatzailea | OK/A/K | 800 | 9.600 | eu-west-1 | Web aplikazio zerbitzariak |
| CLD-002 | RDS (MongoDB) | AWS | DBaaS | IT Kudeatzailea | OK/K/K | 1.200 | 14.400 | eu-west-1 | Datu-base kudeatua |
| CLD-003 | S3 Storage | AWS | Object Storage | IT Kudeatzailea | OK/K/A | 150 | 1.800 | eu-west-1 | Babeskopiak eta fitxategi estatikoak |
| CLD-004 | CloudFront CDN | AWS | CDN | IT Kudeatzailea | B/E/A | 100 | 1.200 | Globala | Eduki banaketa |
| CLD-005 | Route 53 DNS | AWS | DNS | IT Kudeatzailea | K/K/K | 25 | 300 | Globala | Domeinu izen zerbitzua |
| CLD-006 | CloudWatch | AWS | Monitorizazioa | IT Kudeatzailea | K/E/A | 80 | 960 | eu-west-1 | Azpiegitura monitorizazioa |
| CLD-007 | Microsoft 365 | Microsoft | SaaS | IT Kudeatzailea | K/E/A | 1.067 | 12.800 | EB | Emaila eta produktibitatea |
| CLD-008 | GitHub | GitHub | SaaS | IT Kudeatzailea | K/A/E | 208 | 2.500 | Globala | Kode biltegia |

**Hodeiko Zerbitzuen Urteko Kostu Osoa:** 43.560 €

---

## 3. Teknologia Operatiboa (OT) Aktiboak

### 3.1 Kontrolatzaile Logiko Programagarriak (PLCak)

| Aktibo IDa | Aktibo Izena | Fabrikatzailea | Modeloa | Kokapena | Helburua | Jabea | Sailkapena (K/O/E) | Instalazio Data | Azken Mantentzea | Balioa (€) |
|------------|--------------|----------------|---------|----------|----------|-------|--------------------|-----------------|------------------|------------|
| PLC-001 | Nahasketa Linea PLC | Siemens | S7-1500 | Produkzio Linea 1 | Osagaien nahasketa kontrola | OT Kudeatzailea | K/K/K | 2023-03-15 | 2025-11-20 | 12.000 |
| PLC-002 | Labea PLC | Siemens | S7-1200 | Produkzio Linea 1 | Labe tenperatura/denbora | OT Kudeatzailea | K/K/K | 2022-08-10 | 2025-10-05 | 8.000 |
| PLC-003 | Enbalatze Linea PLC-A | Siemens | S7-1500 | Enbalatze Eremua | Enbalatze automatizazioa | OT Kudeatzailea | K/K/K | 2024-01-20 | 2025-12-10 | 12.000 |
| PLC-004 | Enbalatze Linea PLC-B | Siemens | S7-1500 | Enbalatze Eremua | Enbalatze automatizazioa | OT Kudeatzailea | K/K/K | 2024-01-20 | 2025-12-10 | 12.000 |
| PLC-005 | Zinta Garraiatzaile PLC | Siemens | S7-1200 | Produkzio Linea 1 | Material garraioa | OT Kudeatzailea | K/A/K | 2022-06-01 | 2025-09-15 | 8.000 |
| PLC-006 | Utilitate Kudeaketa PLC | Siemens | S7-1200 | Utilitate Gela | HVAC, aire konprimitua | OT Kudeatzailea | B/E/A | 2021-11-10 | 2025-08-22 | 8.000 |

**PLC Balio Osoa:** 60.000 €

**Ordezko Piezen Inbentarioa:**
- Siemens S7-1500 CPU: 1 unitate (3.000 €)
- Siemens S7-1200 CPU: 1 unitate (1.500 €)
- I/O moduluak (hainbat): 5.000 €
- **Ordezko Piezen Balio Osoa:** 9.500 €

### 3.2 SCADA eta HMI Sistemak

| Aktibo IDa | Aktibo Izena | Mota | Fabrikatzailea | Kokapena | Helburua | Jabea | Sailkapena (K/O/E) | Balioa (€) |
|------------|--------------|------|----------------|----------|----------|-------|--------------------|------------|
| SCADA-001 | SCADA Zerbitzari Nagusia | Zerbitzaria | Siemens WinCC | Datu Zentroa | Monitorizazio zentrala | OT Kudeatzailea | K/K/K | 25.000 |
| HMI-001 | Produkzio Solairua HMI-1 | Panel PC | Siemens | 1. Linea Kontrol Gela | Tokiko operadore interfazea | OT Kudeatzailea | K/K/A | 4.000 |
| HMI-002 | Produkzio Solairua HMI-2 | Panel PC | Siemens | Enbalatze Kontrola | Tokiko operadore interfazea | OT Kudeatzailea | K/K/A | 4.000 |
| HMI-003 | Kudeatzaile Monitoreo Estazioa | Lan-estazioa | Siemens | Produkzio Bulegoa | Begirale monitorizazioa | OT Kudeatzailea | K/E/E | 2.000 |

**SCADA/HMI Balio Osoa:** 35.000 €

### 3.3 Sentsoreak eta Instrumentazioa

| Aktibo Mota | Kopurua | Helburua | Kokapena | Sailkapena (K/O/E) | Unitate Balioa (€) | Balio Osoa (€) |
|-------------|---------|----------|----------|--------------------|--------------------|----------------|
| Tenperatura Sentsoreak (PT100) | 25 | Labe tenperatura monitorizazioa | Produkzioa | K/K/K | 200 | 5.000 |
| Hezetasun Sentsoreak | 10 | Ingurumen monitorizazioa | Produkzioa | K/E/A | 300 | 3.000 |
| Presio Sentsoreak | 8 | Aire konprimitua, nahasketa | Produkzioa | K/A/E | 400 | 3.200 |
| Karga Zelulak (Balantzak) | 12 | Osagaien pisaketa | Nahasketa Eremua | K/K/E | 800 | 9.600 |
| Hurbiltasun Sentsoreak | 40 | Zinta garraiatzaile posizionamendua | Denetan | B/E/E | 100 | 4.000 |
| Segurtasun Argi Gortinak | 6 | Langileen segurtasuna | Produkzioa | K/K/K | 1.500 | 9.000 |

**Sentsoreen Balio Osoa:** 33.800 €

### 3.4 Produkzio Ekipamendua (txertatutako sistemekin)

| Aktibo IDa | Ekipamendu Izena | Mota | Kokapena | Txertatutako Sistema | Jabea | Sailkapena (K/O/E) | Balioa (€) | Instalazio Data |
|------------|------------------|------|----------|----------------------|-------|--------------------|------------|-----------------|
| PROD-001 | Nahasgailu Industriala A | Nahasketa Ekipamendua | 1. Linea | PLC bidez kontrolatua | OT Kudeatzailea | K/K/K | 45.000 | 2023-03 |
| PROD-002 | Nahasgailu Industriala B | Nahasketa Ekipamendua | 1. Linea | PLC bidez kontrolatua | OT Kudeatzailea | K/K/K | 45.000 | 2023-03 |
| PROD-003 | Tunel Labea | Labea | 1. Linea | PLC + kontrolatzaile jabeduna | OT Kudeatzailea | K/K/K | 120.000 | 2022-08 |
| PROD-004 | Hozte Zinta | Hozte Sistema | 1. Linea | PLC bidez kontrolatua | OT Kudeatzailea | K/A/A | 25.000 | 2022-06 |
| PROD-005 | Enbalatze Makina A | Enbalatzea | Enbalatze Eremua | PLC + HMI | OT Kudeatzailea | K/K/K | 80.000 | 2024-01 |
| PROD-006 | Enbalatze Makina B | Enbalatzea | Enbalatze Eremua | PLC + HMI | OT Kudeatzailea | K/K/K | 80.000 | 2024-01 |
| PROD-007 | Paletizatzailea | Material Kudeaketa | Biltegia | PLC bidez kontrolatua | OT Kudeatzailea | K/E/E | 35.000 | 2021-05 |

**Produkzio Ekipamenduaren Balio Osoa:** 430.000 €

---

## 4. Datu Aktiboak

### 4.1 Datu-baseak

| Aktibo IDa | Datu-base Izena | Mota | Edukia | Jabea | Zaintzailea | Sailkapena (K/O/E) | Erregistroak | Tamaina (GB) | Babeskopia Maiztasuna | Kokapena |
|------------|-----------------|------|--------|-------|-------------|--------------------|--------------|--------------|-----------------------|----------|
| DB-001 | Produkzio Datu-basea | MongoDB | Bezeroak, eskaerak, produktuak, erabiltzaileak | IT Kudeatzailea | IT Taldea | OK/K/K | 500.000 | 50 | Orduro | AWS RDS eu-west-1 |
| DB-002 | SCADA Historian | Denbora-serie DB | Produkzio metrikak, sentsore datuak | OT Kudeatzailea | OT Taldea | K/K/A | 10M+ | 200 | Egunero | Lokalean |
| DB-003 | Audit Log Datu-basea | Elasticsearch | Segurtasun gertaerak, sarbide log-ak | CISO | Segurtasun Taldea | OK/A/A | 5M+ | 100 | Orduro | AWS eu-west-1 |
| DB-004 | Garapen Datu-basea | MongoDB | Proba datuak (anonimizatuak) | IT Kudeatzailea | Dev Taldea | B/E/B | 10.000 | 2 | Astero | Lokalean |

**Datu Bolumena Guztira:** 352 GB  
**Erregistroak Guztira:** 15.5M+

### 4.2 Datu Fitxategi Kritikoak eta Biltegiak

| Aktibo IDa | Aktibo Izena | Mota | Edukia | Jabea | Sailkapena (K/O/E) | Kokapena | Babeskopia | Tamaina |
|------------|--------------|------|--------|-------|--------------------|----------|------------|---------|
| DATA-001 | Bezero Datu-basea | Datu-basea | Bezero PII, kontaktu info, eskaera historia | Salmenta Kudeatzailea | OK/K/K | AWS RDS | Orduro | 20 GB |
| DATA-002 | Produktu Errezetak | Dokumentuak | Gaileta errezetak, formulazioak (merkataritza sekretuak) | Produkzio Kudeatzailea | OK/K/E | Fitxategi zerbitzari enkriptatua | Egunero | 500 MB |
| DATA-003 | Finantza Erregistroak | Dokumentuak | Fakturak, nominak, kontabilitatea | CFO | OK/A/E | Kontabilitate softwarea + fitxategi zerbitzaria | Egunero | 10 GB |
| DATA-004 | PLC Programak | Kodea | Produkzio automatizazio programak | OT Kudeatzailea | K/K/K | Bertsio kontrola + USB babeskopia | Aldaketen aurretik | 200 MB |
| DATA-005 | Iturburu Kode Biltegia | Kodea | Web aplikazio iturburu kodea | IT Kudeatzailea | K/A/E | GitHub Enterprise | Etengabea | 1 GB |
| DATA-006 | HR Erregistroak | Dokumentuak | Langile erregistroak, kontratuak, ebaluazioak | HR Kudeatzailea | OK/A/E | Fitxategi zerbitzari enkriptatua | Egunero | 5 GB |
| DATA-007 | Kalitate Kontrol Datuak | Dokumentuak | Proba emaitzak, ziurtagiriak, betetzea | Kalitate Kudeatzailea | K/K/E | Fitxategi zerbitzaria + SCADA | Egunero | 15 GB |
| DATA-008 | Segurtasun Politika eta Prozedurak | Dokumentuak | ISMS dokumentazioa, politikak | CISO | K/A/E | Dokumentu kudeaketa sistema | Egunero | 100 MB |
| DATA-009 | Hornitzaile Kontratuak | Dokumentuak | NDA, akordioak, zehaztapenak | Kontratazio Kudeatzailea | K/A/E | Fitxategi zerbitzaria | Egunero | 2 GB |
| DATA-010 | Bezero Kontratuak | Dokumentuak | Salmenta akordioak, SLAk | Salmenta Kudeatzailea | K/A/E | CRM + fitxategi zerbitzaria | Egunero | 3 GB |

**Datu Kritikoak Guztira:** ~56.8 GB

### 4.3 Babeskopiak

| Babeskopia Multzoa | Edukia | Mota | Maiztasuna | Atxikipena | Kokapena | Enkriptatzea | Jabea | Balioa |
|--------------------|--------|------|------------|------------|----------|--------------|-------|--------|
| BACKUP-001 | Produkzio Datu-basea | Osoa + Inkrementala | Orduro (inkr), Egunero (osoa) | 30 egun linean, 1 urte artxiboa | AWS S3 + Lokalean | AES-256 | IT Kudeatzailea | Kritikoa |
| BACKUP-002 | Fitxategi Zerbitzaria | Osoa + Inkrementala | Egunero (inkr), Astero (osoa) | 30 egun linean, 1 urte artxiboa | AWS S3 + Lokalean | AES-256 | IT Kudeatzailea | Kritikoa |
| BACKUP-003 | SCADA Historian | Osoa | Egunero | 90 egun linean, 3 urte artxiboa | Lokalean NAS | AES-256 | OT Kudeatzailea | Altua |
| BACKUP-004 | PLC Konfigurazioak | Osoa | Aldaketen aurretik + Astero | 10 bertsio + 5 urte | USB unitateak (2 kopia) + fitxategi zerbitzaria | AES-256 | OT Kudeatzailea | Kritikoa |
| BACKUP-005 | Emaila (M365) | Etengabea | Etengabea | Mugagabea (hodeia) | Microsoft Azure | Microsoft-ek kudeatua | IT Kudeatzailea | Altua |
| BACKUP-006 | Iturburu Kodea | Etengabea | Git push | Mugagabea | GitHub + AWS | Git-ek kudeatua | IT Kudeatzailea | Altua |

**Babeskopia Biltegiratze Edukiera:**
- AWS S3: 500 GB esleituta
- Lokalean NAS: 2 TB edukiera, 800 GB erabilia
- USB Babeskopia Unitateak: 10x 256 GB unitate

---

## 5. Aktibo Fisikoak

### 5.1 Instalazioak

| Aktibo IDa | Instalazio Izena | Mota | Helbidea | Tamaina (m²) | Jabetza/Alokairua | Sailkapena (K/O/E) | Balioa (€) | Segurtasun Ezaugarriak |
|------------|------------------|------|----------|--------------|-------------------|--------------------|------------|------------------------|
| FAC-001 | Produkzio Instalazio Nagusia | Fabrikazioa | [Helbidea], [Herria] | 3.000 | Jabetza | K/K/K | 2.500.000 | Perimetro hesia, kamerak, sarbide kontrola, sute itzaltzea |
| FAC-002 | Bulego Eraikina | Bulegoa | [Helbidea], [Herria] | 800 | Jabetza | K/E/E | 800.000 | Sarbide kontrola, kamerak, alarma sistema |
| FAC-003 | Biltegia | Biltegiratzea | [Helbidea], [Herria] | 1.200 | Alokatua | K/E/E | N/A (alokairua) | Ate birakariak, kamerak, segurtasun zaindaria |
| FAC-004 | Datu Zentro Gela | IT Azpiegitura | FAC-001 barruan | 40 | Jabetza | OK/K/K | 150.000 | Txartel sarbidea, biometrikoa, kamerak, sute itzaltzea (FM-200), klima kontrola, UPS |

**Instalazio Balio Osoa:** 3.450.000 € (jabetzako instalazioak)

### 5.2 Segurtasun Fisikoko Sistemak

| Aktibo IDa | Aktibo Izena | Mota | Kokapena | Jabea | Helburua | Balioa (€) | Instalazio Data |
|------------|--------------|------|----------|-------|----------|------------|-----------------|
| SEC-001 | Sarbide Kontrol Sistema | Honeywell Pro-Watch | Instalazio Guztiak | Instalazio Kudeatzailea | Sarrera kontrola | 25.000 | 2023-01 |
| SEC-002 | CCTV Sistema | Hikvision NVR + 32 kamera | Instalazio Guztiak | Instalazio Kudeatzailea | Zaintza | 15.000 | 2022-06 |
| SEC-003 | Intrusio Alarma | Bosch | Instalazio Guztiak | Instalazio Kudeatzailea | Intrusio detekzioa | 8.000 | 2021-09 |
| SEC-004 | Sute Alarma Sistema | Siemens | Instalazio Guztiak | Instalazio Kudeatzailea | Sute detekzioa | 20.000 | 2020-11 |
| SEC-005 | FM-200 Sute Itzaltzea | Fike | Datu Zentroa | Instalazio Kudeatzailea | Sute itzaltzea | 35.000 | 2023-01 |

**Segurtasun Fisikoaren Balio Osoa:** 103.000 €

### 5.3 Potentzia eta Ingurumena

| Aktibo IDa | Aktibo Izena | Mota | Kokapena | Edukiera | Jabea | Helburua | Balioa (€) | Azken Mantentzea |
|------------|--------------|------|----------|----------|-------|----------|------------|------------------|
| PWR-001 | UPS Nagusia | APC Symmetra | Datu Zentroa | 20 kVA, 30 min | IT Kudeatzailea | Potentzia babeskopia | 25.000 | 2025-10-15 |
| PWR-002 | Babeskopia Sorgailua | Caterpillar | Kanpoaldea | 1000 kVA, 72h | Instalazio Kudeatzailea | Epe luzeko potentzia babeskopia | 150.000 | 2025-09-01 |
| PWR-003 | Produkzio UPS | APC Smart-UPS | Produkzioa | 10 kVA, 15 min | OT Kudeatzailea | PLC potentzia babeskopia | 8.000 | 2025-11-20 |
| ENV-001 | Datu Zentro HVAC | Liebert | Datu Zentroa | 15 kW hozte | Instalazio Kudeatzailea | Klima kontrola | 30.000 | 2025-08-10 |
| ENV-002 | Produkzio HVAC | Daikin | Produkzioa | 50 kW hozte | Instalazio Kudeatzailea | Klima kontrola | 80.000 | 2025-07-05 |

**Potentzia/Ingurumen Balio Osoa:** 293.000 €

---

## 6. Giza Aktiboak

### 6.1 Funtsezko Langileak

| Rola | Izena/Kargua | Departamentua | Kritikotasuna | Segurtasun Baimena | Ordezko Pertsona | Erantzukizun Gakoak |
|------|--------------|---------------|---------------|--------------------| -----------------|---------------------|
| CEO | [CEO Izena] | Exekutiboa | Kritikoa | Osoa | CFO | Erabaki estrategikoak, azken agintaritza |
| CISO | [CISO Izena] | IT/Segurtasuna | Kritikoa | Osoa | IT Kudeatzailea | Informazio segurtasuna, ISMS, intzidente erantzuna |
| IT Kudeatzailea | [IT Izena] | IT | Kritikoa | Osoa | Senior Sysadmin | IT eragiketak, sistema administrazioa |
| OT Kudeatzailea | [OT Izena] | Eragiketak | Kritikoa | OT-espezifikoa | Senior Teknikaria | Produkzio sistemak, PLCak, SCADA |
| DBO (Datuen Babeserako Ordezkaria) | [DBO Izena] | Legala/Betetzea | Altua | Osoa | Kanpo DBO zerbitzua | GDPR betetzea, pribatutasuna |
| CFO | [CFO Izena] | Finantzak | Altua | Osoa | Kontrolatzailea | Finantza eragiketak, aurrekontuak |
| Produkzio Kudeatzailea | [Prod Kudeatzailea] | Eragiketak | Altua | Estandarra | Txanda Begiralea | Produkzio plangintza, kalitatea |
| QA Kudeatzailea | [QA Izena] | Kalitatea | Altua | Estandarra | Senior QA Analista | Kalitate kontrola, betetze probak |
| Senior Garatzailea | [Dev Izena] | IT | Ertaina | Garapena | Junior Garatzailea | Aplikazio garapena, segurtasun adabakiak |
| Sare Administratzailea | [Net Admin] | IT | Ertaina | IT-espezifikoa | IT Kudeatzailea | Sare eragiketak, suebaki kudeaketa |

**Funtsezko Langileak Guztira:** 10 rol kritiko/altu

**Prestakuntza eta Kontzientziazioa:**
- Langile guztiak: Urteroko segurtasun kontzientziazio prestakuntza (derrigorrezkoa)
- IT/OT langileak: Rol-espezifiko prestakuntza teknikoa (16 ordu/urte)
- Garatzaileak: Kodeketa seguru prestakuntza (8 ordu/urte)
- Zuzendaritza: Arrisku kudeaketa eta betetzea (4 ordu/urte)

---

## 7. Hirugarrenen Zerbitzuak eta Hornitzaileak

### 7.1 Zerbitzu Hornitzaile Kritikoak

| Hornitzaile IDa | Hornitzaile Izena | Zerbitzu Mota | Zerbitzu Deskribapena | Sailkapena (K/O/E) | Kontratu Amaiera | Urteko Kostua (€) | Datu Sarbidea | SLA |
|-----------------|-------------------|---------------|-----------------------|--------------------|------------------|-------------------|---------------|-----|
| 3RD-001 | Amazon Web Services (AWS) | Hodei Azpiegitura | IaaS ostalaritza web app, datu-basearentzat | OK/K/K | Etengabea | 28.000 | Bai (bezero datuak) | 99.99% uptime |
| 3RD-002 | Microsoft Corporation | SaaS | Microsoft 365 (emaila, produktibitatea) | K/E/A | Urteko berritzea | 12.800 | Bai (langile emaila) | 99.9% uptime |
| 3RD-003 | Telefonica | ISP | Lehen mailako internet konexioa (zuntza 1 Gbps) | K/E/K | 2027-06-30 | 12.000 | Ez | 99.5% uptime |
| 3RD-004 | Vodafone | ISP | Babeskopia internet (zuntza 500 Mbps + 4G failover) | K/E/A | 2026-12-31 | 8.000 | Ez | 99.0% uptime |
| 3RD-005 | GitHub Inc. | SaaS | Kode biltegia eta bertsio kontrola | K/A/E | 2026-11-20 | 2.500 | Bai (iturburu kodea) | 99.95% uptime |
| 3RD-006 | [Aseguru Konpainia] | Asegurua | Ziber-asegurua eta negozio etenaldia | K/E/E | 2026-08-15 | 15.000 | Mugatua (arrisku ebaluazioa) | N/A |
| 3RD-007 | [Abokatu Bulegoa] | Legala | Aholkularitza legala, kontratu berrikuspena | OK/A/B | Etengabea | 10.000 | Bai (negozio info konfidentziala) | N/A |
| 3RD-008 | [IT Segurtasun Enpresa] | Segurtasun Zerbitzuak | Penetrazio probak (urtean bitan) | K/A/E | Proiektu bakoitzeko | 12.000 | Bai (proba ingurunea) | N/A |
| 3RD-009 | [Hondakin Kudeaketa] | Segurtasun Fisikoa | Dokumentu suntsipen segurua | K/E/B | 2027-03-31 | 2.000 | Ez | N/A |
| 3RD-010 | Siemens | OT Laguntza | PLC eta SCADA laguntza eta mantentzea | K/K/A | 2026-08-01 | 8.000 | Mugatua (OT sistemak) | 24h erantzuna |

**Hirugarrenen Urteko Kostu Osoa:** 110.300 €

### 7.2 Hornitzaile Kritikoak (Lehengaiak)

| Hornitzaile IDa | Hornitzaile Izena | Produktua | Kritikotasuna | Ordezko Hornitzailea | Epea | Sailkapena |
|-----------------|-------------------|-----------|---------------|----------------------| ----|------------|
| SUP-001 | [Irina Hornitzailea A] | Gari irina (nagusia) | Kritikoa | SUP-002 | 3 egun | K/K/A |
| SUP-002 | [Irina Hornitzailea B] | Gari irina (babeskopia) | Altua | SUP-001 | 5 egun | K/K/A |
| SUP-003 | [Azukre Hornitzailea] | Azukrea | Kritikoa | Eskualdeko alternatibak | 7 egun | K/E/E |
| SUP-004 | [Gurin Hornitzailea] | Gurina | Kritikoa | Eskualdeko alternatibak | 5 egun | K/E/E |
| SUP-005 | [Enbalatze Hornitzailea] | Kaxak, bilgarriak | Altua | Alternatiba anitz | 10 egun | B/E/E |
| SUP-006 | [Utilitate - Elektrikoa] | Elektrizitatea | Kritikoa | Sorgailu babeskopia | N/A | N/A |
| SUP-007 | [Utilitate - Ura] | Ur hornidura | Kritikoa | Udal babeskopia | N/A | N/A |

---

## 8. Aktiboen Balorazio Laburpena

### 8.1 Aktiboen Balio Osoa

| Aktibo Kategoria | Kopurua | Balio Osoa (€) | Ehunekoa |
|------------------|---------|----------------|----------|
| **IT Aktiboak** | | | |
| Zerbitzariak eta Azpiegitura | 10 | 143.000 | %2,6 |
| Sare Ekipamendua | 12 | 59.900 | %1,1 |
| Lan-estazioak eta Eramangarriak | 90 | 105.500 | %1,9 |
| Gailu Mugikorrak | 55 | 28.000 | %0,5 |
| Softwarea (betiko) | 14 | 38.000 | %0,7 |
| **IT Azpitotala** | **181** | **374.400** | **%6,8** |
| **OT Aktiboak** | | | |
| PLCak eta Ordezko Piezak | 6 + ordezkoak | 69.500 | %1,3 |
| SCADA eta HMI | 4 | 35.000 | %0,6 |
| Sentsoreak eta Instrumentazioa | 101 | 33.800 | %0,6 |
| Produkzio Ekipamendua | 7 | 430.000 | %7,9 |
| **OT Azpitotala** | **118** | **568.300** | **%10,4** |
| **Aktibo Fisikoak** | | | |
| Instalazioak | 4 | 3.450.000 | %63,0 |
| Segurtasun Fisikoko Sistemak | 5 | 103.000 | %1,9 |
| Potentzia eta Ingurumena | 5 | 293.000 | %5,4 |
| **Fisiko Azpitotala** | **14** | **3.846.000** | **%70,3** |
| **GUZTIRA (Kapital Aktiboak)** | **313** | **4.788.700 €** | **%87,5** |

### 8.2 Urteko Eragiketa Kostuak

| Kategoria | Urteko Kostua (€) | Ehunekoa |
|-----------|-------------------|----------|
| Software Harpidetzak | 84.100 | %12,3 |
| Hodeiko Zerbitzuak | 43.560 | %6,4 |
| Hirugarrenen Zerbitzuak | 110.300 | %16,1 |
| Mantentze Kontratuak | 15.000 | %2,2 |
| Asegurua | 15.000 | %2,2 |
| Langileak (Segurtasunarekin lotuak) | 420.000 | %61,4 |
| **Urteko Eragiketa Kostu Osoa** | **687.960 €** | **%100** |

### 8.3 Arrisku-Ponderatutako Aktibo Balioa

Aktiboak arriskuan jarriz gero izango luketen negozio eraginaren arabera ponderatuta:

| Aktiboa | Negozio Eragina Galtzen/Arriskuan Jartzen Bada | Arrisku-Ponderatutako Balioa (€) |
|---------|------------------------------------------------|----------------------------------|
| Bezero Datu-basea (DB-001) | Diru-sarrera galera, erantzukizun legala, ospe kaltea | 5.000.000 |
| Produktu Errezetak (DATA-002) | Abantaila lehiakor galera, merkataritza sekretu lapurreta | 3.000.000 |
| Produkzio PLCak (PLC-001 - PLC-006) | Produkzio geldialdia (20.000 €/egun) | 2.000.000 |
| Web Aplikazioa (SRV-001) | Eskaera prozesatze etena, bezero eragina | 1.500.000 |
| SCADA Sistema (SCADA-001) | Produkzio monitorizazio galera, segurtasun arriskua | 800.000 |
| Finantza Erregistroak (DATA-003) | Arau-haustea, iruzur arriskua | 500.000 |
| Iturburu Kodea (DATA-005) | Jabetza intelektualaren lapurreta, segurtasun ahultasunak | 400.000 |

**Arrisku-Ponderatutako Balio Osoa:** 13.200.000 €

---

## 9. Aktibo Kudeaketa Prozedurak

### 9.1 Aktibo Bizi-zikloa

**Eskuratzea:**
1. Negozio beharra identifikatu
2. Segurtasun baldintzak definitu (sailkapena, kontrolak)
3. Saltzailearen segurtasun ebaluazioa (IT/OT sistemetarako)
4. Kontratazio onarpena
5. Harrera eta inbentario erregistroa
6. Konfigurazioa eta gogortzea
7. Probak eta onarpena
8. Produkzio inplementazioa
9. Aktiboen erregistro sarrera

**Eragiketa:**
1. Aktibo jabea eta zaintzailea esleitu
2. Segurtasun kontrolak aplikatu sailkapenaren arabera
3. Ohiko mantentzea (adabaki kudeaketa, eguneraketak)
4. Errendimendu monitorizazioa
5. Sarbide kontrola betearaztea
6. Hiruhileko aktibo berrikuspena (kokapena, egoera, sailkapena egiaztatu)

**Deskomisionatzea:**
1. Deskomisionatze eskaera eta onarpena
2. Datu babeskopia (beharrezkoa bada)
3. Datu saneamendu segurua (NIST SP 800-88 estandarrak):
   - HDDak: 3-pasatako gainidazketa edo suntsipen fisikoa
   - SSDak: ATA Secure Erase edo suntsipen fisikoa
   - Gailu mugikorrak: Fabrika berrezarpena + enkriptatze gako ezabaketa
   - Paperezko dokumentuak: Gurutze-mozketa txikitzea
4. Ezabaketa fisikoa edo salmenta
5. Aktibo erregistro eguneraketa (egoera: deskomisionatua)
6. Lizentzia/harpidetza baliogabetzea
7. Suntsipen ziurtagiria (aktibo sentikorrentzat)

### 9.2 Aktibo Sailkapen Berrikuspena

**Berrikuspen Abiarazleak:**
- Urteroko berrikuspena (aktibo guztiak)
- Aktiboaren erabilera edo gordetako datu aldaketa
- Aktiboarekin lotutako segurtasun intzidentea
- Arau aldaketak
- Negozio eragin aldaketak

**Sailkapen Aldaketak:**
- Aktibo jabearen eta CISOren onarpena behar du
- Segurtasun kontrolak horren arabera egokitu
- Aktibo erregistroa eguneratu
- Erabiltzaileei jakinarazi kudeaketa baldintzak aldatzen badira

### 9.3 Aktibo Erregistro Mantentzea

**Eguneratze Maiztasuna:**
- Denbora errealean: Eskuratze berriak, deskomisionatzea
- Hilero: IT aktiboen inbentarioa egiaztatu (eskaneatze automatizatua)
- Hiruhilero: Aktibo erregistroaren berrikuspen osoa (kategoria guztiak)
- Urtero: Auditoria integrala egiaztapen fisikoarekin

**Eguneratze Prozesua:**
1. Aldaketa identifikatu (aktibo berria, aldaketa, ezabaketa)
2. Aktibo jabeak CISOri jakinarazten dio
3. CISOk aktibo erregistroa eguneratzen du
4. Aldaketa bertsio historian erregistratzen da
5. Hiruhileko kudeaketa berrikuspena aldaketen inguruan

**Datu Kalitatea:**
- Zehaztasuna: %98 helburua (auditorietan egiaztatua)
- Osotasuna: Aktibo guztiak erregistratuta eskuratu eta 48 orduko epean
- Gaurkotasuna: Eguneraketak aldaketetatik 24 orduko epean

---

## 10. Lotutako Dokumentuak

- **Informazioaren Segurtasun Politika (ISP-001):** Segurtasun esparru orokorra
- **Arrisku Ebaluazio Txostena (RAR-001):** Aktiboetan oinarritutako arrisku analisia
- **Negozioaren Jarraitutasun Plana (BCP-001):** Aktibo kritikoen berreskurapen lehentasunak
- **Erabilera Onargarriaren Politika (AUP-001):** Aktiboen erabilera jarraibideak
- **Datuen Sailkapen Politika:** Datu kudeaketa baldintzak
- **Ezabaketa Seguruaren Prozedura:** Aktibo deskomisionatze estandarrak
- **Aldaketa Kudeaketa Prozedura:** Aktibo aldaketa kontrolak
- **Saltzaileen Segurtasun Ebaluazio Txantiloia:** Hirugarrenen arrisku ebaluazioa

---

## 11. Eranskinak

### Eranskina A: Aktibo Sailkapen Jarraibideak

**Konfidentzialtasun Sailkapena:**

| Maila | Irizpideak | Adibideak | Kudeaketa |
|-------|------------|-----------|-----------|
| **Publikoa (P)** | Argitalpen publikorako informazioa | Marketing materialak, prentsa oharrak, webgune publiko edukia | Murrizketarik gabe |
| **Barnekoa (B)** | Barne erabilerarako informazioa, kalte minimoa ezagutarazten bada | Barne oharrak, txosten ez-sentikorrak, bilera oharrak | Email enkriptatzea, barne sareak soilik |
| **Konfidentziala (K)** | Negozio informazio sentikorra, kalte esanguratsua ezagutarazten bada | Bezero zerrendak, finantza txostenak (ez-kritikoak), errezetak (ez-nagusiak) | Enkriptatzea geldirik eta trantsitoan, sarbide kontrola, MFA |
| **Oso Konfidentziala (OK)** | Informazio kritikoa, kalte larria ezagutarazten bada | PII, ordainketa datuak, merkataritza sekretuak (errezeta nagusiak), segurtasun gakoak | Enkriptatze sendoa, sarbide kontrol zorrotza, MFA, audit log, DLP |

**Osotasun Sailkapena:**

| Maila | Irizpideak | Baimenik Gabeko Aldaketaren Eragina |
|-------|------------|-------------------------------------|
| **Baxua (B)** | Erraz zuzentzen da, eragin minimoa | Eragozpen txikia, zuzenketa azkarra |
| **Ertaina (E)** | Zuzentzeko ahalegin moderatua, eragin pixka bat | Prozesu etenaldia, eskuzko zuzenketa beharrezkoa |
| **Altua (A)** | Zuzentzeko zaila, eragin esanguratsua | Produkzio atzerapenak, finantza galera, bezero eragina |
| **Kritikoa (K)** | Oso zaila edo ezinezkoa zuzentzeko | Segurtasun arriskuak, finantza galera handia, arau urraketak |

**Eskuragarritasun Sailkapena:**

| Maila | Irizpideak | Gehieneko Etenaldi Jasangarria |
|-------|------------|-------------------------------|
| **Baxua (B)** | Denbora luzez ez egon daiteke erabilgarri | 72 ordu |
| **Ertaina (E)** | Negozio orduetan egon behar du erabilgarri | 24 ordu |
| **Altua (A)** | Denbora gehienetan egon behar du erabilgarri | 8 ordu |
| **Kritikoa (K)** | Uneoro egon behar du erabilgarri | 4 ordu |

### Eranskina B: Aktibo ID Izendapen Konbentzioa

| Aurrizkia | Aktibo Mota | Adibidea |
|-----------|-------------|----------|
| SRV- | Zerbitzaria | SRV-001 |
| NET- | Sare Ekipamendua | NET-001 |
| WRK- | Lan-estazioa/Eramangarria | WRK-001 |
| MOB- | Gailu Mugikorra | MOB-001 |
| SW- | Softwarea | SW-001 |
| CLD- | Hodei Zerbitzua | CLD-001 |
| PLC- | Kontrolatzaile Logiko Programagarria | PLC-001 |
| SCADA- | SCADA Sistema | SCADA-001 |
| HMI- | Giza-Makina Interfazea | HMI-001 |
| PROD- | Produkzio Ekipamendua | PROD-001 |
| DB- | Datu-basea | DB-001 |
| DATA- | Datuak/Fitxategiak | DATA-001 |
| BACKUP- | Babeskopia Multzoa | BACKUP-001 |
| FAC- | Instalazioa | FAC-001 |
| SEC- | Segurtasun Sistema | SEC-001 |
| PWR- | Potentzia Sistema | PWR-001 |
| ENV- | Ingurumen Sistema | ENV-001 |
| 3RD- | Hirugarrenen Zerbitzua | 3RD-001 |
| SUP- | Hornitzailea | SUP-001 |

### Eranskina C: Aktibo Jabearen Erantzukizunak

**Aktibo Jabea (Negozio Rola):**
- Aktiboen sailkapena definitu
- Sarbide eskaerak onartu
- Segurtasun kontrol egokiak ziurtatu
- Arrisku ebaluazioetan parte hartu
- Aktiboen segurtasunerako aurrekontua
- Ezabaketa erabakiak hartu
- Aktiboa hiruhilero berrikusi

**Aktibo Zaintzailea (Rol Teknikoa):**
- Segurtasun kontrolak inplementatu
- Eguneroko eragiketak eta mantentzea egin
- Aktiboaren osasuna eta segurtasuna monitorizatu
- Adabakiak eta eguneraketak aplikatu
- Intzidenteak jakinarazi
- Babeskopiak exekutatu
- Sarbide kontrol fisikoa/logikoa

**CISO Erantzukizunak:**
- Aktibo erregistroa mantendu
- Segurtasun baldintzak definitu
- Kontrolen betetzea auditatu
- Intzidente erantzun koordinazioa
- Segurtasun metrikak zuzendaritzari jakinarazi

---

## 12. Sinadurak

**Dokumentu Berrikuspena eta Onarpena:**

| Izena | Rola | Sinadura | Data |
|-------|------|----------|------|
| [CISO Izena] | Aktibo Erregistro Jabea | | 2026-01-08 |
| [IT Kudeatzailea] | IT Aktibo Zaintzailea | | 2026-01-08 |
| [OT Kudeatzailea] | OT Aktibo Zaintzailea | | 2026-01-08 |
| [CFO] | Finantza Aktiboak | | 2026-01-08 |
| [CEO] | Exekutibo Onarpena | | 2026-01-08 |

**Hurrengo Berrikuspen Data:** 2026ko Apirilaren 8a (Hiruhilekoa)

---

**AKTIBOEN ERREGISTROAREN AMAIERA**

---

**KONFIDENTZIALTASUN OHARRA:**

Dokumentu honek Zabala Gailetak-en informazio-aktiboei buruzko informazio zehatza dauka, sistemak, ahultasunak eta segurtasun neurriak barne. Baimenik gabeko ezagutarazteak erakundearen aurkako erasoak erraztu ditzake. Kudeatu konfidentzialtasun kontrol egokiekin. Banaketa mugatua:
- Zuzendaritza Exekutiboa
- CISO eta Segurtasun Taldea
- IT/OT Kudeatzaileak
- Barne/Kanpo Auditoreak (NDApean)
- Aseguru Ebaluatzaileak (zentsuratutako bertsioa)