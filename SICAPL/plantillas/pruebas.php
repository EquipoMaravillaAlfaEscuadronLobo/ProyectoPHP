<?php
$titulo1 = 'pagina de pruebas';
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>

<form action="" id="FORMULARIO" method="POST" enctype="multipart/form-data">
    <input type="text" name="nameUser">
    <input type="file" name="nameFotoZ" id="idFotoz">
    <input type="hidden" name="bandera" id="bandera"/>
    <input type="submit" value="aceptar" onclick="ok()">
</form>

<script>
function ok(){
    document.getElementById('bandera').value="ok";    
    document.FORMULARIO.submit();
}
</script>

<?php

if (isset($_REQUEST["bandera"])) {

include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';

Conexion::abrir_conexion();

$administrador = new Administrador();
//echo 'nombre recuperado es ' . $_REQUEST["nameUser"];
//echo 'foto recuperado es ' . $_REQUEST["nameFotoZ"];

  //$variable = addslashes(file_get_contents($_FILES['nameFotoZ']['tmp_name']));


$administrador->setCodigo_administrador($_REQUEST['nameUser']);
$administrador->setFoto(addslashes(file_get_contents($_FILES['nameFotoZ']['tmp_name'])));
Repositorio_administrador::insertar_administrador(Conexion::obtener_conexion(), $administrador);
Conexion::cerrar_conexion();
include_once '../plantillas/pie_de_pagina.php';
}
?>




?>