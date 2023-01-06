<?php
/* ENVIAR CORREOS ELECTRONICOS

UNIVERSIDAD AUTONOMA DE NUEVO LEON
FACULTAD DE CIENCIAS FISICO MATEMATICAS
SEMESTRE AGOSTO - DICIEMBRE 2022 

JOSE LUIS HERNANDEZ MEZA - 1950471

Se requiere de un servidor SMTP configurado 
Pasos a seguir en el sistema:operativo linux

1. instalar SMTP
sudo apt-get install ssmtp
2. Abrir configuracion de PHP
sudo nano /etc/php/{versión}/cli/php.ini
3. Modificar la siguiente linea y guardamos
sendmail_path = /usr/sbin/ssmtp -t
4. Configurar SMTP para que se conecte con GMAIL
sudo nano /etc/ssmtp/ssmtp.conf

5. Modificar las siguientes lineas y guardar
root=micuenta@gmail.com
mailhub=smtp.gmail.com:587
rewriteDomain=midomonio.com
hostname=FQDN.yourdomain.com
UseTLS=Yes
UseSTARTTLS=Yes
AuthUser=micuenta@gmail.com
AuthPass=micontraseña
FromLineOverride=yes
*/

// EJEMPLO 1 - ENVIAR DE FORMA DIRECTA
// Encabezado del correo
$headers = [
    "From" => "curso@php.com",
    "Content-type" => "text/plain; charset=utf-8"
];
// Funcion para enviar
mail("correo@falso.com", "Día especial", "Gracias por suscribirte", $headers);

// EJEMPLO 2 - ENVIAR EN FORMA HTML
// Nuestro mensaje debe ser HTML
$mensaje = '
<html>
<head>
  <title>Feliz día del SPAM</title>
</head>
<body>
  <p>¿Qué tal?</p>
  <table>
    <tr>
      <th>Usuario</th>
      <th>Apellido</th>
      <th>Nacimiento</th>
    </tr>
    <tr>
        <td>Barba</td>
        <td>Negra</td>
        <td>1718</td>
    </tr>
  </table>
</body>
</html>
';

// Define que será de tipo será nuestro mensaje: HTML. Y la dirección del emisor.
$headers = [
    'MIME-Version' => '1.0',
    'Content-type' => 'text/html; charset=utf-8',
    'From' => 'curso@php.com'
];

// Enviamos nuestro correo
mail('correo@falso.com', 'Día especial', $mensaje, $headers);
?>