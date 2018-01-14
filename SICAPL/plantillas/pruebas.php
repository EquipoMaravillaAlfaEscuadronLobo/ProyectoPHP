<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../modelos/Usuario.php';
include_once '../repositorios/repositorio_usuario.inc.php';
include_once '../app/Conexion.php';
//echo $_SESSION['nivel'];  

Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
?>
</nav>
<form action="">
<div class="file-field input-field">
    <div class="btn">
        <span><i class="glyphicon glyphicon-picture"></i>Foto</span>
        <input type="file" id="files" name="foto" accept="image/*">

    </div>


    <div class="file-path-wrapper">
        <input type="text" accept="image/*"  class="form-control file-path validate" name="foto" required="">
    </div>
</div>
    <input type="submit" value="enviar">
    </form>


<?php
include_once '../plantillas/pie_de_pagina.php';
?>


