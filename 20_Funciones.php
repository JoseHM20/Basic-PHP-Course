<?php
/* CREANDO FUNCIONES EN PHP

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// EJEMPLO 1
function saludar(string $nombre = 'Anónimo'): string{
    return "Hola, persona llamada $nombre";}
echo saludar();

// EJEMPLO 2
function saludar(string $nombre = 'Anónimo', string $profesion = 'ninguna'): string{
    return 'Hola, persona llamada ' . $nombre .'. Por lo que veo tu nombre mide ' . strlen($nombre) . ' carácteres. De profesión ' . $profesion . '.';}
echo saludar();
echo saludar('Espartaco');
echo saludar('Picasso', 'pintor');

// EJEMPLO 3
function incrementar(int $num): int{
    return $num + 1;}
echo incrementar(4.5);
// 5

// EJEMPLO 4
$tienda = 'pescadería';
function () use ($tienda){
    return "Estoy en la $tienda";}
?>