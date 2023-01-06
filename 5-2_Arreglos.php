<?php
/* CREANDO ARREGLOS - PARTE 2

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Dias de la semana
$semana = [
    'Lunes', # Lugar 0
    'Martes', # Lugar 1
    'Miércoles', # Lugar 2
    'Jueves', # Lugar 3
    'Viernes', # Lugar 4
    'Sábado', # Lugar 5
    'Domingo' # Lugar 6
];

// Tipos de datos
$DescribePersona = [
    'Carolina',
    19,
    True,
    1.63
];


// Imprimir ciertos elementos
echo $semana[0]; # Lunes
echo $semana[2]; # Miercoles
echo $semana[4]; # Viernes
echo $semana[6]; # Domingo

/* Imprimir toda la informacion posible, como la longitud del array, 
la posición de cada elemento, su tipo, longitud de cada valor y 
el propio valor que almacena.*/
var_dump($semana);
?>