<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
?>
<div class="nav-content nav-pills" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a class="active" href="#test1">
                <i class="fa fa-edit" aria-hidden="true"></i> Modificar Mis Datos
            </a>
        </li>
        <li class="tab">
            <a class="" href="#test2">
                <i class="fa fa-bell" aria-hidden="true"></i> Notificaciones
            </a>
        </li>
    </ul>
</div>
</nav>

<div class="col s12" id="test1">
<?php
include_once './editar_mis_datos.php';
?>
  </div>
<div class="col s12" id="test2">
     
</div>

<?php
include_once '../plantillas/pie_de_pagina.php';
?>


