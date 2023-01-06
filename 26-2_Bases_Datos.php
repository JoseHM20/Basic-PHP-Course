<?php 
/* CONEXION A BASES DE DATOS SQLITE

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471 */

// Variable importante de la sesion
$hostDB = 'mibasededatos.sqlite';

// Conexion con la base de datos
$hostPDO = "sqlite:$hostDB";
$miPDO = new PDO($hostPDO);

// Crearemos una consulta SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM Escuelas;');
$miInsert = $miPDO->prepare('INSERT INTO alumnos (nombre, email, codigo_postal) VALUES (:nombre, :email, :codigo_postal)');

// Ejecutamos la consulta antes creada
$miConsulta->execute();
$miInsert->execute(
    array(
        'nombre' => 'beethoven',
        'email' => 'beethoven@cuatroestaciones.com',
        'codigo_postal' => '1234'));

// Mostrar los resultados de la consulta
$resultados = $miConsulta->fetchAll();
foreach ($resultados as $posicion => $columna) {
    echo $columna['nombre'];
}

?>