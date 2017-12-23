<form  method="post" action="" autocomplete="off" id="FORMULARIO">
    <input type="hidden" name="banderaRegistro" id="banderaRegistro"/>
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
                            <input type="text" id="idNombre" name="nameNombre" class="text-center validate" minlength="10" minlength="100" required="">
                            <label for="idNombre">Nombre de Institucion <small>(Ej: Centro Escolar Presbítero Norberto Marroquín)</small> </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right"><button href="#" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>Guardar</button></div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger" onclick="location.href = 'inicio_usuario.php';"><span class="glyphicon glyphicon-remove" aria="hidden"></span>Salir</a></div>
            </div>
        </div>
    </div>
    <!--este es el fin de modal-->
</form>
<!--fin de formulario-->

<?php
if (isset($_REQUEST["banderaEdicion"])) {

    $usuario = new Usuario();

    $usuario->setNombre($_REQUEST['nameNombreE']);
    $usuario->setApellido($_REQUEST['nameApellidoE']);
    $usuario->setDireccion($_REQUEST['nameDireccionE']);
    $usuario->setEmail($_REQUEST['nameEmailE']);
    $usuario->setTelefono($_REQUEST['nameTelefonoE']);
    $usuario->setCodigo_institucion($_REQUEST['nameInstitucionE']);
    $usuario->setSexo($_REQUEST['NameSexoE']);
    $carnet = $_REQUEST['nameCarnetE'];


    echo 'el sexo es' . $_REQUEST['NameSexoE'];
    Repositorio_usuario::actualizar_usuario(Conexion::obtener_conexion(), $usuario, $carnet);
    //Conexion::cerrar_conexion();
}
?>
