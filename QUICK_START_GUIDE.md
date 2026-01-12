# Zabala Gailetak - Hasierako Gida Azkarra

**Jarri martxan 15 minututan!**

---

## 📋 Aurretiazko Baldintzen Zerrenda

Hasi aurretik, ziurtatu hau daukazula:

- [ ] **Node.js** 18+ instalatuta
- [ ] **Docker** 20+ eta Docker Compose 2.0+
- [ ] **Git** instalatuta
- [ ] 4GB+ RAM eskuragarri
- [ ] 50GB+ disko espazioa
- [ ] Internet konexioa

---

## 🚀 5 Minutuko Hasiera Azkarra

### 1. Errepositorioa Klonatu

```bash
git clone <repository-url>
cd erronkak
```

### 2. Ingurunearen Konfigurazioa

```bash
cd "Zabala Gailetak"
cp .env.example .env
```

Editatu `.env` fitxategia zure ezarpenekin:

```env
NODE_ENV=development
PORT=3000
JWT_SECRET=your-secure-secret-key-here
MONGODB_URI=mongodb://localhost:27017/zabala-gailetak
ALLOWED_ORIGINS=http://localhost:3001,http://localhost:3000
```

### 3. Zerbitzu Guztiak Abiarazi

```bash
# Eraiki eta abiarazi APIa, Datu-basea, Redis, Nginx
docker-compose up -d

# Egiaztatu zerbitzuak martxan daudela
docker-compose ps
```

### 4. Web Aplikazioaren Dependentziak Instalatu

```bash
cd src/web/app
npm install
```

### 5. Aplikazioak Abiarazi

**1. Terminala - API:**
```bash
cd "Zabala Gailetak"
npm run dev
```

**2. Terminala - Web App:**
```bash
cd "Zabala Gailetak/src/web/app"
npm start
```

**3. Terminala - Mobile App (Aukerakoa):**
```bash
cd "Zabala Gailetak/src/mobile"
npm start
```

### 6. Aplikazioetara Sartu

- **API:** http://localhost:3000
- **Web App:** http://localhost:3001
- **Kibana (SIEM):** http://localhost:5601
- **API Health:** http://localhost:3000/api/health

---

## 📱 Aplikazioaren Sarbidea

### Web Aplikazioa

**URL:** http://localhost:3001

**Ezaugarriak:**
- Saio-hasiera erabiltzaile/pasahitzarekin
- MFA egiaztapena
- Produktuen katalogoa
- Eskaerak egitea
- Erabiltzailearen panela

### Mobile Aplikazioa

**Konfigurazioa (Android):**
```bash
cd "Zabala Gailetak/src/mobile"
npm install
npm run android
```

**Konfigurazioa (iOS - macOS bakarrik):**
```bash
cd "Zabala Gailetak/src/mobile"
cd ios && pod install && cd ..
npm run ios
```

### API Endpoint-ak

**Oinarrizko URL:** http://localhost:3000/api

**Eskuragarri dauden Endpoint-ak:**
- `POST /auth/register` - Erabiltzailea erregistratu
- `POST /auth/login` - Saioa hasi
- `POST /auth/mfa/verify` - MFA egiaztatu
- `GET /products` - Produktuak lortu
- `POST /orders` - Eskaera sortu
- `GET /health` - Osasun egiaztapena

---

## 🔐 Lehen Saio-hasiera

### 1. Erabiltzaile Berria Erregistratu

```bash
curl -X POST http://localhost:3000/api/auth/register \
  -H "Content-Type: application/json" \
  -d '{
    "username": "admin",
    "email": "admin@zabala.com",
    "password": "Admin123!"
  }'
```

**Erantzuna:**
```json
{
  "message": "Erabiltzailea ondo sortu da",
  "token": "eyJhbGci...",
  "userId": 1
}
```

### 2. MFA Konfiguratu (Aukerakoa)

**Web App bidez:**
1. Hasi saioa web aplikazioan
2. Joan Panelera (Dashboard)
3. Klikatu "MFA Gaitu" botoian
4. Eskaneatu QR kodea Google Authenticator-ekin

**API bidez:**
```bash
curl -X POST http://localhost:3000/api/auth/mfa/setup \
  -H "Authorization: Bearer YOUR_TOKEN"
```

### 3. Probako Eskaera Sortu

```bash
curl -X POST http://localhost:3000/api/orders \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -d '{
    "productId": 1,
    "quantity": 2,
    "customerEmail": "customer@example.com",
    "customerName": "Test Customer"
  }'
```

---

## 🛠️ Garapen Tresnak

### API Garapena

```bash
cd "Zabala Gailetak"

# Abiarazi auto-reload-ekin
npm run dev

# Probak exekutatu
npm test

# Probak watch moduan exekutatu
npm run test:watch

# Kodea aztertu (Lint)
npm run lint

# Segurtasun auditoria
npm run audit
```

### Web App Garapena

```bash
cd "Zabala Gailetak/src/web/app"

# Garapen zerbitzaria abiarazi
npm start

# Produkziorako eraiki
npm run build

# Kodea aztertu (Lint)
npm run lint
```

### Mobile App Garapena

```bash
cd "Zabala Gailetak/src/mobile"

# Android-en exekutatu
npm run android

# iOS-en exekutatu (macOS bakarrik)
npm run ios

# Probak exekutatu
npm test
```

### Docker Eragiketak

```bash
# Zerbitzu guztiak abiarazi
docker-compose up -d

# Zerbitzu guztiak gelditu
docker-compose down

# Log-ak ikusi
docker-compose logs -f

# Zerbitzuak berrabiarazi
docker-compose restart

# Zerbitzuak berriro eraiki
docker-compose build
```

---

## 📊 Monitorizazioa

### API Osasun Egiaztapena

```bash
curl http://localhost:3000/api/health
```

**Espero den Erantzuna:**
```json
{
  "status": "healthy",
  "timestamp": "2024-01-08T10:00:00Z"
}
```

### Datu-basearen Egoera

```bash
# Egiaztatu MongoDB
docker exec -it zabala-gailetak-mongodb mongosh

# MongoDB shell-ean
db.adminCommand("ping")
```

### Redis Egoera

```bash
# Egiaztatu Redis
docker exec -it zabala-gailetak-redis redis-cli ping

# Espero: PONG
```

### SIEM (Kibana)

**URL:** http://localhost:5601

**Saioa:**
- Erabiltzailea: `elastic`
- Pasahitza: Egiaztatu `.env` fitxategia

---

## 🧪 Probak (Testing)

### Proba Guztiak Exekutatu

```bash
cd "Zabala Gailetak"

# API probak
npm test

# Estaldurarekin (coverage)
npm test -- --coverage
```

### Proba Estaldura Txostena

```bash
# Estaldura txostena sortu
npm test -- --coverage

# Txostena ikusi
open coverage/lcov-report/index.html
```

### Eskuzko Probak

**API Probatu:**
```bash
# Produktuak lortu
curl http://localhost:3000/api/products

# Saioa hasi
curl -X POST http://localhost:3000/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{"username":"admin","password":"Admin123!"}'
```

**Web App Probatu:**
1. Joan http://localhost:3001 helbidera
2. Hasi saioa kredentzialekin
3. Arakatu produktuak
4. Sortu eskaera
5. Egiaztatu panela

---

## 🔧 Arazoen Konponketa

### Ohiko Arazoak

#### 1. Arazoa: Portua Erabiltzen ari da

**Errorea:** `Error: listen EADDRINUSE: address already in use :::3000`

**Konponbidea:**
```bash
# Bilatu 3000 portua erabiltzen duen prozesua
lsof -i :3000

# Hil prozesua
kill -9 <PID>

# Edo aldatu portua .env fitxategian
PORT=3001
```

#### 2. Arazoa: MongoDB Konexioak Huts egin du

**Errorea:** `MongoNetworkError: failed to connect to server`

**Konponbidea:**
```bash
# Egiaztatu MongoDB martxan dagoela
docker-compose ps

# Berrabiarazi MongoDB
docker-compose restart mongodb

# Egiaztatu log-ak
docker-compose logs mongodb
```

#### 3. Arazoa: Docker Build-ek Huts egiten du

**Errorea:** Build-ak huts egiten du dependentzia erroreekin

**Konponbidea:**
```bash
# Garbitu Docker cache-a
docker system prune -a

# Berriro eraiki cache gabe
docker-compose build --no-cache

# Irudi berriak jaitsi
docker-compose pull
```

#### 4. Arazoa: Web App-a ez da Abiarazten

**Errorea:** `Module not found` edo antzekoa

**Konponbidea:**
```bash
cd "Zabala Gailetak/src/web/app"

# Garbitu node_modules
rm -rf node_modules package-lock.json

# Berriro instalatu
npm install

# Garbitu cache-a
npm start -- --reset-cache
```

### Laguntza Lortzea

1. **Egiaztatu Log-ak:**
   ```bash
   docker-compose logs -f
   ```

2. **Egiaztatu Zerbitzuak:**
   ```bash
   docker-compose ps
   ```

3. **Egiaztatu Dokumentazioa:**
   - `PROJECT_DOCUMENTATION.md` - Dokumentazio osoa
   - `API_DOCUMENTATION.md` - API erreferentzia
   - `WEB_APP_GUIDE.md` - Web app gida
   - `MOBILE_APP_GUIDE.md` - Mobile app gida

4. **Berrikusi SOP-ak:**
   - Egiaztatu segurtasun SOP-ak `security/` direktorioan
   - Berrikusi deployment SOP-ak

---

## 📚 Hurrengo Urratsak

### Ikasi Gehiago

1. **Irakurri Dokumentazioa:**
   - Hasi `PROJECT_DOCUMENTATION.md` irakurtzen
   - Berrikusi `API_DOCUMENTATION.md`
   - Egiaztatu aplikazioen gidak

2. **Arakatu Ezaugarriak:**
   - Probatu MFA konfigurazioa
   - Sortu probako eskaerak
   - Berrikusi SIEM panela
   - Probatu segurtasun ezaugarriak

3. **Pertsonalizatu:**
   - Aldatu produktuak
   - Doitu segurtasun ezarpenak
   - Konfiguratu rate limits
   - Ezarri CI/CD

### Garapen Lan-fluxua

```bash
# 1. Sortu feature adarra
git checkout -b feature/nire-ezaugarria

# 2. Aldaketak egin
# Editatu fitxategiak...

# 3. Probatu aldaketak
npm test

# 4. Commit egin
git add .
git commit -m "feat: gehitu nire ezaugarria"

# 5. Push egin remotera
git push origin feature/nire-ezaugarria

# 6. Sortu Pull Request-a
# CI/CD automatikoki exekutatuko da
```

---

## 🎯 Konfigurazio Zerrenda

Hasierako konfigurazioaren ondoren, konfiguratu hauek produkziorako:

### Segurtasuna

- [ ] Aldatu JWT_SECRET
- [ ] Eguneratu MONGODB_URI
- [ ] Konfiguratu ALLOWED_ORIGINS
- [ ] Ezarri SSL/TLS ziurtagiriak
- [ ] Gaitu MFA erabiltzaile guztientzat
- [ ] Konfiguratu rate limits
- [ ] Ezarri SIEM alertak

### Errendimendua

- [ ] Konfiguratu Redis caching-a
- [ ] Ezarri CDN aktibo estatikoetarako
- [ ] Gaitu konpresioa
- [ ] Konfiguratu load balancing
- [ ] Ezarri datu-basearen indizeak

### Monitorizazioa

- [ ] Konfiguratu osasun egiaztapenak
- [ ] Ezarri log agregazioa
- [ ] Konfiguratu alertak
- [ ] Ezarri uptime monitorizazioa
- [ ] Konfiguratu backup jakinarazpenak

---

## 📞 Laguntza

### Dokumentazioa

- **Proiektuaren Dok:** `PROJECT_DOCUMENTATION.md`
- **API Dok:** `API_DOCUMENTATION.md`
- **Web App:** `WEB_APP_GUIDE.md`
- **Mobile App:** `MOBILE_APP_GUIDE.md`
- **Deployment:** `IMPLEMENTATION_SUMMARY.md`

### SOP-ak

- **Web Segurtasuna:** `security/web_hardening_sop.md`
- **Mobile Segurtasuna:** `security/mobile_security_sop.md`
- **Sarea:** `infrastructure/network/network_segmentation_sop.md`
- **Honeypot:** `security/honeypot/honeypot_implementation_sop.md`
- **Intzidenteen Erantzuna:** `security/incidents/sop_incident_response.md`

### Kanpo Baliabideak

- **React Native:** https://reactnative.dev
- **React:** https://react.dev
- **Express.js:** https://expressjs.com
- **MongoDB:** https://www.mongodb.com/docs
- **OWASP:** https://owasp.org

---

## ✅ Egiaztapen Zerrenda

Konfigurazioaren ondoren, egiaztatu:

- [ ] API martxan dagoela http://localhost:3000 helbidean
- [ ] Web app martxan dagoela http://localhost:3001 helbidean
- [ ] MongoDB martxan eta eskuragarri
- [ ] Redis martxan eta eskuragarri
- [ ] Erabiltzaile berria erregistratu daitekeela
- [ ] Kredentzialekin saioa hasi daitekeela
- [ ] Produktuak ikusi daitezkeela
- [ ] Eskaera sortu daitekeela
- [ ] API health check-ek 200 itzultzen duela
- [ ] Docker zerbitzu guztiak martxan daudela
- [ ] Kibana eskuragarri http://localhost:5601 helbidean

---

## 🚀 Prest!

Orain Zabala Gailetak zibersegurtasun sistema guztiz funtzionala duzu martxan lokalean!

**Zer da Hurrengoa?**
1. Arakatu web app-a eta mobile app-a
2. Probatu segurtasun ezaugarriak
3. Berrikusi SIEM panela
4. Irakurri dokumentazio osoa
5. Hasi zure beharretara egokitzen

**Garapen On!** 🎉

---

**Gida Azkarraren Bertsioa:** 1.0  
**Azken Eguneratzea:** 2024-01-08  
**Norentzat:** Zabala Gailetak Proiektu Taldea
