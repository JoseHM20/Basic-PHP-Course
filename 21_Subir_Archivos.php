<html>
    <body>
        <?php
            /* SUBIR ARCHIVOS DESDE FORMULARIOS EN PHP
            
            UNIVERSIDAD AUTONOMA DE NUEVO LEON
            FACULTAD DE CIENCIAS FISICO MATEMATICAS
            SEMESTRE AGOSTO - DICIEMBRE 2022 
            
            JOSE LUIS HERNANDEZ MEZA - 1950471 */

            // Comprobamos si nos llega los datos por POST
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Definir directorio donde se guardará
                $dir_subida = './subidos/';
                // Definir la ruta final del archivo
                $fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);
                // Mueve el archivo de la carpeta temporal a la ruta definida
                if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
                    // Mensaje de confirmación donde todo ha ido bien
                    echo '<p>Se subió perfectamente.</p>';
                    // Muestra la imagen que acaba de ser subida
                    echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
                } else {
                    // Mensaje de error: ¿Límite de tamaño? ¿Ataque?
                    echo '<p>¡Ups! Algo ha pasado.</p>';
                }
            }
        ?>
        <!-- Formulario -->
        <form method="post" enctype="multipart/form-data">
            <p>
                <!-- Campo imagen -->
                <input type="file" name="fichero_usuario">
                <!-- Limitar el tamaño del archivo -->
                <input type="hidden" name="MAX_FILE_SIZE" value="20000" />
            </p>
            <p>
                <!-- Botón submit -->
                <input type="submit" value="Enviar">
            </p>
        </form>
    </body>
</html>
