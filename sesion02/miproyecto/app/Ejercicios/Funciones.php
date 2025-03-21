<?php

namespace App\Ejercicios;

use Illuminate\Support\Facades\Log; // Para poder usar Log

class Funciones{
    public static function divide($a, $b){
        $resultado = $b == 0 ? null : $a / $b;
        Log::info("Resultado de divide($a, $b): " . json_encode($resultado)); // Envia todo al log
        return $resultado;
    }

    public static function invertirCadena($cadena){
        return strrev($cadena);
    }

    public static function ordenacionBurbuja(array $arr){
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        return $arr;
    }

    public static function fibonacci($n){
        if ($n < 0) return null;
        if ($n == 0) return 0;
        if ($n == 1) return 1;
        return self::fibonacci($n - 1) + self::fibonacci($n - 2);
    }

    public static function proximoMes(){
        return date('d/m/Y', strtotime('+1 month'));
    }
    
}
