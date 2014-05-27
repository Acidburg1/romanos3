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

    public function devuelve($numero) {
        //return "I";
        $devuelve = "";
        $digito = strlen($numero) - 1;
        $digito = (Integer) $numero[$digito];
        $limite = $this->tocaLimite($digito, 0);
        print($digito);

        return $devuelve = $this->devuelveCifra($digito);
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
