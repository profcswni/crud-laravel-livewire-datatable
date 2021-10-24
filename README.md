<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# CRUD con Laravel y Jetstream

- Indicaciones para instalacion:
  - [Documento con orientaciones completas](https://docs.google.com/document/d/1OM3freGecwj94yIL-Z_2vfJsqeLLuHAzzbUtucRYyks/edit?usp=sharing)
- Descargar el repositorio
- Instalar las dependencias de Composer

`composer install`

- Instalar las dependencias de Node

`npm install`

- Compilar los archivos básicos

`npm run dev`

- Crear la base de datos dentro de phpmyadmin
- Renombrar el archivo .env.example a .env

`mv .env.example .env`

- Revisar el nombre de la base de datos y el puerto dentro del archivo .env segun la configuracion de su equipo
- Migrar la base de datos

`php artisan migrate:fresh --seed`

- Crear una llave para la aplicación

`php serve key:generate`

- Activar el servidor 

`php artisan serve`

- Acceder al servidor

`http://127.0.0.1:8000`
