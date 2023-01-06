<?php
/* VARIABLES EN PHP

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Cadena de texto
$Nombre = "Jose Luis";
echo $Nombre;

// Numeros enteros
$edad = 10;
echo $edad;

// Numeros reales
$peso = 67.12333;
echo $peso;

// Boleanos
$verdadero = true;
$Falso = false;

// Introduccion a arreglos
$sentido[1]="ver";
$sentido[2]="tocar";
$sentido[3]="oir";
$sentido[4]="gusto";
$sentido[5]="oler";

// Variables con tipado dinamico
$num_1 = "3"; // Cadena de texto
$num_2 = 2; // Numero entero
echo $num_1 + $num_2; // La suma dara 5 a pesar de ser valores diferentes

// Referenciar variables
$nombre = "Mauricio";
$nombre_2 = &$nombre;
$nombre_2 = "Mi nombre es $nombre_2";
echo $Nombre;
echo $nombre_2;

// Cambiar el valor de variables
$var_1 = 10;
$var_1 = 20;
echo $var_1;

// Forzar cambio de variables ("integer", "double", "string", "array", "object", "binary")
// Forma 1
$cambiar = settype($var_1, "string");
echo $cambiar;
// Forma 2
$cambiar_2 = "10";
$cambiar_2 = (int)$cambiar_2;

/* Tambien contamos con variables locales y globales.
Las variables locales no pueden usarse en otro script o otra pagina, 
mientras que las varibles globales pueden usarse en cualquier documento.*/
$VariableLocal = 10;
$propietario = "Jose Luis";
global $propietario;

/* Por otro lado existen variables que no queremos 
que se modfiquen, como la del número PI, velocidad de la luz, 
fuerza de la gravedad, días de la semana, etc. Para ello
usaremos las variables constantes*/
// Forma 1
define('GRAVEDAD', 9.8);
echo GRAVEDAD;
// Forma 2
const SEMANA = 7;
echo SEMANA;


?>
