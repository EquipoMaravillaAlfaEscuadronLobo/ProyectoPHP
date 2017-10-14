<?php
$lista_admnistradores = Repositorio_administrador::lista_administradores(Conexion::obtener_conexion(), 'perez');
?>
<form id="eliminar_formulario" method="post" action="" autocomplete="off" name="eliminar_formulario">
    <input type="hidden" name="banderaEliminacion" id="banderaEliminacion"/>
    <input type="hidden" name="codigo_eliminacion" id="codigo_eliminacion"/>
    <input type="hidden" id="idSecretoEL" value="666666">

    <div id="eliminacion_administradores" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading"><h3 class="text-center">Dar de Baja Administradores</h3></div>
        <div class="modal-content modal-sm">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
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
                                    <textarea  id="idMotivoEliminacion" name="nameMotivoEliminacion" class="materialize-textarea text-center validate"></textarea>
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

                                <select  class="validate" required="" id="idSelectedAdministrador" name="nameSelectedAdministrador">
                                    <option value = "" disabled selected>Seleccione Nuevo encargado de Activos</option>
                                    <?php
                                    if (($lista_admnistradores)!= NULL) {
                                        foreach ($lista_admnistradores as $filaz) {?>
                                            
                                            <option value="<?php echo $filaz->getCodigo_administrador(); ?>"><?php echo $filaz->getNombre() . ' ' . $lista->getApellido(); ?></option>
                                        <?php  } 
                                        }  ?>
                                       

                                    </select>
                                </div>
                                <div class="input-field col m5">
                                    <i class="fa fa-expeditedssl prefix"></i> 
                                    <input type="password" id="idValidacionXE" name="nameValidacionXE" class="text-center validate" autocomplete="off"  minlength="5" maxlength="10">
                                    <label for="idValidacionXE">Para continuar por favor ingrese su contraseña</label>
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

        $administrador = new Administrador();
        $administrador->setObservacion($_REQUEST['nameMotivoEliminacion']);
        $administrador->setEstado(0);
        $codigo_eliminar = $_REQUEST['codigo_eliminacion'];

        Repositorio_administrador::eliminar_administrador(Conexion::obtener_conexion(), $administrador, $codigo_eliminar);
        //Conexion::cerrar_conexion();
    }
    ?>
