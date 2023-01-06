<?php
/* USANDO FUNCIONES EN LOS CONDICIONALES

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Verificar que un texto esta dentro de otro
if (str_containsstr_contains('Aqui hya un mensaje', 'hay')){
    print("La palabra fue encontrada")
}

// Verificar si un texto comienza con otro
if (str_starts_with("Aqui comienza el mensaje", "Aqui comienza")){
    print("Si empieza el mensaje con ese texto")
}

if (str_end_with("Aqui termina el mensaje", "mensaje")){
    print("Si se termina el mensaje con esa palabra")
}
?>