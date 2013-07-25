<?php
namespace Konoha\Model;
/*
* Classe calculadora
*/
class Calculadora {

    /**
     * Realiza Soma
     * @param integer $a
     * @param integer $b
     * @return integer
     */
    public function soma($a, $b) {
        return $a + $b;
    }

    /**
     * Realiza Subtracao
     * @param integer $a
     * @param integer $b
     * @return integer
     */
    public function subtrai($a, $b) {
        return $a - $b;
    }
}