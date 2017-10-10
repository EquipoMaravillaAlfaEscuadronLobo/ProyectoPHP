<?php
include_once './cabecera.php';
include_once './menu.php';

?>        
</nav>

<form action="" method="POST">
            <input type="radio" name="nameSexo" value="Masculino" id="dd">masculino
            <input type="radio" name="nameSexo" value="Femenino" id="aa">femenino
            <input type="submit" value="enviar">
        </form>


<?php
echo $_REQUEST['nameSexo'];

?>