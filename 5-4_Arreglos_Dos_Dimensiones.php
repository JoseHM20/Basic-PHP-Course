<?php
/* CREANDO ARREGLOS BIDIMENSIONALES - PARTE 3

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

$Alumnos => [
    "Carlos" => [
        "Matricula" => 1920001,
        "Semestre" => 3,
        "Sexo" => "Hombre"
    ],

    "Lucia" => [
        "Matricula" => 1920002,
        "Semestre" => 5,
        "Sexo" => "Mujer"
    ]
];

// Mostrar en pantalla
echo $Alumnos["Carlos"]["Matricula"];
?>