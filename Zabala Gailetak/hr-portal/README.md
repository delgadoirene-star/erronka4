# Zabala Gailetak - HR Portal 🏢

Sistema interno de gestión de recursos humanos con seguridad avanzada implementada.

## 🎯 Estado del Proyecto

**Fase Actual**: ✅ Fase 2 Completada - Autenticación Avanzada  
**Última Actualización**: 14 de Enero, 2026

### Fases Completadas

- ✅ **Fase 1**: Estructura Base y Migraciones
- ✅ **Fase 2**: Autenticación Avanzada (JWT + MFA + RBAC)
- ⏳ **Fase 3**: Employee CRUD (próxima)

---

## 🚀 Quick Start

### Prerequisitos

- Docker & Docker Compose
- Arch Linux (o compatible)
- Puertos disponibles: 8080 (HTTP), 8443 (HTTPS), 5432 (PostgreSQL), 6379 (Redis)

### Inicio Rápido

```bash
# 1. Clonar repositorio
cd "Zabala Gailetak"

# 2. Configurar variables de entorno
cd hr-portal
cp .env.example .env
# Editar .env con tus secretos

# 3. Iniciar servicios
cd ..
docker-compose -f docker-compose.hrportal.yml up -d

# 4. Instalar dependencias PHP
docker-compose -f docker-compose.hrportal.yml exec php composer install

# 5. Ejecutar migraciones
docker-compose -f docker-compose.hrportal.yml exec postgres psql -U hr_user -d hr_portal -f /docker-entrypoint-initdb.d/001_init_schema.sql

# 6. Verificar instalación
curl http://localhost:8080/api/health
```

---

## 📋 Arquitectura

### Stack Tecnológico

- **Backend**: PHP 8.4 (FPM Alpine)
- **Base de Datos**: PostgreSQL 16 Alpine
- **Cache/Sessions**: Redis 7 Alpine
- **Web Server**: Nginx Alpine
- **Autenticación**: JWT (firebase/php-jwt)
- **MFA**: TOTP (spomky-labs/otphp)

### Servicios Docker

| Servicio | Puerto | Estado | Descripción |
|----------|--------|--------|-------------|
| nginx | 8080, 8443 | ✅ Running | Reverse proxy y SSL |
| php | 9000 | ✅ Running | PHP-FPM 8.4 |
| postgres | 5432 | ✅ Healthy | Base de datos principal |
| redis | 6379 | ✅ Healthy | Cache y sesiones |

---

## 🔐 Autenticación y Seguridad

### Características Implementadas

- ✅ **JWT Tokens**: Access tokens (1h) y refresh tokens (7d)
- ✅ **MFA/TOTP**: Autenticación de dos factores con códigos QR
- ✅ **RBAC**: Control de acceso basado en roles (4 roles, 43 permisos)
- ✅ **Session Management**: Sesiones persistentes en Redis
- ✅ **Rate Limiting**: Protección contra fuerza bruta
- ✅ **Account Locking**: Bloqueo tras intentos fallidos
- ✅ **Backup Codes**: Códigos de respaldo para MFA

### Roles y Permisos

| Rol | Permisos | Descripción |
|-----|----------|-------------|
| **admin** | 43 (todos) | Acceso completo al sistema |
| **hr_manager** | 31 | Gestión de RRHH |
| **department_head** | 15 | Gestión de departamento |
| **employee** | 7 | Acceso básico |

---

## 🔌 API Endpoints

Ver documentación completa en [FASE_2_COMPLETADA.md](./FASE_2_COMPLETADA.md)

### Públicos
- `GET /api/health` - Health check
- `POST /api/auth/login` - Login
- `POST /api/auth/refresh` - Renovar token

### Protegidos
- `GET /api/auth/me` - Usuario actual
- `POST /api/auth/logout` - Cerrar sesión
- `POST /api/auth/mfa/setup` - Configurar MFA
- `POST /api/auth/mfa/enable` - Activar MFA
- `POST /api/auth/mfa/verify` - Verificar MFA

---

## 🧪 Testing

```bash
# Tests unitarios
docker-compose -f docker-compose.hrportal.yml exec php ./vendor/bin/phpunit --testdox

# Estado: ✅ 11/11 tests passing
```

---

## 👥 Usuario de Prueba

```
Email: admin@zabalagailetak.com
Password: password
Rol: admin
```

---

## 📚 Documentación

- [FASE_2_COMPLETADA.md](./FASE_2_COMPLETADA.md) - Detalles técnicos Fase 2
- [API_DOCUMENTATION.md](../API_DOCUMENTATION.md) - API completa
- [MIGRATION_PLAN.md](../MIGRATION_PLAN.md) - Plan de migración

---

**Versión**: 1.0.0-alpha  
**Estado**: En desarrollo activo  
**Licencia**: Proprietary - Zabala Gailetak
