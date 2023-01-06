<?php
/* UTILIZANDO EL CICLO FOREACH

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// EJEMPLO 1
// Crear arreglos
$amigos = ["Marisol", "Emilio", "Kassandra", "Maria", "Benito"];

// Crear un bucle for
foreach ($amigos as $iterador) {
    echo $iterador . ' ';
};

// Si se requiere la posicion
foreach ($amigos as $posicion => $iterador) {
    echo "Mi amigo $amigos ocupa la posicion $posicion";
};


// EJEMPLO 2
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

// Recorrer arreglos
foreach ($Alumnos as $lista) {
    foreach ($lista as $elemento) {
        echo "$elemento \n";
    }
};
?>