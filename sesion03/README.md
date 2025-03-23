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

2. Descomentar y editar las siguientes lineas en archivo `phpunit.xml`
```xml
<env name="DB_CONNECTION" value="mysql"/> 
<env name="DB_DATABASE" value="dss"/>
```

3. Inicializar base de datos
Mediante este comando inicializamos la migracion
```console
php artisan migrate:install
```
Si vamos a http://localhost/adminer lo podremos comprobar. Para hacer login debemos poner los siguientes datos:  
Username: alumno  
Password: alumno  
Database: dss  

4. Crear migracion para categories
```console
php artisan make:migration create_categories_table --create=categories
```
Luego modificar el archivo creado en `database/migrations/2025_03_23_163133_create_categories_table.php`  

5. Crear seeder para categories
```console
php artisan make:seeder CategoriesTableSeeder
```
Luego modificar el archivo creado en `database/seeders/CategoriesTableSeeder.php`  
En `database/seeders/DatabaseSeeder.php` agregar la siguiente linea:
```php
$this->call(CategoriesTableSeeder::class);
```

6. Ejecutar migracion y seeder
```console
php artisan migrate
```

```console
php artisan db:seed
```

[!NOTE]  
Se debe crear tambien una migracion y seeder para los productos. Los pasos son muy similares a los de categories  

7. Realizar consultas mediante Tinker
Abriremos Tinker
```console
php artisan tinker
```

Consulta para recuperar las categorias:
```php
DB::table('categories')->get();
```

Obtener productos de "Procesadores":
```php
$category = DB::table('categories')->where('name', 'Procesadores')->first();
DB::table('products')->where('category_id', $category->id)->get();
```

Precio del producto más caro en "Procesadores":
```php
DB::table('products')
    ->where('category_id', $category->id)
    ->max('price');
```

Eliminar productos cuyo nombre empiece con "S":
```php
DB::table('products')->where('name', 'like', 'S%')->delete();
```

