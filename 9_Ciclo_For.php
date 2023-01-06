<?php
/* UTILIZANDO EL CICLO FOR

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

/* Sintaxis: for (variable inicio; condicional; incremento) {
    ...
}*/

// EJEMPLO 1 - CONTADOR
for ($i = 0; $i <= 10; $i++){
    echo "Vamos en el numero $i \n";
}

// EJEMPLO 2 - FACTORIAL DE 5
$factorial = 1;
for($numero = 5; $numero > 1; $numero = $numero - 1 ) {
   $factorial = $factorial * $numero;
}
echo "El factorial de $numero es $factorial".
?>