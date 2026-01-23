# Informazio Sailkapen Eskuliburua
# Manual de Clasificación de Información

**Bertsioa:** 1.0  
**Data:** 2026ko urtarrilaren 23a  
**Erakunde:** Zabala Gailetak S.L.  
**Kontrol ISO 27001:** A.5.12 - Informazioaren Sailkapena  
**Kontrol ISO 27001:** A.5.13 - Informazioaren Etiketatzea  
**Egoera:** Indarrean

---

## 1. Xedea eta Eremu

### 1.1 Xedea

Dokumentu honek Zabala Gailetak erakundeko informazio guztien sailkapen sistema definitzen du, bermatu ahal izateko:

- Informazioa behar bezala babestua dago bere balioaren arabera
- Langileek dakite nola kudeatu informazio mota bakoitza
- ISO 27001:2022 kontrolen betetze (A.5.12 eta A.5.13)
- Informazio sentikorren babes egokia GDPR-ren arabera
- Erantzukizunen bereizketa argia informazioaren kudeaketa

### 1.2 Eremu

Eskuliburu hau aplikatu behar da:

- **Informazio elektroniko** guztiei (fitxategiak, datubaseak, emailak, mezuak)
- **Informazio fisiko** guztiei (dokumentuak, inprimakiak, hitzarmenak)
- **Informazio ahozko** garrantzitsuari (billerak, deitak, aurkezpenak)
- **Biltegi multimedia** guztiei (bideoak, audioa, irudiak)

**Eragina duten pertsonak:**
- Langile guztiak (lanean hasi eta 24 ordu lehenago)
- Kanpo-hornitzaileak eta azpikontratistak
- Lanpostuak egiten dituzten pertsonak
- Bisitariak sarbide berezia dutenean

---

## 2. Sailkapen Mailak

### 2.1 Sailkapen Mailak Laburpena

| Maila | Definizio | Kolore Kodea | Adibideak |
|-------|-----------|--------------|-----------|
| **PUBLIKOA** | Informazio publikoki eskuragarria | 🟢 BERDEA | Webgunea, marketting materiala |
| **BARNEKOA** | Informazio ez-sentikorra barneko erabilerako | 🟡 HORIA | Barneko komunikazioak, prozeduren dokumentazioa |
| **KONFIDENTZIALA** | Informazio sentikorra babestu beharrekoa | 🟠 LARANJA | Langilearen datu pertsonalak, finantza txostenak |
| **OSO KONFIDENTZIALA** | Oso garrantzitsua eta sentikorren informazioa | 🔴 GORRIA | Sekretu industrialak, pasahitzak, datu kritikoak |

### 2.2 Sailkapen Maila Bakoitzaren Deskribapen Xehatua

#### 2.2.1 PUBLIKOA (🟢)

**Definizioa:**  
Informazioa publikoki eskuragarria da eta ez du kalterik eragingo erakundeari jendaurrean argitaratzean.

**Ezaugarriak:**
- Ez dauka konfidentialtasunik
- Edozeinek ikus dezake baimenik gabe
- Erakunde kanpoan zabaltzen da edo zabalduko litzateke
- Ez du kalterik eragiten ezagutzen bada

**Adibideak:**
- Erakundearen webguneko edukia
- Marketting materialak eta katalogoak
- Prentsa oharrak eta komunikazio publikoak
- Publikazio zientifikoak eta artikuluak
- Produktuen informazio publikoa
- Erakusteko bideoak eta aurkezpenak

**Babes Neurriak:**
- Ez da enkriptazio behar transmisioan
- Backup arrunta
- Sarbide kontrolik ez

**Mugikortasun:**
- Nahi den lekuan gorde eta partekatu daiteke
- USB, hodei publikoetan, email bidez, etab.

---

#### 2.2.2 BARNEKOA (🟡)

**Definizioa:**  
Erakundearen barneko erabilerako informazioa, ez da sentikorra baina ez da publikoki zabaltzen.

**Ezaugarriak:**
- Ez da publikoa baina ez da oso sentikorra
- Langile guztiek ikus dezakete (baimena badute)
- Kanpora bidaltzen bada, kalte txikia edo ertaina izan daiteke
- Errutinazko negozio-prozesuen informazioa

**Adibideak:**
- Barneko prozeduren manuala (SOP)
- Barneko komunikazioak eta jakinarazpenak
- Langile direktorioa (izenak, telefonoak barnekoak)
- Barne bileraren aktak (ez konfidentzialak)
- Proiektuen plangintza dokumentuak
- Produktuen barne espezifikazioak

**Babes Neurriak:**
- Sarbide kontrola (autentifikazioaren bidez)
- HTTPS bidezko transmisioa
- Backup enkriptatua
- Ezabatzean segurtasunez ezabatu

**Mugikortasun:**
- Erakundearen sistemen barnean gorde behar da
- Hodeian gorde daiteke (enkriptatuta)
- Emailez bidal daiteke barneko helbidera soilik
- USB bat erabiliz gero ere, pasahitzez babestu behar da

**Etiketa Oharra:**
```
---------------------------------------------------------
BARNEKO ERABILPENA SOILIK
Ez zabaldu erakundetik kanpo baimenik gabe
Zabala Gailetak S.L. - Konfidentzialtasun Maila: BARNEKOA
---------------------------------------------------------
```

---

#### 2.2.3 KONFIDENTZIALA (🟠)

**Definizioa:**  
Informazio sentikorra negozio-operazioetarako edo legeak ezartzen duen babes duen informazioa (GDPR PII).

**Ezaugarriak:**
- Babes neurri zorrotzak behar ditu
- Langile baimenduek soilik ikus dezakete
- Kanpora badoa, kalte nabarmena edo larria eragin dezake
- Legez babestua (GDPR, sekrezio industriala)

**Adibideak:**
- **Datu pertsonalak (GDPR):**
  - Langilearen datu pertsonala (NIF, helbidea, soldata)
  - Bezeroaren datu pertsonala
  - Kontratu laboralak
  - Osasun datuak
- **Negozio informazioa:**
  - Aurrekontu eta finantza txostenak
  - Hitzarmen konfidentzialak
  - Hornitzaile kontratuen baldintzak
  - Merkatu azterketa txostenak
  - Produktuen prezio estrategiak

**Babes Neurriak:**
- **Sarbide kontrola zorrotza:** Rolak eta baimenen arabera (RBAC)
- **Enkriptazioa:**
  - Transmisioan: TLS 1.3 gutxienez
  - Gordetakoan: AES-256-GCM
- **Auditoria erregistroa:** Nork, noiz eta zer atzitu zuen
- **Erretentze politika:** GDPR-aren arabera (ez gehiago behar dena baino)
- **Segurtasunezko ezabaketa:** Ezabatu behar denean, kriptografikoki ezabatu

**Mugikortasun:**
- Erakundearen sistemetan soilik gorde behar da
- Hodeian gorde daiteke soilik enkriptatuta
- Emailez ez bidali, segurtasuneko partekatzeko sistema erabiliz (SharePoint, Nextcloud)
- USB erabili behar bada, hardware enkriptazio modulua eduki behar du
- Inprimatzen bada, berehala jaso eta seguru gorde
- Pantailan bistaratzen bada, screen lock 5 minutu inaktibitatearen ondoren

**Etiketa Oharra:**
```
╔═══════════════════════════════════════════════════════╗
║           ⚠️  KONFIDENTZIALA - BABESTUA ⚠️             ║
╠═══════════════════════════════════════════════════════╣
║ Ez kopiatu, inprimatu edo zabaldu baimenik gabe       ║
║ Sarbide baimenduak soilik                             ║
║ Zabala Gailetak S.L. - ISO 27001 / GDPR              ║
╚═══════════════════════════════════════════════════════╝
```

---

#### 2.2.4 OSO KONFIDENTZIALA (🔴)

**Definizioa:**  
Erakundearen informazio kritikoena, gehienezko babesarekin. Kanpora ateratzeak kalte oso larria eragingo luke.

**Ezaugarriak:**
- Gehienezko babes eta kontrol neurriak
- Pertsonek gutxiek soilik ikus dezakete (Need-to-know)
- Kanpora ateratzeak erakundea arriskuan jartzen du
- Estrategia eta lehiakortasun informazioa

**Adibideak:**
- **Sekretu industrialak eta propiedad intelektuala:**
  - Gailuen diseinuaren planek zehaztasunak
  - Fabrikazio prozesu bereziak
  - I+G txosten eta berrikuntzak
  - Patenteak (oraindik publikatu gabeak)
- **Segurtasun informazioa:**
  - Pasahitz hash-ak
  - Enkriptazio gakoak
  - Segurtasun auditoria txosten kritikoak
  - Zaurgarritasun txostenak (konpontzen ez direnean)
- **Estrategia negozioak:**
  - M&A (Erosketak eta bategitea) negoziazioak
  - Negozio plan estrategikoak
  - Prezio eta marjinen estrategia
  - Hornitzaile eta bezero zerrenden konfidetzialak

**Babes Neurriak:**
- **Sarbide kontrola oso zorrotza:**
  - Need-to-know printzipioa (soilik baimenduta)
  - Multi-Factor Authentication (MFA) derrigorrezkoa
  - Sarbide erregistroa betikakoa
- **Enkriptazioa:**
  - Transmisioan: TLS 1.3 + ziurtagiri mutuala
  - Gordetakoan: AES-256-GCM + Hardware Security Module (HSM)
- **Auditoria zorrotza:** Auditatu sarbide guztiak, egunero berrikusi
- **Data Loss Prevention (DLP):** Kanpora bidalketa blokeatu automatikoki
- **Kuarentena:** Informazioa airezko hutsune (air-gap) sistema batetik gorde
- **Erretentze minimoa:** Ezabatu ahalik eta azkarren ez behar denean
- **Suntsiketa segurua:** Kriptografikoki ezabatu edo suntsiketa fisikoa

**Mugikortasun:**
- **Ez da mugi liteke** erakundearen sistemarik seguruenetik kanpo
- **Kanpora bidal ezin da** emailez, USB bidez, hodei publikoetan
- Hodeian: Soilik zerbitzu pribatuetan enkriptazio osoarekin (VPN + enkriptazioa)
- Inprimaketa: Desagertua edo baimenduta segurtasun altuko inprimagailu batean
- Pantailan: Soilik gune seguruetan, pantaila babes filtruak erabiliz
- **Kanpora eraman ezin da** gailu mugikorretara
- Ezabatzean: Gehienezko segurtasunez suntsitu (NIST 800-88 metodoa)

**Etiketa Oharra:**
```
╔═══════════════════════════════════════════════════════╗
║       🔴 OSO KONFIDENTZIALA - MAILA KRITIKOA 🔴       ║
╠═══════════════════════════════════════════════════════╣
║ ⛔ SARBIDE MUG ATUA - BAIMEN BEREZIA BEHAR            ║
║ ⛔ EZ KOPIATU - EZ INPRIMATU - EZ PARTEKATU           ║
║ ⛔ EZ ZABALDU BAIMENIK GABE (ZIGOR PENALA)            ║
║                                                       ║
║ Need-to-Know Printzipioa Aplikatzen Da                ║
║ Zabala Gailetak S.L. - ISO 27001:2022 / GDPR         ║
║ Araua-haustea: Diziplina edo legezko ekintzak        ║
╚═══════════════════════════════════════════════════════╝
```

---

## 3. Sailkapen Prozedura

### 3.1 Sailkapen Prozesua

#### 3.1.1 Sailkatzea Nork Egiten Du?

| Informazio Mota | Sailkatzailea | Berrikusteko Maiztasuna |
|-----------------|---------------|-------------------------|
| Langile datu pertsonalak | Giza Baliabideko Kudeatzailea | Urtean behin |
| Negozio dokumentuak | Dokumentu sortzailea | Dokumentua sortzen denean |
| Finantza txostenak | Finantza Kudeatzailea | Dokumentua sortzen denean |
| Teknologia dokumentuak | IT/Segurtasun Kudeatzailea | 6 hilean behin |
| Proiektuko dokumentuak | Proiektuaren Kudeatzailea | Proiektuaren hasieran |
| Sekretu industrialak | Zuzendaritza Exekutiboa | 3 hilean behin |

#### 3.1.2 Sailkapen Fluxua

```
┌─────────────────────────────────────────────────────────┐
│ 1. INFORMAZIO BERRIA / DOKUMENTUA SORTZEN DA            │
└────────────────────┬────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────┐
│ 2. SAILKAPEN ERABAKI ZUHAITZA ERABILI                   │
│    (Ikus 3.2 Atala)                                     │
└────────────────────┬────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────┐
│ 3. SAILKAPEN MAILA ESLEITU                              │
│    - Publikoa (🟢)                                      │
│    - Barnekoa (🟡)                                      │
│    - Konfidentziala (🟠)                                │
│    - Oso Konfidentziala (🔴)                            │
└────────────────────┬────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────┐
│ 4. ETIKETA JARRI                                        │
│    - Fitxategi digitalak: Metadata edo fitxategi izen   │
│    - Dokumentu fisikoak: Zigilua edo marka             │
│    - Emailak: Gaia eta gorputza markatu                │
└────────────────────┬────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────┐
│ 5. BABES NEURRIAK APLIKATU                              │
│    - Sarbide kontrola konfiguratu                       │
│    - Enkriptazioa aplikatu behar bada                   │
│    - DLP politikak konfiguratu                          │
└────────────────────┬────────────────────────────────────┘
                     │
                     ▼
┌─────────────────────────────────────────────────────────┐
│ 6. AUDITORIA ERREGISTROAN GORDE                         │
│    - Nork sailkatu zuen                                 │
│    - Sailkapen justifikazioa                            │
│    - Data eta ordua                                     │
└─────────────────────────────────────────────────────────┘
```

### 3.2 Sailkapen Erabaki Zuhaitza

Erabili galdera hauek informazioaren sailkapen maila zehazteko:

```
┌─────────────────────────────────────────────────────────┐
│ Galdera 1: Informazioa publikoa da?                     │
│ Publikoki argitaratzen da edo argitara daiteke          │
│ erakundeari kalterik egin gabe?                         │
└────┬──────────────────────────────┬─────────────────────┘
     │ BAI                           │ EZ
     ▼                               ▼
  🟢 PUBLIKOA              ┌───────────────────────────────┐
                          │ Galdera 2: Datu pertsonalak   │
                          │ (GDPR) daude? edo Negozio     │
                          │ sekretuak daude?              │
                          └────┬────────────────────┬─────┘
                               │ BAI                │ EZ
                               ▼                    ▼
                    ┌─────────────────────┐   🟡 BARNEKOA
                    │ Galdera 3:          │
                    │ Informazioa oso     │
                    │ sentikorra da?      │
                    │ Sekretu industriala?│
                    └────┬───────────┬────┘
                         │ BAI       │ EZ
                         ▼           ▼
                  🔴 OSO         🟠 KONFIDENTZIALA
                  KONFIDENTZIALA
```

#### 3.2.1 Galdera Zerrenda Xehatuagoa

**Galdera zerrenda sailkapen oso konfidentziala (🔴) zehazteko:**

- Informazioa sekretu industriala da?
- Pasahitz, enkriptazio gakoak edo ziurtagiri pribatuak daude?
- Erakundearen estrategia edo plan garrantzitsua da?
- Zaurgarritasun kritikoa dokumentatzen du?
- Kanpora ateratzeak lehiakortasun abantaila galduko du?

**BAI bat edo gehiago bada → 🔴 OSO KONFIDENTZIALA**

**Galdera zerrenda sailkapen konfidentziala (🟠) zehazteko:**

- Datu pertsonalak daude (GDPR PII)? (izena, NIF, helbidea, eposta, telefonoa)
- Finantza informazioa da? (soldata, aurrekontua, fakturak)
- Hitzarmen edo kontratua da?
- Informazio sentikorra negoziorako da?
- Kanpora ateratzeak kalte nabarmena eragingo luke?

**BAI bat edo gehiago bada → 🟠 KONFIDENTZIALA**

**Ez bada goiko bi aukeretatik bat:**

- Informazioa barneko erabilerako soilik da? → 🟡 BARNEKOA
- Informazioa publikoki zabaltzen da? → 🟢 PUBLIKOA

---

### 3.3 Sailkapen Adibide Praktikoak

#### Adibide 1: Langilearen Soldata Informazioa

**Informazioa:** Langile baten soldata txostena (izena, NIF, soldata, bankuko kontu zenbakia)

**Prozesua:**
1. Publikoa da? → **EZ** (ez da publikoa)
2. Datu pertsonalak daude? → **BAI** (NIF, bankuko kontua GDPR PII dira)
3. Oso sentikorra da? → **EZ** (ez da sekretu industriala)

**Emaitza:** 🟠 **KONFIDENTZIALA**

**Babes Neurriak:**
- Sarbide kontrola: Soilik Giza Baliabideko langileek eta langile berak
- Enkriptazioa: AES-256-GCM datu-basean gordetakoan
- Auditoria: Sarbide guztiak auditatu
- Partekatzea: Ez bidali emailez, SharePoint enkriptatuan soilik

---

#### Adibide 2: Gailuen Fabrikazio Prozesu Berria

**Informazioa:** Patente eskaria egin gabeko gailu baten fabrikazio prozesu berria

**Prozesua:**
1. Publikoa da? → **EZ** (prozesu berria, ez argitaratu)
2. Datu pertsonalak edo negozio sekretuak? → **BAI** (sekretu industriala)
3. Oso sentikorra da? → **BAI** (lehiakortasun abantaila galdu)

**Emaitza:** 🔴 **OSO KONFIDENTZIALA**

**Babes Neurriak:**
- Sarbide kontrola: Need-to-know soilik (ingeniaritza taldea)
- MFA derrigorrezkoa
- Enkriptazioa: AES-256-GCM + HSM
- DLP: Kanpora bidalketa blokeatu
- Mugikortasuna: Ez eraman erakundetik kanpo
- Auditoria: Sarbide guztiak egunero berrikusi

---

#### Adibide 3: Barneko Komunikazio Bilerako Akta

**Informazioa:** Asteko bileraren akta (proiektuaren egoera eguneraketa, ez datu sentikorra)

**Prozesua:**
1. Publikoa da? → **EZ** (barneko bilerarako)
2. Datu pertsonalak edo negozio sekretuak? → **EZ** (informazio arrunta)
3. Barneko erabilerako soilik? → **BAI**

**Emaitza:** 🟡 **BARNEKOA**

**Babes Neurriak:**
- Sarbide kontrola: Langile guztiek ikus dezakete (autentifikatu)
- Transmisioa: HTTPS bidez
- Partekatzea: Emailez bidali daiteke barneko helbidera
- Backup: Enkriptatua

---

#### Adibide 4: Marketin Katalogoa

**Informazioa:** Produktuen katalogoa publiko bezeroetarako

**Prozesua:**
1. Publikoa da? → **BAI** (publikoki argitaratzen da)

**Emaitza:** 🟢 **PUBLIKOA**

**Babes Neurriak:**
- Sarbide kontrolik ez
- Partekatzea: Nahi den lekuan (webgunea, emaila, USB)
- Backup: Arrunta (ez enkriptatua)

---

## 4. Etiketa Prozedura

### 4.1 Fitxategi Digitalak Etiketatzea

#### 4.1.1 Fitxategi Izenen Arabera

Fitxategi guztiek sailkapen maila izan behar dute fitxategi izenean:

**Formatoa:**
```
[SAILKAPENA]_Dokumentu_Izena_UUUU-HH-EE.luzapena

Adibideak:
[PUBLIKOA]_Produktu_Katalogoa_2026-01-23.pdf
[BARNEKOA]_Bilerako_Akta_2026-01-23.docx
[KONFIDENTZIALA]_Langile_Datuak_2026-01-23.xlsx
[OSO_KONFIDENTZIALA]_Fabrikazio_Prozesua_2026-01-23.pdf
```

#### 4.1.2 Metadataren Arabera

Fitxategi guztiek metadata izan behar dute:

**Windows (NTFS Alternate Data Streams):**
```powershell
Set-Content -Path "fitxategia.pdf" -Stream "Sailkapena" -Value "KONFIDENTZIALA"
```

**Linux (Extended Attributes):**
```bash
setfattr -n user.sailkapena -v "KONFIDENTZIALA" fitxategia.pdf
```

**SharePoint / OneDrive:**
- Metadata zutabe bat sortu: "Sailkapena"
- Balioak: Publikoa, Barnekoa, Konfidentziala, Oso Konfidentziala

#### 4.1.3 Emailak Etiketatzea

Email guztiek sailkapen etiketa izan behar dute:

**Gaiaren formatoa:**
```
[SAILKAPENA] Emailaren gaia

Adibideak:
[PUBLIKOA] Produktu berria merkatura atera da
[BARNEKOA] Asteko bileraren agenda
[KONFIDENTZIALA] Soldata informazioa - 2026ko urtea
[OSO KONFIDENTZIALA] Sekretu industriala - Prozesu berria
```

**Emailaren gorputzean (goiburuan):**
```
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
⚠️  SAILKAPENA: KONFIDENTZIALA
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
Informazio hau konfidentziala da. Hartzaile baimenduak 
soilik. Errorearen bat egonez gero, mesedez ezabatu 
emaila eta jakinarazi bidaltzaileari.
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

[Emailaren edukia hemen]
```

#### 4.1.4 PDF Dokumentuak Etiketatzea (Ur-marka)

PDF dokumentu konfidentzial eta oso konfidentzialek ur-marka izan behar dute:

**Ur-marka konfigurazioa:**
- **Testu:** "KONFIDENTZIALA - Zabala Gailetak S.L."
- **Posizioa:** Diagonal orri erdian
- **Kolorea:** Gorri erdi-gardena (opacity 30%)
- **Letra tamaina:** 72pt
- **Orri guztiak:** BAI

**Ur-marka automatikoa sortzeko (ghostscript erabiliz):**
```bash
gs -dBATCH -dNOPAUSE -sDEVICE=pdfwrite \
   -sOutputFile=output.pdf \
   -c "newpath 200 400 moveto /Helvetica-Bold findfont 72 scalefont setfont \
       0.8 0 0 setrgbcolor (KONFIDENTZIALA) show" \
   -f input.pdf
```

---

### 4.2 Dokumentu Fisikoak Etiketatzea

#### 4.2.1 Zigilua edo Marka

Dokumentu fisiko guztiek zigilua edo marka izan behar dute:

**PUBLIKOA (🟢):** Markatzea ez da derrigorrezkoa

**BARNEKOA (🟡):**
```
┌─────────────────────────────────────┐
│ BARNEKO ERABILPENA SOILIK           │
│ Zabala Gailetak S.L.                │
└─────────────────────────────────────┘
```

**KONFIDENTZIALA (🟠):**
```
╔═════════════════════════════════════╗
║   ⚠️  KONFIDENTZIALA - BABESTUA    ║
║   Ez kopiatu edo zabaldu            ║
║   Zabala Gailetak S.L.              ║
╚═════════════════════════════════════╝
```

**OSO KONFIDENTZIALA (🔴):**
```
╔═════════════════════════════════════╗
║ 🔴 OSO KONFIDENTZIALA - KRITIKOA   ║
║ ⛔ SARBIDE MUGATUA                  ║
║ ⛔ EZ KOPIATU - EZ ZABALDU          ║
║ Zabala Gailetak S.L.                ║
║ Araua-haustea: Diziplina neurriak   ║
╚═════════════════════════════════════╝
```

**Zigilua edo marka kokapena:**
- Goiburuan (erdi gunean)
- Oin-oharrean (erdi gunean)
- Orri bakoitzean

**Zigilua edo marka kolorea:**
- Publikoa: Ez da behar
- Barnekoa: HORIA
- Konfidentziala: LARANJA
- Oso Konfidentziala: GORRIA

---

## 5. Kudeaketa Prozedura

### 5.1 Sailkapenaren Berrikuspena

Sailkapena berrikusi behar da periodikoki:

| Sailkapen Maila | Berrikuste Maiztasuna | Berrikuste Arduraduna |
|-----------------|----------------------|----------------------|
| Publikoa | Ez da behar (salbu edukia aldatzen bada) | Sortzailea |
| Barnekoa | Urtean behin | Sortzailea edo Kudeatzailea |
| Konfidentziala | 6 hilean behin | Kudeatzailea edo DPO |
| Oso Konfidentziala | 3 hilean behin | Zuzendaritza edo CISO |

### 5.2 Sailkapenaren Aldaketa

Sailkapen maila aldatu behar bada:

1. **Justifikazioa:** Zergatik aldatu behar da?
2. **Baimena:** Jatorrizko sailkatzaileak edo goi-mailako kudeatzaileak baimentzen du
3. **Dokumentazioa:** Aldaketa auditoria erregistroan gorde
4. **Etiketa eguneratu:** Etiketa berria jarri
5. **Babes neurriak eguneratu:** Sarbide kontrola eta enkriptazioa aldatu behar bada

**Adibidea:**
```
Aldaketa Erregistroa:
- Dokumentua: Proiektu_X_Plana.docx
- Sailkapen zaharra: BARNEKOA
- Sailkapen berria: KONFIDENTZIALA
- Arrazoia: Datu pertsonalak gehitu dira dokumentura (GDPR)
- Aldaketa egilea: Jon Urrutia (Proiektu Kudeatzailea)
- Data: 2026-01-23
- Baimena: Maite Etxeberria (IT Kudeatzailea)
```

### 5.3 Informazioaren Ezabaketa

Informazioa ezabatu behar denean:

#### 5.3.1 Publikoa eta Barnekoa

- Arrunta ezabaketa (Papelera -> Papelera hustu)
- Ez da beharrezkoa segurtasunezko ezabaketa

#### 5.3.2 Konfidentziala

- **Fitxategi digitalak:**
  - Segurtasunezko ezabaketa tresna erabiliz (shred, sdelete, BleachBit)
  - Komando adibidea (Linux): `shred -vfz -n 3 fitxategia.pdf`
- **Dokumentu fisikoak:**
  - Paperaren zatitzailea erabiliz (cross-cut edo micro-cut)
  - Zatitutako papera ezin da irakurri

#### 5.3.3 Oso Konfidentziala

- **Fitxategi digitalak:**
  - Kriptografikoki ezabatu (NIST 800-88 metodoa)
  - Enkriptazio gakoa ezabatu (ezin da berreskuratu)
  - Datu-basean: `SHRED` edo `cryptsetup luksErase`
- **Dokumentu fisikoak:**
  - Paperaren suntsiketa industriala
  - Suntsiketa ziurtagiria eskatu hornitzaileari
- **Disko gogorra:**
  - Disko osoa ezabatu (NIST 800-88 edo DoD 5220.22-M)
  - Fisikoki suntsitu (demagnetize edo hondatu)

---

## 6. Erabiltzaileen Erantzukizunak

### 6.1 Langile Guztien Erantzukizunak

- **Sailkapena ezagutu:** Sailkapen mailak eta etiketak ezagutu
- **Sailkapena errespetatu:** Etiketen arabera kudeatu informazioa
- **Arau-haustea jakinarazi:** Sailkapen arau-haustea ikusi edo jakiten badu, berehala jakinarazi
- **Prestakuntza:** Urtero prestakuntza jaso informazioaren sailkapenari buruz

### 6.2 Sortzaileen Erantzukizunak

- **Sailkatu dokumentuak:** Dokumentu berria sortzen dutenean, berehala sailkatu
- **Etiketa jarri:** Etiketa egokia jarri fitxategi eta dokumentu guztietan
- **Berrikusi:** Sailkapena periodikoki berrikusi (ikus 5.1)

### 6.3 Kudeatzaileen Erantzukizunak

- **Berrikusi sailkapena:** Taldeko dokumentuen sailkapena berrikusi
- **Baimena eman:** Sailkapen aldaketarako baimena eman
- **Prestakuntza eman:** Taldeko langileei prestakuntza eman

### 6.4 IT eta Segurtasun Taldearen Erantzukizunak

- **Babes neurriak inplementatu:** Enkriptazioa, sarbide kontrola, DLP
- **Auditoria:** Sailkapen arau-hausteak auditatu
- **Laguntza:** Langileak laguntzen dute sailkapen arazoetan

---

## 7. Arau-haustea eta Diziplina Neurriak

### 7.1 Arau-hauste Motak

| Arau-hauste Mota | Adibidea | Larritasuna |
|------------------|----------|-------------|
| **Sailkapen okerra** | Dokumentua sailkapen maila okerrarekin etiketatu | ERTAINA |
| **Etiketa falta** | Dokumentu konfidentziala etiketa gabe utzi | ERTAINA |
| **Babes neurri ez-betetzea** | Konfidentziala USB gorde enkriptatu gabe | ALTUA |
| **Sarbide baimenik gabea** | Oso konfidentziala informazioa atzitu baimenik gabe | OSO ALTUA |
| **Kanpora bidalketa baimenik gabea** | Konfidentziala emailez bidali kanpora | OSO ALTUA |
| **Ezabaketa ez-segurua** | Oso konfidentziala paperak papelera arruntean bota | OSO ALTUA |

### 7.2 Diziplina Neurriak

| Larritasuna | Lehen Aldiz | Bigarren Aldiz | Hirugarren Aldiz |
|-------------|------------|----------------|------------------|
| **ERTAINA** | Ohartarazpena idatzia | Ziurtagiria | Diziplina espedientea |
| **ALTUA** | Ziurtagiria + prestakuntza berriz | Diziplina espedientea | Kaleratzea |
| **OSO ALTUA** | Diziplina espedientea | Kaleratzea + legezko ekintzak | Legezko ekintzak |

### 7.3 Legezko Ondorioak

Sailkapen arau-hauste larriak ondorio legezkoak izan ditzake:

- **GDPR arau-haustea:** Isunak 20 milioi eurora arte edo enpresaren urteko diru-sarrera globalaren %4ra arte
- **Sekretu industrialaren isuria:** Zigor penala (kartzela zigorra) Espainiako Kode Penalaren arabera (278-286 artikuluak)
- **Kontratuzko arau-haustea:** Kalte-ordainak

---

## 8. Txantiloi eta Tresnak

### 8.1 Sailkapen Txantiloia

**Microsoft Word / LibreOffice Writer txantiloia:**

Deskargatu txantiloi hauek:
- `Zabala_Publikoa_Template.dotx`
- `Zabala_Barnekoa_Template.dotx`
- `Zabala_Konfidentziala_Template.dotx`
- `Zabala_Oso_Konfidentziala_Template.dotx`

Txantiloi hauek automatikoki jarri:
- Goiburuan sailkapen etiketa
- Oin-oharrean sailkapen etiketa
- Orri bakoitzean ur-marka (konfidentziala eta oso konfidentziala)

### 8.2 Sailkapen Tresnak

#### 8.2.1 Sailkapen Etiketatzailea (Python Script)

```python
#!/usr/bin/env python3
"""
Zabala Gailetak - Fitxategi Sailkapen Tresna
"""
import os
import sys

SAILKAPENAK = {
    '1': 'PUBLIKOA',
    '2': 'BARNEKOA',
    '3': 'KONFIDENTZIALA',
    '4': 'OSO_KONFIDENTZIALA'
}

def fitxategia_sailkatu(fitxategi_bidea, sailkapena):
    """Fitxategia sailkatu eta izena aldatu"""
    direktorioa = os.path.dirname(fitxategi_bidea)
    fitxategi_izena = os.path.basename(fitxategi_bidea)
    
    # Jada sailkatuta badago, kendu sailkapena
    if fitxategi_izena.startswith('['):
        fitxategi_izena = fitxategi_izena.split(']', 1)[1].strip('_')
    
    # Sailkapen etiketa gehitu
    izen_berria = f"[{sailkapena}]_{fitxategi_izena}"
    bide_berria = os.path.join(direktorioa, izen_berria)
    
    # Izena aldatu
    os.rename(fitxategi_bidea, bide_berria)
    print(f"✓ Sailkatuta: {izen_berria}")
    
    # Metadata gehitu (Linux xattr)
    try:
        os.setxattr(bide_berria, 'user.sailkapena', sailkapena.encode())
        print(f"✓ Metadata gehituta: {sailkapena}")
    except:
        print("⚠ Metadata ezin izan da gehitu (Windows?)")
    
    return bide_berria

def main():
    if len(sys.argv) < 2:
        print("Erabilpena: sailkapena.py <fitxategia>")
        sys.exit(1)
    
    fitxategia = sys.argv[1]
    
    if not os.path.exists(fitxategia):
        print(f"❌ Errorea: Fitxategia ez da aurkitu: {fitxategia}")
        sys.exit(1)
    
    print("\n=== ZABALA GAILETAK - SAILKAPEN TRESNA ===\n")
    print("Aukeratu sailkapen maila:")
    for k, v in SAILKAPENAK.items():
        print(f"  {k}. {v}")
    
    aukera = input("\nSailkapena (1-4): ").strip()
    
    if aukera not in SAILKAPENAK:
        print("❌ Aukera baliogabea")
        sys.exit(1)
    
    sailkapena = SAILKAPENAK[aukera]
    fitxategia_sailkatu(fitxategia, sailkapena)
    
    print("\n✓ Eginda!")

if __name__ == '__main__':
    main()
```

**Erabilpena:**
```bash
python3 sailkapena.py dokumentua.pdf
# Sailkapen maila aukeratu (1-4)
# Fitxategia automatikoki izena aldatzen du: [KONFIDENTZIALA]_dokumentua.pdf
```

#### 8.2.2 Email Etiketa Tresna (Outlook VBA Macro)

```vba
' Outlook VBA Macro - Email sailkapen etiketa gehitzeko
Sub EmailaSailkapenaGehitu()
    Dim objMail As Outlook.MailItem
    Dim sailkapena As String
    Dim etiketa As String
    
    ' Email aktiboa lortu
    Set objMail = Application.ActiveInspector.CurrentItem
    
    ' Sailkapena galdetu
    sailkapena = InputBox("Aukeratu sailkapena:" & vbCrLf & _
                          "1 = PUBLIKOA" & vbCrLf & _
                          "2 = BARNEKOA" & vbCrLf & _
                          "3 = KONFIDENTZIALA" & vbCrLf & _
                          "4 = OSO KONFIDENTZIALA", _
                          "Sailkapen Etiketa")
    
    Select Case sailkapena
        Case "1"
            etiketa = "PUBLIKOA"
        Case "2"
            etiketa = "BARNEKOA"
        Case "3"
            etiketa = "KONFIDENTZIALA"
        Case "4"
            etiketa = "OSO KONFIDENTZIALA"
        Case Else
            MsgBox "Aukera baliogabea", vbCritical
            Exit Sub
    End Select
    
    ' Gaia eguneratu
    If Left(objMail.Subject, 1) <> "[" Then
        objMail.Subject = "[" & etiketa & "] " & objMail.Subject
    End If
    
    ' Gorputza eguneratu (goiburua gehitu)
    Dim goiburua As String
    goiburua = "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━" & vbCrLf & _
               "⚠️  SAILKAPENA: " & etiketa & vbCrLf & _
               "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━" & vbCrLf & _
               "Informazio hau " & LCase(etiketa) & " da. Hartzaile baimenduak soilik." & vbCrLf & _
               "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━" & vbCrLf & vbCrLf
    
    objMail.Body = goiburua & objMail.Body
    
    MsgBox "✓ Sailkapen etiketa gehituta: " & etiketa, vbInformation
End Sub
```

---

## 9. Prestakuntza eta Jabetze

### 9.1 Prestakuntza Programa

Langile guztiek prestakuntza jaso behar dute informazioaren sailkapenari buruz:

| Prestakuntza Mota | Maiztasuna | Iraupena | Arduraduna |
|-------------------|-----------|----------|------------|
| **Sarrera prestakuntza** | Lanean hasi eta 3 egun lehenago | 2 ordu | RRHH + IT |
| **Urteko eguneraketa** | Urtero | 1 ordu | IT / Segurtasun Taldea |
| **Berrikuste prestakuntza** | Arau-hauste ondoren | 2 ordu | Segurtasun Taldea |

**Prestakuntza edukiak:**
- Sailkapen mailak eta ezaugarriak
- Sailkapen erabaki zuhaitza
- Etiketa prozedura (fitxategi digitalak, fisikoak, emailak)
- Babes neurriak sailkapen maila bakoitzeko
- Arau-haustea eta diziplina neurriak
- Adibide praktikoak

### 9.2 Jabetze Ziurtagiria

Prestakuntza ondoren, langile guztiek sinatu behar dute jabetze ziurtagiria:

```
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
INFORMAZIO SAILKAPEN JABETZE ZIURTAGIRIA
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

Nik, _____________________________________ (izena),
NIF: ____________________, honako hau ziurtatzen dut:

☑ Irakurri eta ulertu dut "Informazio Sailkapen Eskuliburua"
☑ Prestakuntza jaso dut informazioaren sailkapenari buruz
☑ Konprometitzen naiz sailkapen politika errespetatzen
☑ Sailkapen arau-hausteak diziplina neurriak izan ditzakeela ulertzen dut
☑ Zalantzarik badut, IT edo Segurtasun Taldeari galdetu behar diodala dakizu

Sinadura: _________________________  Data: ______________

Prestakuntza ematea: ___________________  Data: ______________
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
```

---

## 10. Auditoria eta Betetze

### 10.1 Auditoria Prozedura

Sailkapen betetze periodikoki auditatu behar da:

**Auditoria Maiztasuna:**
- **Barneko auditoria:** Hiruhilean behin
- **Kanpoko auditoria:** Urtean behin (ISO 27001 ziurtagiri auditoria)

**Auditoria Elementuak:**
- Fitxategien sailkapen zuzenena (laginak 100 fitxategi)
- Etiketa zuzenena (fitxategi, email, dokumentu fisikoak)
- Babes neurrien inplementazioa (enkriptazioa, sarbide kontrola)
- Sailkapen berrikuste betetze
- Prestakuntza betetze
- Arau-hauste erregistroa

### 10.2 Auditoria Txantiloia

```markdown
# AUDITORIA TXOSTENA - INFORMAZIO SAILKAPENA

**Data:** 2026-01-23  
**Auditorea:** Jon Urrutia (IT Segurtasun Taldea)  
**Eremu:** Finantza Saila

## 1. Fitxategien Sailkapen Berrikuspena

| Fitxategia | Sailkapena | Etiketa Zuzena? | Oharrak |
|------------|-----------|----------------|---------|
| Soldata_2026.xlsx | KONFIDENTZIALA | ✓ BAI | Zuzen etiketatuta |
| Bilerako_Akta.docx | BARNEKOA | ✗ EZ | Ez du etiketa |
| Aurrekontua_2026.xlsx | KONFIDENTZIALA | ✓ BAI | Zuzen etiketatuta |

**Emaitza:** 2/3 zuzen etiketatuta (66%)

## 2. Babes Neurrien Berrikuspena

| Babes Neurri | Betetze | Oharrak |
|--------------|---------|---------|
| Sarbide kontrola | ✓ BAI | RBAC konfiguratuta |
| Enkriptazioa gordetakoan | ✓ BAI | AES-256 |
| Enkriptazioa transmisioan | ✓ BAI | TLS 1.3 |
| Auditoria erregistroa | ✗ EZ | Ez da auditoria log-ik |

**Emaitza:** 3/4 betetzen (75%)

## 3. Aurkikuntzak eta Gomendioak

### Aurkikuntza 1: Etiketa falta (ERTAINA)
- **Deskribapena:** `Bilerako_Akta.docx` ez du etiketa
- **Arriskua:** Informazioa okerra kudeatu daiteke
- **Gomendio:** Fitxategi etiketa gehitu: [BARNEKOA]_Bilerako_Akta.docx

### Aurkikuntza 2: Auditoria erregistro falta (ALTUA)
- **Deskribapena:** Ez da auditoria log-ik sarbide kontroletarako
- **Arriskua:** Ez da jakingo nork atzitu duen informazioa
- **Gomendio:** Auditoria log-a gaitu database eta file server-etan

## 4. Laburpen

- **Betetze puntuazioa:** 71% (8/11 elementu)
- **Emaitza:** HOBEKUNTZA BEHAR
- **Hurrengo berrikuspena:** 2026-04-23 (3 hilabete)
```

---

## 11. Erreferentzia eta Loturak

### 11.1 ISO 27001:2022 Kontrolak

Eskuliburu hau inplementatzen du kontrola hauek:

- **A.5.12 - Informazioaren Sailkapena:** Informazioa sailkatu behar da babes mailaren arabera
- **A.5.13 - Informazioaren Etiketatzea:** Informazioa etiketatu eta kudeatu behar da sailkapen mailaren arabera
- **A.5.14 - Informazioaren Transferentzia:** Informazioaren transferentzia sailkapen mailaren arabera babestu behar da

### 11.2 GDPR Artikuluak

- **Artikulu 5 - Tratamenduaren Printzipioak:** Datu pertsonalen tratamendua sailkapen egokiarekin babestu behar da
- **Artikulu 32 - Tratamenduaren Segurtasuna:** Babes neurri teknikoak eta antolaketazkoak inplementatu behar dira

### 11.3 Lotutako Dokumentuak

- `Zabala Gailetak/compliance/sgsi/information_security_policy.md` - Segurtasun Politika Orokorra
- `Zabala Gailetak/compliance/gdpr/data_processing_register.md` - Tratamendu Erregistroa
- `Zabala Gailetak/compliance/sgsi/acceptable_use_policy.md` - Erabilpen Politika
- `Zabala Gailetak/security/incidents/sop_incident_response.md` - Intzidenteen Erantzun Prozedura

---

## 12. Berrikuste Historia

| Bertsioa | Data | Aldaketak | Egilea |
|----------|------|-----------|--------|
| 1.0 | 2026-01-23 | Hasierako bertsioa sortuta | OpenCode AI + CISO |

---

## 13. Onespena

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
Zabala Gailetak S.L. - ISO 27001:2022 / GDPR  
Konfidentzialtasun Maila: BARNEKOA
