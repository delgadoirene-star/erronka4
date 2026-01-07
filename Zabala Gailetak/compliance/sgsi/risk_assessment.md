# Arriskuen Ebaluazioa eta Kudeaketa (SGSI) - Zabala Gailetak

## 1. Sarrera

Dokumentu honek Zabala Gailetak enpresaren informazioaren segurtasunerako arriskuen analisia eta kudeaketa jasotzen ditu, ISO 27001 arauarekin bat etorriz.

## 2. Metodologia (MAGERIT / ISO 31000)

Arriskuak identifikatu, aztertu eta ebaluatzeko prozesua.

### Aktiboen Inbentarioa

* Ikus `infrastructure/systems/inventory.txt` eta `infrastructure/ot/machinery_inventory.md`.

## 3. Arriskuen Identifikazioa

| ID | Mehatxua | Aktiboa | Deskribapena |
| :--- | :--- | :--- | :--- |
| R01 | Ransomware erasoa | Zerbitzariak, Datuak | Ziberdelitugileek datuak zifratzea erreskate baten truke. |
| R02 | Zerbitzuaren ukapena (DDoS) | Webgunea | Web zerbitzariaren erabilgarritasuna galtzea trafiko masiboagatik. |
| R03 | Datu pertsonalen ihesa | Datu-baseak | Bezeroen edo langileen datuak baimenik gabe eskuratzea (GDPR). |
| R04 | OT sarera baimenik gabeko sarbidea | PLCak, Makineria | Produkzio-lerroa manipulatzea edo gelditzea. |
| R05 | Hornidura-katearen erasoa | Softwarea | Hirugarrenen softwarearen bidezko erasoa. |

## 4. Arriskuen Analisia eta Ebaluazioa

| ID | Probabilitatea (1-5) | Inpaktua (1-5) | Arrisku Maila (P x I) |
| :--- | :---: | :---: | :---: |
| R01 | 4 | 5 | **20 (Oso Altua)** |
| R02 | 3 | 4 | 12 (Altua) |
| R03 | 2 | 5 | 10 (Ertaina-Altua) |
| R04 | 2 | 5 | 10 (Ertaina-Altua) |
| R05 | 3 | 3 | 9 (Ertaina) |

## 5. Tratamendu Plana

| ID | Estrategia | Neurriak | Arduraduna |
| :--- | :--- | :--- | :--- |
| R01 | Arintzea | Backup 3-2-1, Endpoint Protection, Segmentazioa. | IT Saila |
| R02 | Arintzea | WAF, Anti-DDoS zerbitzua, CDN. | IT Saila |
| R03 | Arintzea | Datuen zifratzea, DLP, Sarbide kontrol zorrotza. | Segurtasun Burua |
| R04 | Saihestea / Arintzea | OT/IT segmentazioa (DMZ), Firewall industrialak. | OT/IT Taldea |
| R05 | Transferitzea | Zibersegurtasun asegurua, Hornitzaileen auditoretzak. | Zuzendaritza |

## 6. Berrikusketa

Arriskuen analisia urtero berrikusiko da edo aldaketa garrantzitsuak daudenean.
