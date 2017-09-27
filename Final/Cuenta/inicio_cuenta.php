<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
?>
<div class="nav-content nav-pills" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a class="active" href="#test1">
                <i class="fa fa-user" aria-hidden="true"></i> Modificar Mis Datos
            </a>
        </li>
        <li class="tab">
            <a class="" href="#test2">
                <i class="fa fa-user" aria-hidden="true"></i> Notificaciones
            </a>
        </li>
        
        
        <li class="tab">
            <a href="#test3">
                <i class="fa fa-book" aria-hidden="true"></i> Cerrar Sesion
            </a>
        </li>

    </ul>
</div>
</nav>

<div class="col s12" id="test1">
    <?php include_once './registro_administrador.php'; ?>
  </div>
<div class="col s12" id="test2">
     <?php include_once './listado_administrador.php'; ?>
</div>

<div class="col s12" id="test3">
    <h3>modificancion</h3>
</div>


<?php
include_once '../plantillas/pie_de_pagina.php';
?>


