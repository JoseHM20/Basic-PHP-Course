<?php
/* CREANDO ARREGLOS - PARTE 3

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Jugar con las cadenas de texto
$saludo = "Hola";
$saludo[4] = "!";
echo $saludo;

// Convertir string a array
$frase = 'Este es un mensaje de bienvenida';
$fraseToArray = explode(",", $frase);
echo $fraseToArray
foreach ($fraseToArray as $ArrayNew){
    echo $palabra . '>br/<';
}
?>