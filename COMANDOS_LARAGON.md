# 🚀 COMANDOS PASO A PASO PARA CONFIGURAR NEXUSCOMPENDIUM EN LARAGON

## ✅ PASO 1: Mover el proyecto a Laragon

### Opción A: Manualmente (Recomendado)
1. Ve a: `c:\Users\cesar\OneDrive\Escritorio\IPSS-2Año\Segundo semetres\Desarrollo de Sofware\`
2. Copia la carpeta `Nexuscompendium` completa
3. Pégala en: `C:\laragon\www\`
4. Renómbrala a `nexuscompendium` (sin mayúsculas)

### Opción B: Con comando PowerShell
```powershell
# Ejecutar en PowerShell como administrador:
robocopy "c:\Users\cesar\OneDrive\Escritorio\IPSS-2Año\Segundo semetres\Desarrollo de Sofware\Nexuscompendium" "C:\laragon\www\nexuscompendium" /E
```

## ✅ PASO 2: Configurar Laravel

1. **Abre el terminal de Laragon:**
   - Click derecho en el ícono de Laragon en la bandeja del sistema
   - Selecciona "Terminal"

2. **Ejecuta estos comandos uno por uno:**
   ```bash
   cd C:\laragon\www\nexuscompendium
   
   composer install
   
   copy .env.example .env
   
   php artisan key:generate
   ```

## ✅ PASO 3: Configurar Base de Datos

1. **Crear la base de datos:**
   - Ve a: http://localhost/phpmyadmin
   - Usuario: `root`
   - Contraseña: (dejar vacío)
   - Click en "Nueva" en el panel izquierdo
   - Nombre de la base de datos: `nexuscompendium_db`
   - Click "Crear"

2. **Configurar el archivo .env:**
   - Abre el archivo: `C:\laragon\www\nexuscompendium\.env`
   - Busca las líneas que empiecen con `DB_` y verifica que estén así:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nexuscompendium_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

## ✅ PASO 4: Ejecutar Migraciones

```bash
# En el terminal de Laragon:
cd C:\laragon\www\nexuscompendium

php artisan migrate
```

## ✅ PASO 5: Iniciar el Servidor

```bash
php artisan serve
```

## 🎉 ¡LISTO! Accede a tu proyecto:

- **URL**: http://localhost:8000
- **phpMyAdmin**: http://localhost/phpmyadmin

## 🔧 Comandos Útiles Adicionales:

```bash
# Limpiar caché si hay problemas:
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Ver rutas disponibles:
php artisan route:list

# Crear controladores (para futuras funcionalidades):
php artisan make:controller ProyectoController
```

## ⚠️ Si algo no funciona:

1. Verifica que Laragon esté ejecutándose (ícono verde)
2. Asegúrate de que Apache y MySQL estén iniciados en Laragon
3. Revisa que el archivo .env tenga la configuración correcta de la base de datos
4. Ejecuta `composer install` si hay errores de dependencias

## 📁 Estructura Final Esperada:

```
C:\laragon\www\nexuscompendium\
├── app/
├── database/
├── public/
│   ├── css/
│   │   └── app.css
│   └── images/
│       └── logo.png
├── resources/
│   └── views/
├── routes/
│   └── web.php
├── .env
├── composer.json
└── artisan
```
