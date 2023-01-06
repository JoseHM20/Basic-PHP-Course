<?php
/* UTILIZANDO EL CICLO WHILE

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// EJEMPLO 1 - CONTADOR
$i = 1;
while ($i < 10) {
    $i = $i + 1
    echo "Contador: $i \n";
}

// EJEMPLO 2 - DO WHILE
$i = 20;
do { // Se determina que al menos se debe ejecutar una vez, aunque no se cumpla
    echo $i++;
} while ($i < 10);
?>