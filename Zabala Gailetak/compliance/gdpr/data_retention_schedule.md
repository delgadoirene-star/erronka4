# Datuen Atxikipen Egutegia
## Zabala Gailetak S.A. - GDPR Betetzea

**Dokumentuaren IDa:** DRS-001  
**Bertsioa:** 1.0  
**Data:** 2026ko Urtarrilaren 8a  
**Sailkapena:** Barne Erabilera  
**Jabea:** Datuen Babeserako Ordezkaria (DBO/DPO)  
**Berrikuspen Maiztasuna:** Urterokoa  
**Hurrengo Berrikuspen Data:** 2027ko Urtarrilaren 8a

---

## 1. Dokumentuaren Kontrola

### 1.1 Bertsio Historia

| Bertsioa | Data | Egilea | Aldaketak |
|----------|------|--------|-----------|
| 1.0 | 2026-01-08 | DBO | Hasierako atxikipen egutegiaren sorrera |

### 1.2 Helburua

Datuen Atxikipen Egutegi honek Zabala Gailetak-ek datu pertsonalen kategoria desberdinak zenbat denboran gordetzen dituen eta atxikipen epeak zehazteko irizpideak ezartzen ditu. Honako hauek betetzen direla ziurtatzen du:
- **GDPR 5(1)(e) artikulua:** Biltegiratze mugaren printzipioa (datuak behar baino denbora gehiago ez gordetzea)
- **GDPR 5(2) artikulua:** Erantzukizun proaktiboaren printzipioa (betetzea frogatzea)
- **DBLO-GDD:** Espainiako datuen babeserako baldintzak
- **Espainiako lege betebeharrak:** Zerga, kontabilitate, lan eta merkataritza legeak

### 1.3 Esparrua

Egutegi hau Zabala Gailetak-ek tratatzen dituen datu pertsonal guztiei aplikatzen zaie, barne:
- Bezeroen datuak
- Langileen datuak
- Hornitzaile eta bazkideen datuak
- Webgune bisitarien datuak
- Marketin eta komunikazio datuak

---

## 2. Atxikipen Printzipioak

### 2.1 Lege Baldintzak

**GDPR Biltegiratze Muga (5(1)(e) artikulua):**
Datu pertsonalak datuen interesdunak identifikatzea ahalbidetzen duen moduan gorde behar dira, datu pertsonalak tratatzen diren helburuetarako beharrezkoa dena baino denbora luzeagoan ez.

**Salbuespenak:**
- Interes publikoko artxibatzea, ikerketa zientifiko edo historikoa, edo helburu estatistikoak (babes neurri egokiekin)
- Legeak eskatzen duenean atxikipen luzeagoa

### 2.2 Atxikipen Irizpideak

Atxikipen epeak honako hauetan oinarrituta zehazten dira:

1. **Helburua:** Zenbat denbora behar dira datuak jatorrizko tratamendu helbururako?
2. **Lege Obligazioa:** Legeak behartzen al gaitu datuak gordetzera?
3. **Muga Epeak:** Zenbat denbora sor daitezke lege erreklamazioak? (preskripzio epeak)
4. **Negozio Beharra:** Ba al dago atxikipenerako negozio arrazoi legitimorik?
5. **Datu Interesdunen Itxaropenak:** Zer itxarongo lukete datuen interesdunek arrazoiz?
6. **Datuen Sentikortasuna:** Datu sentikorragoek justifikazio sendoagoa behar dute atxikipen luzerako

**Oreka Faktoreak:**
- Atxikipen epe laburragoak datu sentikor edo arrisku handikoetarako
- Gutxieneko atxikipena lege obligazioak betetzeko
- Ezabaketa prozedura argiak atxikipen epea amaitzean

### 2.3 Atxikipen Epe Abiarazleak

**Gertaeran Oinarritutako Abiarazleak:**
- Kontratu amaiera
- Kontu itxiera
- Enplegu amaiera
- Eskaera osatzea
- Baimena kentzea
- Zerbitzu amaiera

**Denboran Oinarritutako Abiarazleak:**
- Datu bilketatik epe finkoa
- Azken jardueratik epe finkoa
- Gertaera abiarazletik epe finkoa

### 2.4 Lege Atxikipen Salbuespena (Legal Hold)

**Baliogabetzea:** Datuak prozedura legalen, erregulazio ikerketaren edo auditoriaren menpe badaude, atxikipen epea eten egiten da gaia ebatzi arte (lege atxikipena).

**Prozesua:**
1. Aholkulari juridikoak lege atxikipenaren menpeko datuak identifikatzen ditu
2. ITk atxikipen teknikoa ezartzen du (datuak markatu, ezabaketa desgaitu)
3. Kaltetutako datu jabeak jakinarazten dira
4. Lege atxikipena Aholkulari juridikoaren onarpenarekin soilik kentzen da
5. Atxikipen egutegi arrunta berrezartzen da

---

## 3. Bezero Datuen Atxikipena

### 3.1 Kontu eta Profil Datuak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Abiarazlea | Ezabaketa Metodoa |
|----------------|----------------|-------------------|------------|-------------------|
| **Bezero Kontu Aktiboa** | Kontua ezabatzeko eskatu arte edo 2 urteko jarduerarik eza | Kontratua, Interes Legitimoak | Kontu itxiera edo 2 urte saio-hasierarik gabe | Produkzio datu-basetik ezabaketa fisikoa (Hard delete) |
| **Izena, Emaila, Telefonoa** | 2 urte azken jardueraren ondoren | Kontratua, Interes Legitimoak | Azken erosketa, saio-hasiera edo kontaktua | Ezabaketa fisikoa |
| **Fakturazio/Bidalketa Helbidea** | 7 urte azken eskaeraren ondoren (transakzio erregistroei lotuta) | Lege Obligazioa (zerga/kontabilitatea) | Azken eskaera data | Artxibatuta, gero ezabatuta |
| **Pasahitza (hash-eatua)** | Kontua ezabatu arte | Kontratua | Kontu itxiera | Segurtasunez ezabatuta |
| **Kontu Lehentasunak** | Kontua ezabatu arte edo 2 urte jarduerarik eza | Interes Legitimoak | Kontu itxiera edo jarduerarik eza | Ezabaketa fisikoa |
| **Kontu Inaktiboak** | Automatikoki ezabatzen dira 2 urte saio-hasierarik gabe egon ondoren | Datuen minimizazioa | Azken saio-hasiera data | Ezabaketa script automatizatua |

**Jakinarazpena:** Bezeroei 60 egun lehenago jakinarazten zaie kontu inaktiboak ezabatu baino lehen (ezagutzen den azken helbidera bidalitako email bidez).

**Salbuespena:** Bezeroak bete gabeko betebeharrak baditu (ordaindu gabeko fakturak, itzulketa zain), kontua gorde egingo da ebatzi arte.

### 3.2 Transakzio eta Eskaera Datuak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Lege Erreferentzia | Ezabaketa Metodoa |
|----------------|----------------|-------------------|--------------------|-------------------|
| **Eskaera Xehetasunak** (eskaera IDa, produktuak, kantitateak, prezioak) | **7 urte** | Lege Obligazioa | Zerga Lege Orokorra (29. Art.) | Artxibatuta (sarbide mugatua), gero ezabatuta |
| **Fakturak** | **7 urte** | Lege Obligazioa | Merkataritza Kodea (30. Art.), BEZ Legea | Artxibatuta (papera eta elektronikoa) |
| **Ordainketa Erregistroak** | **7 urte** | Lege Obligazioa | Kontabilitate araudia | Artxibatuta |
| **Bidalketa Informazioa** | 7 urte (eskaerei lotuta) | Lege Obligazioa | Faktura atxikipenari lotuta | Artxibatuta, gero ezabatuta |
| **Itzulketak eta Diru-itzuketak** | 7 urte | Lege Obligazioa, Lege Erreklamazioak | Berme erreklamazioak, kontsumitzaileen babesa | Artxibatuta, gero ezabatuta |
| **Eskaera Komunikazioak** | 3 urte | Lege Erreklamazioak | Bezero gatazkak | Epea amaitzean ezabatuta |

**7 Urteko Araua:** Espainiako legeak kontabilitate eta zerga erregistroak zerga urtea amaitu eta 7 urtez gordetzea eskatzen du (segurtasun marjina gisa, 4 urteko preskripzio epea + ikuskapen epeak).

**Kalkulua:** 2025eko Martxoaren 15ean egindako eskaera batentzat (2025 zerga urtea), atxikipen epea 2032ko Abenduaren 31n amaitzen da (2025 zerga urtea amaitu eta 7 urtera).

**Artxiboa:** Urtebeteren ondoren, eskaera datuak artxibo biltegiratzera mugitzen dira sarbide mugatuarekin (lege/auditoria helburuetarako soilik).

### 3.3 Ordainketa Informazioa

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Oharrak |
|----------------|----------------|-------------------|---------|
| **Kreditu/Zordunketa Txartel Zenbakiak** | **Ez dira gordetzen** | Segurtasun jardunbide egokia | Ordainketa hornitzaileak (Stripe) prozesatzen ditu, inoiz ez dugu txartel zenbaki osoa gordetzen |
| **Txartelaren Azken 4 Digituak** | Kontua ezabatu arte edo 2 urte jarduerarik eza | Interes Legitimoak | Eskaera identifikaziorako soilik |
| **Ordainketa Metodo Mota** | 7 urte (transakzio erregistroei lotuta) | Lege Obligazioa | Kontabilitate erregistroen parte |
| **Ordainketa Transakzio IDa** | 7 urte | Lege Obligazioa | Ordainketa hornitzailearen erregistroekin lotura |
| **PCI DSS Betetzea** | Ez dagokio | N/A | Ez dugu txartel daturik zuzenean kudeatzen (PCI betetzen duen hornitzaileari azpikontratatua) |

**Segurtasuna:** Ordainketa txartelen datuak PCI DSS Level 1 betetzen duen ordainketa prozesatzaileak (Stripe) kudeatzen ditu soilik. Ez dugu txartel zenbaki osoa gordetzen, prozesatzen edo transmititzen.

### 3.4 Bezeroarentzako Arreta eta Laguntza Datuak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Abiarazlea | Ezabaketa Metodoa |
|----------------|----------------|-------------------|------------|-------------------|
| **Laguntza Tiketak** | 3 urte itxi ondoren | Interes Legitimoak, Lege Erreklamazioak | Tiketa itxi data | Ezabaketa fisikoa |
| **Email Komunikazioak** | 3 urte azken komunikaziotik | Interes Legitimoak, Lege Erreklamazioak | Azken email data | Ezabaketa fisikoa |
| **Telefono Dei Grabaketak** | 90 egun | Baimena, Interes Legitimoak | Dei data | Ezabaketa automatizatua |
| **Chat Transkripzioak** | 1 urte | Interes Legitimoak | Chat data | Ezabaketa fisikoa |
| **Kexa Erregistroak** | 5 urte | Lege Erreklamazioak | Kexa data | Ezabaketa fisikoa |

**Arrazoibidea:** 3 urteko atxikipena Espainiako kontsumitzaileen babeserako erreklamazioen preskripzio epearekin bat dator.

**Dei Grabaketak:** Grabaketa egiten bada, bezeroei dei hasieran jakinarazten zaie eta uko egiteko aukera dute. Kalitate bermerako eta prestakuntzarako erabiltzen dira.

---

## 4. Marketin eta Komunikazio Datuak

### 4.1 Marketin Baimena eta Lehentasunak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Abiarazlea | Ezabaketa Metodoa |
|----------------|----------------|-------------------|------------|-------------------|
| **Email Marketin Zerrenda** | Baimena kendu arte edo 2 urte konpromisorik gabe | Baimena | Harpidetza kendu edo 2 urte irekiera/klik gabe | Marketin plataformatik ezabaketa fisikoa |
| **Marketin Baimen Erregistroak** | 3 urte baimena kendu ondoren | Erantzukizuna (baimena lortu zela frogatu) | Baimena kentze data | Ezabaketa fisikoa |
| **Marketin Lehentasunak** | Baimena kendu arte | Baimena | Harpidetza kendu | Ezabaketa fisikoa |
| **Ezabatze Zerrenda (Suppression List)** (harpidetza kendutako emailak) | **Mugagabe** | Interes Legitimoak | N/A | Berriro gehitzea prebenitzeko gordetzen da |
| **Email Kanpaina Historia** | 2 urte | Interes Legitimoak | Kanpaina bidalketa data | Agregatuta, gero ezabatuta |

**Harpidedun Inaktiboak:** Harpidedun batek 2 urtetan emailik ireki edo klikatu ez badu, berriro konprometitzeko kanpaina bat bidaltzen dugu. Erantzunik ez badago, baimena kendutakotzat jotzen da eta datuak ezabatu egiten dira.

**Ezabatze Zerrenda:** Harpidetza kendutako email helbideak betirako gordetzen dira ezabatze zerrendan, inoiz berriro gehituko ez ditugula ziurtatzeko (nahiz eta kontu baterako berriro erregistratu). Email helbidea soilik gordetzen da, beste daturik ez.

### 4.2 Marketin Kanpaina Datuak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Ezabaketa Metodoa |
|----------------|----------------|-------------------|-------------------|
| **Kanpaina Errendimendu Metrikak** | 2 urte | Interes Legitimoak | 2 urteren ondoren ezabatuta |
| **A/B Test Emaitzak** | 1 urte | Interes Legitimoak | Analisia amaitu ondoren ezabatuta |
| **Konpromiso Datu Indibidualak** (irekierak, klikak) | 2 urteren ondoren agregatuta | Interes Legitimoak | Agregatuta (anonimizatuta), datu gordinak ezabatuta |

---

## 5. Langileen Datuen Atxikipena

### 5.1 Egungo Langileak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Ezabaketa Metodoa |
|----------------|----------------|-------------------|-------------------|
| **Langile Fitxategia** (eskaera, CV, eskaintza gutuna, kontratua) | Enplegu iraupena + 4 urte | Lege Obligazioa, Lege Erreklamazioak | Segurtasunez txikituta (papera), ezabatuta (elektronikoa) |
| **Nomina Erregistroak** | Enplegu iraupena + **7 urte** | Lege Obligazioa | Espainiako Lan Legea, Zerga Legea | Artxibatuta |
| **Denbora eta Asistentzia** | Enplegu iraupena + 4 urte | Lege Obligazioa | Espainiako Lan Legea | Artxibatuta, gero ezabatuta |
| **Errendimendu Berrikuspenak** | Enplegu iraupena + 4 urte | Lege Erreklamazioak | Lan gatazkak | Ezabatuta |
| **Diziplina Erregistroak** | Enplegu iraupena + 4 urte | Lege Erreklamazioak | Lan gatazkak | Ezabatuta |
| **Prestakuntza Erregistroak** | Enplegu iraupena + 4 urte | Interes Legitimoak | Gaitasun egiaztapena | Ezabatuta |
| **Osasun eta Segurtasun Erregistroak** | Enplegu iraupena + **40 urte** | Lege Obligazioa | Espainiako osasun eta segurtasun araudiak (latentzia luzeko laneko gaixotasunak) | Epe luzera artxibatuta |

**Arrazoibidea:** Espainiako lan legeak enplegu erregistroak 4 urtez gordetzea eskatzen du amaitu ondoren, balizko lan gatazketarako. Nomina erregistroak 7 urtez gordetzen dira zerga legearen arabera. Osasun/segurtasun erregistroak 40 urtez gordetzen dira laneko gaixotasunen latentzia epe luzeak direla eta.

### 5.2 Langile Ohiak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Abiarazlea | Ezabaketa Metodoa |
|----------------|----------------|-------------------|------------|-------------------|
| **Oinarrizko Enplegu Erregistroak** | 4 urte amaitu ondoren | Lege Erreklamazioak | Amaiera data | Segurtasunez ezabatuta |
| **Nomina eta Zerga Erregistroak** | 7 urte amaitu ondoren | Lege Obligazioa | Zerga urtea + 7 urte | Artxibatuta, gero ezabatuta |
| **Erreferentzia Eskaerak** | 2 urte amaitu ondoren | Interes Legitimoak | Amaiera data | Ezabatuta |
| **Azken Likidazioak** | 7 urte | Lege Obligazioa | Zerga atxikipena | Artxibatuta, gero ezabatuta |
| **Irteera Elkarrizketa Oharrak** | 1 urte | Interes Legitimoak | Amaiera data | Ezabatuta |

**Kalkulu Adibidea:** Langile batek 2025eko Ekainaren 15ean amaitzen du. Oinarrizko erregistroak 2029ko Ekainaren 15era arte gordetzen dira. Nomina erregistroak 2032ko Abenduaren 31ra arte gordetzen dira (2025 zerga urtea amaitu eta 7 urtera).

### 5.3 Lan Eskatzaileak (Kontratatu Gabeak)

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Abiarazlea | Ezabaketa Metodoa |
|----------------|----------------|-------------------|------------|-------------------|
| **CVak eta Eskaera Materialak** | 6 hilabete kontratazio prozesua amaitu ondoren | Baimena, Interes Legitimoak | Kontratazio itxiera data | Segurtasunez txikituta/ezabatuta |
| **Elkarrizketa Oharrak** | 6 hilabete | Interes Legitimoak, Lege Erreklamazioak | Kontratazio itxiera data | Segurtasunez txikituta/ezabatuta |
| **Ebaluazio Emaitzak** | 6 hilabete | Interes Legitimoak, Lege Erreklamazioak | Kontratazio itxiera data | Ezabatuta |
| **Aniztasun Monitorizazio Datuak** | Berehala agregatuta, datu indibidualak ezabatuta | Lege Obligazioa (berdintasun monitorizazioa) | Erabili ondoren berehala | Agregatuta (anonimizatuta) |

**Arrazoibidea:** 6 hilabeteko atxikipenak diskriminazio erreklamazioen aurka defendatzeko aukera ematen digu, datuen minimizazioa errespetatuz.

**Baimena:** Eskatzaileak etorkizuneko postuetarako fitxategian gordetzeko baimena ematen badu, datuak 2 urtera arte gordetzen dira urteko baimen berritzearekin.

---

## 6. Hornitzaile eta Bazkide Datuak

### 6.1 Hornitzaile eta Kontratista Erregistroak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Abiarazlea | Ezabaketa Metodoa |
|----------------|----------------|-------------------|------------|-------------------|
| **Hornitzaile Kontaktu Informazioa** | Harreman iraupena + 2 urte | Kontratua, Interes Legitimoak | Kontratu amaiera data | Ezabatuta |
| **Kontratuak eta Akordioak** | Iraupena + 7 urte | Lege Obligazioa, Lege Erreklamazioak | Kontratu amaiera + kontabilitate atxikipena | Artxibatuta, gero ezabatuta |
| **Fakturak eta Ordainketa Erregistroak** | **7 urte** | Lege Obligazioa | Zerga urtea + 7 urte | Artxibatuta, gero ezabatuta |
| **Erosketa Eskaerak** | 7 urte | Lege Obligazioa | Kontabilitate atxikipena | Artxibatuta, gero ezabatuta |
| **Errendimendu Ebaluazioak** | Iraupena + 2 urte | Interes Legitimoak | Kontratu amaiera | Ezabatuta |
| **Due Diligence Erregistroak** | Iraupena + 3 urte | Lege Erreklamazioak, Betetzea | Kontratu amaiera | Ezabatuta |

**Arrazoibidea:** 7 urteko kontabilitate atxikipena hornitzaile transakzioei aplikatzen zaie. Atxikipen gehigarria kontratu gatazka potentzialek justifikatzen dute (5 urteko preskripzio epea Espainiako Kode Zibilean).

---

## 7. Webgune eta Analitika Datuak

### 7.1 Webgune Erabilera Datuak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Ezabaketa Metodoa |
|----------------|----------------|-------------------|-------------------|
| **Web Zerbitzari Log-ak** (IP helbideak, user agent, bisitatutako orriak) | 1 urte | Interes Legitimoak (segurtasuna, arazketa) | Ezabaketa automatizatua |
| **Analitika Datuak** (Google Analytics, Matomo) | 26 hilabete (gero agregatuta) | Interes Legitimoak, Baimena | Agregatuta (anonimizatuta), datu gordinak ezabatuta |
| **Cookieak** | Ikusi Cookie Politika | Cookie motaren arabera aldatzen da | Ikusi Cookie Politika |
| **Bero-mapak eta Saio Grabaketak** | 6 hilabete | Baimena | Ezabaketa automatizatua |
| **Bilaketa Kontsulta Historia** | 90 egun ondoren agregatuta | Interes Legitimoak | Agregatuta (anonimizatuta) |

**IP Anonimizazioa:** IP helbideak anonimizatzen dira (azken oktetoa maskaratuta) analitikan datu pertsonalen irismena murrizteko.

**Agregazioa:** Atxikipen epearen ondoren, datuak helburu estatistikoetarako agregatzen dira (ezin dira gizabanakoak identifikatu).

### 7.2 Segurtasun eta Auditoria Log-ak

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa | Ezabaketa Metodoa |
|----------------|----------------|-------------------|-------------------|
| **Autentifikazio Log-ak** (saio-hasiera saiakerak, IP helbideak) | 1 urte | Interes Legitimoak (segurtasuna) | Ezabaketa automatizatua |
| **Segurtasun Intzidente Log-ak** | 3 urte | Interes Legitimoak, Lege Erreklamazioak | 3 urteren ondoren ezabatuta |
| **Auditoria Log-ak** (datu pertsonaletarako sarbidea) | 1 urte | Erantzukizuna (GDPR 5(2) Art.) | Ezabaketa automatizatua |
| **Babeskopia Log-ak** | 1 urte | Interes Legitimoak | Ezabaketa automatizatua |
| **Suebaki eta IDS Log-ak** | 1 urte | Interes Legitimoak (segurtasuna) | Ezabaketa automatizatua |

**Salbuespena:** Datu-urraketekin edo segurtasun intzidenteekin lotutako log-ak intzidente ikerketaren iraupenean + 3 urtez gordetzen dira.

---

## 8. Babeskopia Datuen Atxikipena

### 8.1 Babeskopia Estrategia

**Babeskopia Motak:**
- **Eguneroko Inkrementala:** Azken babeskopiatik izandako aldaketak
- **Asteko Osoa:** Datuen argazki osoa
- **Hileko Artxiboa:** Epe luzeko biltegiratzea

**Atxikipena:**
- **Eguneroko Babeskopiak:** 30 egun
- **Asteko Babeskopiak:** 12 aste (3 hilabete)
- **Hileko Babeskopiak:** 12 hilabete
- **Urteko Babeskopiak:** 7 urte (kontabilitate datuetarako soilik)

### 8.2 Datu Pertsonalak Babeskopietan

**Erronka:** Babeskopiek atxikipen egutegiaren arabera ezabatu beharko liratekeen datu pertsonalak izan ditzakete, baina babeskopiak editatzea ez da praktikoa.

**Ikuspegia:**
1. **Produkzio Ezabaketa:** Produkzio sistemetatik datuak ezabatu atxikipen egutegiaren arabera
2. **Babeskopia Atxikipena:** Datuak babeskopietan mantentzen dira babeskopia atxikipen epean (30-90 egun)
3. **Babeskopia Txandakatzea:** Babeskopia zaharrak automatikoki ezabatzen dira, datu zaharkituak kenduz
4. **Atzerapen Onargarria:** Produkzio ezabaketa eta babeskopia ezabaketaren artean 90 egun arteko atzerapena onargarria da negozio jarraitutasun helburuetarako

**Dokumentazioa:** Ezabatutako datuak babeskopietan 90 egun arte iraun dezaketela dokumentatzen dugu eta datuen interesdunei ezabaketa erantzunetan jakinarazten diegu.

**Berreskurapenik Ez:** Babeskopietako ezabatutako datuak ez dira produkziora berreskuratzen negozio jarraitutasun larrialdi batek sistema osoa berreskuratzea eskatzen ez badu behintzat.

---

## 9. Datuen Anonimizazioa eta Pseudonimizazioa

### 9.1 Anonimizazioa

**Definizioa:** Datuak prozesatzea norbanakoak identifikatu ezin izateko moduan (itzulezina).

**Erabilera Kasuak:**
- Analitika eta txostenak atxikipen epetik haratago
- Ikerketa eta estatistikak
- Erregistro historikoak

**Teknikak:**
- Agregazioa (adib., "100 eskaera eginda" banakako eskaera xehetasunen ordez)
- Datu maskaratzea (identifikatzaile zuzenak kenduz)
- Orokortzea (adib., adin tarteak adin zehatzaren ordez)

**GDPR Egoera:** Anonimizatutako datuak jada ez dira datu pertsonalak eta ez daude GDPRren menpe (baina benetan itzulezina izan behar du).

### 9.2 Pseudonimizazioa

**Definizioa:** Datuak prozesatzea norbanakoak identifikatu ezin izateko informazio gehigarririk gabe, zeina bereizita gordetzen den (itzulgarria gakoarekin).

**Erabilera Kasuak:**
- Analitika norbanakoekin lotzeko gaitasunarekin behar denean (adib., bezero IDa izenaren ordez)
- Probak eta garapen inguruneak
- Ikerketa non berriro identifikatzea beharrezkoa izan daitekeen

**Segurtasuna:** Pseudonimizazio gakoak bereizita gordetzen dira sarbide kontrol zorrotzekin.

**GDPR Egoera:** Pseudonimizatutako datuak oraindik datu pertsonalak dira eta GDPRren menpe daude, baina atxikipen epeak luzatu ditzakeen segurtasun neurritzat hartzen da justifikatuta dagoenean.

---

## 10. Ezabaketa Prozedurak

### 10.1 Ezabaketa Metodoak

**Ezabaketa Seguruaren Estandarrak:**
- NIST SP 800-88 jarraibideak jarraitu euskarrien saneamendurako
- Metodo egokia biltegiratze motaren eta sentikortasunaren arabera

| Biltegiratze Mota | Ezabaketa Metodoa | Estandarra |
|-------------------|-------------------|------------|
| **Disko Gogorrak (HDD)** | 3-pasatako gainidazketa (DoD 5220.22-M) edo suntsipen fisikoa | NIST SP 800-88 |
| **Egoera Solidoko Diskoak (SSD)** | ATA Secure Erase edo ezabaketa kriptografikoa (enkriptatze gakoa suntsitu) | NIST SP 800-88 |
| **Datu-base Erregistroak** | Ezabaketa fisikoa (DELETE agindua, ez marka soilik) + vacuum | Datu-base jardunbide egokia |
| **Babeskopia Zintak** | Desmagnetizazioa edo suntsipen fisikoa (txikitzea, erraustea) | NIST SP 800-88 |
| **Paperezko Dokumentuak** | Gurutze-mozketa txikitzea (gutxienez DIN P-4 datu konfidentzialetarako) | ISO 21964 |
| **Hodei Biltegiratzea** | Hornitzaile ezabaketa + egiaztapena | Hodei hornitzaile estandarrak |

**Soft Delete vs. Hard Delete:**
- **Soft Delete:** Erregistroa ezabatuta bezala markatu baina datuak mantendu (EZ da nahikoa GDPR betetzeko)
- **Hard Delete:** Datuak datu-basetik betirako kendu (beharrezkoa atxikipen egutegia betetzeko)

### 10.2 Ezabaketa Egiaztapena

**Prozesua:**
1. **Ezabaketa Eskaera:** Atxikipen epea iraungitzeak, datu interesdunaren eskaerak edo eskuzko berrikuspenak eraginda
2. **Onarpena:** Lege atxikipenik edo salbuespenik ez dagoela egiaztatu
3. **Exekuzioa:** Ezabaketa script/prozedura exekutatu
4. **Egiaztapena:** Datuak sistemetan jada ez daudela baieztatu
5. **Erregistroa:** Zer ezabatu den, noiz, nork eta erabilitako metodoa dokumentatu
6. **Ziurtagiria:** Datu sentikorrentzat, suntsipen ziurtagiria jaulki

**Audit Trail:** Ezabaketa guztiak audit log seguru eta manipulaezinean erregistratzen dira, 3 urtez gordeta.

### 10.3 Ezabaketa Automatizatua

**Prozesu Automatizatuak:**
- Bezero kontu inaktiboak: Scripta hilero exekutatzen da, 2+ urteko jarduerarik gabeko kontuak ezabatzen ditu
- Iraungitako cookieak: Nabigatzailearen ezabaketa automatikoa
- Babeskopia zaharrak: Txandakatze automatizatuak atxikipen epea baino zaharragoak diren babeskopiak ezabatzen ditu
- Segurtasun log-ak: Urtebetera ezabaketa automatizatua

**Eskuzko Berrikuspena Beharrezkoa:**
- Langileen datuak (lege atxikipenik ez dagoela egiaztatu)
- Datu interesdunen ezabatze eskaerak (identitate egiaztapena, lege oinarriaren egiaztapena)
- Etengabeko kontratuei edo lege erreklamazioei lotutako datuak

---

## 11. Salbuespenak eta Luzapenak

### 11.1 Lege Atxikipena (Legal Hold)

**Abiarazlea:** Prozedura legalak, erregulazio ikerketa, auditoria edo balizko auziak

**Prozesua:**
1. Aholkulari juridikoak atxikipenaren menpeko datuak identifikatzen ditu
2. ITk atxikipen teknikoa ezartzen du (ezabaketa desgaitu)
3. Datu jabeak jakinarazten dira
4. Atxikipena arrazoiarekin eta esparruarekin dokumentatzen da
5. Atxikipen aktiboen aldizkako berrikuspena
6. Atxikipena Aholkulari juridikoak soilik askatzen du

**Iraupena:** Lege gaia ebatzi arte + edozein helegite epe

### 11.2 Atxikipen Luzapenak

**Luzapenerako Arrazoiak:**
- Lege betebehar berriak atxikipen luzeagoa eskatzen du
- Etengabeko lege erreklamazioak edo gatazkak
- Erregulazio ikerketa
- Datu interesdunak atxikipen luzeagoa onartzen du
- Interes publikoko artxibatzea, ikerketa zientifiko/historikoa (babes neurriekin)

**Onarpena:** DPOk eta Aholkulari juridikoak onartu behar dituzte atxikipen epe estandarretik haragoko luzapenak.

**Dokumentazioa:** Justifikazioa, atxikipen epe berria eta babes neurriak dokumentatzen dira.

### 11.3 Atxikipen Laburtua (Datu Interesdunan Eskaera)

**Datu Interesdunen Eskubideak:**
- Ezabatzeko eskubideak (17. Art.) ezabaketa eska dezake atxikipen epea amaitu baino lehen
- Mugatzeko eskubideak (18. Art.) tratamendua mugatu dezake atxikipen epean

**Ebaluazioa:** Ezabatze eskaera ebaluatu salbuespenen aurka (lege obligazioa, lege erreklamazioak, etab.).

**Emaitza:**
- **Onartua:** Datuak ezabatu atxikipen epe estandarra baino lehen
- **Ukatua:** Azaldu atxikipen jarraitua eskatzen duen lege obligazioa edo salbuespena

---

## 12. Monitorizazioa eta Betetzea

### 12.1 Atxikipen Egutegi Berrikuspenak

**Urteroko Berrikuspena:**
- DPOk atxikipen egutegi osoa berrikusten du
- Datu mota berrien, lege aldaketen, negozio aldaketen eguneraketa
- Ezabaketa prozesuak behar bezala funtzionatzen dutela egiaztatu

**Ad-Hoc Berrikuspen Abiarazleak:**
- Lege baldintza berriak
- Datu tratamendu jarduera berriak
- Datu-urraketak edo intzidenteak
- AEPD jarraibideen eguneraketak
- Auditoria aurkikuntzak

### 12.2 Betetze Auditoriak

**Barne Auditoriak:**
- Hiruhileko ezabaketa prozesuen ausazko egiaztapenak
- Lagin egiaztapena (adib., datuak egutegiaren arabera ezabatu diren egiaztatu)
- Ezabaketa log-en berrikuspena
- Ezabaketa script automatizatuak probatu

**Kanpo Auditoriak:**
- ISO 27001 auditoriek informazio segurtasun kontrolak egiaztatzen dituzte
- GDPR betetze auditoriek datu atxikipen praktikak egiaztatzen dituzte
- Arau auditoriak (AEPD) ikerketa menpe badaude

### 12.3 Metrikak eta Txostenak

**Jarraitu:**
- Kategoria bakoitzeko ezabatutako erregistro kopurua (hilero)
- Betetze tasa (garaiz ezabatutako datuen %)
- Salbuespenak eta lege atxikipenak (zenbaketa aktiboa)
- Datu interesdunen ezabatze eskaerak (kopurua, batezbesteko denbora betetzeko)
- Ezabaketa erroreak edo hutsegiteak

**Txostenak:**
- Hiruhileko txostena zuzendaritzari
- Urteroko txostena Administrazio Kontseiluari (aplikagarria bada)
- DPO txostena Tratamendu Jardueren Erregistroetarako (ROPA)

---

## 13. Prestakuntza eta Kontzientziazioa

### 13.1 Langileen Prestakuntza

**Langile Guztiak:**
- Oinarrizko kontzientziazioa: Ez gorde datu pertsonalak behar baino denbora gehiagoan
- Nola identifikatu atxikipen egutegiaren menpeko datuak
- Datuen ezabaketa nola eskatu

**Datu Jabeak eta Prozesatzaileak:**
- Beren datu kategorietarako atxikipen egutegiari buruzko prestakuntza zehatza
- Ezabaketa prozedurak nola inplementatu
- Lege atxikipenak nola kudeatu

**IT eta Segurtasun Langileak:**
- Ezabaketa metodo teknikoak
- Ezabaketa script automatizatuen kudeaketa
- Babeskopia txandakatzea eta datuen bizi-zikloa

**Urteroko Freskatzea:** Langile guztiek datu atxikipen printzipioei buruzko urteko prestakuntza osatzen dute.

### 13.2 Baliabideak

**Langileentzat Eskuragarri:**
- Atxikipen egutegiaren laburpena (erreferentzia azkarra)
- Ezabaketa eskaera inprimakiak
- Lege atxikipen jakinarazpen txantiloiak
- Harremanetarako informazioa (DBO, IT, Legala)

---

## 14. Lotutako Dokumentuak

- **Pribatutasun Oharra:** Datuen interesdunei atxikipen epeen berri ematen die
- **Datu Interesdunen Eskubideen Prozedurak:** Ezabaketa eta murrizketa eskaerak
- **Informazioaren Segurtasun Politika:** Datuen bizi-zikloaren kudeaketa
- **Tratamendu Jardueren Erregistroak (ROPA):** Tratamendu jarduera bakoitzerako atxikipena dokumentatzen du
- **DPIA Txantiloia:** Atxikipena eragin ebaluazioetan kontuan hartzen da
- **Negozioaren Jarraitutasun Plana:** Babeskopia atxikipen eta berreskurapen prozedurak

---

## 15. Lege Erreferentziak

### 15.1 Espainiako Lege Atxikipen Baldintzak

**Zerga eta Kontabilitatea:**
- **Zerga Lege Orokorra (Ley General Tributaria - Ley 58/2003):** 7 urteko atxikipena zerga erregistroetarako
- **Merkataritza Kodea (Código de Comercio - 30. Art.):** 6 urteko atxikipena kontabilitate liburu eta erregistroetarako (7 urte estandar seguruagoa da)
- **BEZ Legea:** 7 urte BEZari lotutako erregistroetarako

**Lan eta Enplegua:**
- **Langileen Estatutua:** 4 urte lanarekin lotutako dokumentuetarako
- **Gizarte Segurantza Legea:** 4 urte gizarte segurantza erregistroetarako
- **Osasuna eta Segurtasuna:** 40 urte esposizio erregistroetarako (latentzia luzeko laneko gaixotasunak)

**Beste batzuk:**
- **Kode Zibila:** 5 urte kontratu erreklamazioetarako preskripzio epe orokorra
- **Kontsumitzaileen Babesa:** 3-5 urte kontsumo gatazka erregistroetarako

### 15.2 GDPR eta Datuen Babesa

- **GDPR 5(1)(e) artikulua:** Biltegiratze muga
- **GDPR 17. artikulua:** Ezabatzeko eskubidea (salbuespenak 17(3) artikuluan zerrendatuta)
- **GDPR 30. artikulua:** Tratamendu Jardueren Erregistroak (atxikipen epeak dokumentatuta)
- **DBLO-GDD (3/2018 Lege Organikoa):** Espainiako GDPR inplementazioa

---

## 16. Harremanetarako Informazioa

**Datuen Babeserako Ordezkaria (DBO/DPO):**  
Izena: [DBO Izena]  
Emaila: dpo@zabalagailetak.com  
Telefonoa: +34 XXX XXX XXX

**Atxikipenari Buruzko Galderak:**
- Atxikipen epeak: dpo@zabalagailetak.com
- Ezabaketa eskaerak: dpo@zabalagailetak.com
- Lege atxikipenak: legal@zabalagailetak.com
- Ezabaketa teknikoa: it@zabalagailetak.com

**Ikuskapen Agintaritza:**  
Datuen Babeserako Espainiako Bulegoa (AEPD)  
Webgunea: www.aepd.es  
Telefonoa: +34 901 100 099

---

## Eranskina A: Atxikipen Taula Azkarra

| Datu Kategoria | Atxikipen Epea | Oinarri Juridikoa |
|----------------|----------------|-------------------|
| **Bezero Kontuak** | 2 urte jarduerarik eza | Interes Legitimoak |
| **Eskaera eta Transakzio Erregistroak** | **7 urte** | Lege Obligazioa |
| **Fakturak** | **7 urte** | Lege Obligazioa |
| **Ordainketa Informazioa** | Ez da gordetzen (Stripe-k kudeatzen du) | N/A |
| **Marketin Zerrendak** | Baimena kendu arte edo 2 urte konpromisorik gabe | Baimena |
| **Bezeroarentzako Laguntza** | 3 urte | Interes Legitimoak |
| **Egungo Langile Erregistroak** | Iraupena + 4 urte | Lege Obligazioa |
| **Nomina Erregistroak** | Iraupena + **7 urte** | Lege Obligazioa |
| **Osasun eta Segurtasun Erregistroak** | Iraupena + **40 urte** | Lege Obligazioa |
| **Lan Eskatzaileak (kontratatu gabeak)** | 6 hilabete | Interes Legitimoak |
| **Hornitzaile Fakturak** | **7 urte** | Lege Obligazioa |
| **Web Analitika** | 26 hilabete (gero agregatuta) | Interes Legitimoak |
| **Segurtasun Log-ak** | 1 urte | Interes Legitimoak |
| **Babeskopiak** | 30-90 egun | Interes Legitimoak |

---

## Eranskina B: Ezabaketa Kontrol-zerrenda

**Datu pertsonalak ezabatzean, egiaztatu:**

- [ ] Atxikipen epea iraungita dago
- [ ] Ez dago lege atxikipenik edo etengabeko lege erreklamaziorik
- [ ] Ez dago atxikipen luzeagoa eskatzen duen lege obligaziorik
- [ ] Datu interesdunen eskubideak kontuan hartu dira (ezabatze eskaera bada)
- [ ] Sistema guztiak identifikatu dira (produkzioa, babeskopiak, artxiboak, hirugarrenak)
- [ ] Ezabaketa metodo egokia hautatu da (datuen sentikortasunaren arabera)
- [ ] Ezabaketa sistema guztietan exekutatu da
- [ ] Ezabaketa egiaztatu da (datuak jada ez daude presente)
- [ ] Ezabaketa audit log-ean erregistratu da
- [ ] Suntsipen ziurtagiria jaulki da (beharrezkoa bada)
- [ ] Hirugarrenei ezabatzeko jakinarazi zaie (datuak partekatu baziren)
- [ ] Datu interesdunari jakinarazi zaio (ezabatze eskaera bada)

---

**DATUEN ATXIKIPEN EGUTEGIAREN AMAIERA**

**Dokumentuaren Jabea:** Datuen Babeserako Ordezkaria  
**Azken Berrikuspena:** 2026ko Urtarrilaren 8a  
**Hurrengo Berrikuspena:** 2027ko Urtarrilaren 8a

**© 2026 Zabala Gailetak S.A. Eskubide guztiak erreserbatuta.**