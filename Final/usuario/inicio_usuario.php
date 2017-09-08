<?php
$titulo1 = 'Gestion de Usuario';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
?>
<div class="nav-content" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a class="active" href="#test1">
                <i class="fa fa-plus" aria-hidden="true"></i>Registro
            </a>
        </li>
        <li class="tab">
            <a href="#test2">
                <i class="fa fa-book" aria-hidden="true"></i>  Modificacion
            </a>
        </li>


        <li class="tab">
            <a href="#test3">
                <i class="fa fa-list-alt" aria-hidden="true"></i> Consulta
            </a>
        </li>
        <li class="tab">
            <a href="#test4">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                Reporte
            </a>
        </li>

    </ul>
</div>
</nav>

<div class="col s12" id="test1">

  <?php include('registro_usuario.php'); ?>
</div>
<div class="col s12" id="test2">
    <?php include_once './listado_usuario.php';?>
</div>

<div class="col s12" id="test3">
    <h1>Consultas</h1>
</div>
<div class="col s12" id="test4">
    <h1>Reportes</h1>
</div>


<?php
include_once '../plantillas/pie_de_pagina.php';
?>


