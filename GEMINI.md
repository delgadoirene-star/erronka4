# Zabala Gailetak - GEMINI Context

This file provides the necessary context for AI agents (and developers) interacting with the **Zabala Gailetak** project.

## 1. Project Overview

**Zabala Gailetak** is a cybersecurity and infrastructure modernization project for a biscuit manufacturing company. Originally an e-commerce platform, it has pivot to a secure **Internal HR Portal** for managing the employee lifecycle.

*   **Context:** "Erronka 4" (Challenge 4) - Advanced Security Systems.
*   **Primary Goal:** Modernize IT/OT infrastructure with a heavy focus on security (ISO 27001, GDPR, IEC 62443) and build a secure internal management system.
*   **Documentation Language:** Primary documentation is in **Spanish** and **Basque**. Technical comments are in **English**.
*   **Timeline:** January 2026 - December 2026.

## 2. System Architecture

The system follows a strict layered architecture with IT/OT segmentation.

### A. Backend (`hr-portal/`)
*   **Type:** REST API.
*   **Stack:** Vanilla PHP 8.4 (PSR-compliant custom structure), Nginx, PostgreSQL 16, Redis 7.
*   **Key Standards:** PSR-1, PSR-4, PSR-7 (Http Message), PSR-11 (Container), PSR-15 (Middleware), PSR-17 (Factories).
*   **Security:** JWT Auth, TOTP MFA, Passkey (WebAuthn), RBAC, Rate Limiting.

### B. Web Frontend (`hr-portal/web/`)
*   **Type:** Single Page Application (SPA).
*   **Stack:** React 18, Vite, Styled Components, Axios.
*   **Key Features:** Employee CRUD, Vacation Calendar, Document Management, Chat (WebSocket).

### C. Mobile App (`android-app/`)
*   **Type:** Native Android Application.
*   **Stack:** Kotlin 2.0, Jetpack Compose, Material 3, Hilt (DI), Retrofit.
*   **Architecture:** Clean Architecture + MVI (Model-View-Intent).

### D. OT (Operational Technology) (`infrastructure/ot/`)
*   **Simulation:** Cookie production line.
*   **Stack:** OpenPLC (Structured Text), ScadaBR (HMI), Node-RED.
*   **Network:** Isolated VLAN 50 (IEC 62443 compliance).
*   **Security:** Industrial Honeypots (Conpot), IDS for Modbus.

## 3. Directory Structure & Key Locations

```text
/
├── Zabala Gailetak/
│   ├── hr-portal/            # PHP Backend & React Frontend
│   │   ├── src/              # PHP Source (PSR-4)
│   │   ├── config/           # App Configuration (Routes, DB, Security)
│   │   ├── migrations/       # SQL Migrations (PostgreSQL)
│   │   ├── web/              # React Source
│   │   ├── Makefile          # Main task runner
│   │   └── docker-compose.*  # Service orchestration
│   ├── android-app/          # Native Android Source
│   ├── compliance/           # GDPR, ISO 27001 (SGSI) docs
│   ├── security/             # SIEM, Honeypot, Forensics, SOPs
│   ├── infrastructure/       # Network topology, OT, Systems
│   └── devops/               # CI/CD pipelines
├── ER4.md                    # Core Academic Challenge Requirements
├── MIGRATION_PLAN.md         # Master Technical Plan
└── API_DOCUMENTATION.md      # API Reference
```

## 4. Development Workflow

### Backend (HR Portal)
*   **Manager:** `Makefile` in `hr-portal/`.
*   **Commands:**
    *   `make up`: Start Docker environment.
    *   `make migrate`: Apply PostgreSQL schema changes.
    *   `make test`: Run PHPUnit tests.
    *   `make lint`: Run PHPCS (PSR-12).

### Frontend (Web)
*   **Location:** `hr-portal/web/`
*   **Commands:** `npm run dev`, `npm run build`, `npm run lint`.

### Mobile (Android)
*   **Location:** `android-app/`
*   **Commands:** `./gradlew assembleDebug`, `./gradlew test`.

### Infrastructure & Security
*   **SIEM:** Located in `security/siem/`. Uses ELK Stack + Wazuh.
*   **Honeypot:** Located in `security/honeypot/`. Deploys T-Pot/Cowrie.
*   **OT:** Located in `infrastructure/ot/`. Runs OpenPLC simulation.

## 5. Security & Compliance Mandates

**CRITICAL:** This project is a security showcase. All code and config must adhere to:

1.  **ISO 27001:** Information Security Management. Asset inventory, risk assessments, and access control policies are strictly enforced.
2.  **GDPR:** Data minimization, encryption at rest/transit, and "Right to be Forgotten" implementation.
3.  **IEC 62443:** Strict segmentation between IT (Business) and OT (Industrial) networks.
4.  **OWASP Top 10:** Regular checks for Injection, Broken Auth, XSS, etc.

## 6. Current Implementation Status (Jan 2026)

*   **Completed:** Infrastructure (Docker/Network), DB Schema (PostgreSQL), Basic Auth (JWT), Mobile Skeleton.
*   **In Progress:** MFA/Passkey implementation, Full Employee CRUD, Vacation System.
*   **Next Steps:** Load Testing (K6), E2E Testing (Playwright), OT Integration refinement.

## 7. AI Agent Guidelines

*   **Context First:** Always check `MIGRATION_PLAN.md` for the "source of truth" regarding features and architecture.
*   **Security Check:** Before suggesting code, verify it doesn't violate the strict segmentation (e.g., no direct DB access from frontend) or compliance rules.
*   **Bilingual Awareness:** Be prepared to process input/docs in Spanish/Basque, but output technical explanations in English unless requested otherwise.
*   **File Paths:** Be precise. The project root is `D:\erronka4`, but the active code is inside `Zabala Gailetak/`.