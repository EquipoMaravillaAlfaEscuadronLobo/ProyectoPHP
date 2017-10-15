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
   // Esta primera parte crea un loader no es necesaria
    
   // Interceptamos el evento submit
    $('#frmAutor, #frmEditorial').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function() {
                   swal({
                    title: "Exito",
                    text: "Autor Registrado",
                    type: "success"},
                    function(){
                        //location.href="home.php";
                    }
            }
        })        
        return true;
    }); 
})


    
function AutorValidado(){
    return true;
}
</script>