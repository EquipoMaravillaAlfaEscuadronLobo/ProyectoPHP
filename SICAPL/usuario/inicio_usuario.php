<?php
$titulo1 = 'Gestion de Usuario';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
?>
<div class="nav-content" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a class="" href="#test1">
                <i class="fa fa-plus" aria-hidden="true"></i>Registro
            </a>
        </li>
        <li class="tab">
            <a href="#test2" class="active">
                <i class="fa fa-edit" aria-hidden="true"></i>  Editar Usuarios
            </a>
        </li>


        <li class="tab">
            <a href="#test3" class="">
                <i class="fa fa-list-alt" aria-hidden="true"></i> Consulta
            </a>
        </li>
        
    </ul>
</div>
</nav>

<div class="col s12" id="test1">

  <?php include('./registro_usuario.php'); ?>
</div>
<div class="col s12" id="test2">
    <?php include_once './listado_usuario.php';?>
</div>

<div class="col s12" id="test3">
   <?php include_once './inicio_consultas.php'; ?>
</div>



<?php
include_once '../plantillas/pie_de_pagina.php';

?>

<script>
     $('.formInstitucion').submit(function(){
      var formData=new FormData(document.getElementById('FORMULARIO_INSTITUCION'));
      
        //var codigo=$('#codigol').val();
      
   // alert(codigo);
    $.ajax({
        url:$(this).attr('action'),
        type:'POST',
        dataType: "html",
        data:formData,
    cache: false,
    contentType: false,
    processData: false
    }).done(function(resp){
       
                swal({
                    title: "Exito",
                    text: "Institucion Registrada",
                    type: "success"},
                    function(){
                       document.getElementById('FORMULARIO_INSTITUCION').reset();
                         $('#idVentana_institucion').modal('close');
                          recargarCombo();

                    }

                    );
            
         
    })
    return false;
  })

function recargarCombo(){

     $.ajax({
        url:'opcionesIns.php',
        type:'POST',
        data:''
    }).done(function(resp){
         $('select').material_select('destroy');
      $('select.institucionCombo').html(resp).fadeIn();
      $('select').material_select();
    })
    return false;
}
</script>
