<form id="editar_formulario" method="post" action="" autocomplete="off" >
    <input type="hidden" name="banderaEliminacion" id="banderaEliminacion"/>
    <input type="hidden" name="codigo_eliminacion" id="codigo_eliminacion"/>
    <input type="hidden" id="idSecreto" value="">
    <div id="eliminacion_administradores" class="modal modal-fixed-footer nuevo">
        <div class="modal-content modal-sm">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="panel" name="libros">
                            <div class="panel-heading text-center">
                                <div class="row"> 
                                    <div class="col s12">
                                        <h3>Dar de Baja Administradores</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center panel-body">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="input-field col m5 input-group">
                                        <i class="fa fa-user-circle prefix"></i> 
                                        <input type="text" id="idNombreEl" name="nameNombreEl"  class="text-center" value=" " disabled="">
                                        <label for="idNombreEl" class="col-sm-4 control-labe">Nombre Completo</label>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-vcard prefix"></i> 
                                        <input type="text" id="idUsuarioEl" name="nameUsuarioEl"  class="text-center" disabled="">
                                        <label for="idUsuarioEl">Nombre de Usuario</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-10">
                                        <div class="input-field">
                                            <i class="fa fa-edit prefix" aria-hidden="true"></i>
                                            <label for="idMotivoEliminacion" class="text-center">Escriba el motivo por el que se le da de baja</label>
                                            <textarea id="idMotivoEliminacion" name="nameMotivoEliminacion" class="materialize-textarea text-center"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="input-field col m1">
                                        <div class="input-field col m1">
                                            <i class="fa fa-star prefix"></i> 
                                        </div>
                                    </div>
                                    <div class="input-field col m4">

                                        <select required="">
                                            <option value = "" disabled selected>Seleccione Nuevo encargado de Activos</option>
                                            <?php
                                            Conexion::abrir_conexion();
                                            $lista_admnistradores = Repositorio_administrador::lista_administradores(Conexion::obtener_conexion());
                                            foreach ($lista_admnistradores as $filaz) {
                                                echo $filaz->getNombre();
                                                ?>

                                                <option value="<?php $filaz->getCodigo_administrador() ?>"><?php echo $filaz->getNombre() . ' ' . $lista->getApellido(); ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-expeditedssl prefix"></i> 
                                        <input type="password" id="idPass1El" name="namePass1El" class="text-center validate" autocomplete="off"  minlength="5" maxlength="10">
                                        <label for="idPass1El">Para continuar por favor ingrese su contraseña</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right"><button href="#" class="btn btn-success">Guardar</button></div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
            </div>
        </div>
    </div>
</form>
<?php
if (isset($_REQUEST["banderaEliminacion"])) {
    include_once '../app/Conexion.php';
    include_once '../modelos/Administrador.inc.php';
    include_once '../repositorios/repositorio_administrador.inc.php';
    Conexion::abrir_conexion();

    echo $_REQUEST['nameMotivoEliminacion'];
    echo $_REQUEST['codigo_eliminacion'];


    //  Repositorio_administrador::actualizar_administrador(Conexion::obtener_conexion(), $administrador, $codigo_original);
    //Conexion::cerrar_conexion();
}
?>
