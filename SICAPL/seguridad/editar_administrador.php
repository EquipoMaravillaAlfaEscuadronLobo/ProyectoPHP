<form id="editar_formulario" method="post" action="" autocomplete="off" >
    <input type="hidden" name="banderaEdicion" id="banderaEliminacion"/>
    <input type="hidden" name="codigo_original" id="codigo_original"/>
    <div id="edicion_administradores" class="modal modal-fixed-footer nuevo">
        <div class="modal-content modal-lg">
            <div class="row">
                <div class="col-md-12">

                    <input type="hidden" id="idSecreto" value="">
                    <div class="row">
                        <div class="panel" name="libros">
                            <div class="panel-heading text-center">
                                <div class="row"> 
                                    <div class="col s12">
                                        <h3>Editar Administradores</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center panel-body">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="input-field col m5 input-group">
                                        <i class="fa fa-user-circle prefix"></i> 
                                        <input type="text" id="idNombreE" name="nameNombreE"  class="text-center validate" maxlength="25" minlength="3" required="" value=" ">
                                        <label for="idNombreE" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-user-circle prefix"></i> 
                                        <input type="text" id="idApellidoE" name="nameApellidoE"  class="text-center validate" maxlength="25" minlength="3" required="" value=" ">
                                        <label for="idApellidoE">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-vcard prefix"></i> 
                                        <input type="text" id="idUserE" name="nameUserE" class="text-center validate" minlength="4" maxlength="14" required="" value=" " disabled="">
                                        <label for="idUserE">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-credit-card prefix"></i> 
                                        <input type="text" id="idDuiE" name="nameDuiE" class="text-center validate" minlength="10" required="" value=" ">
                                        <label for="idDuiE">Dui <small>(Ej: 02436390-9)</small></label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-eye prefix"></i> 
                                        <input type="password" id="idPass1E" name="namePass1E" class="text-center validate" autocomplete="off" minlength="5" maxlength="10"  >
                                        <label for="idPass1E">nueva contraseña(opcional)</label>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-eye prefix"></i> 
                                        <input type="password" id="idPass2E" name="namePass2E" class="text-center validate" autocomplete="off"  minlength="5" maxlength="10">
                                        <label for="idPass2E">Repita Contraseña</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m1"></div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-calendar prefix"></i> 
                                        <input type="text" id="idFechaE" name="nameFechaE" class="text-center datepicker" required="" value=" ">
                                        <label for="idFechaE">Fecha de Nacimiento</label>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-envelope-o prefix"></i> 
                                        <input type="email" id="idEmailE" name="nameEmailE" class="text-center validate" required=""  value=" ">
                                        <label for="idEmailE">Email <small>(Ej: correo@gmail.com)</small> </label>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col m1"></div>
                                    <div class="col m5">
                                        <div class="row">
                                            <div class="col m1">
                                                <i class="fa fa-intersex prefix"></i> 
                                            </div>
                                            <div class="col m1"><span>Sexo</span></div>
                                            <div class="col m10">
                                                <div class="radio-inline">
                                                    <input type="radio" id="idHombreE"  name="NameSexoE" class="text-center with-gap" value="Masculino">
                                                    <label for="idHombreE">Masculino</label>

                                                    <input type="radio" id="idMujerE" name="NameSexoE" class="text-center with-gap" value="Femenino">
                                                    <label for="idMujerE">Femenino</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col m5">
                                        <div class="row">
                                            <div class="col m1"><i class="Medium material-icons prefix">star</i> </div>
                                            <div class="col m1"><label>Nivel</label></div>
                                            <div class="col m10">
                                                <div class="radio-inline">
                                                    <input type="radio" id="idRootE"  name="NameNivelE" value="0"  class="text-center with-gap" >
                                                    <label for="idRootE">Root</label>

                                                    <input type="radio" id="idAdministradorE" name="NameNivelE" value="1"  class="text-center with-gap">
                                                    <label for="idAdministradorE">Administrador</label>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col m1"></div>
                                    <div class="file-field input-field col m5">
                                        <div class="btn btn-primary">
                                            <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path" type="text" name="nameFotoE" id="idFoto" minlength="5">
                                            <input type="file" id="files" name="files[]">
                                        </div>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-expeditedssl prefix"></i> 
                                        <input type="password" id="idValidacionX" name="nameValidacionX" class="text-center validate" autocomplete="off">
                                        <label for="idValidacionX">Para continuar por favor ingrese su contraseña</label>
                                    </div>

                                    <div class="row">
                                        <div class="col m5"></div>
                                        <div class="col m2 ">
                                            <div class="row">
                                                <div class="col m12 ">
                                                    <output id="list"></output>                
                                                </div>
                                            </div>
                                        </div>
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
if (isset($_REQUEST["banderaEdicion"])) {
//    include_once '../app/Conexion.php';    
//    include_once '../modelos/Administrador.inc.php';    
//    include_once '../repositorios/repositorio_administrador.inc.php';    
//Repositorio_administrador::actualizar_administrador();
//    Conexion::abrir_conexion();

    $administrador = new Administrador();

    $administrador->setApellido($_REQUEST["nameApellidoE"]);
    $administrador->setCodigo_administrador($_REQUEST["nameUserE"]);
    $administrador->setDui($_REQUEST["nameDuiE"]);
    $administrador->setNombre($_REQUEST["nameNombreE"]);
    $administrador->setNivel($_REQUEST['NameNivelE']);
    $administrador->setObservacion("NINGUNA");
    $administrador->setPasword($_REQUEST["namePass1E"]);
    $administrador->setSexo($_REQUEST['NameSexoE']);
    $administrador->setEmail($_REQUEST['nameEmailE']);
    $administrador->setFecha($_REQUEST['nameFechaE']);
    $codigo_original = $_REQUEST['codigo_original'];
    
     
     Repositorio_administrador::actualizar_administrador(Conexion::obtener_conexion(), $administrador, $codigo_original);
    //Conexion::cerrar_conexion();
}
?>
