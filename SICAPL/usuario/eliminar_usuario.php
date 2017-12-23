<form  method="post" action="" autocomplete="off" id="eliminar_formulario">
    <input type="hidden" name="banderaEliminacion" id="banderaEliminacion"/>
    <input type="hidden" id="idSecretoEL" value="" name="nameSecretoELiminar">
    <input type="hidden" id="idOtroCarnet" name="nameOtroCarnet" value="d">

    <!--este es el modal-->
    <div id="eliminacion_usuario" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading">
            <h3 class="text-center">Dar de Baja Usuarios</h3>
        </div>

        <div class="modal-content modal-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-user-circle prefix"></i> 
                                <input type="text" id="idNombreEliminado" name="nameNombreEliminado"  class="text-center validate" maxlength="25" minlength="3" required disabled="" value="">
                                <label for="idNombreEliminado" class="col-sm-4 control-labe">Nombre Completo</label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-vcard prefix prefix"></i> 
                                <input type="text" id="idCarnetEliminado" name="idCarnetEliminado"  class="text-center validate" maxlength="25" minlength="3" required value="Abarca" disabled="">
                                <label for="idCarnetEliminado">Carnet</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m10">
                                <div class="input-field">
                                    <i class="fa fa-edit prefix" aria-hidden="true"></i>
                                    <label for="idMotivoEliminacion" class="text-center">Escriba el motivo por el que se le da de baja</label>
                                    <textarea  id="idMotivoEliminacion" name="nameMotivoEliminacion" class="materialize-textarea text-center validate"></textarea>
                                </div>
                            </div> 
                        </div>
<!--                        <div class="row">
                            <div class="col m4"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-expeditedssl prefix"></i> 
                                <input type="password" id="idValidacionXE" name="nameVerificacion" class="text-center validate" autocomplete="off">
                                <label for="idVerificacion">Para continuar por favor ingrese su contraseña</label>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right"><button href="#" class="btn btn-success"><span class="glyphicon glyphicon-trash" aria="hidden"></span>Eliminar</button></div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger" onclick="location.href = 'inicio_usuario.php';"><span class="glyphicon glyphicon-remove" aria="hidden"></span>Salir</a></div>
            </div>
        </div>
    </div>
    <!--este es el fin de modal-->

</form>
<?php
if (isset($_REQUEST["banderaEliminacion"])) {
//    include_once '../app/Conexion.php';
//    include_once '../modelos/Usuario.php';
//    include_once '../repositorios/repositorio_usuario.inc.php';
//    
//    echo "tenemos bandera<br>";
//    
    $usuario = new Usuario();
    $usuario->setObservacion($_REQUEST['nameMotivoEliminacion']);
    $usuario->setNombre($_REQUEST['nameSecretoELiminar']);
    $carnet = $_REQUEST['nameOtroCarnet'];

    echo $_REQUEST['nameOtroCarnet'];

    //echo $_REQUEST['NameSexoE'];
    Repositorio_usuario::eliminar_usuario(Conexion::obtener_conexion(), $usuario, $carnet);
    //Conexion::cerrar_conexion();
}
?>
