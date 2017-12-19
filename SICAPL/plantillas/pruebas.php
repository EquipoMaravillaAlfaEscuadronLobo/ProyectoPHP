<?php
$titulo1 = "purebaa";
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>


<?php
ini_set('date.timezone', 'America/El_Salvador');
$hora = date("Y/m/d ") . date("h:i:s");
echo $hora;
//echo date("d/m/Y") . " " . date("h:i:s")

?>


<?php
include_once './pie_de_pagina.php';
?>

