# Ejercicios DSS

## Ejercicio 3:
### Parte 0: Crear la base de datos
```console
sudo mysql 
mysql> CREATE DATABASE dss CHARACTER SET utf8mb4 COLLATE 
utf8mb4_unicode_ci; 
mysql> CREATE USER 'alumno'@'localhost' IDENTIFIED BY 'alumno'; 
mysql> GRANT ALL PRIVILEGES ON *.* TO 'alumno'@'localhost'; 
mysql> FLUSH PRIVILEGES; 
```

### Parte 1: Preparar entorno y conectar base de datos
1. Editar archivo .env con nombre, usuario y contraseña de la base de datos
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dss
DB_USERNAME=alumno
DB_PASSWORD=alumno
```

2. Descomentar y editar las siguientes lineas en archivo phpunit.xml
```xml
<env name="DB_CONNECTION" value="mysql"/> 
<env name="DB_DATABASE" value="dss"/>
```

3. Inicializar base de datos
Mediante este comando crearemos la tabla de migraciones en la base de datos. 
```console
php artisan migrate:install
```
Si vamos a http://localhost/adminer lo podremos comprobar
