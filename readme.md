# bitbank-home

### Versión 1.0

Sitio sencillo basado en una plantilla de [styleshout](https://styleshout.com) enfocada a mostrar los servicios de bitbank.

## Requerimientos

- Servidor http (apache) con módulo php >= v7.x.
- Acceso ssh/sftp/rsync con suficientes permisos.

## Instalación

**IMPORTANTE**

**Esto es solo una guía general y posiblemente se requieran ajustes extras.**

**Antes de llevar a cabo estos pasos primero deben leerse con atención.**

Necesario contar con el módulo `mod_rewrite` habilitado y también permisos para interpretar el `.htaccess` en apache.

#### Instrucciones

Suponiendo que el .zip de bitbank se haya descomprimido en `/home/miusuario/` debería existir una estructura como ésta:

```html
.
|── ...
|── home
|   └── miusuario
|       └── bitbank
|           |── css
|           |── fonts
|           |── images
|           └── ...
|──  ...
|── var
|    └── www
|       └── html
|           └── index.html
└── ...
```

- Ubicarse en la carpeta raíz del proyecto:
  
  ```shell
  cd /home/miusuario/bitbank
  ```

- Borrar la carpeta html:
  
  ```shell
  rm -rf /var/www/html
  ```

- Crear un enlace directo:
  
  ```shell
  ln -s /home/miusuario/bitbank /var/www/html
  ```

- Ubicarse otra vez en la carpeta raíz del proyecto y asignarle permisos:
  
  ```shell
  chmod -R 777 /home/miusuario/bitbank
  ```

- No es necesario pero se pueden reiniciar los servicios http.

#### Configurar por primera vez el proyecto

- Checar que haya un archivo llamado `.htaccess` y otro llamado `config.php` en la ruta `/home/miusuario/bitbank`. En caso que no estén hay que crear ambos:
  
  ```shell
  cd /home/miusuario/bitbank
  cp .htaccess_example .htaccess
  cp config_example.php config.php
  ```
  
  Respecto al archivo `.htaccess` lo único que hay que editar es esto:
  
  ```ini
  # Setting main www index folder
  RewriteBase /bitbank
  ```
  
  Observaciones:
  
  - En `RewriteBase` agregar la ruta relativa que apunta al directorio `public/www` de apache. En el ejemplo anterior de la estructura de carpetas quedaría como `/bitbank`.
  
  Abrir el archivo `config.php` Las partes a editar son las siguientes:
  
  ```php
  define('MAIN_DIR', '/bitbank');
  
  define('BITBANK_EMAIL', 'admin@email.com');
  define('BITBANK_TELEGRAM', 'https://t.me/');
  ```
  
  Más observaciones:
  
  - En `MAIN_DIR` agregar la ruta relativa que apunta al directorio `public/www` de apache. Se coloca la misma ruta que en el archivo `.htaccess` (`/bitbank`).
  
  - `BITBANK_EMAIL` se escribe la dirección de correo proporcionado por el proveedor de dicho servicio.
  
  - `BITBANK_TELEGRAM` lleva la dirección de telegram de la compañía.
  
  - Antes de poner este sitio oficialmente en línea, comprobar que la instalación y configuración sean correctas.

## Rutas de acceso

- Inicio: `https://{url}`

## Soporte

Cualquier pregunta o comentario ponerse en contacto con el desarrollador.

## Licencia

Leer `license.md` para más información.
