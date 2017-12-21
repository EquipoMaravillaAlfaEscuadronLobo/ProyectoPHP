<?php
$titulo1 = "purebaa";
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>


<?php
//phpinfo();
include_once '../repositorios/repositorio_backup.php';
repositorio_backup::generar_backup();
?>


<?php
include_once './pie_de_pagina.php';
?>

