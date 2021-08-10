# INSTALACIÓN DE CRUD LARAVEL

## PROYECTO WEB
### Clone el proyecto
git clone https://github.com/jcac1808/CRUD-LARAVEL.git

### Verifique que tiene instalado php y composer en su equipo

### ingrese a la carpeta
cd CRUD-LARAVEL

### Ejecute
composer install

### Cree solo la base de datos en el mysql o postgresql
ejemplo: create database crud_laravel;

### Copie el archivo .env.example, ingrese al archivo
cp .env.example .env

### ingrese al archivo .env, y edite la configuracion de la "base de datos", guarde sus cambios

#### Gestor mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_laravel
DB_USERNAME=root
DB_PASSWORD=

#### Gestor postgresql
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crud_laravel
DB_USERNAME=pgadmin
DB_PASSWORD=

### genere la llave para que se ejecute el programa
php artisan key:generate


## BASE DE DATOS
### Cree las tablas
php artisan migrate

### Carga inicial 
php artisan db:seed

## ARRANCAR EL PROYECTO
### Ejecute 
php artisan serve
