<?php
/* CREANDO DICCIONARIOS

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Crear diccionario
$matriculas => [
    1922724 => "Pablo",
    2046255 => "Teresa",
    1359785 => "Mariela"
];

// Se debe de buscar el texto mediante su clave
echo $matriculas[2046255];

// Agregar elementos (aplica igual para modificar)
$matriculas[1643254] = "Carlos";

// Borrar elementos de un arreglo
unset($matriculas[1922724]);
var_dump($matriculas);
?>