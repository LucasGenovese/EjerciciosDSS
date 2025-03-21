<?php
    require_once 'dss/ejercicios/holamundo.php';

    use dss\ejercicios\Fibonacci;

    $fib = new Fibonacci();
    $fib->imprimirSecuencia(); // Debería imprimir: 0,1,1,2,3,5,8,13,21,34

    echo $fib->fibonacci(15); // Debería calcular y devolver el 15º número de Fibonacci
?>