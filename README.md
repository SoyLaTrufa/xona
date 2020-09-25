# Base para sitio web PHP

*Base que usamos en Synapsis CI para contruir un sitio web en PHP.*


## Instalación

Pasos para empezar un sitio nuevo:

0. Git clone https://gitlab.com/synawebmaster/BaseSynapsisFrontend.git en la carpeta de nuestro nuevo cliente.
   > Git remote remove origin
   > Crear un nuevo proyecto en gitlab con el nombre del cliente
   > Git remote add origin

1. Configurar el *sftp-config.json*. Asegurarse de no subir nada sin haber hecho este paso, se pueden subir cosas que no queremos a otro sitio online.
	> Subir via ftp

2. Configurar:
	- *api/config/config.php*. La BASE_URL es el link al que accedemos en Chrome. La BASE_PATH nos la va a dar el error cuando intentemos ver nuestro sitio.
	- Configurar el SMTP en *api/forms/core/formulario.php para el envio del formulario.

3. Eliminar archivo main.js.php.

4. Asegurarse de darle permisos de escritura 777 a las carpetas CSS y JS. Si no 
el Minifier no puede acceder. Una vez que se creen los respectivos archivos 
minificados, volver a cambiar los permisos a 755. (Algunos servidores pueden dar error 500/404 si no cambiamos los permisos a 755)

5. Recordar NO subir el 'node_modules', 'sftp-config.json' y el 'CHANGELOG' al servidor. 

6. Configurar *.htaccess*:
	> Si estamos subiendo el sitio a 'public_html' -> RewriteBase /.
	> Si lo estamos subiendo por ejemplo a public_html/new/ -> /new/.
	> Configurar las reescritura de con wwww o sin www (HAY DOS OPCIONES HACERLO EN ESTE PASO porque es redirección 301)

7. Desarrollar todo el sitio con la cache del .htaccess desactivada y una vez 
que se publica, activarla. -> ExpiresActive Off/On

8. Si no tiene programación, se borra la carpeta includes/models/ y en 
includes/config/ hay que borrar db.php.

9. Si no tiene idiomas, en el array de idiomas disponibles dejar sólo 'es'
	Configurar api/config/idiomas.php

10. Los plugins van en /js/, tanto sus archivos CSS como sus JS. Dividir plugins
en carpetas.

11. Completar humans.txt con los datos del equipo.

12. Si usamos SASS, Configurar gulpfile.js

12.1 Correr en la consola el comando "npm install" para instalar todas las dependencias.(En la carpeta raíz del nuevo sitio. Ejemplo: Clientes/Synapsis/Desarrollo/)
Esto nos va a permitir trabajar con sass usando Gulp. (opcional)
	-Si Tira error: opciones
		-Frenar el antivirus durante la instalación
		-RENAME problem: cerrar sublime y/o archivos gulp-file.js, etc.
		-Actualizar Node (global) npm update -g

13. Cada página precisa tener sus metas configuradas. api/config/metas.php Agregar al array un array cuyo índice debe coincidir con el nombre de la sección
14. Cambiar a 301 la redireción del wwww

### Carga de fuentes tipográficas con JavaScript
Las fuentes tipográficas están siendo cargadas con JavaScript, desde js/fonts.js. El archivo fonts.js carga las fuentes en dos instancias, Stage 1 y Stage 2. En el Stage 1, carga únicamente la variante regular, y en el Stage 2 carga el resto. 

1) Lo primero que hacemos es descargarnos las fuentes desde FontSquirrel, variante por variante.
2) Dividimos los archivos por carpeta, según la familia, y las ubicamos en la carpeta fonts. Por ejemplo, en este momento, está la familia Raleway, en fonts/raleway, y dentro están las variantes. 
3) Una vez que tengo las fuentes descargadas y ubicadas en las respectivas carpetas, configuro el archivo fonts.js (js/fonts.js).
4) Luego, configuro el CSS. Como trabajamos con SASS, el código para configurar las fuentes se encuentra en sass/base/typography.sass. Desde el CSS cargamos las familias tipográficas con '@fontface', y como font-family ponemos el nombre de la variable que definimos en el archivo fonts.js. En caso de no trabajar con SASS, el código CSS actual (que incluye la sección de las tipografías) se encuentra renderizado en sass/main.css

## Uso

En /api/ vas a encontrar todas las herramientas que necesitás para darle dinamismo al 
sitio. Se divide en varias carpetas:

### Config
En esta carpeta están todos los archivos de configuración del sitio. Por defecto vas a 
encontrar los que se usan para hacer funcionar todo (o sea que no podés borrarlos) pero
podés crear tus propios archivos. La información de configuración se accede usando el
helper Config (core/Config.php)

### Core
Acá vas a encontrar las herramientas que vas a necesitar para construir el sitio. Por 
ejemplo para armar las URLs, para acceder a los archivos de configuración, para 
construir las metas, traducir el sitio, etc.

### Forms
Poné acá la configuración para cada formulario que crees. Todas las herramientas para
validar y enviar formularios están acá.

### Helpers
Acá hay algunas funciones auxiliares que podés usar en el proyecto. Si querés agregar
alguna función PHP para usar en el sitio este es el lugar.

### Idiomas
Creá acá los archivos de idioma. Estos archivos se van a cargar (uno por idioma) usando
el helper Idioma (core/Idioma.php). Las traducciones para un idioma las podés acceder
usando la función __() que es un alias del helper Traduccion (core/Traduccion.php).

### Libs
En esta carpeta están las librerías externas que se usan en el proyecto. Ej: Minifier, 
el minificador de CSS y JS.

### Models
Estos archivos son los que se encargan de conectarse a la base de datos y devolver
la información que necesitamos. 

El modelo "Base" es el que usamos para construir todos los modelos. Los modelos en 
/models/assets/ son modelos que siempre están vinculados a otros modelos.

Una vez construido un modelo podés probarlo desde /api/ en el navegador. En el 
.htaccess que hay dentro de esa carpeta están definidos los patrones de URLs que 
se pueden usar para ver qué es lo que devuelve cada modelo.
