<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
?>
<div class="nav-content nav-pills" name="">
    <ul class="tabs tabs-transparent">
       
        <li class="tab">
            <a class="active" href="#test2">
                <i class="fa fa-bell" aria-hidden="true"></i> Notificaciones
                <span style="font-weight: bold; font-size: 15px" class="label-count">(<?php echo $numero; ?>)</span>
            </a>
        </li>
         
    </ul>
</div>
</nav>


<div class="col s12" id="test2">
    <?php
    include_once './notificaciones.php';
    ?>
</div>

<?php
include_once '../plantillas/pie_de_pagina.php';
?>


