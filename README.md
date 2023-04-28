<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Features

- Se usa Laravel 8 con la versión de PHP 8.1
- Se usa contenedor en docker para realizar la simulación de la configuracióin con ubuntu
- Se crea imagen con docker para realizar configuración de nginx
- Crea imagen en contenedor de Mysql para conexion en db
- Crea docker-compose.yml
- Se crea Dockerfile
- Instalar composer require laravel/breeze:1.9.2
- Posterior se ejecuta laravel breeze  php artisan breeze:install y npm run dev

### Instalación
- Instalar Docker en el equipo
- Ejecutar docker-compose build para construir los contenedores
- Levantar los contenedores con docker-compose up -d
- Correr composer u y npm i para instalar todas las dependencias dentro del contenedor prueba-test
- Se debe crear un punto .env, esta se puede clonar dell .env.example y poner las credenciales correspondientes

### Uso
- En el navedador usar http://localhost:8000/
- Se abrirá la página principal de Laravel y en la parte supeior derecha hay dos links para realizar un proceso
- Debemos ingresar el de registro para poder acceder al panel principal y poder enviar un mail
- Posterior a ello nos logueamos y encontraremos un dashboard donde nos enviará a la ruta mail para poder enviar un correo
- Se debe crear un cuneta mailtrap ya que la confoguración smtp se realizó con este servicio de mensajería para desarrollo
