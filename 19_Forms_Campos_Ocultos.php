<html>
    <body>
        <form>
            <input type="hidden" name="maquina-enigma" value="149">
            <input type="submit">
        </form>
        <?php
        /* HACER CAMPOS OCULTOS CON HIDDEN
        
        UNIVERSIDAD AUTONOMA DE NUEVO LEON
        FACULTAD DE CIENCIAS FISICO MATEMATICAS
        SEMESTRE AGOSTO - DICIEMBRE 2022 
        
        JOSE LUIS HERNANDEZ MEZA - 1950471 
        
        Este metodo permite que junto con los datos del usuario,
        tambien se envien datos como id, token, historico, etc. */

        $codigoSecreto = isset($_REQUEST['maquina-enigma']) ? $_REQUEST['maquina-enigma'] : '';
        echo $codigoSecreto;
        ?>
    </body>
</html>