<?php 
/* INICIAR Y CERRAR SESIONES

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Iniciamos las sesiones
session_start();
// Destruimos las sesiones
session_destroy();
// Llevamos a login.php
header('Location: login.php');
die();
?>