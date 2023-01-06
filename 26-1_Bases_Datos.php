<?php 
/* CONEXION A BASES DE DATOS MYSQL

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Variables importantes
$hostDB = '127.0.0.1';
$nombreDB = 'ejemplo';
$usuarioDB = 'root';
$contrasenyaDB = '123';

// Hacer conexion con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Crear una consulta SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM Escuelas;');

// Ejecutar la consulta
$miConsulta->execute();

// Mostrar resultados
$resultados = $miConsulta->fetchAll();
foreach ($resultados as $posicion => $columna) {
    echo $columna['nombre'];
}
?>
