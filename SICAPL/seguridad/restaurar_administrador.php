<form  method="get" action="" autocomplete="off" id="frmLibro">
    <input type="hidden" name="registrarL" id="registrarL"/>
    <input type="hidden" name="codigo_restauracion" id="codigo_restauracion"/>
   

    <!--este es el modal-->
    <div id="restaurar_administrador" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading">
            <h3 class="text-center">Restaurar Administrador</h3>
        </div>

        <div class="modal-content modal-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <br><br><br>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="input-field col m5 input-group">
                                <i class="fa fa-user-circle prefix"></i> 
                                <input type="text" id="nombreRestaurado" name="nombreRestaurado"  class="text-center" value="nombre" disabled="">
                                <label for="nombreRestaurado" class="col-sm-4 control-labe">Nombre Completo</label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-vcard prefix"></i> 
                                <input type="text" id="codigoRestaurado" name="codigoRestaurado"  class="text-center" disabled="" value="nombre">
                                <label for="codigoRestaurado">Nombre de Usuario</label>
                            </div>
                        </div>
                      <br><br><br>
                        <div class="row">
                            <div class="col-md-4"></div>
                            
                            
                            <div class="input-field col m4 text-center">
                                <i class="fa fa-expeditedssl prefix"></i> 
                                <input type="password" id="idVerificacion" name="nameVerificacionRestaurar" class="text-center validate" required="" autocomplete="off" >
                                <label for="idVerificacionRestaurar">Para continuar por favor ingrese su contraseña</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right"><button href="#" class="btn btn-success"><span class="glyphicon glyphicon-refresh" aria="hidden"></span>Restaurar</button></div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><span class="glyphicon glyphicon-remove" aria="hidden"></span>Salir</a></div>
            </div>
        </div>
    </div>
    <!--este es el fin de modal-->
</form>

<?php
if (isset($_REQUEST["nameVerificacionRestaurar"])) {

    $administrador = new Administrador();
    $administrador->setObservacion("");
    $administrador->setEstado(1);
    $codigo_restaurar = $_REQUEST['codigo_restauracion'];
    $verificacion = $_REQUEST['nameVerificacionRestaurar'];
   
       
    Repositorio_administrador::restaurar_administrador(Conexion::obtener_conexion(), $administrador, $codigo_restaurar, $verificacion);
}
?>