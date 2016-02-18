<?php

// Incluye todo el contenido de Calculadora.php en este archivo
require("Calculadora.php");

$primerValor = $_REQUEST['primerValor'];
$segundoValor = $_REQUEST['segundoValor'];
$operacion = $_REQUEST['operacion'];

$calculadora = new Calculadora();
if ($operacion == $calculadora::SUMA) {
    $resultado = $calculadora->sumar($primerValor, $segundoValor);
    $oracion = "El resultado de sumar " . $primerValor . " y " . $segundoValor . " es " . $resultado . ".";
} else {
    $oracion = 'Operacion no implementada';
}

echo($oracion);
