<?php
/* CREAR SESIONES DE USUARIO

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// cREAR SESION
session_start();
$_SESSION['nombre'] = 'Jose';

// Comprobamos si existe con isset()
if (isset($_SESSION['nombre'])) {
    // Si esta identificado, en otras palabras existe la variable, le saludamos
    echo 'Hola ' . $_SESSION['nombre'];
} else {
    // En caso contrario redirigimos el visitante a otra página
    header('Location: http://dragonball.jp/login.php');
    die();
}

// Eliminar la sesion
session_destroy();
?>