#!/bin/bash
# Script de verificación post-migración Kotlin 2.0 / AGP 9
# Ejecutar desde: Zabala Gailetak/android-app/

set -e

echo "=== Verificación Post-Migración Kotlin 2.0 + AGP 8.7 ==="
echo ""

# Colores para output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

# 1. Verificar versiones en archivos
echo "1. Verificando versiones configuradas..."
echo ""

if grep -q "gradle-8.10.2-bin.zip" gradle/wrapper/gradle-wrapper.properties; then
    echo -e "${GREEN}✓${NC} Gradle wrapper: 8.10.2"
else
    echo -e "${RED}✗${NC} Gradle wrapper no actualizado"
    exit 1
fi

if grep -q "8.7" build.gradle.kts; then
    echo -e "${GREEN}✓${NC} AGP: 8.7.3 (estable)"
else
    echo -e "${RED}✗${NC} AGP no actualizado"
    exit 1
fi

if grep -q "2.0.21" build.gradle.kts; then
    echo -e "${GREEN}✓${NC} Kotlin: 2.0.21"
else
    echo -e "${RED}✗${NC} Kotlin no actualizado"
    exit 1
fi

if grep -q "org.jetbrains.kotlin.plugin.compose" build.gradle.kts; then
    echo -e "${GREEN}✓${NC} Compose plugin Kotlin 2+ configurado"
else
    echo -e "${YELLOW}⚠${NC} Compose plugin no encontrado"
fi

if grep -q "com.google.devtools.ksp" build.gradle.kts; then
    echo -e "${GREEN}✓${NC} KSP plugin configurado"
else
    echo -e "${RED}✗${NC} KSP plugin no configurado"
    exit 1
fi

if grep -q "minSdk = 24" app/build.gradle.kts; then
    echo -e "${GREEN}✓${NC} minSdk: 24"
else
    echo -e "${YELLOW}⚠${NC} minSdk no es 24"
fi

# 2. Verificar que security-crypto fue eliminado
echo ""
echo "2. Verificando eliminación de dependencias deprecadas..."
if grep -q "security-crypto" app/build.gradle.kts; then
    echo -e "${RED}✗${NC} security-crypto aún presente (deprecado)"
    exit 1
else
    echo -e "${GREEN}✓${NC} security-crypto eliminado correctamente"
fi

# 3. Verificar que KAPT fue reemplazado por KSP
echo ""
echo "3. Verificando migración KAPT → KSP..."
if grep -q 'kotlin("kapt")' app/build.gradle.kts; then
    echo -e "${RED}✗${NC} KAPT aún configurado en plugins"
    exit 1
else
    echo -e "${GREEN}✓${NC} Plugin KAPT eliminado"
fi

if grep -q "kapt(" app/build.gradle.kts; then
    echo -e "${RED}✗${NC} Dependencias con kapt() encontradas"
    exit 1
else
    echo -e "${GREEN}✓${NC} Todas las dependencias migradas a ksp()"
fi

# 4. Verificar optimizaciones de build
echo ""
echo "4. Verificando optimizaciones de build speed..."
if grep -q "org.gradle.configuration-cache=true" gradle.properties; then
    echo -e "${GREEN}✓${NC} Configuration cache activado"
else
    echo -e "${YELLOW}⚠${NC} Configuration cache no activado"
fi

if grep -q "ksp.incremental=true" gradle.properties; then
    echo -e "${GREEN}✓${NC} KSP incremental activado"
else
    echo -e "${YELLOW}⚠${NC} KSP incremental no activado"
fi

# 5. Clean build directories
echo ""
echo "5. Limpiando build directories antiguos..."
rm -rf .gradle/
rm -rf app/build/
rm -rf build/
echo -e "${GREEN}✓${NC} Build directories limpiados"

# 6. Verificar wrapper configurado correctamente
echo ""
echo "6. Verificando Gradle wrapper..."
if [ -f "gradle/wrapper/gradle-wrapper.properties" ]; then
    echo -e "${GREEN}✓${NC} Wrapper configurado correctamente"
else
    echo -e "${RED}✗${NC} Wrapper no encontrado"
    exit 1
fi

# 7. Verificar archivos de configuración
echo ""
echo "7. Verificando archivos de configuración..."
if [ -f "build.gradle.kts" ] && [ -f "app/build.gradle.kts" ] && [ -f "gradle.properties" ]; then
    echo -e "${GREEN}✓${NC} Archivos de configuración presentes"
else
    echo -e "${RED}✗${NC} Faltan archivos de configuración"
    exit 1
fi

# 8. Buscar uso de security-crypto en código fuente
echo ""
echo "8. Buscando referencias a security-crypto en código..."
CRYPTO_REFS=$(grep -r "EncryptedSharedPreferences\|EncryptedFile\|MasterKey\|security.crypto" app/src/ 2>/dev/null || true)
if [ -n "$CRYPTO_REFS" ]; then
    echo -e "${YELLOW}⚠${NC} Referencias a security-crypto encontradas en código:"
    echo "$CRYPTO_REFS" | head -10
    echo ""
    echo "   → Revisar MIGRATION_KOTLIN_2.0.md sección 'Migración de security-crypto'"
else
    echo -e "${GREEN}✓${NC} No se encontraron referencias a security-crypto"
fi

# Resumen final
echo ""
echo "============================================"
echo -e "${GREEN}✓ Verificación de configuración completada${NC}"
echo "============================================"
echo ""
echo "Próximos pasos (ejecutar en Android Studio):"
echo "  1. Abrir Android Studio y hacer 'Invalidate Caches / Restart'"
echo "  2. Ejecutar 'Build → Rebuild Project'"
echo "  3. Si el build falla, revisar logs en Build Output"
echo ""
echo "Para build manual desde terminal:"
echo "  ./gradlew :app:assembleDebug"
echo ""
echo "Para ejecutar tests:"
echo "  ./gradlew :app:testDebugUnitTest"
echo ""
echo "Para migrar security-crypto (si aplica):"
echo "  Revisar MIGRATION_KOTLIN_2.0.md sección 'Migración de security-crypto'"
echo ""
