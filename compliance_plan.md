# Zabala Gailetak Compliance Implementation Plan

**Version:** 1.0  
**Date:** January 23, 2026  
**Project:** HR Portal - Complete Compliance Implementation  
**Status:** Implementation Planning Complete

---

## Executive Summary

This plan outlines the complete compliance implementation for Zabala Gailetak's HR Portal project, ensuring full adherence to ISO 27001:2022, GDPR, and IEC 62443 standards. Based on my analysis, the project has:

**Current Status:**
- ✅ **93% ISO 27001 compliance** (87/93 controls) with excellent Basque documentation
- ✅ **Strong GDPR foundation** with privacy notices, DPIA templates, and data processing registers
- ✅ **Core security implementations**: MFA, RBAC, JWT, audit logging, CSRF protection
- ⚠️ **6 partially implemented controls** need completion (DLP, data masking, geo-redundancy, classification)
- ❌ **Code is in Spanish/English** - needs complete translation to Basque

**Implementation Scope:**
1. **Complete documentation gaps** (Priority 1)
2. **Translate all code to Basque** (Priority 1)
3. **Implement missing security controls** (Priority 2)
4. **Add automated compliance validation** (Priority 3)
5. **Create compliance dashboard** (Priority 3)

---

## Detailed Gap Analysis

### 1. Documentation Gaps (Identified)

#### 1.1 ISO 27001 - Missing/Incomplete Documentation

| Control | Status | Missing Elements |
|---------|--------|------------------|
| A.5.12 - Information Classification | ⚠️ Partial | - Complete data classification matrix<br>- Classification marking templates<br>- Classification procedures for new data |
| A.5.13 - Information Labeling | ⚠️ Partial | - Document watermarking procedures<br>- Email classification labels<br>- Physical document marking guidelines |
| A.7.7 - Clear Desk/Screen | ⚠️ Partial | - Audit procedures<br>- Enforcement guidelines<br>- Awareness campaign materials |
| A.8.11 - Data Masking | ⚠️ Partial | - Data masking procedures for all environments<br>- Test data generation guidelines<br>- Pseudonymization rules |
| A.8.12 - DLP | ⚠️ Partial | - Complete DLP policy<br>- DLP implementation guide<br>- DLP monitoring procedures |
| A.8.14 - Redundancy | ⚠️ Partial | - Geographic redundancy architecture<br>- Failover procedures<br>- Disaster recovery testing plan |

#### 1.2 GDPR - Missing Documentation

| Requirement | Status | Missing Elements |
|-------------|--------|------------------|
| Data Protection Training | ❌ Missing | - Training materials in Basque<br>- Training schedule<br>- Assessment/quiz materials |
| Consent Management | ❌ Missing | - Consent recording system documentation<br>- Consent withdrawal procedures<br>- Consent audit procedures |
| Data Portability | ❌ Missing | - Data export format specifications<br>- Export procedures<br>- Testing documentation |
| Legitimate Interest Assessment (LIA) | ❌ Missing | - LIA templates<br>- LIA register<br>- Balancing test procedures |
| Vendor Data Processing Agreements | ⚠️ Partial | - DPA templates in Basque<br>- Vendor assessment checklist<br>- Sub-processor management |

#### 1.3 IEC 62443 - Missing Documentation

| Requirement | Status | Missing Elements |
|-------------|--------|------------------|
| OT Security Zones | ⚠️ Partial | - Complete zone architecture diagrams<br>- Inter-zone communication rules<br>- Zone security level documentation |
| Control System Patch Management | ❌ Missing | - OT-specific patch procedures<br>- Testing protocols for PLC/SCADA<br>- Rollback procedures |
| Industrial Network Monitoring | ⚠️ Partial | - OT-specific SIEM rules<br>- Protocol anomaly detection<br>- Baseline traffic profiles |

---

### 2. Code Translation Gaps

**Current State:** PHP/Kotlin code uses **Spanish/English** for:
- Class names, function names, variable names
- Code comments
- Error messages
- Log messages
- Database column names
- API endpoint names

**Required Translation:** **ALL** code elements must be translated to **Basque (euskara)**

#### 2.1 PHP Backend Translation Scope

| Component | Files | Translation Scope |
|-----------|-------|-------------------|
| Classes | 25 PHP files | Class names, method names, properties, comments |
| Comments | All PHP files | Complete docblock and inline comment translation |
| Variables | All PHP files | All variable names (following euskara naming conventions) |
| Error Messages | All exceptions | User-facing and internal error messages |
| Log Messages | All log calls | Audit log messages and system logs |
| Database | Schema + queries | Table names, column names, stored procedures |
| API Responses | All controllers | JSON response messages and field names |

**Estimated Lines:** ~10,000 lines of PHP code to translate

#### 2.2 Kotlin Android Translation Scope

| Component | Files | Translation Scope |
|-----------|-------|-------------------|
| Classes | 15+ Kotlin files | Class names, function names, properties |
| UI Strings | strings.xml | All user-facing strings |
| Comments | All Kotlin files | Complete comment translation |
| Variables | All Kotlin files | Variable and constant names |
| Error Messages | Exception handling | All error messages |

**Estimated Lines:** ~5,000 lines of Kotlin code to translate

#### 2.3 Database Schema Translation

| Element | Count | Translation Scope |
|---------|-------|-------------------|
| Tables | ~20 tables | All table names |
| Columns | ~150 columns | All column names |
| Constraints | ~30 constraints | Constraint names |
| Indexes | ~25 indexes | Index names |
| Stored Procedures | TBD | Procedure names and comments |

---

### 3. Missing Security Implementations

#### 3.1 Data Loss Prevention (DLP)

**Missing:**
- Email DLP rules implementation
- Web upload filtering
- Endpoint DLP agent deployment
- USB/removable media control
- Screen capture prevention
- Print monitoring

**Required Implementation:**
- DLP policy engine in PHP
- File content scanning module
- Integration with SIEM for alerts

#### 3.2 Data Masking & Anonymization

**Missing:**
- Automated data masking for non-production environments
- PII pseudonymization functions
- Test data generation tools
- Masking verification tests

**Required Implementation:**
- Database masking functions
- API data transformation layer
- Masking configuration management

#### 3.3 Geographic Redundancy

**Missing:**
- Secondary datacenter/region configuration
- Automated failover mechanisms
- Cross-region data replication
- DR testing automation

**Required Implementation:**
- Multi-region PostgreSQL replication
- Redis cluster configuration
- Application layer redundancy
- Automated DR testing scripts

#### 3.4 Encryption Enhancements

**Missing:**
- Field-level encryption for highly sensitive data
- Key rotation automation
- HSM integration for key management
- Encryption key escrow procedures

**Required Implementation:**
- Application-level encryption layer
- Key management service
- Automated key rotation
- Key backup and recovery

---

### 4. Automated Compliance Monitoring

**Missing:**
- Compliance dashboard
- Automated control testing
- Policy compliance scanning
- Compliance reporting automation
- Evidence collection automation

**Required Implementation:**
- Compliance monitoring platform
- Automated test scripts
- Evidence repository
- Compliance reporting dashboard

---

## Implementation Plan - Phased Approach

### Phase 1: Documentation Completion (Weeks 1-4)

**Objective:** Complete all missing compliance documentation in Basque

#### Week 1: ISO 27001 Documentation

**Tasks:**
1. **Data Classification Framework** (2 days)
   - Complete data classification matrix
   - Create classification marking templates
   - Document classification procedures
   - Create classification decision tree

2. **Clear Desk/Screen Policy Enhancement** (1 day)
   - Create audit procedures document
   - Develop enforcement guidelines
   - Create awareness posters in Basque

3. **Data Masking Procedures** (2 days)
   - Complete data masking policy
   - Document masking procedures for each environment
   - Create test data generation guidelines
   - Document pseudonymization rules

**Deliverables:**
- `Zabala Gailetak/compliance/sgsi/sailkapen_eskuliburua.md` (Classification Manual)
- `Zabala Gailetak/compliance/sgsi/mahai_garbi_politika_v2.md`
- `Zabala Gailetak/compliance/sgsi/datu_maskaratze_prozedura.md`

#### Week 2: GDPR Documentation

**Tasks:**
1. **Consent Management System Documentation** (2 days)
   - Consent recording system architecture
   - Consent withdrawal procedures
   - Consent audit trail specifications

2. **Data Portability Documentation** (1 day)
   - Data export format specifications (JSON/CSV)
   - Export procedures and validation
   - Testing and validation procedures

3. **Vendor Data Processing Agreements** (2 days)
   - DPA template in Basque
   - Vendor assessment checklist
   - Sub-processor management procedures

**Deliverables:**
- `Zabala Gailetak/compliance/gdpr/baimena_kudeaketa_sistema.md`
- `Zabala Gailetak/compliance/gdpr/datu_eramangarritasuna.md`
- `Zabala Gailetak/compliance/gdpr/hornitzaile_akordio_txantiloia.md`

#### Week 3: IEC 62443 Industrial Security Documentation

**Tasks:**
1. **OT Security Zones Complete Documentation** (2 days)
   - Complete zone architecture diagrams (using Mermaid/PlantUML)
   - Inter-zone communication rules matrix
   - Zone security level specifications (SL-1 through SL-4)

2. **Control System Patch Management** (2 days)
   - OT-specific patch procedures
   - Testing protocols for PLC/SCADA systems
   - Rollback procedures and emergency patches

3. **Industrial Network Monitoring** (1 day)
   - OT-specific SIEM rules
   - Protocol anomaly detection rules
   - Baseline traffic profile documentation

**Deliverables:**
- `Zabala Gailetak/infrastructure/ot/segurtasun_zonak_arkitektura.md`
- `Zabala Gailetak/infrastructure/ot/adabaki_kudeaketa_ot.md`
- `Zabala Gailetak/security/siem/ot_monitorizazio_arauak.md`

#### Week 4: Training & Awareness Documentation

**Tasks:**
1. **Security Awareness Training Materials** (2 days)
   - Create training presentation in Basque
   - Develop quiz/assessment materials
   - Create awareness posters and infographics

2. **Data Protection Training Program** (2 days)
   - GDPR training curriculum
   - Training schedule and attendance tracking
   - Role-specific training materials

3. **Compliance Dashboard Design** (1 day)
   - Dashboard wireframes
   - Metrics and KPI definitions
   - Reporting requirements

**Deliverables:**
- `Zabala Gailetak/compliance/training/segurtasun_prestakuntza_materiala.md`
- `Zabala Gailetak/compliance/training/gdpr_prestakuntza_programa.md`
- `Zabala Gailetak/compliance/monitoring/betetze_panela_diseinua.md`

---

### Phase 2: Code Translation to Basque (Weeks 5-10)

**Objective:** Translate ALL code (PHP, Kotlin, JavaScript, SQL) to Basque

#### Week 5-6: PHP Backend Translation - Core Classes

**Translation Strategy:**

```php
// BEFORE (Spanish/English):
class AuthController {
    private Database $db;
    private TokenManager $tokenManager;
    
    public function login(Request $request): Response {
        // Validate credentials
        $email = $request->input('email');
        // ... authentication logic
    }
}

// AFTER (Euskara):
class AutentifikazioKontroladorea {
    private DatuBasea $db;
    private TokenKudeatzailea $tokenKudeatzailea;
    
    public function saioa_hasi(Eskaera $eskaera): Erantzuna {
        // Kredentzialak balioztatu
        $eposta = $eskaera->sarrera('eposta');
        // ... autentifikazio logika
    }
}
```

**Tasks:**
1. **Day 1-2: Create Euskara Naming Conventions Document**
   - Define naming patterns for classes (ex: Controller = Kontroladorea)
   - Define naming patterns for methods (ex: getUserData = erabiltzaile_datuak_lortu)
   - Create glossary of common terms (database = datu-basea, user = erabiltzailea)

2. **Day 3-10: Translate Core Classes** (Priority order)
   - `App.php` → `Aplikazioa.php`
   - `Database.php` → `DatuBasea.php`
   - `Request.php` → `Eskaera.php`
   - `Response.php` → `Erantzuna.php`
   - `Router.php` → `Bideratzailea.php`
   - Authentication classes (Auth folder)
   - Controllers (Controllers folder)
   - Models (Models folder)
   - Middleware (Middleware folder)
   - Services (Services folder)

**Deliverables:**
- `Zabala Gailetak/docs/euskara_kodeketa_gida.md` (Euskara Coding Guide)
- Translated PHP classes (25 files)
- Updated autoloader configuration
- Updated composer.json namespaces

#### Week 7-8: Database Schema Translation

**Tasks:**
1. **Create Migration Scripts** (2 days)
   - Generate ALTER TABLE scripts to rename tables
   - Generate ALTER COLUMN scripts to rename columns
   - Create views for backward compatibility (if needed)

2. **Execute Schema Migration** (1 day)
   - Backup production database
   - Execute migration scripts in staging
   - Validate data integrity
   - Execute in production

3. **Update All SQL Queries** (4 days)
   - Update all PHP queries with new table/column names
   - Update stored procedures
   - Update database views
   - Update indexes

**Example Translation:**

```sql
-- BEFORE:
CREATE TABLE employees (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(255) UNIQUE,
    department_id INTEGER,
    hire_date DATE
);

-- AFTER:
CREATE TABLE langileak (
    id SERIAL PRIMARY KEY,
    izena VARCHAR(100),
    abizena VARCHAR(100),
    eposta VARCHAR(255) UNIQUE,
    saila_id INTEGER,
    kontratazio_data DATE
);
```

**Deliverables:**
- Database migration scripts
- Updated schema documentation in Basque
- Backward compatibility views (if required)

#### Week 9-10: Kotlin Android App Translation

**Tasks:**
1. **Translate Kotlin Classes** (3 days)
   - Data models
   - API service interfaces
   - ViewModels
   - Use cases
   - Repositories

2. **Translate UI Strings** (1 day)
   - Update `strings.xml` with Basque translations
   - Create string resource naming conventions

3. **Translate Comments & Documentation** (1 day)
   - All KDoc comments
   - Inline comments
   - README files

**Example Translation:**

```kotlin
// BEFORE:
data class User(
    val id: Int,
    val firstName: String,
    val lastName: String,
    val email: String,
    val role: UserRole
)

// AFTER:
data class Erabiltzailea(
    val id: Int,
    val izena: String,
    val abizena: String,
    val eposta: String,
    val rola: ErabiltzaileRola
)
```

**Deliverables:**
- Translated Kotlin files (15+ files)
- Updated `strings.xml` in Basque
- Updated Gradle configurations

---

### Phase 3: Security Controls Implementation (Weeks 11-16)

**Objective:** Implement the 6 partially implemented ISO 27001 controls

#### Week 11-12: Data Loss Prevention (DLP) - A.8.12

**Tasks:**
1. **DLP Policy Engine Implementation** (3 days)
   - Create DLP configuration framework
   - Implement pattern matching for PII
   - Create content scanning engine
   - Integration with file upload handlers

2. **Email DLP Module** (2 days)
   - Integrate with email server (Postfix/Exim)
   - Create email content scanning rules
   - Implement blocking/quarantine logic

3. **Endpoint DLP Controls** (2 days)
   - USB device control implementation
   - Screen capture prevention
   - Print monitoring integration

4. **DLP SIEM Integration** (1 day)
   - Send DLP events to SIEM
   - Create DLP alert rules
   - Create DLP dashboard in Kibana

**Code Example (PHP DLP Engine):**

```php
/**
 * Datu Galera Prebentzioa (DLP) Motorra
 */
class DGPMotorra {
    private array $ereduak = [];
    
    /**
     * Fitxategi bat eskaneatu eduki sentikorrentzat
     */
    public function fitxategia_eskaneatu(string $fitxategiBidea): DGPEmaitza {
        $edukia = file_get_contents($fitxategiBidea);
        
        // DNI/NIF ereduak
        if (preg_match('/\d{8}[A-Z]/', $edukia)) {
            return new DGPEmaitza(
                blokeatuta: true,
                arrazoia: 'DNI zenbakia detektatu da',
                arriskuMaila: 'ALTUA'
            );
        }
        
        // Kreditu txartel zenbakiak
        if ($this->kreditu_txartela_detektatu($edukia)) {
            return new DGPEmaitza(
                blokeatuta: true,
                arrazoia: 'Kreditu txartel zenbakia detektatu da',
                arriskuMaila: 'KRITIKOA'
            );
        }
        
        return new DGPEmaitza(blokeatuta: false);
    }
    
    private function kreditu_txartela_detektatu(string $testua): bool {
        // Luhn algoritmoa implementatu
        // ...
    }
}
```

**Deliverables:**
- `Zabala Gailetak/hr-portal/src/Segurtasuna/DGPMotorra.php`
- DLP configuration files
- SIEM integration
- DLP documentation in Basque

#### Week 13: Data Masking Implementation - A.8.11

**Tasks:**
1. **Create Data Masking Library** (2 days)
   - PII masking functions (NIF, email, phone)
   - Database-level masking triggers
   - API response masking middleware

2. **Non-Production Data Masking Automation** (2 days)
   - Create automated masking scripts for staging/dev
   - Implement test data generation
   - Validate masked data integrity

3. **Masking Audit Trail** (1 day)
   - Log all masking operations
   - Create masking report
   - Integration with audit log system

**Code Example (PHP Masking):**

```php
/**
 * Datu Maskaratze Zerbitzua
 */
class DatuMaskaratzeZerbitzua {
    /**
     * NIF maskaratu
     * Adibidea: 12345678A → ****5678A
     */
    public function nif_maskaratu(string $nif): string {
        if (strlen($nif) !== 9) {
            return $nif;
        }
        
        return str_repeat('*', 4) . substr($nif, 4);
    }
    
    /**
     * Eposta maskaratu
     * Adibidea: jon.doe@example.com → j***e@example.com
     */
    public function eposta_maskaratu(string $eposta): string {
        [$erabiltzailea, $domeinua] = explode('@', $eposta);
        
        if (strlen($erabiltzailea) <= 2) {
            return $eposta;
        }
        
        $maskaratua = $erabiltzailea[0] . 
                      str_repeat('*', strlen($erabiltzailea) - 2) . 
                      $erabiltzailea[strlen($erabiltzailea) - 1];
        
        return $maskaratua . '@' . $domeinua;
    }
    
    /**
     * Datu-base taula osoa maskaratu
     */
    public function taula_maskaratu(string $taulIzena, array $zutabeak): void {
        // Maskaratzeko SQL sententziak sortu
        // ...
    }
}
```

**Deliverables:**
- `Zabala Gailetak/hr-portal/src/Segurtasuna/DatuMaskaratzeZerbitzua.php`
- Automated masking scripts
- Masking documentation

#### Week 14-15: Geographic Redundancy - A.8.14

**Tasks:**
1. **Multi-Region Architecture Design** (2 days)
   - Design primary + secondary region architecture
   - Define RTO/RPO requirements
   - Create failover decision matrix

2. **PostgreSQL Replication Setup** (2 days)
   - Configure streaming replication
   - Setup automatic failover with Patroni
   - Test replication lag monitoring

3. **Application Layer Redundancy** (2 days)
   - Configure multi-region load balancer
   - Implement health checks
   - Session replication (Redis Cluster)

4. **Automated DR Testing** (2 days)
   - Create DR testing scripts
   - Automate failover testing
   - Document DR procedures

**Architecture Diagram:**

```
┌─────────────────────────────────────────────┐
│          EREMU NAGUSIA (PRIMARY)            │
│          Donostia Datacenter                │
│                                              │
│  ┌──────────────┐  ┌──────────────┐        │
│  │  PostgreSQL  │  │    Redis     │        │
│  │   (Master)   │  │  (Master)    │        │
│  └──────┬───────┘  └──────┬───────┘        │
│         │ Streaming       │ Replication     │
│         │ Replication     │                 │
└─────────┼─────────────────┼─────────────────┘
          │                 │
          │ Async           │ Sync
          │                 │
┌─────────▼─────────────────▼─────────────────┐
│      BIGARREN EREMUA (SECONDARY)            │
│          Bilbo Datacenter                   │
│                                              │
│  ┌──────────────┐  ┌──────────────┐        │
│  │  PostgreSQL  │  │  (Standby)   │        │
│  │              │  │              │        │
│  └──────────────┘  └──────────────┘        │
└─────────────────────────────────────────────┘
```

**Deliverables:**
- Multi-region infrastructure code
- Failover automation scripts
- DR testing documentation
- Monitoring dashboards for replication

#### Week 16: Information Classification & Labeling - A.5.12 & A.5.13

**Tasks:**
1. **Implement Document Classification System** (2 days)
   - Create classification metadata storage
   - Implement document watermarking
   - Email classification headers

2. **Classification Enforcement** (2 days)
   - Access control based on classification
   - Automatic classification for new documents
   - Classification audit trail

3. **User Interface Integration** (1 day)
   - Add classification selector to upload forms
   - Display classification labels in UI
   - Classification filtering in searches

**Code Example (Classification System):**

```php
/**
 * Informazio Sailkapen Sistema
 */
class SailkapenSistema {
    // Sailkapen mailak
    public const PUBLIKOA = 'PUBLIKOA';
    public const BARNEKOA = 'BARNEKOA';
    public const KONFIDENTZIALA = 'KONFIDENTZIALA';
    public const OSO_KONFIDENTZIALA = 'OSO_KONFIDENTZIALA';
    
    /**
     * Dokumentu bati sailkapena esleitu
     */
    public function dokumentua_sailkatu(
        int $dokumentuId, 
        string $sailkapena,
        string $justifikazioa
    ): void {
        // Sailkapena balioztatu
        if (!in_array($sailkapena, $this->sailkapen_balioak())) {
            throw new SailkapenEzegokia("Sailkapen baliogabea: {$sailkapena}");
        }
        
        // Datu-basean gorde
        $this->db->query(
            'UPDATE dokumentuak 
             SET sailkapena = :sailkapena,
                 sailkapen_justifikazioa = :justifikazioa,
                 sailkapen_data = NOW()
             WHERE id = :id',
            [
                'id' => $dokumentuId,
                'sailkapena' => $sailkapena,
                'justifikazioa' => $justifikazioa
            ]
        );
        
        // Auditoria erregistroa sortu
        $this->auditoria->erregistratu(
            'DOKUMENTUA_SAILKATU',
            ['dokumentu_id' => $dokumentuId, 'sailkapena' => $sailkapena]
        );
    }
    
    /**
     * Dokumentuari ur-marka gehitu
     */
    public function ur_marka_gehitu(string $fitxategiBidea, string $sailkapena): void {
        // PDF ur-marka
        // ...
    }
}
```

**Deliverables:**
- Classification system implementation
- Document watermarking module
- Classification UI components
- Classification documentation

---

### Phase 4: Automated Compliance Monitoring (Weeks 17-20)

**Objective:** Implement automated compliance validation and monitoring

#### Week 17-18: Compliance Monitoring Platform

**Tasks:**
1. **Create Compliance Database Schema** (1 day)
   - Controls table
   - Evidence table
   - Audit findings table
   - Compliance scores table

2. **Implement Automated Control Testing** (4 days)
   - Password policy compliance checker
   - Access control audit scripts
   - Encryption verification scripts
   - Log retention compliance checker
   - Backup verification scripts

3. **Evidence Collection Automation** (2 days)
   - Screenshot capture for manual controls
   - Log export automation
   - Configuration snapshot automation

**Code Example (Automated Control Testing):**

```php
/**
 * Betetze Proba Automatikoak
 */
class BetetzeProbak {
    /**
     * A.8.5 - Autentifikazio Segurua
     * Balioztatu pasahitz politika betetzea
     */
    public function pasahitz_politika_probatu(): ProbaEmaitza {
        $emaitzak = [];
        
        // Konplexutasuna egiaztatu
        $ahulPasahitzak = $this->db->query(
            "SELECT COUNT(*) as kopurua FROM erabiltzaileak
             WHERE LENGTH(pasahitz_hash) < 60" // bcrypt hash-ak gutxienez 60 karaktere
        );
        
        if ($ahulPasahitzak['kopurua'] > 0) {
            $emaitzak[] = new ProbaHutsegitea(
                'Pasahitz ahulak aurkitu dira',
                gravitatea: 'ALTUA'
            );
        }
        
        // MFA betetzea
        $mfaGabeak = $this->db->query(
            "SELECT COUNT(*) as kopurua FROM erabiltzaileak
             WHERE rola IN ('admin', 'hr_manager')
             AND mfa_gaituta = FALSE"
        );
        
        if ($mfaGabeak['kopurua'] > 0) {
            $emaitzak[] = new ProbaHutsegitea(
                'Pribilegiodun erabiltzaileak MFA gabe',
                gravitatea: 'KRITIKOA'
            );
        }
        
        return new ProbaEmaitza(
            kontrol_id: 'A.8.5',
            egoeraOna: empty($emaitzak),
            hutsegiteak: $emaitzak
        );
    }
    
    /**
     * A.8.15 - Erregistro (Logging)
     * Balioztatu log atxikipena
     */
    public function log_atxikipen_probatu(): ProbaEmaitza {
        // Egiaztatu log-ak 2 urte artean gordeta daudela
        $zaharregoData = $this->db->query(
            "SELECT MIN(data) as min_data FROM auditoria_erregistroak"
        );
        
        $zaharregoDiff = (new DateTime())->diff(new DateTime($zaharregoData['min_data']));
        
        if ($zaharregoDiff->y < 2) {
            return new ProbaEmaitza(
                kontrol_id: 'A.8.15',
                egoeraOna: true,
                mezua: 'Log atxikipena zuzena (2+ urte)'
            );
        }
        
        return new ProbaEmaitza(
            kontrol_id: 'A.8.15',
            egoeraOna: false,
            hutsegiteak: [
                new ProbaHutsegitea(
                    'Log atxikipena 2 urte baino gutxiago',
                    gravitatea: 'ERTAINA'
                )
            ]
        );
    }
}
```

**Deliverables:**
- `Zabala Gailetak/hr-portal/src/Betetze/BetetzeProbak.php`
- Automated test suite (20+ controls)
- Evidence collection scripts
- Test execution scheduler

#### Week 19-20: Compliance Dashboard

**Tasks:**
1. **Dashboard Backend API** (2 days)
   - Compliance score calculation
   - Control status endpoints
   - Evidence management API
   - Audit trail API

2. **Dashboard Frontend** (3 days)
   - Control status visualization
   - Compliance score gauge
   - Evidence repository interface
   - Audit findings list

3. **Reporting Engine** (2 days)
   - Generate compliance reports (PDF)
   - Automated report scheduling
   - Report distribution via email

**Dashboard Features:**

```
╔════════════════════════════════════════════════════════════╗
║        ZABALA GAILETAK - BETETZE PANELA                    ║
╠════════════════════════════════════════════════════════════╣
║                                                             ║
║  ISO 27001 Betetzea: ████████████░░ 93%                   ║
║  GDPR Betetzea:      ██████████████ 100%                  ║
║  IEC 62443 Betetzea: ████████░░░░░░ 78%                   ║
║                                                             ║
║  ┌─────────────────────────────────────────────────────┐  ║
║  │ KONTROL EGOERA LABURPENA                            │  ║
║  ├─────────────────────────────────────────────────────┤  ║
║  │  ✅ Inplementatuta:          87 kontrol             │  ║
║  │  ⚠️  Partzialki:              6 kontrol             │  ║
║  │  ❌ Ez inplementatuta:        0 kontrol             │  ║
║  └─────────────────────────────────────────────────────┘  ║
║                                                             ║
║  ┌─────────────────────────────────────────────────────┐  ║
║  │ AZKEN AUDITORIA AURKIKUNTZAK                        │  ║
║  ├─────────────────────────────────────────────────────┤  ║
║  │  • A.7.7 - Mahai garbia politika hobetzea           │  ║
║  │  • A.8.11 - Datu maskaratzea hedatu                │  ║
║  │  • A.8.14 - Erredundantzia geografikoa             │  ║
║  └─────────────────────────────────────────────────────┘  ║
║                                                             ║
║  [📊 Txosten Osoa]  [📋 Ebidentzia Biltegia]              ║
╚════════════════════════════════════════════════════════════╝
```

**Deliverables:**
- Compliance dashboard (React app)
- Backend API for compliance data
- PDF report generator
- Dashboard documentation

---

### Phase 5: Training & Rollout (Weeks 21-22)

**Objective:** Train staff and deploy compliance implementations

#### Week 21: Staff Training

**Tasks:**
1. **IT Team Training** (2 days)
   - New Basque codebase orientation
   - DLP system operation
   - Compliance monitoring platform
   - Incident response procedures

2. **HR Team Training** (1 day)
   - GDPR compliance procedures
   - Data subject rights handling
   - Consent management
   - Breach notification procedures

3. **General Employee Training** (2 days)
   - Security awareness (Basque materials)
   - Data protection basics
   - Clear desk policy
   - Incident reporting

**Deliverables:**
- Training materials in Basque
- Training completion certificates
- Training feedback surveys

#### Week 22: Production Deployment & Validation

**Tasks:**
1. **Staged Rollout** (3 days)
   - Deploy to staging environment
   - Execute UAT (User Acceptance Testing)
   - Performance testing
   - Security testing

2. **Production Deployment** (1 day)
   - Database migration
   - Application deployment
   - Configuration validation
   - Smoke testing

3. **Post-Deployment Validation** (1 day)
   - Compliance checks
   - Security scan
   - Performance monitoring
   - User feedback collection

**Deliverables:**
- Deployment runbook
- Rollback procedures
- Go-live checklist
- Post-deployment validation report

---

## Resource Allocation

### Team Requirements

| Role | Allocation | Responsibilities |
|------|-----------|-----------------|
| **Security Architect** | Full-time (22 weeks) | Architecture design, security controls, compliance oversight |
| **Senior Backend Developer** | Full-time (16 weeks) | PHP code translation, DLP implementation, compliance APIs |
| **Database Administrator** | Half-time (4 weeks) | Schema translation, replication setup, performance tuning |
| **Android Developer** | Full-time (2 weeks) | Kotlin code translation, mobile security |
| **DevOps Engineer** | Half-time (6 weeks) | Geo-redundancy setup, automation, monitoring |
| **Technical Writer** | Half-time (4 weeks) | Documentation in Basque, procedure writing |
| **Compliance Specialist** | Half-time (22 weeks) | Policy development, audit preparation, training |
| **Translator (Native Euskara)** | As needed | Code/documentation review, terminology validation |

### Estimated Effort

| Phase | Duration | Effort (Person-Days) |
|-------|----------|----------------------|
| Phase 1: Documentation | 4 weeks | 40 days |
| Phase 2: Code Translation | 6 weeks | 120 days |
| Phase 3: Security Controls | 6 weeks | 90 days |
| Phase 4: Compliance Monitoring | 4 weeks | 60 days |
| Phase 5: Training & Rollout | 2 weeks | 30 days |
| **TOTAL** | **22 weeks** | **340 days** |

---

## Success Criteria

### Completion Metrics

| Metric | Target | Measurement |
|--------|--------|-------------|
| ISO 27001 Control Implementation | 100% (93/93) | All controls fully implemented |
| GDPR Compliance Score | 100% | All requirements documented & implemented |
| IEC 62443 Compliance | 100% | OT security fully documented |
| Code Translation | 100% | All PHP/Kotlin/SQL in Basque |
| Automated Tests Coverage | 90%+ | Compliance tests automated |
| Documentation Completeness | 100% | All gaps filled, in Basque |
| Training Completion | 100% | All staff trained and certified |

### Quality Gates

Each phase must pass these gates before proceeding:

**Phase 1 Gate:**
- ✅ All documentation reviewed by compliance specialist
- ✅ Basque language validated by native speaker
- ✅ Documentation approved by management

**Phase 2 Gate:**
- ✅ All code translated and reviewed
- ✅ Unit tests pass with translated code
- ✅ No performance degradation
- ✅ Database migration tested successfully

**Phase 3 Gate:**
- ✅ All security controls tested
- ✅ Penetration testing passed
- ✅ No critical vulnerabilities
- ✅ Performance benchmarks met

**Phase 4 Gate:**
- ✅ Compliance dashboard functional
- ✅ Automated tests running on schedule
- ✅ Reports generating correctly
- ✅ Evidence collection working

**Phase 5 Gate:**
- ✅ All training completed
- ✅ Production deployment successful
- ✅ No critical issues in first week
- ✅ Compliance validated

---

## Risks & Mitigation

### High-Priority Risks

| Risk | Impact | Probability | Mitigation Strategy |
|------|--------|-------------|---------------------|
| **Code translation breaks functionality** | High | Medium | • Extensive unit testing<br>• Staged rollout<br>• Parallel running (old vs new)<br>• Comprehensive regression testing |
| **Database migration causes downtime** | High | Low | • Practice migrations in staging<br>• Create rollback scripts<br>• Schedule during maintenance window<br>• Use online migration tools |
| **Performance degradation** | Medium | Low | • Performance benchmarking<br>• Load testing before production<br>• Database query optimization<br>• Caching strategies |
| **Euskara terminology inconsistency** | Medium | Medium | • Create comprehensive glossary<br>• Native speaker review<br>• Consistent naming conventions<br>• Documentation standards |
| **Staff resistance to changes** | Medium | Medium | • Early communication<br>• Comprehensive training<br>• Involve key stakeholders<br>• Phased adoption |
| **Compliance audit failure** | High | Low | • Internal pre-audit<br>• External consultant review<br>• Gap analysis before audit<br>• Evidence preparation |

---

## Deliverables Summary

### Documentation (Phase 1)

1. **ISO 27001 SGSI Documents** (Basque)
   - [ ] Data Classification Manual
   - [ ] Clear Desk Policy v2
   - [ ] Data Masking Procedures
   - [ ] DLP Policy
   - [ ] Geographic Redundancy Architecture

2. **GDPR Documents** (Basque)
   - [ ] Consent Management System Documentation
   - [ ] Data Portability Procedures
   - [ ] Vendor DPA Template
   - [ ] Legitimate Interest Assessments
   - [ ] Training Materials

3. **IEC 62443 Documents** (Basque)
   - [ ] OT Security Zones Architecture
   - [ ] Control System Patch Management
   - [ ] Industrial Network Monitoring Rules

### Code & Implementation (Phases 2-4)

4. **Translated Codebase**
   - [ ] 25 PHP classes translated to Basque
   - [ ] 15+ Kotlin files translated
   - [ ] Database schema translated (20+ tables, 150+ columns)
   - [ ] All comments and documentation in Basque
   - [ ] API responses in Basque

5. **Security Implementations**
   - [ ] DLP Engine (PHP)
   - [ ] Data Masking Service (PHP)
   - [ ] Geographic Redundancy Setup
   - [ ] Classification System
   - [ ] Enhanced Encryption Layer

6. **Compliance Platform**
   - [ ] Automated compliance testing suite
   - [ ] Compliance dashboard (React)
   - [ ] Evidence repository
   - [ ] Report generator (PDF)
   - [ ] Compliance API

### Operations (Phase 5)

7. **Training & Documentation**
   - [ ] IT Team training materials
   - [ ] HR Team training materials
   - [ ] General staff security awareness training
   - [ ] Training completion certificates

8. **Deployment Artifacts**
   - [ ] Deployment runbook
   - [ ] Rollback procedures
   - [ ] Go-live checklist
   - [ ] Post-deployment validation report

---

## Maintenance & Continuous Improvement

### Ongoing Activities (Post-Implementation)

**Monthly:**
- Run automated compliance tests
- Review compliance dashboard
- Update risk assessments
- Security awareness communications

**Quarterly:**
- Internal compliance audit
- Update policies and procedures
- Disaster recovery testing
- Access rights review
- Security training refresher

**Annually:**
- External ISO 27001 audit
- GDPR compliance assessment
- Penetration testing
- BCP/DR full test
- Policy comprehensive review

### Continuous Monitoring

**Automated Daily Checks:**
- Password policy compliance
- MFA enforcement
- Log retention compliance
- Backup verification
- Access control validation
- Encryption verification

**Real-time Monitoring:**
- SIEM alerts (24/7)
- DLP policy violations
- Failed authentication attempts
- Privilege escalation attempts
- Data access anomalies

---

## Support & Governance

### Project Governance

**Steering Committee:**
- CEO (Executive Sponsor)
- CISO (Project Lead)
- IT Director
- HR Director
- Legal Counsel
- DPO (Data Protection Officer)

**Weekly Status Meetings:**
- Progress review
- Risk assessment
- Issue resolution
- Decision making

**Monthly Executive Updates:**
- Progress report
- Budget review
- Risk register review
- Milestone tracking

### Contact Points

| Role | Responsibility | Contact |
|------|---------------|---------|
| **CISO** | Overall compliance, security architecture | ciso@zabalagailetak.com |
| **IT Director** | Technical implementation, infrastructure | it@zabalagailetak.com |
| **DPO** | GDPR compliance, data protection | dpo@zabalagailetak.com |
| **Project Manager** | Schedule, resources, coordination | pm@zabalagailetak.com |

---

**End of Document**