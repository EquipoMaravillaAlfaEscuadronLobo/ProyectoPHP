<?php
$titulo1 = "Activo Fijo";
include_once('../plantillas/cabecera.php');
include_once('../plantillas/menu.php');
?>     
<div class="nav-content" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a  href="#ttest2" id="inventario">
                <i class="fa fa-server" aria-hidden="true"></i>    Inventario
            </a>
        </li>
        <li class="tab">
            <a href="#ttest1">
                <i class="fa fa-plus" aria-hidden="true"></i>  Registro de Activo Fijo
            </a>
        </li>


        <li class="tab">
            <a href="#ttest3" >
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

    <?php include('registro_act.php'); ?> 
</div>
<div class="col s12" id="ttest2">
    <?php include('listado_act.php'); ?> 
</div>
<div class="col s12" id="ttest3">
    <?php include('listado_act_mant.php'); ?> 
</div>
<div class="col s12" id="ttest4">
    <?php include('listado_prest_act.php'); ?> 
</div>
<div class="col s12" id="ttest5">
   <?php include('consultas.php'); ?>
</div>
<div class="col s12" id="ttest6">
     <?php include('reportes.php'); ?>
</div>

<?php
include_once('../plantillas/pie_de_pagina.php');
?>

<div id="nuevoMant" class="modal modal-fixed-footer prestamoActivo nuevoMant">
    <div class="modal-heading panel-heading text-center">
        <h4>Registrar Mantenimiento</h4>
    </div>
    <div class="modal-content ">    
        <?php include('registrar_mant.php'); ?>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><button  class="btn btn-success " type="submit" form="mant" >
                    <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>


<div id="nuevoEncargado" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading text-center">
        <h4> Registrar Encargado de Mantenimiento </h4> 
    </div>
    <div class="modal-content"> 
        <?php include('nuevo_encargado.php'); ?>
    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-6 text-right"><button  class="btn btn-success  " type="submit" form="FORMUL" >
                    <span class="glyphicon glyphicon-floppy-disk" ></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>


<div id="actualizarCaracteristicas" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading text-center">
        <h4>   Actualizar Detalles Activo Fijo</h4>
    </div>
    <div class="modal-content"> 

        <?php include('actualizar_caracteristicas.php'); ?>
    </div>
    <div class="modal-footer "> 
        <div class="row">
            <div class="col-md-6 text-right">
                <button  class="btn btn-success "  type="button" onclick="copiarDetalles()">
                    <span class="glyphicon glyphicon-floppy-disk" ></span>
                    Guardar</button>
            </div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<script language="javascript">// <![CDATA[
    $(document).ready(function () {

        // Interceptamos el evento submit
        $('#FORMUL').submit(function () {
            // Enviamos el formulario usando AJAX
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                // Mostramos un mensaje con la respuesta de PHP
                success: function (resp) {
                    document.getElementById('FORMUL').reset();
                    $('#nuevoEncargado').modal('close');                    
                    $("#listaeman").load(" #listaeman");//para actuaizar la datalist cuando registra
                    swal("Exito", "Encargado guardado con exito", "success");
                   
                }
            });
            return false;
        });

        $('#mant').submit(function () {
            var id= document.getElementById('eviar_mantenimiento').value;
            var id= document.getElementById('eviar_mantenimiento').value;
            // Enviamos el formulario usando AJAX
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                // Mostramos un mensaje con la respuesta de PHP
                success: function (resp) {
                    
                    if(id=="si"){
                    $('#nuevoMant').modal('close');
                    location.reload();}
                   
                }
            });
            return false;
        });

        




        //Interceptamos el evento submit
        $('.FORMULARIO2 ,.FORMULARIO3').submit(function () {//para guardar categoria y proveedores sin recargar la pagina
            // Enviamos el formulario usando AJAX
            var id = $(this).attr('id'); // para decidir que selec se actualiza
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize()

                        // Mostramos un mensaje con la respuesta de PHP
            }).done(function (resp) {
                $('#nuevaCat').modal('close');
                $('#nuevoProv').modal('close');
                document.getElementById('FORMULARIO2').reset();
                document.getElementById('FORMULARIO3').reset();
                // document.getElementById('FORMULARI').reset();
                if (id == "FORMULARIO2") {
                    recargarCombos2();
                } else {
                    recargarCombos3();
                }

                swal("Excelente!", "Registro guardado con exito", "success");
            }


            );
            return false;
        });
        
       
        
         
        
        
        
        
    });







// ]]></script>
<script>
    function abrirAyuda(opcion){
         var direccion;
        switch(opcion){
           
            case 1:
                direccion="../ayuda/listActivo.php";
                break;
            case 2:
                direccion="../ayuda/regActivo.php"
                break;
            case 3:
                direccion="../ayuda/regMantenimiento.php"
                break;
            case 4:
                direccion="../ayuda/prestamoActivo.php"
                break;    
        }
        window.open(direccion, "_blank", "toolbar=no,scrollbars=yes,resizable=no,top=0,left=500,width=700,height=600");
    }
</script>





