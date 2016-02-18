<?php

// Referencia de sintaxis

// Variables:
$cadenaDeTexto = "Hola Mundo!";
$numero = 4;
$arregloDeTexto = ["uno", "dos", "tres", "catorce"];
define("CONSTANTE", "VALOR QUE NUNCA CAMBIA");
$nombre = null;
$algunaCondicion = true;

// IFs:
if ($algunaCondicion) {
    $nombre = "Ash";
} else {
    $nombre = "Red";
}

// FORs:
for ($i = 0; $i < 10; $i++) {
    print("Hola: $i \n");
}

// Comentarios:
// Una linea
/**
 * Varias lineas
 */

// Strings:
// Concatenar
echo("Hola " . "Mundo" . "!");

// Remplazar contenido
$sujeto = "Hola Mundo!";
$resultado = str_replace("Hola", "Adios", $sujeto);

// Unir un array como string
$partes = ["a", "b", "c"];
$partesUnidas = implode($partes);

// Separar una oracion como string
$oracionSeparada = "Hola Mundo";
$oracionComoArray = explode(" ", $oracionSeparada);
var_dump($oracionComoArray);

// Funciones:
// Ambos parametros son requeridos
function sumar($primerValor, $segundoValor) {
    return $primerValor + $segundoValor;
}

// El segundo parametro tiene un valor predeterminado de cero
function sumarV2($primerValor, $segundoValor = 0) {
    return $primerValor + $segundoValor;
}

// Arreglos:
// Crear
$arregloVacio = [];
$arreglo = [1, 2, 3];

// Agregar elementos
$arreglo[] = 4;
array_push($arreglo, 5);

// Verificar que el arreglo tenga contenido
if (empty($arreglo) || count($arreglo) == 0) {
    echo("Arreglo vacio.\n");
}

// Remover elemento
array_splice($arreglo, 1, 1);

// Iterar sobre un arreglo
for ($i = 0; $i < count($arreglo); $i++) {
    echo("Entrada: " . $arreglo[$i] . "\n");
}

// Iterar sobre un arreglo
foreach ($arreglo as $entrada) {
    echo("Entrada: " . $entrada . "\n");
}

// Diccionarios:
// Crear
$diccionario = [
    "llave1"    => 1,
    "anidado"    => [
        "llave2" => 2
    ]
];

// Accediendo
$diccionario["llave1"];
$diccionario["anidado"]["llave2"];

// Agregando elemento
$diccionario["llave3"] = 3;

// Buscando una llave particular
if (array_key_exists("llave3", $diccionario)) {
    echo("La llave llave3 existe. \n");
}

// Obteniendo la lista de llaves
$llaves = array_keys($diccionario);

// Revisando el contenido del diccionario
if (empty($diccionario) || count($llaves) == 0) {
    echo("El diccionario esta vacio. \n");
}

// Iterando sobre cada elemento
foreach ($diccionario as $elemento) {
    var_dump($elemento);
}

// Iterando sobre cada elemento
foreach ($diccionario as $llave => $valor) {
    var_dump($llave);
    var_dump($valor);
}

// Objetos
class Prueba {
    private $fechaDeCreacion;

    /**
     * Prueba constructor.
     */
    public function __construct()
    {
        $this->fechaDeCreacion = new DateTime();
    }

    /**
     * @return DateTime
     */
    public function getFechaDeCreacion()
    {
        return $this->fechaDeCreacion;
    }

    /**
     * @param DateTime $fechaDeCreacion
     * @return Prueba
     */
    public function setFechaDeCreacion($fechaDeCreacion)
    {
        $this->fechaDeCreacion = $fechaDeCreacion;
        return $this;
    }

}

$objetoDePrueba = new Prueba();
var_dump($objetoDePrueba->getFechaDeCreacion());
