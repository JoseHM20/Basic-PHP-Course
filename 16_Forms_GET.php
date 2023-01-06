<html>
    <body>
        <form method="get">
            <input type="text" name="nombre">
            <input type="number" name="edad">
            <input type="submit">
        </form>
        <?php
        /* METODO GET
        
        UNIVERSIDAD AUTONOMA DE NUEVO LEON
        FACULTAD DE CIENCIAS FISICO MATEMATICAS
        SEMESTRE AGOSTO - DICIEMBRE 2022 
        
        JOSE LUIS HERNANDEZ MEZA - 1950471 
        
        El metodo GET hara que los datos insertados aparezcan en la URL */

        $nombre = isset($_REQUEST["nombre"]) ? $_REQUEST["nombre"]:"";
        $edad = isset($_REQUEST["edad"]) ? $_REQUEST["edad"]:"";
        echo $nombre
        echo $edad
        ?>
    </body>
</html>