<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
?>
<div class="nav-content nav-pills" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a class="active" href="#test1">
                <i class="fa fa-user" aria-hidden="true"></i> Registro Administradores
            </a>
        </li>
        <li class="tab">
            <a class="" href="#test5">
                <i class="fa fa-user" aria-hidden="true"></i> Editar Administradores
            </a>
        </li>
        
        
        <li class="tab">
            <a href="#test2">
                <i class="fa fa-book" aria-hidden="true"></i> Clasificacion De Activos
            </a>
        </li>


        <li class="tab">
            <a href="#test3">
                <i class="fa fa-compass" aria-hidden="true"></i> Bitacora
            </a>
        </li>
        <li class="tab">
            <a href="#test4">
                <i class="fa fa-save" aria-hidden="true"></i> Backup
            </a>
        </li>

    </ul>
</div>
</nav>

<div class="col s12" id="test1">
    <?php include_once './registro_administrador.php'; ?>
  </div>
<div class="col s12" id="test5">
     <?php include_once './listado_administrador.php'; ?>
</div>

<div class="col s12" id="test2">
    <h3>modificancion</h3>
</div>

<div class="col s12" id="test3">
      <?php include_once './bitacora.php'; ?>
</div>
<div class="col s12" id="test4">
    <h1>Reportes</h1>
</div>


<?php
include_once '../plantillas/pie_de_pagina.php';
?>


