# POP-015: Garapen Segurua (SDLC)

**Helburua:** Segurtasuna softwarearen garapen bizi-ziklo osoan integratzea.
**Arduraduna:** Development Lead

## 1. Diseinua
- Threat Modeling egitea diseinu fasean.
- "Security by Design" printzipioak aplikatu.

## 2. Garapena
- OWASP Top 10 kontuan hartu.
- IDE-an linter-ak eta segurtasun plugin-ak erabili.
- Ez erabili hardcoded kredentzialik.

## 3. Testing (SAST/DAST)
- **SAST:** SonarQube exekutatu commit bakoitzean.
- **DAST:** OWASP ZAP exekutatu staging ingurunean.
- Dependentzian analisia (Snyk/Dependency Check).

## 4. Deployment
- CI/CD pipeline automatizatua.
- Onarpen testak pasatzea derrigorrezkoa.

## 5. Prestakuntza
- Garatzaileek urtean behin garapen seguruko ikastaroa egin behar dute.
