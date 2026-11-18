# ESIM Park

**ESIM Park** es el portal web de un parque de diversiones educativo desarrollado para la comunidad de la **Escuela Secundaria de Innovación de Misiones (ESIM)**, en Posadas, Misiones, Argentina. Reúne información sobre las atracciones, un mapa interactivo del parque y un sistema de cuentas de usuario.

El proyecto integra páginas diseñadas por distintos equipos en una sola aplicación Laravel. Cada atracción conserva su propia identidad visual, mientras que el sitio ofrece navegación común.

## Funcionalidades

- **Inicio y mapa interactivo:** acceso a las atracciones desde un mapa ilustrado y un menú de navegación.
- **Páginas de atracciones:** contenido, recursos visuales e información particular de cada propuesta.
- **Autenticación:** registro, inicio y cierre de sesión, restablecimiento de contraseña, verificación de correo y edición del perfil.
- **Acceso con Google:** autenticación mediante OAuth y Laravel Socialite, sujeta a la configuración de credenciales.
- **Preguntas frecuentes:** información para visitantes.
- **Diseño adaptable:** estilos y componentes específicos del portal y de cada atracción.

### Atracciones y rutas

| Atracción | Ruta | Estado en el repositorio |
| --- | --- | --- |
| Mirror Maze | `/mirror` | Página con contenido propio |
| Fall | `/fall` | Vista básica; pendiente de desarrollar |
| Roller Coaster | `/roller` | Página con contenido propio |
| Boo's Pathway | `/boo` | Página con contenido propio |
| Carrusel Racing | `/carousel` | Página con contenido propio y sección de cámara |
| Pirate Ship | `/pirate` | Vista básica; pendiente de desarrollar |
| Crazy Worm | `/worm` | Página con contenido propio y recursos audiovisuales |
| Ochurus (Kamikaze) | `/kamikaze` | Página con contenido propio |

Algunas secciones de cámara o transmisión requieren hardware, direcciones de red y servicios externos disponibles. Su funcionamiento en vivo no se garantiza únicamente con la instalación de Laravel.

## Tecnologías

| Área | Tecnología |
| --- | --- |
| Backend | PHP 8.2 o superior, Laravel 12 |
| Plantillas | Laravel Blade |
| Frontend | HTML, CSS y JavaScript |
| Herramientas de frontend | Vite, Tailwind CSS y Alpine.js (dependencias del proyecto) |
| Base de datos configurada | MySQL |
| Autenticación | Laravel Breeze y Laravel Socialite |
| Pruebas | PHPUnit |
| Control de versiones | Git y GitHub |

## Requisitos

Antes de comenzar, instalá:

- **PHP 8.2+** y las extensiones requeridas por Laravel.
- **Composer**.
- **Node.js y npm**, compatibles con las dependencias del proyecto.
- **MySQL**, con una base de datos y un usuario con permisos adecuados.
- **Git**.

## Instalación local

### 1. Clonar el repositorio

```bash
git clone https://github.com/ESIMformatica/parqueDiversiones.git
cd parqueDiversiones
```

El proyecto integrado se encuentra en la rama `main`.

### 2. Instalar dependencias

```bash
composer install
npm install
```

### 3. Crear el archivo de entorno

En PowerShell (Windows):

```powershell
Copy-Item .env.example .env
```

En Linux o macOS:

```bash
cp .env.example .env
```

Abrí `.env`, configurá la URL y completá **tus propias credenciales** de MySQL, por ejemplo:

```dotenv
APP_NAME="ESIM Park"
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=parqueDeDiversiones
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contrasena_local
```

Creá previamente la base de datos indicada en `DB_DATABASE`. Los valores anteriores son ejemplos: reemplazalos por los de tu entorno.

> **Seguridad:** nunca publiques `.env` ni contraseñas reales en `.env.example`, commits o documentación. Verificá y limpiá las credenciales de ejemplo antes de compartir el repositorio.

### 4. Generar la clave y ejecutar migraciones

```bash
php artisan key:generate
php artisan migrate
```

Las migraciones crean las tablas necesarias para la aplicación y agregan el campo `google_id` a los usuarios.

### 5. Iniciar el proyecto

Abrí dos terminales en la carpeta del proyecto.

**Terminal 1 — servidor Laravel:**

```bash
php artisan serve
```

**Terminal 2 — compilador frontend:**

```bash
npm run dev
```

Entrá a **http://127.0.0.1:8000**.

Para compilar los recursos de frontend sin el servidor de desarrollo:

```bash
npm run build
```

## Configurar el inicio de sesión con Google

La aplicación utiliza **Laravel Socialite**. Para habilitar el acceso con Google:

1. Configurá un cliente OAuth 2.0 para una aplicación web en Google Cloud Console.
2. Registrá la URL de retorno exacta que utilizará tu aplicación; en desarrollo, por ejemplo: `http://127.0.0.1:8000/auth/google/callback`.
3. Completá en tu archivo `.env`:

```dotenv
APP_URL=http://127.0.0.1:8000
GOOGLE_CLIENT_ID=tu_client_id
GOOGLE_CLIENT_SECRET=tu_client_secret
GOOGLE_REDIRECT_URI="${APP_URL}/auth/google/callback"
```

4. Limpiá la configuración en caché si modificaste variables de entorno:

```bash
php artisan config:clear
```

El acceso con Google requiere que Google entregue una dirección de correo verificada. No compartas los secretos OAuth.

**Correo electrónico:** la configuración de ejemplo usa `MAIL_MAILER=log`, por lo que los mensajes de recuperación y verificación se registran en logs en lugar de enviarse realmente. Para enviar correos, configurá un servicio de correo válido.

## Estructura principal

```text
app/
  Http/Controllers/          # Controladores de atracciones y usuarios
  Http/Controllers/Auth/     # Registro, sesiones y Google OAuth
  Models/                    # Modelos Eloquent
config/
  parque.php                 # Atracciones, coordenadas e imágenes del mapa
database/
  migrations/                # Tablas y cambios de base de datos
public/
  css/                       # Estilos públicos
  js/                        # Scripts públicos
  img/, imgBoo/, imagesWorm/ # Recursos gráficos y audiovisuales
  imagenesOchurus/           # Fotografías de Ochurus
resources/
  views/                     # Plantillas Blade
  views/auth/                # Pantallas de autenticación
  views/pages/               # Inicio y preguntas frecuentes
  views/components/          # Componentes reutilizables
  css/, js/                  # Recursos procesados por Vite
routes/
  web.php                    # Rutas públicas, atracciones y perfil
  auth.php                   # Rutas de autenticación
tests/                       # Pruebas de la aplicación
```

### Personalizar el mapa

El archivo `config/parque.php` define las atracciones, sus rutas, nombres, coordenadas y recursos del mapa. Las imágenes se buscan bajo `public/img/mapa/` y `public/img/atracciones/`; si no se encuentra una imagen, el mapa puede mostrar elementos de respaldo.

## Rutas útiles

| Ruta | Descripción |
| --- | --- |
| `/` | Inicio y mapa del parque |
| `/inicio` | Acceso alternativo al inicio |
| `/preguntas-frecuentes` | Preguntas frecuentes |
| `/login` | Iniciar sesión |
| `/register` | Crear cuenta |
| `/auth/google/redirect` | Iniciar autenticación con Google |
| `/profile` | Editar perfil (requiere sesión) |
| `/dashboard` | Redirige al perfil (requiere sesión y verificación) |

## Verificaciones y pruebas

```bash
php artisan route:list
php artisan view:cache
php artisan test
```

Las dos primeras órdenes listan rutas y compilan plantillas. La tercera ejecuta las pruebas automatizadas; es necesario contar con las dependencias y configuración de pruebas correspondientes.

Si realizaste cambios de configuración y no se reflejan:

```bash
php artisan optimize:clear
```

## Estado del proyecto

El repositorio reúne el portal principal, autenticación y páginas de atracciones. **Fall** y **Pirate Ship** actualmente utilizan vistas básicas. Las funciones de cámara o contenido conectado a dispositivos externos requieren configuración y validación adicionales. La presencia de una ruta no implica que todas las funciones de la página hayan sido probadas en producción.

## Colaboración

El desarrollo se realiza en el repositorio de la organización **ESIMformatica**. Se recomienda trabajar en una rama por funcionalidad, verificar los cambios y abrir un *Pull Request* hacia `main` para su revisión.

**Repositorio:** https://github.com/ESIMformatica/parqueDiversiones

---

Proyecto educativo de la comunidad de la **Escuela Secundaria de Innovación de Misiones**.
