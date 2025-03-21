# Ejercicios DSS

## Ejercicio 2:  
### Parte 1: Migrar contenido de ejercicio 1 a Laravel  
1. Creo un proyecto laravel:
```console
composer create-project laravel/laravel=9.* miproyecto --prefer-dist
```

2. Creo la carpeta donde va a ir mi nueva clase con funciones
```console
mkdir app/Ejercicios
```

3. Me ubico dentro de la carpeta
```console
cd app/Ejercicios
```

4. Creo un el archivo y dentro ubico las clases.  
   El codigo de las clases esta dentrod de la carpeta sesion02/miproyecto/app/Ejercicios/Funciones.php  
> [!NOTE]  
> El nombre del archivo y el nombre de la clase debe ser el mismo para poder ejecutarlo con Tinker
```console
touch Funciones.php
```

### Parte 2: Probar el codigo con Tinker
1. Abrir tinker
```console
php artisan tinker
```

2. Indicarle la clase que queremos probar
```console
use App\Ejercicios\Funciones
```

3. Ejemplo de ejecucion de funciones
```console
Funciones::divide(10, 2);
```

### Parte 3: Agregar Logging
Realizaremos las siguientes modificaciones dentro del archivo Funciones.php  

Con esta linea podemos hacer uso de Logging
```php
use Illuminate\Support\Facades\Log;
```

Con esta linea en la funcion divide podemos almacenar la salida en "storage/logs/laravel.log"
```php
Log::info("Resultado de divide($a, $b): " . json_encode($resultado));
```


### Parte 4: Crear pruebas unitaraias con PHPUnit
1. Crearemos las pruebas para la clase Funciones. El test siempre debe seguir la convencion de nombres NombreFuncionTest. En nuestro caso seria FuncionesTest  
```console
php artisan make:test FuncionesTest
```

2. Esto nos creara un archivo en la ubicacion "test/Feature/FuncionesTest.php". Para ver el codigo ir al directorio del repositorio.

3. Por ultimo para probar nuestros tests debemos hacer
```console
php artisan test
```








