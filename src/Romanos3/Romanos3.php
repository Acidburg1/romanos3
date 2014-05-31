<?php

namespace Romanos3;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Romanos3\Tansformaciones;

/**
 * Description of Romanos3
 *
 * @author acidburg
 */
class Romanos3 {

    private static $basicos = array('I', 'II', 'III', 'IV', 'V', 'VI',
        'VII', 'VIII', 'IX', 'X');
    private static $transformaciones = array(array('I', 'V'),
        array('X', 'L')
    );

    public function devuelve($numero) {
        $devuelve = "";
        $cantidadDeNumeros = strlen($numero);
        for ($posicion = 0; $posicion != $cantidadDeNumeros; $posicion++) {
            $digito = $this->getDigit($numero, $posicion);
            if ($digito != 0) {
                $devuelve1 = $this->devuelveDigito($digito);
                $digitoTranformado = $this->devuelveDigitoTranformado($devuelve1, $posicion);
                $devuelve = $digitoTranformado . $devuelve;
            }
        }
        return $devuelve;
    }

    private function devuelveDigito($digito) {
        return self::$basicos[$digito - 1];
    }

    private function devuelveDigitoTranformado($numero, $posicion) {
        $numero = str_replace('I', self::$transformaciones[$posicion][0], $numero);
        $numero = str_replace('V', self::$transformaciones[$posicion][1], $numero);
        return $numero;
    }

    private function getDigit($num, $numero2) {
        $digito = strlen($num) - 1 - $numero2;
        return (Integer) $num[$digito];
    }

//put your code here
}
