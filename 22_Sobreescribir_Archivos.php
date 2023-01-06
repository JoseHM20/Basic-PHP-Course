<?php
/* ELIMINAR Y EVITAR QUE SE SOBREESCRIBAN ARCHIVOS

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Eliminar archivos de una ruta
unlink('subidos/coche_rojo.jpg');

/* Los archivos no pueden ser sobreescritos, 
pues cuentan con una clave hash distinta al resto */

// Ejemplo con texto
$texto = "Este es un texto a cifrar"
echo sha1("$texto");

// Ejemplo con archivo
echo sha1_file($_FILES['fichero_usuario']['tmp_name']);
?>
