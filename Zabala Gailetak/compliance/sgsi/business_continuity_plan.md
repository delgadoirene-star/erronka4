# Negozioaren Jarraitutasun Plana (BCP)

## Zabala Gailetak S.A

**Dokumentuaren IDa:** BCP-001  
**Bertsioa:** 1.0  
**Data:** 2026ko Urtarrilaren 8a  
**Sailkapena:** Oso Konfidentziala  
**Jabea:** Zuzendari Nagusia (CEO)  
**BCP Koordinatzailea:** Informazioaren Segurtasuneko Arduradun Nagusia (CISO)  
**Berrikuspen Maiztasuna:** Urterokoa (eta intzidente handien ondoren)  
**Hurrengo Berrikuspen Data:** 2027ko Urtarrilaren 8a

---

## 1. Dokumentuaren Kontrola

### 1.1 Bertsio Historia

| Bertsioa | Data | Egilea | Aldaketak |
|----------|------|--------|-----------|
| 1.0 | 2026-01-08 | CISO | Hasierako BCP sorrera |

### 1.2 Onarpena

| Rola | Izena | Sinadura | Data |
|------|------|-----------|------|
| Zuzendari Nagusia (CEO) | [Izena] | | |
| Finantza Zuzendaria (CFO) | [Izena] | | |
| Informazioaren Segurtasuneko Arduradun Nagusia (CISO) | [Izena] | | |
| Eragiketa Kudeatzailea | [Izena] | | |

### 1.3 Banaketa eta Sarbidea

**Baimendutako Langileak:**

- Zuzendaritza Exekutiboko Taldea
- Negozioaren Jarraitutasun Taldeko kideak
- Departamentu Buruak
- Larrialdi Erantzun Taldea

**Biltegiratze Kokapenak:**

- Lehen mailakoa: Dokumentu kudeaketa sistema segurua (enkriptatua, sarbide kontrolatua)
- Babeskopia: Inprimatutako kopiak instalazio bakoitzeko larrialdi-kitetan
- Gunetik kanpo: Hodei biltegiratzea, instalazioa erabilgarri ez dagoenean eskuragarria
- Larrialdi Kontaktuak: Mugikorretik eskuragarri den bertsioa funtsezko langileentzat

---

## 2. Laburpen Exekutiboa

Negozioaren Jarraitutasun Plan (BCP) honek Zabala Gailetak-i aukera ematen dio negozio funtzio kritikoei eusteko gertaera disruptiboetan eta ondoren. Planak IT eta OT sistemak jorratzen ditu, gaileta produkzioa, bezeroarentzako arreta eta ezinbesteko eragiketak definitutako epeetan berrekin daitezkeela ziurtatuz.

**Helburu Nagusiak:**

- Langileen segurtasuna babestea
- Bezeroarentzako zerbitzua eta produkzio gaitasuna mantentzea
- Finantza eta ospe kalteak minimizatzea
- Lege eta kontratu betebeharrak betetzea ziurtatzea
- Eragiketa normalak berrezartzea 24-72 orduko epean etenaldiaren larritasunaren arabera

**Arrakasta Faktore Kritikoak:**

- Etenaldi Jasangarriaren Gehieneko Epea (MTPD): 24 ordu prozesu kritikoetarako
- Berreskuratze Denbora Helburua (RTO): 4 ordu IT sistemetarako, 8 ordu produkziorako
- Berreskuratze Puntu Helburua (RPO): Ordu 1 datu galerarako
- Negozio Jarraitutasun Helburu Minimoa (MBCO): %60ko produkzio gaitasuna 8 orduko epean

---

## 3. Esparrua eta Suposizioak

### 3.1 Esparrua

BCP honek honako hauek hartzen ditu barne:

- **Negozio Prozesu Kritikoak:** Gaileta produkzioa, eskaera betetzea, bezeroarentzako arreta, kalitate kontrola
- **IT Sistemak:** Web aplikazioa, datu-baseak, posta elektronikoa, sare azpiegitura
- **OT Sistemak:** PLCak, SCADA, produkzio ekipamendua, enbalatze lineak
- **Instalazioak:** Produkzio instalazio nagusia [Herria]-n, administrazio bulegoak, biltegia
- **Langileak:** Langile guztiak, kontratistak eta funtsezko hornitzaileak

### 3.2 Etenaldi Eszenatokiak

Plan honek honako hauek jorratzen ditu:

1. **Ziber Intzidenteak:** Ransomware, DDoS erasoak, datu-urraketak
2. **IT/OT Sistema Hutsegiteak:** Hardware hutsegitea, software ustelkeria, sare etena
3. **Hondamendi Naturalak:** Sutea, uholdea, lurrikara, eguraldi larria
4. **Pandemiak:** Lan-indarrari eragiten dion gaixotasun agerraldia
5. **Utilitate Etenak:** Argindar etena, ur hornidura etena, telekomunikazio hutsegitea
6. **Hornidura Kate Etenaldia:** Funtsezko hornitzailearen hutsegitea, garraio etena
7. **Segurtasun Fisikoa:** Terrorismoa, bandalismoa, lapurreta
8. **Langile Arazoak:** Funtsezko pertsonaren erabilgarritasun eza, lan grebak

### 3.3 Suposizioak

- Larrialdi zerbitzuak (suhiltzaileak, polizia, medikuak) eskuragarri daude
- Aseguru estaldura mantentzen da eta egokia da
- Negozioaren jarraitutasun aurrekontua urtero onartzen da
- Langileak prestatuta daude eta simulazioetan parte hartzen dute
- Hornitzaile kritikoek beren BCP planak dituzte
- Gunetik kanpoko babeskopia kokapena 2 orduko epean eskuragarri dago
- Komunikazio sistemak (sakelakoak, interneta) eskuragarri daude edo azkar berreskuratu daitezke

---

## 4. Negozioaren Eraginaren Analisia (BIA)

### 4.1 Negozio Funtzio Kritikoak

| Funtzioa | Deskribapena | MTPD | RTO | RPO | Eragina Eten Bada |
|----------|--------------|------|-----|-----|-------------------|
| **Gaileta Produkzioa** | Fabrikazio eragiketak (nahasketa, labeketa, enbalatzea) | 24h | 8h | 4h | Diru-sarrera galera 20.000 €/egun, kontratu zigorrak, ospe kaltea |
| **Eskaera Kudeaketa** | Eskaera sarrera, prozesatzea, fakturazioa | 12h | 4h | 1h | Bezeroen gogobetetasun eza, diru-sarrera galera 10.000 €/egun |
| **Inbentario Kudeaketa** | Lehengaien eta amaitutako produktuen jarraipena | 24h | 8h | 4h | Produkzio atzerapenak, stock zehaztasun eza, hondakinak |
| **Kalitate Kontrola** | Produktu probak eta betetzea | 24h | 8h | 4h | Arau urraketak, produktu erretiratzeak, segurtasun arriskuak |
| **Bezeroarentzako Arreta** | Laguntza, kexak, kontsultak | 24h | 4h | N/A | Bezeroen gogobetetasun eza, galdutako salmentak |
| **Finantza Eragiketak** | Nominak, ordaindu beharreko/jasotzeko kontuak | 48h | 12h | 24h | Ordainketa atzerapenak, hornitzaile arazoak, langileen morala |
| **IT Azpiegitura** | Zerbitzariak, sarea, datu-baseak | 8h | 4h | 1h | Sistema guztiak honen menpe, gaitzaile kritikoa |
| **OT Azpiegitura** | PLCak, SCADA, produkzio kontrola | 8h | 4h | 1h | Produkzio geldialdia, segurtasun arriskuak |

**MTPD:** Etenaldi Jasangarriaren Gehieneko Epea  
**RTO:** Berreskuratze Denbora Helburua (funtzioa zenbat azkar berrezarri behar den)  
**RPO:** Berreskuratze Puntu Helburua (onargarria den gehieneko datu galera)

### 4.2 Baliabide Kritikoak

**IT Sistemak (1. Lehentasuna):**

- Web aplikazio zerbitzaria (eskaera kudeaketa)
- Datu-base zerbitzaria (PostgreSQL/MongoDB)
- Posta elektroniko zerbitzaria
- Fitxategi zerbitzaria
- Suebakia eta sare azpiegitura
- VPN sarbidea urruneko lanerako

**OT Sistemak (1. Lehentasuna):**

- Produkzio PLCak (nahasketa, labeketa, enbalatze lineak)
- SCADA sistema
- Tenperatura eta hezetasun kontrol sistemak
- Kalitate kontrol laborategiko ekipamendua

**Instalazioak (1. Lehentasuna):**

- Produkzio instalazio nagusia
- Energia hornidura (elektrizitate trifasikoa)
- Ur hornidura (produkzioa eta saneamendua)
- Hozte/HVAC sistemak

**Langileak (1. Lehentasuna):**

- Produkzio Kudeatzailea eta txanda begiraleak
- Mantentze teknikariak
- Kalitate kontrol kudeatzailea
- IT Administratzailea
- CEO eta CFO

**Hornitzaileak (1. Lehentasuna):**

- Irina hornitzailea (2 saltzaile nagusi)
- Enbalatze material hornitzailea
- Utilitateak (elektrizitatea, ura, gasa)

### 4.3 Finantza Eraginaren Ebaluazioa

| Etenaldi Iraupena | Produkzio Galera | Diru-sarrera Eragina | Zeharkako Kostuak | Eragin Osoa |
|-------------------|------------------|----------------------|-------------------|-------------|
| 4 ordu | %16 | 3.000 € | 1.000 € | 4.000 € |
| 8 ordu | %33 | 6.000 € | 3.000 € | 9.000 € |
| 24 ordu | %100 | 20.000 € | 10.000 € | 30.000 € |
| 3 egun | %300 | 60.000 € | 40.000 € | 100.000 € |
| 1 aste | %700 | 140.000 € | 100.000 € | 240.000 € |

**Zeharkako Kostuak:** Kontratu zigorrak, aparteko orduak, larrialdi kontratazioa, ospe kaltea, bezero galera

---

## 5. Negozioaren Jarraitutasun Estrategia

### 5.1 Estrategia Orokorra

Zabala Gailetak-ek maila anitzeko jarraitutasun estrategia erabiltzen du:

1. **Prebentzioa:** Etenaldi probabilitatea minimizatu arrisku kontrolen bidez
2. **Arintzea:** Eragina murriztu erredundantzia eta erresilientzia bidez
3. **Erantzuna:** Jarraitutasun prozedurak aktibatu etenaldia gertatzen denean
4. **Berreskuratzea:** Eragiketa normalak sistematikoki berrezarri
5. **Hobekuntza:** Intzidenteetatik ikasi eta planak eguneratu

### 5.2 IT Sistemen Jarraitutasun Estrategia

**Azpiegitura Erredundantzia:**

- Hodeian ostatatutako sistema kritikoak (AWS/Azure eskualde anitz)
- Lokalean babeskopia zerbitzariak (hot standby sistema kritikoentzat)
- Internet konexio erredundanteak (2 ISP, zuntza + 4G failover)
- Etenik Gabeko Elikatze Sistema (UPS) 30 minuturako + sorgailua
- Eguneroko babeskopia automatizatuak (ikus Babeskopia Estrategia atala)

**Hondamendi Berreskuratze Gunea (DR Site):**

- Hodeian oinarritutako DR azpiegitura (IaaS)
- RTO: 4 ordu (sistema kritikoak martxan jarri)
- RPO: 1 ordu (gehieneko datu galera)
- Probak: Hiruhileko DR simulazioak

**Urruneko Lan Gaitasuna:**

- VPN sarbidea bulegoko langile guztientzat (AnyConnect edo OpenVPN)
- Hodeian oinarritutako kolaborazio tresnak (Microsoft 365 edo Google Workspace)
- Enpresako ordenagailu eramangarriak disko enkriptatze osoarekin
- Urruneko sarbide segurtasuna (MFA, endpoint babesa)

### 5.3 OT Sistemen Jarraitutasun Estrategia

**Ekipamendu Erredundantzia:**

- Ordezko pieza kritikoen inbentarioa (PLCak, sentsoreak, eragingailuak)
- Backup PLC konfigurazioak gunetik kanpo segurtasunez gordeta
- Eskuzko eragiketa prozedurak ekipamendu kritikoentzat
- Mantentze prebentibo programa hutsegiteak murrizteko

**Ordezko Produkzioa:**

- Larrialdi produkziorako akordioak 2 bazkide fabrikatzailerekin (MOU sinatuta)
- Gaitasuna: Produkzio normalaren %40 24 orduko epean
- Kalitate estandarrak egiaztatuta eta onartuta
- Konfidentzialtasun eta segurtasun baldintzak kontratuetan

**Produkzio Berreskuratze Fasekatua:**

1. **1. Fasea (0-4h):** Ebaluazioa, segurtasun egiaztapenak, kalte kontrola
2. **2. Fasea (4-8h):** Utilitateak berrezarri, ekipamendu kritikoen konponketa, eskuzko eragiketak beharrezkoa bada
3. **3. Fasea (8-24h):** Produkzio automatizatua berrekin %60ko gaitasunean
4. **4. Fasea (24-72h):** Gaitasun osoa berrezarri

### 5.4 Instalazioen Jarraitutasun Estrategia

**Ordezko Lan Kokapenak:**

- Bulegoko langileak: Etxetik urruneko lana (guztiz gaituta)
- Produkzio langileak: Bazkide fabrikazio instalazioak (akordioak indarrean)
- Larrialdi komando zentroa: Tokiko hotel bateko konferentzia gela (aurrez antolatuta)

**Instalazio Babesa:**

- Sute itzaltze sistema (FM-200 ITrentzat, ihinztagailuak produkziorako)
- Ur ihes detekzioa eta itzaltze balbula automatikoak
- Babeskopia sorgailua (diesela, 1000 kVA, 72 orduko erregai gaitasuna)
- Klima kontrol babeskopia (HVAC unitate eramangarriak eremu kritikoetarako)

### 5.5 Hornidura Katearen Jarraitutasun Estrategia

**Hornitzaile Dibertsifikazioa:**

- Gutxienez 2 hornitzaile lehengai kritikoetarako
- 30 eguneko inbentario bufferra funtsezko osagaientzat
- Hornitzaileen BCP baldintzak kontratuetan
- Aldizkako hornitzaile arrisku ebaluazioak

**Logistika Alternatibak:**

- 3 garraio hornitzaile kontratupean
- Biltegi gaitasuna hirugarren logistika hornitzailean
- Cross-docking gaitasuna bidalketa azkarrerako

### 5.6 Komunikazio Estrategia

**Barne Komunikazioa:**

- Larrialdi jakinarazpen sistema (SMS/email masiboa langile guztiei)
- Babeskopia kontaktu zerrenda (sakelako telefono pertsonalak)
- Intranet egoera orria eguneraketetarako
- Eguneroko informazio saioak intzidentean zehar (aurrez aurre edo birtualki)

**Kanpo Komunikazioa:**

- Bezero jakinarazpena etenaldi esanguratsua gertatu eta 2 orduko epean
- Hornitzaile eta bazkide jakinarazpena beharrezkoa denean
- Hedabideekiko harremanak (CEO edo izendatutako bozeramailea soilik)
- Arau jakinarazpena beharrezkoa bada (AEPD datu-urraketetarako, elikagai segurtasun agintariak)

---

## 6. Rolak eta Erantzukizunak

### 6.1 Negozioaren Jarraitutasun Taldea

**BCP Koordinatzailea (CISO):**

- BCP mantentze eta proba orokorrak
- BCP aktibatu etenaldia gertatzen denean
- Erantzun taldeen arteko koordinazioa
- Intzidente eguneraketetarako komunikazio gunea
- Intzidente osteko berrikuspena eta plan eguneraketak

**Larrialdi Erantzun Taldea:**

| Rola | Nagusia | Ordezkoa | Erantzukizunak |
|------|---------|----------|----------------|
| **Intzidente Komandantea** | CEO | CFO | Agintaritza orokorra, baliabide esleipena, erabaki exekutiboak |
| **Eragiketa Burua** | Eragiketa Kudeatzailea | Produkzio Begiralea | Produkzio berreskuratzea, instalazio ebaluazioa, eskuzko eragiketak |
| **IT Berreskuratze Burua** | IT Kudeatzailea | Sistema Admin Nagusia | IT sistema berreskuratzea, sare berrezartzea, datu berreskuratzea |
| **OT Berreskuratze Burua** | Mantentze Kudeatzailea | Teknikari Nagusia | OT sistema berreskuratzea, ekipamendu konponketa, segurtasun egiaztapenak |
| **Komunikazio Burua** | HR Kudeatzailea | Marketin Kudeatzailea | Langile komunikazioa, bezero eguneraketak, hedabide harremanak |
| **Logistika Burua** | Biltegi Kudeatzailea | Hornidura Kate Kudeatzailea | Hornitzaile koordinazioa, garraioa, ordezko hornikuntza |
| **Segurtasun (Safety) Ofiziala** | Osasun & Segurtasun Kudeatzailea | Kalitate Kudeatzailea | Langile segurtasuna, ebakuazioa, arau betetzea |
| **Finantza Burua** | CFO | Kontrolatzailea | Larrialdi finantzaketa, aseguru erreklamazioak, finantza jarraipena |
| **Aholkulari Legala** | Aholkulari Juridikoa | Kanpo Abokatu Bulegoa | Kontratu betebeharrak, erantzukizuna, arau betetzea |

### 6.2 Agintaritza eta Erabakiak Hartzea

**Erabaki Hierarkia:**

1. **Intzidente Komandantea (CEO):** Erabaki nagusi guztien azken agintaritza
2. **BCP Koordinatzailea (CISO):** Prozedurak aktibatzeko agintaritza operatiboa
3. **Funtzio Buruak:** Agintaritza beren eremuan (IT, OT, Eragiketak)

**Larrialdi Baimena:**

- 50.000 € arte: BCP Koordinatzailearen onarpena
- 50.000 € - 200.000 €: Intzidente Komandantearen onarpena
- >200.000 €: Intzidente Komandantea + CFO onarpena

**Orduz Kanpoko Kontaktua:**

- Larrialdi telefono zuhaitza (nagusia eta ordezko kontaktuak)
- 24/7 segurtasun telefonoa: +34 XXX XXX XXX
- Intzidente Komandantea 30 minutuko epean eskuragarri

---

## 7. Aktibazio Prozedurak

### 7.1 Aktibazio Irizpideak

BCP aktibatzen da honako kasuetan:

- Sistema kritikoaren hutsegitea >30 minutu
- Instalazioa ez dago erabilgarri edo ez da segurua
- Ziber intzidentea sistema kritikoei eragiten
- Hondamendi naturala eragiketei eragiten
- Funtsezko langileak ez daude eskuragarri (rol kritikoen >%50)
- Eragiketak gelditzeko agindu arautzailea
- MTPD atalaseak mehatxatzen dituen edozein gertaera

### 7.2 Aktibazio Prozesua

#### 1. Urratsa: Detekzioa eta Jakinarazpena (0-15 minutu)

1. Etenaldia detektatzen duen edozein langilek jakinarazi behar dio:
   - Zuzeneko kudeatzaileari
   - Segurtasun telefonoari: +34 XXX XXX XXX
   - Emaila: <emergency@zabalagailetak.com>
2. Segurtasun/IT taldeak larritasuna ebaluatzen du
3. Aktibazio irizpideak betetzen baditu, BCP Koordinatzailea jakinarazi

#### 2. Urratsa: Hasierako Ebaluazioa (15-30 minutu)

1. BCP Koordinatzaileak aktibazio erabakia berresten du
2. Intzidente Komandantea (CEO) jakinarazi
3. Larrialdi Erantzun Taldea bildu (fisikoki edo birtualki)
4. Eragin ebaluazio azkarra egin:
   - Zer dago kaltetuta?
   - Kausa eta litekeena den iraupena?
   - Segurtasun kezkak?
   - Zein funtzio kritiko daude kaltetuta?

#### 3. Urratsa: BCP Aktibazio Adierazpena (30-60 minutu)

1. Intzidente Komandanteak formalki BCP aktibazioa deklaratzen du
2. Komando Zentroa ezarri:
   - Nagusia: Bulego nagusiko konferentzia gela
   - Babeskopia: Birtuala (Zoom/Teams deia)
   - Hirugarren maila: Hotel konferentzia gela (aurrez antolatuta)
3. Langile guztiak jakinarazi larrialdi alerta sistemaren bidez
4. Larrialdi Erantzun Taldea informatu:
   - Egoera laburpena
   - Esleitutako rolak eta erantzukizunak
   - Hasierako lehentasunak eta ekintzak
   - Komunikazio protokoloak

#### 4. Urratsa: Berreskuratze Prozedurak Exekutatu (1+ ordu)

- Funtzio buruek berreskuratze prozedurak exekutatzen dituzte (ikus 8. Atala)
- Ohiko egoera eguneraketak Intzidente Komandanteari (hasieran orduro)
- Estrategia egokitu egoeraren arabera

---

## 8. Berreskuratze Prozedurak

### 8.1 IT Sistema Berreskuratzea

#### Sistema Kritikoen Lehentasun Ordena

1. Sare azpiegitura eta suebakiak
2. Autentifikazio sistemak (Active Directory/LDAP)
3. Datu-base zerbitzariak
4. Web aplikazioa (eskaera kudeaketa)
5. Posta elektroniko zerbitzaria
6. Fitxategi zerbitzaria
7. VPN urruneko sarbiderako

#### Berreskuratze Urratsak

#### Hodeian Ostatatutako Sistemetarako (AWS/Azure)

1. Egiaztatu hodei hornitzailearen egoera (AWS/Azure egoera orria)
2. Eskualdeko hutsegitea bada, failover bigarren eskualdera:

   ```bash
   aws route53 change-resource-record-sets --hosted-zone-id ZXXXXX --change-batch file://failover-dns.json
   ```

3. Egiaztatu datu-base erreplikazio egoera
4. Probatu aplikazioaren konektibitatea eta funtzionalitatea
5. Eguneratu DNS DR ingurunera seinalatzeko (TTL: 300s)
6. Monitorizatu errendimendua eta erroreak

#### Lokaleko Sistemetarako

1. Kaltea ebaluatu:
   - Hardware hutsegitea? (ordeztu edo failover babeskopia zerbitzarira)
   - Software ustelkeria? (berreskuratu babeskopiatik)
   - Sare arazoa? (aldatu babeskopia ISP-ra, 4G failover)
2. Hardware ordezkapena behar bada:
   - Eskuratu ordezko zerbitzaria inbentariotik
   - Instalatu babeskopia iruditik edo abiarazi SANetik
   - Berreskuratu azken babeskopia (ikus Babeskopia Berreskuratze prozedura)
3. Datu zentroa erabilgarri ez badago:
   - Aktibatu hodeian oinarritutako DR ingurunea
   - Berreskuratu babeskopiak hodeiko instantzietara
   - Birkonfiguratu aplikazioak hodeiko sarerako

#### Babeskopia Berreskuratze Prozedura

1. Identifikatu azken babeskopia garbia (egiaztatu babeskopia log-ak):

   ```bash
   ls -lh /backup/mongodb/ | grep $(date +%Y-%m-%d)
   ```

2. Egiaztatu babeskopia osotasuna (checksum):

   ```bash
   sha256sum -c backup-20260108.tar.gz.sha256
   ```

3. Berreskuratu datu-basea:

   ```bash
   mongorestore --host localhost --port 27017 --gzip --archive=/backup/mongodb/backup-20260108.tar.gz
   ```

4. Berreskuratu aplikazio fitxategiak:

   ```bash
   rsync -avz /backup/application/ /var/www/zabalagailetak/
   ```

5. Egiaztatu datu osotasuna (azken eskaeren, erabiltzaile kontuen ausazko egiaztapenak)
6. Probatu funtzio kritikoak (saioa hasi, eskaera sorrera, txostenak)

#### Estimatutako Berreskuratze Denborak

- Hodei failover: 30-60 minutu
- Babeskopia berreskuratzea: 2-4 ordu
- DR gune aktibazio osoa: 4-6 ordu

### 8.2 OT Sistema Berreskuratzea

#### OT Sistema Kritikoen Lehentasun Ordena

1. Segurtasun (Safety) sistemak (larrialdi gelditzeak, sute itzaltzea)
2. Produkzio PLC nagusia (nahasketa eta labeketa)
3. Enbalatze linea PLC
4. SCADA monitorizazio sistema
5. Tenperatura/hezetasun kontrola
6. Inbentario jarraipena

#### Berreskuratze Urratsak

#### PLC Hutsegiterako

1. **Segurtasuna Lehenik:**
   - Ziurtatu produkzio linea guztiak segurtasunez gelditu direla
   - Lock out/tag out hornidura elektrikoa
   - Garbitu langileak kaltetutako eremuetatik
2. **Diagnostikoa:**
   - Egiaztatu errore kodeak PLC pantailan
   - Egiaztatu energia hornidura eta konexioak
   - Probatu I/O moduluak multimetroarekin
3. **Berreskuratze Aukerak:**
   - **A Aukera (Txikia):** Berrabiarazi PLC, kargatu programa babeskopiatik
   - **B Aukera (Hardware Hutsegitea):** Ordeztu PLC ordezko inbentariotik
   - **C Aukera (Hutsegite Handia):** Aldatu eskuzko eragiketa prozeduretara
4. **PLC Ordezkapen Prozedura:**
   - Instalatu ordezko PLC (inbentarioko eredu zehatza)
   - Kargatu babeskopia konfigurazioa USB unitatetik:
     - Kokapena: `/backup/plc-configs/` (datatutako babeskopiak)
     - Egiaztatu konfigurazioa uneko produkzio errezetekin bat datorrela
   - Probatu simulazio moduan ekipamendura konektatu aurretik
   - Konektatu I/O eta egiaztatu sentsore irakurketa guztiak
   - Exekutatu proba zikloa produkturik gabe
   - Berrabiarazi pixkanaka kalitate kontrol egiaztapenekin
5. **Eskuzko Eragiketa (PLC erabilgarri ez badago):**
   - Aktibatu eskuzko kontrol panelak
   - Jarraitu eskuzko eragiketa kontrol-zerrenda (ikus C Eranskina)
   - Produkzio tasa: Normalaren %30
   - Kalitate monitoreo hobetua (15 minuturo)

#### SCADA Sistema Hutsegiterako

1. Egiaztatu PLC kontrola oraindik funtzionala dela (produkzioak SCADA monitoreorik gabe jarraitu dezake)
2. Berreskuratu SCADA zerbitzaria babeskopiatik edo failover hot standby-ra
3. Aldi baterako monitorizazioa: PLC interfaze zuzena kontrol paneletan
4. Berrekin SCADA eragiketa normalak berreskuratu ondoren

#### Instalazio Osoa Galtzen Bada

1. Aktibatu bazkide fabrikazio akordioak
2. Transferitu produkzio errezetak eta zehaztapenak (USB unitate enkriptatuak larrialdi-kitetan)
3. Hedatu kalitate kontrol kudeatzailea bazkide instalaziora
4. Koordinatu lehengaien entrega bazkide instalaziora
5. Estimatutako denbora-lerroa: 24 ordu lehen produkziora bazkide instalazioan

#### Estimatutako Berreskuratze Denborak

- PLC berrabiarazte/birkonfigurazioa: 1-2 ordu
- PLC ordezkapena: 4-6 ordu
- SCADA berreskuratzea: 2-4 ordu
- Eskuzko eragiketa aktibazioa: 30 minutu
- Bazkide instalazio produkzio hasiera: 24 ordu

### 8.3 Produkzio Eragiketen Berreskuratzea

#### 1. Fasea: Berehalako Erantzuna (0-4 ordu)

#### Ekintzak

1. **Langileen Segurtasuna:**
   - Langile guztiak zenbatu (larrialdi biltze puntuak)
   - Eman lehen sorospenak beharrezkoa bada
   - Ebakuatu beharrezkoa bada (sutea, gas ihesa, egitura kaltea)
2. **Kalte Ebaluazioa:**
   - Ikuskapen bisuala Segurtasun Ofizialak eta Eragiketa Buruak
   - Dokumentatu argazki/bideoekin
   - Identifikatu berehalako arriskuak (kableak agerian, gas ihesak, egitura kaltea)
3. **Instalazioa Ziurtatu:**
   - Itxi utilitateak arriskutsua bada
   - Blokeatu kaltetutako eremuetarako sarrerak
   - Segurtasuna ezarri beharrezkoa bada
4. **Bezero Jakinarazpena:**
   - Produkzioa >4 ordu atzeratzen bada, jakinarazi bezeroei 2 orduko epean
   - Eman estimatutako berreskuratze denbora-lerroa
   - Eskaini alternatibak eskuragarri badaude

#### 2. Fasea: Egonkortzea (4-8 ordu)

#### Ekintzak

1. **Utilitateak Berrezartzea:**
   - Koordinatu utilitate hornitzaileekin
   - Aktibatu babeskopia sorgailua argindarra ez badago
   - Egiaztatu ur kalitatea produkzioa berrekin aurretik
2. **Ekipamendu Kritikoen Lehentasuna:**
   - Zentratu lehentasun handieneko produkzio linean lehenik
   - Probatu ekipamendu funtzionamendua produkturik gabe (dry run)
   - Kalitate kontrol ekipamenduak operatiboa izan behar du produkzioa berrekin aurretik
3. **Langileen Mobilizazioa:**
   - Deitu funtsezko produkzio langileei
   - Informatu egoeraz eta segurtasun prozedurez
   - Berretsi garraio sarbidea instalaziora
4. **Hornitzaile Koordinazioa:**
   - Egiaztatu lehengaien eskuragarritasuna
   - Berprogramatu entregak beharrezkoa bada
   - Bizkortu osagai kritikoak agortu badira

#### 3. Fasea: Produkzioa Berrekitea (8-24 ordu)

#### Ekintzak

1. **Produkzio Partziala Hasi:**
   - Produkzio linea bakarra hasieran (bolumen handieneko produktua)
   - Kalitate egiaztapen hobetuak (maiztasun bikoitza)
   - Hasi lote txikiarekin kalitatea egiaztatzeko
2. **Inbentario Kudeaketa:**
   - Egiaztatu amaitutako produktuen inbentarioa (osorik eta kalitatea mantenduta)
   - Lehenetsi eskaerak: kontratuz behartuta > balio handiena > harreman luzeena
   - Egokitu produkzio egutegia atzerapenak harrapatzeko
3. **Komunikazio Eguneraketak:**
   - Eguneratu bezeroak berreskuratze aurrerapenaz
   - Barne egoera informazio saioak (txanda hasiera eta amaiera)
   - Jakinarazi hornitzaileei berrikusitako beharrez

#### 4. Fasea: Berrezarpen Osoa (24-72 ordu)

#### Ekintzak

1. **Produkzioa Eskalatu:**
   - Aktibatu produkzio linea gehigarriak
   - Txanda luzeak edo aparteko orduak beharrezkoa bada
   - Atzeratutako eskaeretarako harrapaketa produkzioa
2. **Eragiketa Normaletara Itzuli:**
   - Berrekin kalitate kontrol maiztasun normala
   - Produkzio programazio estandarra
   - Desaktibatu larrialdi prozedurak
3. **Finantza Berreskuratzea:**
   - Aurkeztu aseguru erreklamazioa (1. faseko dokumentazioarekin)
   - Kalkulatu finantza eragina
   - Fakturatu bezeroei entregatutako eskaerak

### 8.4 Instalazio Berreskuratzea (Etenaldi Luzea)

#### Lehen Mailako Instalazioa >72 ordu Ez Bada Erabilgarri

#### Berehalako Ekintzak (0-24 ordu)

1. Aktibatu bazkide fabrikazio akordioak (ikus 8.2 Atala)
2. Ezarri aldi baterako bulego espazioa:
   - Urruneko lana bulegoko langile guztientzat
   - Ezinbesteko bilerak hoteleko konferentzia zentroan
   - Larrialdi dokumentuak hodeiko biltegiratze bidez eskuragarri
3. Jakinarazi interesdun guztiei (bezeroak, hornitzaileak, langileak, asegurua)

#### Epe Laburreko Berreskuratzea (1-4 aste)

1. Alokatu aldi baterako produkzio espazioa bazkide gaitasuna nahikoa ez bada
2. Birlekutu funtsezko ekipamendua salbagarria bada
3. Berreraiki azpiegitura kritikoa lehenik (IT, bulegoa, QC laborategia)
4. Kontratatu aldi baterako langileak beharrezkoa bada

#### Epe Luzeko Berreskuratzea (1-6 hilabete)

1. Instalazioaren berreraikuntza osoa edo birkokapena
2. Berritu sistemak ikasitako ikasgaietan oinarrituta
3. Pixkanaka itzuli lehen mailako instalaziora
4. Desaktibatu aldi baterako antolamenduak

---

## 9. Komunikazio Plana

### 9.1 Barne Komunikazioa

**Larrialdi Jakinarazpen Sistema:**

- Nagusia: SMS/email automatizatua langile guztiei
- Babeskopia: Telefono zuhaitza (kudeatzaileek beren taldeei deitzen diete)
- Mezu txantiloia:

  ```
  ZABALA GAILETAK LARRIALDI ALERTA
  Data/Ordua: [AUTO]
  Intzidentea: [Deskribapen laburra]
  Egoera: [Seguru/Ebakuatu/Urruneko Lana/Itxaron]
  Hurrengo Eguneraketa: [Ordua]
  Kontaktua: [BCP Koordinatzaile zenbakia]
  ```

**Egoera Eguneraketak:**

- Intzidentean zehar: Gutxienez 2 orduro
- Ebazpenaren ondoren: Eguneroko eguneraketak eragiketa normaletara arte
- Kanala: Emaila + intranet egoera orria + SMS eguneraketa kritikoetarako

**Langile Informazio Saioak:**

- Eguneroko bilera presentzialak edo birtualak intzidentean zehar
- Funtsezko informazioa: egoera laburpena, segurtasun argibideak, lan itxaropenak, hurrengo urratsak

### 9.2 Kanpo Komunikazioa

**Bezero Komunikazioa:**

- **Jakinarazpen Muga:** Eskaerei >4 ordu eragiten dien edozein etenaldi
- **Denbora:** Intzidentetik 2 orduko epean
- **Metodoa:** Emaila kontu kontaktuei, telefono deiak bezero nagusiei
- **Mezu Edukia:**
  - Zer gertatu den (goi-mailakoa, xehetasun sentikorrik gabe)
  - Eragina beren eskaeretan
  - Estimatutako berreskuratze denbora-lerroa
  - Arintze ekintzak (bazkide produkzioa, bidalketa bizkortua)
  - Galderetarako kontaktua
- **Jarraipena:** Eguneroko eguneraketak eskaerak bete arte

**Hornitzaile Komunikazioa:**

- Jakinarazi aldatutako entrega egutegiez edo kantitateez
- Eskatu bidalketa bizkortua berreskuratzeko beharrezkoa bada
- Koordinatu ordezko entrega kokapenak instalazioa erabilgarri ez badago

**Arau Komunikazioa:**

- **AEPD (Datuak Babesteko Agintaritza):** 72 orduko epean datu pertsonalen urraketetarako
- **Elikagai Segurtasun Agintaritza:** Berehala produktu segurtasuna kaltetuta badago
- **Lan Agintaritza:** Lan istripua edo kaleratze handia badago

**Hedabideekiko Harremanak:**

- **Bozeramailea:** CEO bakarrik (ordezkoa: CFO)
- **Komentariorik Ez Politika:** Langileek hedabideen kontsulta guztiak CEOri bideratzen dizkiote
- **Prestatutako Adierazpena:** Zirriborroa intzidente handiaren 4 orduko epean
- **Proaktiboa vs. Erreaktiboa:** Kontuan hartu prentsa ohar proaktiboa intzidente handietarako narratiba kontrolatzeko

**Aseguru Komunikazioa:**

- Jakinarazi aseguru artekariari 24 orduko epean
- Dokumentatu kalte guztiak argazki, bideo, inbentario zerrendekin
- Jarraitu erreklamaziorako gastu guztiak (gorde ordainagiriak)
- Koordinatu perituarekin gune bisitarako

---

## 10. Probak eta Mantentzea

### 10.1 Proba Egutegia

| Proba Mota | Maiztasuna | Parte-hartzaileak | Iraupena | Helburuak |
|------------|------------|-------------------|----------|-----------|
| **Mahai-gaineko Ariketa** | Hiruhilero | Larrialdi Erantzun Taldea | 2 ordu | BCP eszenatokiak landu, rolak eta erabakiak eztabaidatu |
| **IT DR Proba** | Hiruhilero | IT taldea | 4 ordu | Babeskopiak berreskuratu, failover DR gunera, RTO/RPO egiaztatu |
| **OT Eskuzko Eragiketa Simulazioa** | Sei Hilero | Produkzio taldea | 2 ordu | Ekipamendu kritikoen eskuzko eragiketa praktikatu |
| **Eskala Osoko Ariketa** | Urtero | Langile guztiak | 4-8 ordu | Etenaldi handia simulatu, BCP prozedura guztiak aktibatu |
| **Komunikazio Proba** | Hilero | HR/Komunikazioa | 30 min | Larrialdi jakinarazpen sistema probatu, kontaktu info egiaztatu |
| **Babeskopia Berreskuratze Proba** | Hilero | IT taldea | 2 ordu | Ausazko babeskopia bat berreskuratu, datu osotasuna egiaztatu |

### 10.2 Mahai-gaineko Ariketa Eszenatokiak

**1. Eszenatokia: Ransomware Erasoa**

- Egoera: Astelehen goiza, zerbitzari guztiak enkriptatuta, 10 BTC eskatzen dituen erreskate oharra
- Eztabaida Puntuak: Infekzioa isolatu, babeskopietatik berreskuratu, legea betearazteko jakinarazpena, bezero komunikazioa, prebentzio hobekuntzak

**2. Eszenatokia: Instalazio Sutea**

- Egoera: Ostiral gaua sutea produkzio eremuan, ihinztagailuak aktibatuta, estimatutako 2 asteko geldialdia
- Eztabaida Puntuak: Langileen segurtasuna, kalte ebaluazioa, bazkide fabrikazio aktibazioa, aseguru erreklamazioa, bezero eragina

**3. Eszenatokia: Funtsezko Langileak Ez Egotea**

- Egoera: IT Kudeatzailea eta ordezkoa biak ez daude eskuragarri (auto istripua), sistema kritikoaren hutsegitea haien ausentzian
- Eztabaida Puntuak: Ondorengotza plangintza, dokumentazio eskuragarritasuna, larrialdi kontratista inplikazioa, zeharkako prestakuntza beharrak

**4. Eszenatokia: Hornidura Kate Etenaldia**

- Egoera: Lehen mailako irina hornitzailea porrot eginda, bidalketak berehala eten dira, 10 eguneko inbentarioa eskura
- Eztabaida Puntuak: Aktibatu bigarren mailako hornitzailea, erosketa bizkortua, errezeta doikuntzak, produkzio lehentasuna

### 10.3 Eskala Osoko Ariketa

**Urteroko Ariketa (Adibidea: Azaroa):**

**Prestaketa (Hilabete 1 lehenago):**

- Hautatu eszenatokia (adib., lurrikarak instalazioa kaltetzea)
- Garatu ariketa gidoia eta injekzioak
- Jakinarazi parte-hartzaileei (ezusteko simulaziorik ez segurtasun arrazoiengatik)
- Antolatu begiraleak eta ebaluatzaileak
- Prestatu ariketa materialak (mapak, egoera taulak, atrezzoa)

**Exekuzioa (Ariketa Eguna):**

1. **Hasiera (0900):** Eszenarioari eta segurtasun arauei buruzko informazio saioa
2. **1. Injekzioa (0915):** Lurrikara jakinarazi da, eraikin ikuskapena beharrezkoa
3. **2. Injekzioa (0945):** Egitura kalteak aurkitu dira, instalazio ebakuazioa agindu da
4. **3. Injekzioa (1015):** IT sistemak lineaz kanpo, urruneko lan aktibazioa beharrezkoa
5. **4. Injekzioa (1100):** Bazkide fabrikatzailea kontaktatu da, produkzio transferentzia eztabaidatu da
6. **5. Injekzioa (1130):** Bezeroen kontsultak iristen, komunikazioa beharrezkoa
7. **Amaiera (1300):** Hot wash (berehalako iritzia), ariketa amaiera

**Ebaluazio Irizpideak:**

- Larrialdi Erantzun Taldea biltzeko denbora
- Erabakiak hartzeko abiadura eta kalitatea
- Komunikazio eraginkortasuna
- Berreskuratze prozedura teknikoen exekuzioa
- BCP prozeduren atxikimendua
- Plan hutsuneen identifikazioa

**Ariketa Ostekoa (2 asteren buruan):**

- Ekintza Osteko Txostena dokumentatzen:
  - Zer joan zen ondo
  - Zer hobetu behar den
  - Ekintza zehatzak
  - Beharrezko BCP eguneraketak
- Zuzenketetarako erantzukizunak esleitu
- Jarraipen berrikuspena programatu 3 hilabetetan

### 10.4 Plan Mantentzea

**Eguneratze Abiarazleak:**

- Urteroko programatutako berrikuspena
- BCP aktibazio baten ondoren (benetako intzidentea)
- Probak hutsuneak identifikatu ondoren
- Antolakuntza aldaketak (sistema berriak, langileak, instalazioak)
- Arau aldaketak
- Hornitzaile edo bezero nagusi aldaketak

**Berrikuspen Prozesua:**

1. BCP Koordinatzaileak plan osoa berrikusten du
2. Atal jabeek beren eremuak berrikusten dituzte (IT, OT, Eragiketak, etab.)
3. Eguneratu kontaktu zerrendak (egiaztatu zehaztasuna hilero)
4. Egiaztatu hornitzaile akordioak eta kontratuak oraindik baliozkoak direla
5. Eguneratu finantza eraginaren estimazioak
6. Berrikusi probetatik eta benetako intzidenteetatik ikasitako ikasgaietan oinarrituta
7. Lortu exekutibo onarpena aldaketa nagusietarako
8. Banatu plan eguneratua baimendutako langile guztiei
9. Aldaketen berri eman hurrengo talde bileran

**Aldaketa Kudeaketa:**

- Bertsio kontrola: Gehitu bertsio zenbakia aldaketetarako
- Jarraitu aldaketak: Dokumentatu bertsio historia taulan
- Zahartutako bertsioak: Artxibatu 5 urteko atxikipenarekin
- Jakinarazpena: Bidali aldaketa esanguratsuen laburpena posta elektronikoz

---

## 11. Berreskuratze Metrikak eta Arrakasta Irizpideak

### 11.1 Errendimendu Adierazle Gakoak (KPIak)

| KPI | Helburua | Neurketa |
|-----|----------|----------|
| Larrialdi Erantzun Taldea biltzeko denbora | <30 minutu | Aktibaziotik taldea bildu arteko denbora |
| Hasierako bezero komunikaziorako denbora | <2 ordu | Intzidentetik lehen bezero jakinarazpenera arteko denbora |
| IT sistema RTO lorpena | <4 ordu | IT sistema kritikoak berreskuratzeko denbora |
| OT sistema RTO lorpena | <8 ordu | Produkzioa berrekiteko denbora |
| Datu galera (RPO lorpena) | <1 ordu | Babeskopia berreskuratzean galdutako datu kopurua |
| Produkzio gaitasuna 24 ordutan | >%60 | Produkzio gaitasun normalaren ehunekoa |
| Eragiketa berrezarpen osoa | <72 ordu | %100 eragiketa normaletara itzultzeko denbora |
| Langile segurtasun intzidenteak berreskuratzean | 0 | BCP aktibazioan zehar izandako lesio kopurua |

### 11.2 Arrakasta Irizpideak

**Berehalako Arrakasta (0-4 ordu):**

- Langile guztiak kontuan hartuta eta seguru
- Larrialdi Erantzun Taldea bilduta
- Kalteak ebaluatuta eta dokumentatuta
- Hasierako bezero komunikazioa bidalita
- Sistema kritikoak isolatuta edo ziurtatuta

**Epe Laburreko Arrakasta (4-24 ordu):**

- IT sistema kritikoak berrezarrita
- Produkzioa berrekin (gutxienez %60ko gaitasuna)
- Ordezko moldaketak aktibatuta beharrezkoa bada
- Aldizkako eguneraketak interesdunei emanda
- Finantza eraginaren ebaluazioa osatuta

**Epe Luzeko Arrakasta (1-7 egun):**

- Produkzio gaitasun osoa berrezarrita
- Atzeratutako eskaera guztiak beteta
- Negozio eragiketa normalak berrezarrita
- Intzidente osteko berrikuspena eginda
- BCP eguneraketak identifikatuta

### 11.3 Finantza Metrikak

**Kostuen Jarraipena Intzidentean Zehar:**

- Larrialdi erosketak
- Aparteko orduak
- Ekipamendu alokairua edo ordezkapena
- Kontratista zerbitzuak
- Bidalketa bizkortua
- Bazkide fabrikazio kostuak
- Galdutako diru-sarrerak
- Aseguru frankizia

**Aseguru Erreklamazio Dokumentazioa:**

- Galera inbentario zehatza
- Kalteen argazkiak eta bideoak
- Kontratisten konponketa aurrekontuak
- Diru-sarrera eraginaren kalkuluak
- Gastu gehigarrien ordainagiriak
- Negozio etenaldi erreklamazioaren justifikazioa

---

## 12. Eranskinak

### Eranskina A: Larrialdi Kontaktu Zerrenda

**Funtsezko Langileak** (hilero eguneratua)

| Izena | Rola | Mugikorra | Emaila | Etxeko Telefonoa | Ordezko Kontaktua |
|-------|------|-----------|-------|------------------|-------------------|
| [CEO Izena] | Intzidente Komandantea | +34 XXX XXX XXX | <ceo@zabalagailetak.com> | +34 XXX XXX XXX | Ezkontidea: +34 XXX |
| [CISO Izena] | BCP Koordinatzailea | +34 XXX XXX XXX | <ciso@zabalagailetak.com> | +34 XXX XXX XXX | Ezkontidea: +34 XXX |
| [CFO Izena] | Finantza Burua | +34 XXX XXX XXX | <cfo@zabalagailetak.com> | +34 XXX XXX XXX | Ezkontidea: +34 XXX |
| [IT Kudeatzailea] | IT Berreskuratze Burua | +34 XXX XXX XXX | <it@zabalagailetak.com> | +34 XXX XXX XXX | Ezkontidea: +34 XXX |
| [Eragiketa Kudeatzailea] | Eragiketa Burua | +34 XXX XXX XXX | <ops@zabalagailetak.com> | +34 XXX XXX XXX | Ezkontidea: +34 XXX |

**Kanpo Larrialdi Zerbitzuak**

| Zerbitzua | Kontaktua | Helburua |
|-----------|-----------|----------|
| Larrialdi Zerbitzuak | 112 | Suhiltzaileak, Polizia, Medikuak |
| Polizia (Nazionala) | 091 | Segurtasun intzidenteak |
| Suhiltzaileak | 080 | Sute larrialdiak |
| Guardia Zibila | 062 | Landa eremuak, delitu larriak |
| INCIBE | +34 017 | Zibersegurtasun intzidenteak |
| AEPD | +34 901 100 099 | Datu-urraketa jakinarazpena |

**Hornitzaile Kritikoak**

| Hornitzailea | Produktua/Zerbitzua | Lehen Kontaktua | Ordezkoa | Telefonoa |
|--------------|---------------------|-----------------|----------|-----------|
| [Irina Hornitzailea A] | Gari irina | [Kontaktua] | [Kontaktua] | +34 XXX |
| [Irina Hornitzailea B] | Gari irina | [Kontaktua] | [Kontaktua] | +34 XXX |
| [Enbalatze Enpresa] | Kaxak, bilgarriak | [Kontaktua] | [Kontaktua] | +34 XXX |
| [Elektrizitate Konpainia] | Energia hornidura | [Kontu Kudeatzailea] | Larrialdia: 900 XXX | +34 XXX |
| [ISP A] | Internet (nagusia) | [Laguntza] | Larrialdia: 24/7 | +34 XXX |
| [ISP B] | Internet (babeskopia) | [Laguntza] | Larrialdia: 24/7 | +34 XXX |
| [AWS/Azure] | Hodei ostalaritza | [Kontu Kudeatzailea] | Laguntza Ataria | +34 XXX |

#### Bazkide Fabrikatzaileak

| Enpresa | Gaitasuna | Kontaktua | Telefonoa | Akordio Egoera |
|---------|-----------|-----------|-----------|----------------|
| [Bazkidea A] | Gure bolumenaren %40 | [Kontaktua] | +34 XXX | MOU sinatua 2025-06 |
| [Bazkidea B] | Gure bolumenaren %30 | [Kontaktua] | +34 XXX | MOU sinatua 2025-08 |

#### Asegurua eta Legala

| Zerbitzua | Enpresa | Kontaktua | Telefonoa | Poliza # |
|-----------|---------|-----------|-----------|----------|
| Negozio Asegurua | [Aseguratzailea] | [Artekaria] | +34 XXX | POL-XXXXX |
| Ziber-asegurua | [Aseguratzailea] | [Artekaria] | +34 XXX | CYB-XXXXX |
| Aholkulari Juridikoa | [Abokatu Bulegoa] | [Abokatua] | +34 XXX | N/A |

### Eranskina B: IT Sistema Inbentarioa

**IT Aktibo Kritikoak** (ikus Aktiboen Erregistro osoa inbentario osorako)

| Sistema | Kokapena | Helburua | Babeskopia Maiztasuna | DR Estrategia |
|---------|----------|----------|-----------------------|---------------|
| Web Aplikazioa | AWS eu-west-1 | Eskaera kudeaketa | Denbora errealeko erreplikazioa | Eskualde anitzeko failover |
| Datu-basea (MongoDB) | AWS eu-west-1 | Bezero/eskaera datuak | Orduro inkrementala | Replika multzoa + babeskopiak |
| Email Zerbitzaria | Microsoft 365 | Komunikazioa | Etengabea (hodeia) | Hodei erresilientea |
| Fitxategi Zerbitzaria | Lokala + OneDrive | Dokumentuak | Orduro | Hodei sinkronizazioa |
| Suebakia | Lokala | Sare segurtasuna | Konfig babeskopia egunero | Ordezko hardwarea gunean |
| SCADA Zerbitzaria | Lokala | Produkzio monitorizazioa | Egunero | Hot standby zerbitzaria |

### Eranskina C: Eskuzko Eragiketa Prozedurak

#### Produkzio Linearen Eskuzko Eragiketa (PLC Hutsegitea)

**Segurtasun Aurrebaldintzak:**

- Larrialdi gelditze sistema funtzionala (PLCtik independentea)
- Langile guztiak eskuzko prozeduretan trebatuta
- Begirada hobetua (2 langile gutxienez)

**Prozedura:**

1. Aldatu kontrol panela "Eskuzko" modura
2. Eskuz hasi nahasgailua (egiaztatu abiadura takometroarekin)
3. Kargatu osagaiak errezetaren arabera (erabili balantzak, ez dosifikazio automatizatua)
4. Monitorizatu nahasketa denbora kronometroarekin (10 minutu errezeta estandarrerako)
5. Eskuz aktibatu laberako garraiatzailea (erabili eskuzko kontrolak)
6. Monitorizatu labe tenperatura eskuz (egiaztatu IR termometroarekin 5 minuturo)
7. Eskuz aurreratu labeketa zikloa (12 minutu 180°C-tan)
8. Eskuz aktibatu hozte garraiatzailea
9. Eskuz transferitu enbalatzera (enbalatze automatizatua lineaz kanpo eskuzko moduan)
10. Kalitate egiaztapena lote bakoitzean (derrigorrezkoa)

**Mugak:**

- Produkzio tasa: Gaitasun normalaren %30
- Kalitate monitoreo hobetua beharrezkoa
- Gehieneko etengabeko eragiketa: 4 ordu (langileen nekea)
- Ez da egokia errezeta konplexuetarako (mantendu top 3 SKUak)

### Eranskina D: Babeskopia Egiaztapen Kontrol-zerrenda

**Hileroko Babeskopia Proba** (IT taldeak egina)

- [ ] Hautatu ausazko babeskopia aurreko astetik
- [ ] Egiaztatu babeskopia fitxategiaren osotasuna (checksum bat dator)
- [ ] Berreskuratu proba ingurunera (produkziotik isolatua)
- [ ] Egiaztatu datu-base konektibitatea
- [ ] Egiaztatu datu osotasuna (erregistro kopuruak produkzioarekin bat datoz)
- [ ] Ausazko egiaztapena datu kalitatean (5 ausazko azken eskaera)
- [ ] Probatu aplikazio funtzionalitatea (saio-hasiera, eskaera bilaketa, txosten sorrera)
- [ ] Neurtu berreskuratze denbora (konparatu RTO helburuarekin)
- [ ] Dokumentatu emaitzak babeskopia log-ean
- [ ] Jakinarazi edozein arazo IT Kudeatzaileari berehala

### Eranskina E: Intzidente Log Txantiloia

#### Negozio Jarraitutasun Intzidente Log-a

| Intzidente IDa: | BCP-20XX-XXX | Data/Ordua: | [Hasiera ordua] |
|-----------------|--------------|-------------|-----------------|
| **Intzidente Komandantea** | [Izena] | **BCP Koordinatzailea** | [Izena] |
| **Intzidente Mota** | [ ] Ziber [ ] IT Hutsegitea [ ] OT Hutsegitea [ ] Instalazioa [ ] Hondamendi Naturala [ ] Beste bat: _____ | | | | |
| **Kaltetutako Sistemak** | | | |
| **Eragin Ebaluazioa** | [ ] Kritikoa [ ] Altua [ ] Ertaina [ ] Baxua | | |

**Denbora-lerroa:**

| Ordua | Gertaera | Hartutako Ekintza | Nork |
|-------|----------|-------------------|------|
| | | | |
| | | | |

**Baliabide Erabilera:**

| Baliabidea | Kostua | Saltzailea | Oharrak |
|------------|--------|------------|---------|
| | | | |

**Jaulkitako Komunikazioak:**

- [ ] Barne langile jakinarazpena (Ordua: ____)
- [ ] Bezero jakinarazpena (Ordua: ____)
- [ ] Hornitzaile jakinarazpena (Ordua: ____)
- [ ] Arau jakinarazpena (Ordua: ____)
- [ ] Hedabide adierazpena (Ordua: ____)

**Berreskuratze Egoera:**

- [ ] BCP aktibatua (Ordua: ____)
- [ ] Larrialdi Erantzun Taldea bilduta (Ordua: ____)
- [ ] IT sistemak berrezarrita (Ordua: ____)
- [ ] OT sistemak berrezarrita (Ordua: ____)
- [ ] Produkzioa berrekin (Ordua: ____ %___ gaitasunean)
- [ ] Eragiketa osoak berrezarrita (Ordua: ____)
- [ ] BCP desaktibatua (Ordua: ____)

**Intzidente Ostekoa:**

- [ ] Intzidente osteko berrikuspena programatuta (Data: ____)
- [ ] Ekintza osteko txostena osatuta (Data: ____)
- [ ] BCP eguneraketak identifikatuta
- [ ] Aseguru erreklamazioa aurkeztuta (Data: ____ Zenbatekoa: €_____)

---

#### NEGOZIOAREN JARRAITUTASUN PLANAREN AMAIERA

---

**Dokumentu Banaketa:**

Inprimatutako kopiak larrialdi-kitetan gordeta hemen:

1. CEO bulegoa (A Eraikina, 301 Gela)
2. CISO bulegoa (A Eraikina, 201 Gela)
3. Produkzio begiralearen bulegoa (B Eraikina, 1. Solairua)
4. Segurtasun bulegoa (Sarrera nagusia)
5. Gunetik kanpo: [Zehaztu kokapen segurua, adib., CEOren etxeko kutxa gotorra]

Kopia digitalak eskuragarri honela:

- ISMS dokumentu biltegia (sarbide kontrolatua)
- Hodei biltegiratzea: [URL] (MFA beharrezkoa)
- Larrialdi Erantzun Taldeko kideen enpresako ordenagailu eramangarriak (enkriptatuak)

**GARRANTZITSUA: Dokumentu honek Zabala Gailetak-en berreskuratze gaitasunei eta ahultasunei buruzko informazio sentikorra dauka. Kudeatu konfidentzialtasun kontrol egokiekin.**
