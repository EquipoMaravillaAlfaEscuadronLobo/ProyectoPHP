<?php
$titulo1 = "Activo Fijo";
include_once('../plantillas/cabecera.php');
include_once('../plantillas/menu.php');
?>     
    <div class="nav-content" name="">
                <ul class="tabs tabs-transparent">
                    <li class="tab">
                        <a  href="#ttest2">
                         <i class="fa fa-server" aria-hidden="true"></i>    Inventario
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#ttest1">
                            <i class="fa fa-plus" aria-hidden="true"></i>  Registro de Activo Fijo
                        </a>
                    </li>
                    
                    
                    <li class="tab">
                        <a href="#ttest3">
                          <i class="fa fa-wrench" aria-hidden="true"></i>  Mantenimiento
                        </a>
                    </li>
                    <li class="tab">
                        <a class="active" href="#ttest4">
                           <i class="fa fa-handshake-o" aria-hidden="true"></i> Prestamo
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#ttest5">
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                            Consultas
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#ttest6">
                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            Reportes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

      
   
   <div class="col s12" id="ttest1">
           
          <?php include('registro_act.php');?> 
        </div>
        <div class="col s12" id="ttest2">
            <?php include('listado_act.php');?> 
        </div>
        <div class="col s12" id="ttest3">
            <?php include('listado_act_mant.php');?> 
        </div>
        <div class="col s12" id="ttest4">
            <?php include('listado_prest_act.php');?> 
        </div>
        <div class="col s12" id="ttest5">
             
        </div>
        <div class="col s12" id="ttest6">
            
        </div>

<?php
include_once('../plantillas/pie_de_pagina.php');
?>




<div id="nuevoMant" class="modal modal-fixed-footer nuevo">
    <div class="modal-heading panel-heading">
        Registrar Mantenimiento
    </div>
    <div class="modal-content ">    
        <?php include('registrar_mant.php');?>
    </div>
     <div class="modal-footer">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<div id="nuevoEncargado" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading">
        Registrar Encargado de Mantenimiento 
    </div>
    <div class="modal-content"> 
    <?php include('nuevo_encargado.php');?>
    </div>
     <div class="modal-footer ">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>
<div id="actualizarCaracteristicas" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading">
       Actualizar Detalles Activo Fijo
    </div>
    <div class="modal-content"> 
        
    <?php include('actualizar_caracteristicas.php');?>
    </div>
     <div class="modal-footer ">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

