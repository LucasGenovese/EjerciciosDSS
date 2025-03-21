<?php

namespace Tests\Feature;

use App\Ejercicios\Funciones;
use Tests\TestCase;

class FuncionesTest extends TestCase
{
    public function testDivide()
    {
        $this->assertEquals(5, Funciones::divide(10, 2));
        $this->assertNull(Funciones::divide(10, 0));
    }

    public function testInvertirCadena()
    {
        $this->assertEquals("aloH", Funciones::invertirCadena("Hola"));
    }

    public function testOrdenacionBurbuja()
    {
        $this->assertEquals([1, 2, 3], Funciones::ordenacionBurbuja([3, 1, 2]));
    }

    public function testFibonacci()
    {
        $this->assertEquals(13, Funciones::fibonacci(7));
    }

    public function testProximoMes()
    {
        $fechaEsperada = date('d/m/Y', strtotime('+1 month'));
        $this->assertEquals($fechaEsperada, Funciones::proximoMes());
    }
}
