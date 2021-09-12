<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# CRUD con Laravel

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

- Revisar el nombre de la base de datos y el puerto dentro del arvhivo .env segun la configuracion de su equipo
- Migrar la base de datos

`php artisan migrate:fresh --seed`

- Activar el servidor 

`php artisan serve`

- Acceder al servidor

`http://127.0.0.1:8000`
