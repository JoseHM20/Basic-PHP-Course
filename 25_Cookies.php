<?php 
/* CREANDO COOKIES

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Crear una cookie: setcookie('nombre', 'valor', 'caducidad');
$caducidad = time() + 60; // Caducará en 60 segundos
setcookie('idioma', 'es', $caducidad);
echo $_COOKIE['idioma']; // -> es

// Actualizar cookie
setcookie('idioma', 'fr');
echo $_COOKIE['idioma']; // -> fr

// Borrar cookie
unset($_COOKIE['idioma']);

?>