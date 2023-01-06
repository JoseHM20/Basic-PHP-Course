<?php
/* CREANDO CONDICIONALES SWITCH

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

$num = 1;
if ($num == 0) {
    echo "num es igual a 0";
} elseif ($num == 1) {
    echo "num es igual a 1";
} elseif ($num == 2) {
    echo "num es igual a 2";
} else {
    echo "No se a que es igual";
}
// num es igual a 1

// Switch es parecido a if, aunque solo permite la igualacion (==)
switch ($num) {
    case 0:
        echo "num es igual a 0";
        break;
    case 1:
        echo "num es igual a 1";
        break;
    case 2:
        echo "num es igual a 2";
        break;
    default:
        echo "No se a que es igual";
        break;
}

?>
