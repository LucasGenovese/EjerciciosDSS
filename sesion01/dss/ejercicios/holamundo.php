<?php
    namespace dss\ejercicios;

    function divide($a, $b) {
        if ($b == 0) {
            return null;
        } else {
            return $a / $b;
        }
    }

    function invertirCadena ($cadena) {
        return strrev($cadena);
    }

    function ordenacionBurbuja($array) {
        $n = count($array);
        for ($i = 1; $i < $n; $i++) {
            for ($j = 0; $j < $n - $i; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $k = $array[$j + 1];
                    $array[$j + 1] = $array[$j];
                    $array[$j] = $k;
                }
            }
        }
        return $array;
    }

    function fibonacci($n) {
        $fib = array(0, 1);
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    function proximoMes($mes) {
        $meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        $pos = array_search($mes, $meses);
        if ($pos === false) {
            return "Mes no válido";
        } elseif ($pos == 11) {
            return $meses[0];
        } else {
            return $meses[$pos + 1];
        }
    }

    class Fibonacci {
        private $secuencia;
    
        public function __construct() {
            $this->secuencia = array(0, 1);
            for ($i = 2; $i < 10; $i++) {
                $this->secuencia[$i] = $this->secuencia[$i - 1] + $this->secuencia[$i - 2];
            }
        }
    
        public function imprimirSecuencia() {
            echo implode(",", $this->secuencia);
        }
    
        public function fibonacci($n) {
            if ($n < count($this->secuencia)) {
                return $this->secuencia[$n];
            } else {
                for ($i = count($this->secuencia); $i <= $n; $i++) {
                    $this->secuencia[$i] = $this->secuencia[$i - 1] + $this->secuencia[$i - 2];
                }
                return $this->secuencia[$n];
            }
        }
    }
?>