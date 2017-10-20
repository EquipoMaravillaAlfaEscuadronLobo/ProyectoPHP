<?php
$titulo1 = "Biblioteca";
include_once('../plantillas/cabecera.php');
include_once('../plantillas/menu.php');
?>

<div class="nav-content" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a  href="#test2">
                <i class="fa fa-plus" aria-hidden="true"></i>Registro
            </a>
        </li>
        <li class="tab">
            <a href="#test1">
                <i class="fa fa-book" aria-hidden="true"></i>  Bibliografia
            </a>
        </li>


        <li class="tab">
            <a class="active" href="#test3">
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

  <?php include('modificar_b.php'); ?>
</div>
<div class="col s12" id="test2">
    <?php include('registro_b.php'); ?>
</div>
<div class="col s12" id="test3">
    <?php include('listado_p_b.php'); ?>
</div>

<div class="col s12" id="test5">
    <h1>Consultas</h1>
</div>
<div class="col s12" id="test6">
    <h1>Reportes</h1>
</div>



<?php
include_once('../plantillas/pie_de_pagina.php');
?>
<script type="text/javascript">
$(document).ready(function() {

     $('.librof').submit(function(){
      var formData=new FormData(document.getElementById('frmLibro'));
      
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
       if(resp==1){
                swal({
                    title: "Exito",
                    text: "Libro Registrado",
                    type: "success"},
                    function(){
                       document.getElementById('frmLibro').reset();
                       
                       location.href="inicio_b.php";
                        
                    }

                    );
            
         }else{
                swal ( "Oops" ,  "Campos Vacios" ,  "error" )
             
         }
    })
    return false;
  
})


      $('.autorf').submit(function(){
        //var codigo=$('#codigol').val();
    //alert(codigo);
    var formData=new FormData(document.getElementById('frmAutor'))
    $.ajax({
        url:$(this).attr('action'),
        type:'POST',
         dataType: "html",
        data:formData,
    cache: false,
    contentType: false,
    processData: false
    }).done(function(resp){
       if(resp==1){
                swal({
                    title: "Exito",
                    text: "Autor Registrado",
                    type: "success"},
                    function(){
                       document.getElementById('frmAutor').reset();
                       
                       recargarCombos();
                        
                    }

                    );
            
         }else{
                swal ( "Oops" ,  "Autor no registrado" ,  "error" )
             
         }
    })
    return false;
})


       $('.editorialf').submit(function(){
        //var codigo=$('#codigol').val();
   // alert(codigo);
    $.ajax({
        url:$(this).attr('action'),
        type:'POST',
        data:$(this).serialize()
    }).done(function(resp){
       if(resp==1){
                swal({
                    title: "Exito",
                    text: "Editorial Registada",
                    type: "success"},
                    function(){
                       document.getElementById('frmEditoriales').reset();
                       
                       recargarCombos();
                        
                    }

                    );
            
         }else{
                swal ( "Oops" ,  "Editorial no registrada" ,  "error" )
             
         }
    })
    return false;
})
    

});
function recargarCombos () {
    $.ajax({
        url:'opcionesAutores.php',
        type:'POST',
        data:''
    }).done(function(resp){
         $('select').material_select('destroy');
      $('select.autores').html(resp).fadeIn();
      $('select').material_select();
    })

     $.ajax({
        url:'opcionesEditorial.php',
        type:'POST',
        data:''
    }).done(function(resp){
         $('select').material_select('destroy');
      $('select.editorial').html(resp).fadeIn();
      $('select').material_select();
    })
}
</script>


