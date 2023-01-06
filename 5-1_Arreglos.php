<?php
/* CREANDO ARREGLOS - PARTE 1

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// EJEMPLO 1
// Crear arreglos
$nombres = [];

// Añadir elementos a un arreglo
$nombres[] = "Carlos"
$nombres[] = "Luis"
$nombres[] = "David"
$nombres[] = "Pablo"

// Mostrar
var_dump($nombres)

// Contar los elementos de un arreglo
echo count($nombres)


// EJEMPLO 2
// Definir un arreglo
$edades = [10, 12, 13]

// Crear un nuevo arreglo
$NuevasEdades = array_merge($edades, [15]);

// Mostrar
var_dump($NuevasEdades)

// Cambiar elementos de un arreglo
$edades[1] = 25
var_dump($edades)

// Borrar elementos de un arreglo
unset($edades[0])
var_dump($edades)
?>