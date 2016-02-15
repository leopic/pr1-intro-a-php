<?php

class Calculadora {
    /**
     * Toma el $primerValor y lo suma al $segundoValor;
     *
     * @param integer   $primerValor
     * @param integer   $segundoValor
     * @return integer
     */
    public function sumar($primerValor, $segundoValor) {

        // Si $primerValor y $segundoValor estan definidas
        if (isset($primerValor, $segundoValor)) {
            return $primerValor + $segundoValor;
        }

        return null;
    }
}
