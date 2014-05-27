<?php

namespace Romanos3;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Romanos3
 *
 * @author acidburg
 */
class Romanos3 {

    private static $basicos = array('I', 'II', 'III', 'IV', 'V', 'VI',
        'VII', 'VIII', 'IX', 'X');

    public function devuelve($numero) {
        //return self::$basicos[$numero - 1];
        $devuelve = "";
//        $digito = $this->getDigit($numero, 0);
//        //$devuelve = self::$basicos[$numero - 1];
        print("longitud=" . strlen($numero) . "\n");
        print("digito=" . $digito = $this->getDigit($numero, 0) . "\n");
        print("numero =" . $numero . "\n");
        for ($a = 0; $a != strlen($numero); $a++) {

            $digito = $this->getDigit($numero, $a);
            if ($digito != 0) {
                if ($a == 0) {
                    $devuelve = self::$basicos[$digito - 1] . $devuelve;
                }
                if ($a == 1) {
                    $devuelve1 = self::$basicos[$digito - 1];
                    $devuelve = str_replace('I', 'X', $devuelve1) . $devuelve;
                }
                if ($a == 1) {
                    $devuelve1 = self::$basicos[$digito - 1];
                    $devuelve = str_replace('I', 'X', $devuelve1) . $devuelve;
                }
            }
        }
        return $devuelve;
        ////return "I";
//        $devuelve = "";
        // $digito = $this->getLastDigit($numero);
//        $limite = $this->tocaLimite($digito, 0);
        //return $this->devuelveCifra($digito);
    }

    private function getDigit($num, $numero2) {
        $digito = strlen($num) - 1 - $numero2;
        //print("numero en getdigit=" . $digito . "\n");

        return (Integer) $num[$digito];
    }

    public function devuelveRepetidos($digito) {
        $devuelve = "";
        for ($a = 0; $a < $this->contador($digito); $a++) {
            $devuelve = $devuelve . 'I';
        }
        return $devuelve;
    }

    public function devuelveCifra($digito) {
        $devuelve = $this->devuelveRepetidos($digito);
        $lugarEscribo = $this->derechaIzquierda($digito);
        $numeroqueEscribir = "";
        if ($digito > 3) {
            $numeroqueEscribir = $this->cogerLimite($digito);
        }
        if ($lugarEscribo == 'I') {
            $devuelve = $devuelve . $numeroqueEscribir;
        }
        if ($lugarEscribo == 'D') {
            $devuelve = $numeroqueEscribir . $devuelve;
        }
        return $devuelve;
    }

    public function cogerLimite($digito) {
        if ($digito == 9) {
            return 'X';
        } else {
            return 'V';
        }
    }

    public function derechaIzquierda($digito) {
        if ($digito == 9) {
            return 'I';
        }

        if ($digito > 5) {
            return 'D';
        } else {
            return 'I';
        }
    }

    public function contador($digito) {
        if ($this->tocaLimite($digito) !== 0) {
            return 1;
        }
        if ($digito == 5) {
            return 0;
        }


        $contador = 0;
        while ($digito > 5 + $contador) {
            $contador++;
        }

        if ($digito < 5) {
            $contador = $digito;
        }
        return $contador;
    }

    public function tocaLimite($digito) {

        if ($digito + 1 == 5 || $digito - 1 == 5) {
            return 5;
        }
        if ($digito + 1 == 10) {

            return 10;
        }
        return 0;
    }

//put your code here
}
