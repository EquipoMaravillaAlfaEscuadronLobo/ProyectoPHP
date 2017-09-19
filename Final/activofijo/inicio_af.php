 <?php
$titulo1 = "Activo Fijo";
include_once('../plantillas/cabecera.php');
include_once('../plantillas/menu.php');
?>
        
    <div class="nav-content" name="">
                <ul class="tabs tabs-transparent">
                    <li class="tab">
                        <a class="active" href="#test2">
                         <i class="fa fa-server" aria-hidden="true"></i>    Inventario
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test1">
                            <i class="fa fa-plus" aria-hidden="true"></i>  Registro de Activo Fijo
                        </a>
                    </li>
                    
                    
                    <li class="tab">
                        <a href="#test3">
                          <i class="fa fa-wrench" aria-hidden="true"></i>  Mantenimiento
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test4">
                           <i class="fa fa-handshake-o" aria-hidden="true"></i> Prestamo
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test5">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Consultas
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test6">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            Reportes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

      
   
   <div class="col s12" id="test1">
           
           <?php include('./registro_activo.php');?>
        </div>
        <div class="col s12" id="test2">
           <?php include('./listado_act.php');?>
        </div>
        <div class="col s12" id="test3">
           < <?php include('./listado_act_mant.php');?>
        </div>
        <div class="col s12" id="test4">
            <?php include('./listado_prest_act.php');?>
        </div>
        <div class="col s12" id="test5">
             <?php include('./registrar_af2.php');?>
        </div>
        <div class="col s12" id="test6">
            <h1>Reportes</h1>
        </div>

<?php
include_once('../plantillas/pie_de_pagina.php');
?>