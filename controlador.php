<?php

// Incluye todo el contenido de CalculadoraService.php en este archivo
require("CalculadoraService.php");

/**
 * Existe una variable superglobal llamada `$_GET` que contiene un diccionario
 * con todos los datos enviados en el URL.
 */
$primerValor = $_GET['primerValor'];
$segundoValor =  $_GET['segundoValor'];
$operacion = $_GET['operacion'];

// Obtenemos una instancia del servicio de calculadora
$calculadora = new CalculadoraService();

// Verificamos si la operacion solicitada se encuentra dentro de las disponibles
if ($operacion == 'suma') {
    $resultado = $calculadora->sumar($primerValor, $segundoValor);
    $oracion = "El resultado de sumar " . $primerValor . " y " . $segundoValor . " es " . $resultado . ".";
} else {
    $oracion = 'Operacion no implementada';
}

// Enviamos de vuelta la oracion con el resultado
echo($oracion);
