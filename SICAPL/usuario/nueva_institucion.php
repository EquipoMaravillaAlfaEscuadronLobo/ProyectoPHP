<form  method="post" action="./newInstitucion.php" autocomplete="off" enctype="multipart/form-data" id="FORMULARIO_INSTITUCION" class="formInstitucion" name="FORMULARIO_INSTITUCION">
    <input type="hidden" name="bandera_registro_institucion" id="bandera_registro_institucion"/>
    <!--este es el modal-->
    <div id="idVentana_institucion" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading">
            <h3 class="text-center">Registro de Instituciones</h3>
        </div>

        <div class="modal-content modal-lg">
            <br><br><br><br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col m3"></div>
                        <div class="input-field col m6">
                            <i class="fa fa-hospital-o prefix"></i> 
                            <input type="text" id="idNombreInstitucion" name="nameNombreInstitucion" class="text-center validate" minlength="10" minlength="100" required="">
                            <label for="idNombreInstitucion">Nombre de Institucion <small>(Ej: Centro Escolar Presbítero Norberto Marroquín)</small> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right"><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>Guardar</button></div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><span class="glyphicon glyphicon-remove" aria="hidden"></span>Salir</a></div>
            </div>
        </div>
    </div>
    <!--este es el fin de modal-->
</form>
<!--fin de formulario-->

<script>
/*$.validator.setDefaults({
    submitHandler: function () {
       
        document.getElementById('bandera_registro_institucion').value="ok";    
        document.FORMULARIO_INSTITUCION.submit();
      
        
    }
});*/
///////////////////////////////////////////////////////////este es para los formularios de ingresozz
$(document).ready(function () {
    $("#FORMULARIO_INSTITUCION").validate({
        rules: {
            nameNombreInstitucion: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            nameNombreInstitucion: {
                required: "Por favor ingrese el nombre de la institucion",
                minlength: "El nombre debe de tener por lo menos 3 caracteres"
            }
            
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents(".col-sm-5").addClass("has-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!element.next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
            }
        },
        success: function (label, element) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!$(element).next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
            $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
            $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
        }
    });
   
    ////////////////////////////////////////////////////////este es para los formularios de edicion
    
     
     // Interceptamos el evento submit
      /*  $('.formInstitucion').submit(function () {
            // Enviamos el formulario usando AJAX
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                // Mostramos un mensaje con la respuesta de PHP
                success: function (resp) {
                    document.getElementById('FORMULARIO_INSTITUCION').reset();
                    $('#idVentana_institucion').modal('close');
                    swal("Exito", "Registro guardado con exito", "success");
                    $("#institucion").load(" #institucion");//para actuaizar la datalist cuando registra
                }
            })
            return false;
        });
    */
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
});
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
}

</script>


<?php
/*if (isset($_REQUEST["bandera_registro_institucion"])) {

    $nombre_institucion = $_REQUEST['nameNombreInstitucion'];
    $sql = "INSERT INTO institucion (nombre) VALUES ('$nombre_institucion')";
    $conexion = Conexion::obtener_conexion();
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();
    
    include_once '../repositorios/repositorio_bitacora.php';
    $accion = 'Se registro la siguiente institucion: ' . $nombre_institucion;
    Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
    
    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';    
    
    
    //echo 'el nombre es ' . $nombre_institucion;
    
    //Conexion::cerrar_conexion();
}*/
?>
