<?php

// Segundo ejemplo
$primerValor = $_REQUEST['primerValor'];
$segundoValor =  $_REQUEST['segundoValor'];
$resultado = $primerValor + $segundoValor;
$oracion = "El resultado de sumar " . $primerValor . " y " . $segundoValor . " es " . $resultado . ".";

echo($oracion);
