# Privacy by Design - Diseinuz Pribatutasuna

## Principios Aplicados en Portal RRHH

### 1. Minimización de Datos
**Implementación:**
- Solo campos esenciales en formularios
- No se solicita: religión, orientación sexual, afiliación sindical
- Campos opcionales claramente marcados

**Ejemplo:**
```php
class ErabiltzaileaSortu {
    // ✅ Beharrezkoak
    public string $izena;
    public string $eposta;
    
    // ❌ EZ beharrezkoak - EZABATU
    // public string $erlijoa;  // REMOVED
    // public string $jatorria; // REMOVED
}
```

### 2. Cifrado por Defecto
- TLS 1.3 para tránsito
- AES-256-GCM para datos en reposo
- bcrypt para contraseñas

### 3. Pseudonimización
- User IDs en logs (no nombres)
- Masking en non-production environments

### 4. Separación de Datos
- Datos personales en tablas separadas
- Datos sensibles (salud) con cifrado adicional

### 5. Control de Acceso
- RBAC implementado
- Least privilege principle
- MFA obligatorio

### 6. Audit Trail Completo
- Todos los accesos registrados
- Retention 2 años

## Checklist de Nuevas Features

Antes de desarrollar nueva funcionalidad:
- [ ] ¿Es necesario este dato?
- [ ] ¿Cuál es la base legal?
- [ ] ¿Se puede pseudonimizar?
- [ ] ¿Se puede cifrar?
- [ ] ¿Necesita DPIA?
- [ ] ¿Cuál es el plazo de retención?
