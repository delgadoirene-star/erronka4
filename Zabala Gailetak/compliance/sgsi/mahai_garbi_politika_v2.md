# Mahai Garbi eta Pantaila Garbi Politika
# Clear Desk and Clear Screen Policy

**Bertsioa:** 2.0  
**Data:** 2026ko urtarrilaren 23a  
**Erakunde:** Zabala Gailetak S.L.  
**Kontrol ISO 27001:** A.7.7 - Mahai Garbia eta Pantaila Garbia  
**Egoera:** Indarrean

---

## 1. Xedea eta Eremu

### 1.1 Xedea

Politika honek informazio sentikorra babesteko prozedurak definitzen ditu:
- **Mahai garbi:** Lanpostuetan dokumentu sentikorra ez uztea
- **Pantaila garbi:** Ordenagailu pantailak blokeatzea erabiltzailea kanpo dagoenean
- ISO 27001:2022 kontrolen (A.7.7) betetze
- Informazio fugak eta sarbide baimenik gabea prebenitzea

### 1.2 Eremu

Politika hau aplikatu behar da:
- **Langile guztiei:** Bulegoko langileetan lan egiten duten guztiak
- **Kanpo-langileak:** Aldi baterako langileak eta azpikontratistak
- **Bisitariak:** Erakundearen instalazioetan sarbidea dutenean
- **Urruneko langileak:** Etxetik edo kanpotik lan egiten dutenak

**Aplikazio lekuak:**
- Bulegoak
- Laboratorioak
- Fabrika instalazioak
- Bilerak eta jantokia
- Urruneko laneko lekuak

---

## 2. Mahai Garbi Politika

### 2.1 Printzipio Orokorra

**Printzipio nagusia:**  
> "Mahai gainean ez utzi inoiz informazio sentikorra erabilera aktiboan ez dagoenean"

### 2.2 Mahai Garbi Arauak

#### 2.2.1 Egunaren Amaieran (Lanpostutik Irteten Denean)

Langile guztiek mahai garbi utzi behar dute egunaren amaieran:

| Elementua | Ekintza Beharrezkoa |
|-----------|---------------------|
| **Dokumentu fisikoak** | Kajoian edo armairuan giltzapetu gorde |
| **USB gailu eta CD/DVD** | Kajoian giltzapetu edo eraman |
| **Mugikorrak eta tabletak** | Kajoian gorde edo eraman |
| **Gakoek eta txartelak** | Eraman edo kajoian gorde |
| **Post-it eta oharrak** | Konfidentziala bada, giltzapetu |
| **Idazkailua eta arbelak** | Garbitu edo itzuli |
| **Kafe eta elikagaiak** | Garbitegi edo sukaldean utzi |

#### 2.2.2 Aldi Baterako Kanpora Ateratzean

Erabiltzailea aldi baterako kanpora ateratzen denean (biler, jantoki, etab.):

| Iraupena | Ekintza Beharrezkoa |
|----------|---------------------|
| **< 15 minutu** | Pantaila blokeatu (Windows+L edo Ctrl+Alt+L) |
| **15-60 minutu** | Pantaila blokeatu + Dokumentu konfidentzialak gorde |
| **> 1 ordu** | Pantaila blokeatu + Mahai garbi osoa |

#### 2.2.3 Dokumentu Moten Arabera

Dokumentu mota bakoitzak tratamendu bereziak behar ditu:

| Sailkapena | Mahai Gainean Utzi? | Gogoratzeko |
|------------|---------------------|-------------|
| **Publikoa (🟢)** | ✓ BAI | Ez da arazo |
| **Barnekoa (🟡)** | ⚠️ KASU BEREZIETAN | Ikusgai bisitarietatik |
| **Konfidentziala (🟠)** | ✗ EZ | Beti gorde kajoian |
| **Oso Konfidentziala (🔴)** | ✗ ✗ EZ INOIZ | Kajoian giltzapetu |

### 2.3 Gorde Tokiak

#### 2.3.1 Kajoia Pertsonala (Desk Drawer)

Langile guztiek kajoia giltzapetua behar dute:
- **Konfigurazioa:** Kajoia giltzapetuarekin
- **Gakoa:** Erabiltzaileak gorde behar du (ez utzi mahai gainean)
- **Edukia:** Dokumentu konfidentzialak, USB gailuak, NIF fotokopiak, etab.

#### 2.3.2 Armairua Partekatu (Shared Cabinet)

Taldeko dokumentuentzat armairua partekatua:
- **Konfigurazioa:** Armairua giltzapetuarekin edo kode digitalarekin
- **Sarbide:** Taldearen kideek soilik
- **Edukia:** Proiektuaren dokumentuak, hitzarmenak, etab.

#### 2.3.3 Kutxa Forte (Safe)

Oso dokumentu konfidentzialentarako (sekretu industrialak):
- **Kokapena:** Zuzendaritzaren bulegoan edo segurtasun gelan
- **Sarbide:** Need-to-know printzipioa
- **Auditoria:** Sarbide erregistroa mantendu

---

## 3. Pantaila Garbi Politika

### 3.1 Printzipio Orokorra

**Printzipio nagusia:**  
> "Pantaila beti blokeatu behar da erabiltzailea kanpo dagoenean edo inaktibo dagoenean"

### 3.2 Pantaila Blokeo Arauak

#### 3.2.1 Blokeo Automatikoa

Sistema guztiek blokeo automatikoa konfiguratu behar dute:

| Sistema Mota | Blokeo Denbora | Blokeo Metodo |
|--------------|---------------|---------------|
| **Windows 10/11** | 5 minutu | Screen Saver + Pasahitz |
| **macOS** | 5 minutu | Screen Saver + Pasahitz |
| **Linux** | 5 minutu | xscreensaver edo gnome-screensaver |
| **Zerbitzariak** | 10 minutu | SSH timeout edo screen/tmux |

**Windows konfigurazioa (GPO bidez):**
```powershell
# Screen saver konfiguratu
Set-ItemProperty -Path "HKCU:\Control Panel\Desktop" -Name "ScreenSaveActive" -Value 1
Set-ItemProperty -Path "HKCU:\Control Panel\Desktop" -Name "ScreenSaverIsSecure" -Value 1
Set-ItemProperty -Path "HKCU:\Control Panel\Desktop" -Name "ScreenSaveTimeOut" -Value 300
```

#### 3.2.2 Blokeo Manuala

Erabiltzaileak eskuz blokeatu behar du pantaila kanpora ateratzen denean:

| Sistema | Lasterbidea |
|---------|-------------|
| **Windows** | `Windows + L` |
| **macOS** | `Control + Command + Q` |
| **Linux (GNOME)** | `Super + L` edo `Ctrl + Alt + L` |
| **Linux (KDE)** | `Ctrl + Alt + L` |

**Post-it pantailan:**  
Pantaila gainean post-it bat jarri gogorarazteko:
```
┌─────────────────────────┐
│  BLOKEATU PANTAILA      │
│  Windows + L            │
│  (5 minutu kanpo)       │
└─────────────────────────┘
```

#### 3.2.3 Pantaila Babes Gehigarriak

**Pribentzia neurri osagarriak:**

1. **Pantaila filtru pribatutasun (Privacy Screen Filters):**
   - Konfidentziala informazio kudeatzea edo ikustea dutenean erabiltzaileek
   - 60 graduko ikuspegi angelua murriztu
   - Bulegoetan rekomendatua

2. **Pantaila posizionamendua:**
   - Pantailak ez jarri ate edo pasabideei begira
   - Pantailak jarri hormari begira
   - Leihoei begira ez jarri (batetik ikusten badira)

3. **Konferentzia deiak eta bilerak:**
   - Konferentzia bidezko bileretan pantaila partekatzean, itxi leiho guztiak
   - Soilik partekatu beharrezko leihoak
   - Email eta mezularitza aplikazioak itxi

---

## 4. Inprimaketa Politika

### 4.1 Inprimaketaren Segurtasuna

Inprimaketa ere informazio fugaren iturri izan daiteke:

| Ekintza | Arau |
|---------|------|
| **Inprimatu aurretik** | Galdetu: "Benetan behar al dut inprimatu?" |
| **Inprimatu ondoren** | Berehala jaso inprimagailutik (1 minutu barruan) |
| **Inprimaketa errorea** | Paperak zatitu eta paperontzia berezietan bota |
| **Inprimaketa konfidentziala** | Inprimagailu seguruan (PIN kodearekin) inprimatu |

### 4.2 Inprimagailu Segurua (Follow-Me Printing)

Inprimagailu seguru batean konfidentziala inprimatzeko:
1. Dokumentua inprimatu (inprimagailu "Segurua" aukeratu)
2. Inprimagailura joan
3. NFC txartela edo PIN kodea sartu
4. Dokumentua inprimatu (inprimagailu pantailan aukeratu)
5. Berehala jaso inprimaketa

**Konfigurazioa (PaperCut edo eguPrint erabiliz):**
```bash
# Inprimagailu "Follow-Me" konfiguratu
lpadmin -p Secure-Printer -E -v socket://192.168.10.50 \
  -m "follow-me-printing.ppd" \
  -o job-hold-until=indefinite
```

---

## 5. Bisitarien Sarbide Politika

### 5.1 Bisitarien Onarpena

Bisitariak erakundearen instalazioetan sartzean:

| Ekintza | Arduraduna | Noiz |
|---------|-----------|------|
| **Bisitaria erregistratu** | Harrera | Sarreran |
| **Bisitari txartela eman** | Harrera | Sarreran |
| **Lagundailea esleitu** | Bisitaria gonbidatu duenak | Betik |
| **Mahai garbi berrikusi** | Langile guztiak | Bisitaria sartu aurretik |

### 5.2 Bisitarien Motak

| Bisitari Mota | Sarbi de Mailak | Lagundu Beharrezkoa? |
|---------------|-----------------|----------------------|
| **Bezero bisitariak** | Bulegoak publikoak | ⚠️ BAI |
| **Hornitzaile bisitariak** | Almacenak, fabrika | ⚠️ BAI |
| **Auditore kanpokoak** | Bulegoetan guztiak | ⚠️ EZ (baina monitorizatu) |
| **Mantenimentu langileak** | IT gela, zerbitzariak | ⚠️ BAI (IT taldekoa) |

### 5.3 Bisitaria Jakinarazpena

Bisitaria gune batean sartzeko jakinarazpen sistema:
- Email automatikoa bidaltu taldeari: "Bisitaria sartu da zuen gelan"
- Langileek mahai garbi ziurtatu behar dute

---

## 6. Urruneko Laneko Politika

### 6.1 Etxetik Lan Egitea

Urruneko lanean informazio segurtasuna mantentzeko:

| Arau | Deskribapena |
|------|--------------|
| **Gune pribatua** | Lan egiteko gune pribatua etxean (ez egongela, ez sukalde) |
| **Familiarrak** | Familiarek ez dute sarbiderik izango ordenagailu edo dokumentuetara |
| **Pantaila pribatua** | Pantaila ez jarri leihoei begira |
| **Videokonferentzia** | Funts neutrala erabiliz edo blur efektua |
| **Dokumentu fisikoak** | Dokumentu konfidentzialak ez eraman etxera (posible bada) |
| **USB gailuak** | USB gailuak giltzapetu edo eraman betik |

### 6.2 Kafe eta Lan Espazioak Publikoak

Kafe eta lan espazio publikoetan lan egitea:

| Arau | Deskribapena |
|------|--------------|
| **VPN derrigorrezkoa** | Beti VPN erabiliz konektatu |
| **Pantaila pribatutasun filtrua** | Erabiliz pantaila pribatutasun filtrua |
| **Ez utzi ikusi gabea** | Ordenagailua ez utzi inoiz ikusi gabea (kafetera, komuna) |
| **Informazio konfidentziala** | Ez kudeatu informazio oso konfidentziala leku publikoetan |
| **WiFi publikoa** | WiFi publikoa ez erabili VPN gabe |

---

## 7. Betearazpen Politika

### 7.1 Auditoria Prozedura

#### 7.1.1 Auditoria Maiztasuna

| Auditoria Mota | Maiztasuna | Arduraduna |
|----------------|-----------|------------|
| **Auditoria arruntak** | Astean 2 aldiz | Segurtasun Taldea |
| **Auditoria bat-batekoak** | Hilean 1 aldiz | CISO |
| **Auditoria bisitari aurretik** | Bisitaria sartu aurretik | Langile guztiak (auto-auditoria) |

#### 7.1.2 Auditoria Prozesua

**1. Auditoria Prestaketa:**
- Auditoria planaren sortu (zein eremuak, zein orduak)
- Auditoria taldea prestatu (2 lagunak)
- Auditoria check-list inprimatu

**2. Auditoria Exekuzioa:**
- Ibili erakundearen instalazioetan
- Check-list bete lanpostu bakoitzean
- Argazkiak atera (aurpegi blurratuz)
- Oharrak idatzi

**3. Auditoria Txostena:**
- Txosten bete (ikus 7.1.3)
- Txostena bidaldu langile guztiei
- Arau-hausteak langileei jakinarazi

**4. Jarraipena:**
- Arau-hausteak konpondu behar dira 48 orduan
- Berriz auditatu 1 astean

#### 7.1.3 Auditoria Check-List Txantiloia

```markdown
# MAHAI GARBI AUDITORIA CHECK-LIST

**Data:** 2026-01-23  
**Ordua:** 18:00  
**Auditorea:** Jon Urrutia (Segurtasun Taldea)  
**Eremu:** Finantza Saila (2. solairua)

## Lanpostu Zerrenda

| Lanpostua | Erabiltzailea | Mahai Garbi? | Pantaila Blokeatu? | Oharrak |
|-----------|---------------|--------------|-------------------|---------|
| FIN-01 | Maite Etxeberria | ✓ BAI | ✓ BAI | OK |
| FIN-02 | Jon Azpiazu | ✗ EZ | ✓ BAI | Dokumentu gainean |
| FIN-03 | Ane Galdos | ✓ BAI | ✗ EZ | Pantaila blokeatu gabe |
| FIN-04 | Iker Landa | ✓ BAI | ✓ BAI | OK |

## Arau-hausteak

### Arau-haustea 1: Jon Azpiazu (FIN-02)
- **Problema:** Dokumentu konfidentziala mahai gainean (Soldata txostena)
- **Sailkapena:** KONFIDENTZIALA
- **Larritasuna:** ALTUA
- **Ekintza:** Jakinarazi langileari, prestakuntza berreskuratu

### Arau-haustea 2: Ane Galdos (FIN-03)
- **Problema:** Pantaila blokeatu gabe (email irekita)
- **Sailkapena:** BARNEKOA
- **Larritasuna:** ERTAINA
- **Ekintza:** Jakinarazi langileari, ohartarazpena idatzia

## Laburpen

- **Lanpostu auditatu:** 4
- **Betetze puntuazioa:** 50% (2/4 OK)
- **Arau-hauste kopurua:** 2
- **Ekintza beharrezkoak:** Prestakuntza berreskuratu (Jon), Ohartarazpena (Ane)

**Sinadura Auditorea:** Jon Urrutia  
**Data:** 2026-01-23
```

#### 7.1.4 Arau-hauste Gravedadea

| Problema | Larritasuna | Puntuazioa |
|----------|------------|-----------|
| **Dokumentu publikoa mahai gainean** | BAXUA | 1 puntu |
| **Dokumentu barnekoa mahai gainean** | ERTAINA | 3 puntu |
| **Dokumentu konfidentziala mahai gainean** | ALTUA | 5 puntu |
| **Dokumentu oso konfidentziala mahai gainean** | KRITIKOA | 10 puntu |
| **Pantaila blokeatu gabe (< 15 min)** | BAXUA | 1 puntu |
| **Pantaila blokeatu gabe (> 15 min)** | ERTAINA | 3 puntu |
| **Pantaila blokeatu gabe (> 1 ordu)** | ALTUA | 5 puntu |
| **USB/CD mahai gainean** | ERTAINA | 3 puntu |
| **Pasahitz post-it pantailan** | KRITIKOA | 10 puntu |

**Betetze puntuazioa kalkulatzea:**
```
Betetze % = 100 - (Arau-hauste puntuazio totala / Lanpostu kopurua)

Adibidea: 4 lanpostu, 8 puntu totalak
Betetze % = 100 - (8 / 4) = 100 - 2 = 98%
```

### 7.2 Diziplina Neurriak

#### 7.2.1 Diziplina Prozesua

| Aldiz | Larritasuna BAXUA/ERTAINA | Larritasuna ALTUA | Larritasuna KRITIKOA |
|-------|---------------------------|-------------------|----------------------|
| **1. aldiz** | Ohartarazpena ahozko | Ohartarazpena idatzia | Ziurtagiria + prestakuntza |
| **2. aldiz** | Ohartarazpena idatzia | Ziurtagiria + prestakuntza | Diziplina espedientea |
| **3. aldiz** | Ziurtagiria | Diziplina espedientea | Kaleratzea |
| **4. aldiz** | Diziplina espedientea | Kaleratzea | - |

#### 7.2.2 Ohartarazpen Idatzia Txantiloia

```markdown
# OHARTARAZPEN IDATZIA - MAHAI GARBI POLITIKA ARAU-HAUSTEA

**Data:** 2026-01-23  
**Hartzailea:** Jon Azpiazu (Finantza Saila)  
**Igorlea:** Maite Etxeberria (IT Kudeatzailea)

## Arau-hauste Deskribapena

Data: 2026-01-23, Ordua: 18:00  
Kokapena: FIN-02 lanpostua

Auditoria bat-bateko batean aurkitu zen hurrengo arau-haustea:

- **Problema:** Dokumentu konfidentziala mahai gainean utzi (Soldata txostena 2026)
- **Politika araua:** Dokumentu konfidentzialak kajoian gorde behar dira egunaren amaieran
- **Larritasuna:** ALTUA
- **Arau-hauste aldiak:** 2. aldiz (lehenengo ohartarazpena: 2025-12-15)

## Ekintza Beharrezkoa

Dokumentu hau jasotzean, honako hau egin behar duzu:
1. Prestakuntza berreskuratzea "Mahai Garbi Politika" gai honetan (2 ordu)
2. Kajoian giltzapetuaren gakoa egiaztatu
3. Ziurtagiri bat sinatu politika ulertu duzula

Prestakuntza plangintza: 2026-01-30 (hurrengo astea)

## Ondorio

Arau-hauste bat gehiago egonez gero (3. aldiz), diziplina espedientea irekiko da.

**Sinadura Kudeatzailea:** Maite Etxeberria  
**Data:** 2026-01-23

**Sinadura Hartzailea:** ______________________  
**Data:** ____________
```

---

## 8. Prestakuntza Programa

### 8.1 Prestakuntza Curriculum

**Prestakuntza izenburua:** "Mahai Garbi eta Pantaila Garbi Politika"  
**Iraupena:** 45 minutu  
**Maiztasuna:** Sarrera prestakuntza + urteko eguneraketa

**Prestakuntza edukiak:**

1. **Sarrera (5 min)**
   - Zergatik garrantzitsua da mahai garbi eta pantaila garbi?
   - ISO 27001 eta GDPR betebehar orokorra

2. **Mahai Garbi Arauak (15 min)**
   - Mahai garbi printzipioa
   - Dokumentu mota bakoitzaren tratamendua
   - Gorde tokiak (kajoia, armairua, kutxa forte)
   - Praktika: Mahai garbi simulazioa

3. **Pantaila Garbi Arauak (10 min)**
   - Pantaila blokeo automatikoa eta manuala
   - Lasterbideak (Windows+L, Ctrl+Alt+L)
   - Pantaila babes gehigarriak
   - Praktika: Pantaila blokeatu eta desblokeatu

4. **Kasuen Azterketa (10 min)**
   - Kasu erreala 1: Dokumentu konfidentziala mahai gainean
   - Kasu erreala 2: Pantaila blokeatu gabe 30 minutu
   - Kasu erreala 3: Bisitariak sartu eta mahai ez garbi

5. **Auditoria eta Diziplina (5 min)**
   - Auditoria prozedura
   - Diziplina neurriak
   - Nola jakinarazi arau-haustea

**Prestakuntza materiala:**
- Aurkezpen PPT (euskara)
- Ikusgai bideoak (2-3 minutu)
- Praktika gida
- Ziurtagiri txantiloia

### 8.2 Ziurtagiri Txantiloia

```markdown
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
PRESTAKUNTZA ZIURTAGIRIA
Mahai Garbi eta Pantaila Garbi Politika
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Honen bidez ziurtatzen da:

    ___________________________________
           (Langilearen izena)

Prestakuntza jaso duela "Mahai Garbi eta Pantaila Garbi Politika" 
gai honetan, honako eduki hauek landurik:

☑ Mahai garbi printzipioa eta arauak
☑ Pantaila garbi politika eta blokeo prozedurak
☑ Dokumentu mota bakoitzaren tratamendua
☑ Auditoria eta diziplina prozedurak
☑ Praktika eta kasu azterketak

Prestakuntza data: 2026-01-23  
Iraupena: 45 minutu  
Irakaslea: Maite Etxeberria (IT Kudeatzailea)

Langile hau konprometitzen da politika hau errespetatzen eta
betetzen saiatzen.

Sinadura Langilea: ______________________  Data: ____________

Sinadura Irakaslea: _____________________  Data: ____________

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Zabala Gailetak S.L. - ISO 27001:2022
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
```

---

## 9. Jakinarazpen Karpeta

### 9.1 Poster Gogorarazpenerako

#### Poster 1: Mahai Garbi (A3 Tamaina, Bulegoetan)

```
╔═══════════════════════════════════════════════════════╗
║                                                       ║
║          🧹 MAHAI GARBI = INFORMAZIO SEGURUA 🧹       ║
║                                                       ║
╠═══════════════════════════════════════════════════════╣
║                                                       ║
║   Egunaren amaieran edo kanpora ateratzen zarenean:  ║
║                                                       ║
║   ✅ Dokumentu guztiak kajoian gorde                  ║
║   ✅ USB eta CD/DVD gailuak gorde                     ║
║   ✅ Mugikorra eta tableta gorde                      ║
║   ✅ Pantaila blokeatu (Windows + L)                  ║
║   ✅ Gakoak eta txartelak eraman                      ║
║                                                       ║
║   ❌ Ez utzi dokumenturik mahai gainean               ║
║   ❌ Ez utzi pasahitz post-it-etan                    ║
║   ❌ Ez utzi pantaila blokeatu gabe                   ║
║                                                       ║
║                                                       ║
║   📋 Dokumentu Konfidentziala → Kajoia Giltzapetua    ║
║   🔴 Oso Konfidentziala → Kutxa Forte                 ║
║                                                       ║
║   Zalantzarik? IT Taldea: ext. 200                    ║
║                                                       ║
╚═══════════════════════════════════════════════════════╝

      Zabala Gailetak S.L. - ISO 27001:2022
```

#### Poster 2: Pantaila Garbi (A4 Tamaina, Ordenagailu Inguruan)

```
╔══════════════════════════════════════════╗
║                                          ║
║      🔒 BLOKEATU ZURE PANTAILA 🔒        ║
║                                          ║
╠══════════════════════════════════════════╣
║                                          ║
║   Kanpora ateratzen zarenean:            ║
║                                          ║
║   Windows:     Windows + L               ║
║   macOS:       Ctrl + Cmd + Q            ║
║   Linux:       Super + L                 ║
║                                          ║
║   ⏱️ Blokeo automatikoa: 5 minutu        ║
║                                          ║
║   ⚠️ Ez utzi pantaila blokeatu gabe      ║
║                                          ║
╚══════════════════════════════════════════╝

   Zabala Gailetak S.L. - ISO 27001:2022
```

#### Poster 3: Inprimaketa Segurua (A4 Tamaina, Inprimagailu Inguruan)

```
╔══════════════════════════════════════════╗
║                                          ║
║      🖨️ INPRIMAKETA SEGURUA 🖨️            ║
║                                          ║
╠══════════════════════════════════════════╣
║                                          ║
║   Inprimatu aurretik galdetu:            ║
║   "Benetan behar al dut inprimatu?"      ║
║                                          ║
║   Inprimatu ondoren:                     ║
║   ✅ Berehala jaso (1 min barruan)        ║
║   ✅ Egiaztatu kopia guztiak             ║
║                                          ║
║   Dokumentu konfidentziala?              ║
║   📌 Inprimagailu SEGURUA erabili        ║
║      (PIN kodearekin)                    ║
║                                          ║
║   Errore bat? Zatitu paperak! ✂️         ║
║                                          ║
╚══════════════════════════════════════════╝

   Zabala Gailetak S.L. - ISO 27001:2022
```

### 9.2 Sticky Note Gogorarazpena

Ordenagailu pantaila gainean jarri (erabiltzaileei banatu):

```
┌───────────────────────────┐
│  ⚠️ BLOKEATU PANTAILA     │
│                           │
│  Windows + L              │
│  (kanpora ateratzean)     │
│                           │
│  Zabala Gailetak          │
└───────────────────────────┘
```

---

## 10. Teknologia Laguntzak

### 10.1 Blokeo Automatikoa GPO bidez (Windows)

IT taldeak Group Policy Object (GPO) bat konfiguratu behar du blokeo automatikoa betearazteko:

```powershell
# PowerShell script - GPO konfigurazioa
# Blokeo automatikoa 5 minutu

# Screen saver gaitu
$RegPath = "HKCU:\Software\Policies\Microsoft\Windows\Control Panel\Desktop"
If (!(Test-Path $RegPath)) {
    New-Item -Path $RegPath -Force
}

# Screen saver aktibatu
Set-ItemProperty -Path $RegPath -Name "ScreenSaveActive" -Value "1"

# Pasahitz eskatu
Set-ItemProperty -Path $RegPath -Name "ScreenSaverIsSecure" -Value "1"

# 5 minutu (300 segundo)
Set-ItemProperty -Path $RegPath -Name "ScreenSaveTimeOut" -Value "300"

# Screen saver estiloa (blank screen)
Set-ItemProperty -Path $RegPath -Name "SCRNSAVE.EXE" -Value "scrnsave.scr"

Write-Host "✓ Blokeo automatikoa konfiguratu da: 5 minutu"
```

### 10.2 Pantaila Blokeo Monitorizazioa

Script bat sortu auditoria automatikoa egiteko:

```powershell
# PowerShell script - Pantaila blokeo monitorizazioa
# Egiaztatu ea pantailak blokeatu dauden

$computers = Get-ADComputer -Filter * -SearchBase "OU=Workstations,DC=zabalagailetak,DC=local"

foreach ($computer in $computers) {
    $computerName = $computer.Name
    
    # Saioa hasita dago?
    $session = quser /server:$computerName 2>$null
    
    if ($session -match "Active") {
        # Pantaila blokeatu dago?
        $locked = (Get-Process -ComputerName $computerName -Name "LogonUI" -ErrorAction SilentlyContinue)
        
        if ($locked) {
            Write-Host "✓ $computerName - Pantaila blokeatu da"
        } else {
            # Inaktibitarte denbora egiaztatu
            $idleTime = (Get-IdleTime -ComputerName $computerName)
            
            if ($idleTime -gt 300) {
                Write-Warning "⚠️ $computerName - Pantaila EZ blokeatu (inaktibo $idleTime segundo)"
                # Jakinarazpen bat bidali
                Send-AlertEmail -To "security@zabalagailetak.com" -Subject "Pantaila ez blokeatu" -Body "$computerName pantaila ez dago blokeatu $idleTime segundo inaktibo"
            }
        }
    }
}
```

### 10.3 Mahai Garbi Kamera Monitorizazioa (Experimental)

Kamera sistema bat erabiliz mahai garbia automatikoki monitorizatu:

**Teknologia:**
- Kamera IP (CCTV) bulegoetan
- Irudi prozesamendua (OpenCV + Python)
- Dokumentu detekzio algoritmoak

**Pribatutasun oharrak:**
- Kamera hauek ez dute langilearen aurpegiak grabatu
- Soilik mahai gaineko objektuak detektatu
- GDPR betetze beharrezkoa (DPIA egin)

**Adibide kode (Python + OpenCV):**
```python
import cv2
import numpy as np

def mahai_gaineko_objektuak_detektatu(irudi_bidea):
    """Mahai gaineko objektuak detektatu"""
    img = cv2.imread(irudi_bidea)
    gray = cv2.cvtColor(img, cv2.COLOR_BGR2GRAY)
    
    # Edge detection
    edges = cv2.Canny(gray, 50, 150)
    
    # Contour detection
    contours, _ = cv2.findContours(edges, cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)
    
    # Objektu kopurua
    objektu_kopurua = len([c for c in contours if cv2.contourArea(c) > 100])
    
    if objektu_kopurua > 3:
        return False, f"Objektu gehiegi mahai gainean: {objektu_kopurua}"
    else:
        return True, "Mahai garbi"

# Erabilpena
garbi, mezua = mahai_gaineko_objektuak_detektatu("lanpostua.jpg")
print(mezua)
```

---

## 11. FAQ (Maiz Galdetutako Galderak)

### 11.1 Galdera Arruntak

**G1: Zer gertatzen da egunaren amaieran mahai gainean dokumentu publikoak utziz gero?**  
**E1:** Dokumentu publikoak (🟢) mahai gainean utzi daitezke arazorik gabe. Hala ere, mahai garbi mantentzen saiatu behar zara (estetika eta antolaketa).

**G2: Kafetara joaten naiz 5 minutuz. Pantaila blokeatu behar al dut?**  
**E2:** BAI. Edozein iraupen (5 minutu ere) kasuan pantaila blokeatu behar duzu. Lasterbidea: Windows+L.

**G3: Urruneko lanean nabil. Mahai garbi politika aplikatu behar al dut?**  
**E3:** BAI. Etxean lan egiten duzunean ere mahai garbi mantendu behar duzu, bereziki dokumentu konfidentzialak daude eran.

**G4: Dokumentu bat inprimatu dut baina inprimagailua beste solairuan dago. Zer egin?**  
**E4:** Inprimagailura joan berehala (1 minutu barruan). Ezin bazara joan berehala, inprimaketa bertan behera utzi edo inprimagailu hurbil batean inprimatu.

**G5: Bisitariak daude gure gelan. Zer egin behar dut?**  
**E5:** Bisitariak sartu aurretik, mahai garbi ziurtatu. Dokumentu konfidentzialak kajoian gorde eta pantailak blokeatu.

**G6: Kajoiaren gakoa galdu dut. Zer egin?**  
**E6:** Berehala jakinarazi IT taldeari. Gakoa ordezkatu behar da eta kajoia berriz giltzapetu. Bitartean, dokumentu konfidentzialak armairuan partekatu gorde.

**G7: Pantaila blokeo automatikoa 5 minutu luzeegia da. Aldatu ahal al dut?**  
**E7:** EZ. Blokeo denbora GPO bidez konfiguratu da eta ezin da aldatu. 5 minutu da ISO 27001 gomendatutako denbora.

**G8: Arau-hauste bat egin dut lehenengo aldiz. Zer gertatzen da?**  
**E8:** Lehenengo aldiz, ohartarazpena ahozko edo idatzia jasoko duzu, larritasunaren arabera. Ez da diziplina espedienteik irekiko lehenengo aldiz.

**G9: Prestakuntza noiz izango da?**  
**E9:** Sarrera prestakuntza lanean hasi eta 3 egun barruan. Urteko eguneraketa urtero.

**G10: Nork auditatu du gure lanpostuak?**  
**E10:** Segurtasun Taldea (IT) egiten du auditoria arruntak astean 2 aldiz. CISO hilean 1 aldiz auditoria bat-bateko bat egiten du.

---

## 12. Erreferentzia eta Loturak

### 12.1 ISO 27001:2022 Kontrolak

- **A.7.7 - Mahai Garbia eta Pantaila Garbia:** Informazio fisikoa eta digitala babestu behar da sarbide baimenik gabekoa ekiditeko

### 12.2 Lotutako Dokumentuak

- `Zabala Gailetak/compliance/sgsi/sailkapen_eskuliburua.md` - Informazio Sailkapen Eskuliburua
- `Zabala Gailetak/compliance/sgsi/information_security_policy.md` - Segurtasun Politika Orokorra
- `Zabala Gailetak/compliance/sgsi/acceptable_use_policy.md` - Erabilpen Politika

---

## 13. Berrikuste Historia

| Bertsioa | Data | Aldaketak | Egilea |
|----------|------|-----------|--------|
| 1.0 | 2025-06-15 | Hasierako bertsioa | CISO |
| 2.0 | 2026-01-23 | Auditoria prozedura eta betearazpen politika gehitu | OpenCode AI + CISO |

---

## 14. Onespena

**Onartua:**

___________________________  
Jon Azpiazu  
CISO (Informazio Segurtasuneko Buruordea)  
Data: 2026-01-23

___________________________  
Maite Etxeberria  
IT Zuzendaria  
Data: 2026-01-23

___________________________  
Ane Galdos  
Zuzendari Nagusia  
Data: 2026-01-23

---

**Dokumentu amaiera**  
Zabala Gailetak S.L. - ISO 27001:2022  
Konfidentzialtasun Maila: BARNEKOA
