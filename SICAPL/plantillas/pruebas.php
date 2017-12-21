<?php
$titulo1 = "purebaa";
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>


<?php
//bool phpinfo ([ int $what = INFO_ALL ];
//phpinfo();


include_once '../repositorios/repositorio_backup.php';
repositorio_backup::otroa();
?>


<?php
include_once './pie_de_pagina.php';
?>

