<form  method="post" action="" autocomplete="off" id="editar_formulario">
<input type="hidden" name="banderaEdicion" id="banderaEdicion"/>
<input type="hidden" name="nameCarnetE" id="idCarnetE"/>
<input type="hidden" id="idSecreto" value="">
    <!--este es el modal-->
    <div id="edicion_usuario" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading">
            <h3 class="text-center">Editar Usuarios</h3>
        </div>
        
        <div class="modal-content modal-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-user-circle prefix"></i> 
                                <input type="text" id="idNombreE" name="nameNombreE"  class="text-center validate" maxlength="25" minlength="3" required value="Jenniffer Joanna">
                                <label for="idNombreE" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-user-circle prefix"></i> 
                                <input type="text" id="idApellidoE" name="nameApellidoE"  class="text-center validate" maxlength="25" minlength="3" required value="Abarca">
                                <label for="idApellidoE">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-map-marker  prefix"></i> 
                                <input type="text" id="idDireccionE" name="nameDireccionE" class="text-center validate" minlength="10" minlength="100" required="" value="CALLE AGUSTIN LARA NO. 69-B COL. EX-NORMAL TUXTEPEC">
                                <label for="idDireccionE">Direccion <small>(Ej: Verapaz, Colonia Mercenenes)</small> </label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-envelope-o prefix"></i> 
                                <input type="email" id="idEmailE" name="nameEmailE" class="text-center validate" maxlength="35" required="" value="juribe@idiomas.udea.edu.co">
                                <label for="idEmailE">Email <small>(Ej: correo@gmail.com)</small> </label>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-phone prefix"></i> 
                                <input type="text" id="idTelefonoE" name="nameTelefonoE" class="text-center" required="" minlength="8"  value="2449-7352">
                                <label for="idTelefonoE">Numero Telefonico <small>(Ej: 2255-5555)</small></label>
                            </div>

                            <div class="input-field col m1">
                                <div class="input-field col m1">
                                    <i class="fa fa-hospital-o prefix"></i> 
                                </div>
                            </div>
                            <div class="input-field col m4">
                                <select required="" name="nameInstitucionE">
                                    <option value = "" disabled selected>Seleccione Institucion</option>
                                    <option value = "1" selected="">Centro Escolar Presbitero Norberto Marroquín</option>
                                    <option value = "2">Instituto Nacional de San José Verapaz</option>
                                    <option value = "3">Instituto Nacional Dr. Sarvelio Navarrete</option>
                                    <option value = "4">Escuela católica, San Jose Verapaz</option>
                                    <option value = "5">Alcaldía Municial, San José Verapaz</option>
                                    <option value = "6">Otros</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="col m4">
                                <i class="fa fa-intersex prefix"></i> 
                                <div class="radio-inline">
                                    <span>Sexo</span>
                                    <input type="radio" id="idHombreE"  name="NameSexoE"  class="text-center with-gap"  value="Masculino">
                                    <label for="idHombreE">Masculino</label>

                                    <input type="radio" id="idMujerE" name="NameSexoE"  class="text-center with-gap"  value="Femenino">
                                    <label for="idMujerE">Femenino</label>
                                </div>
                                <div class="col 1"></div>
                            </div>
                            <div class="col m6">
                                <div class="col m2"></div>
                                <div class="file-field input-field col m10">
                                    <div class="btn btn-primary">
                                        <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                                        <input type="file">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="nameFotoE" id="idFotoE">
                                        <input type="file" id="filesE" name="files[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <output id="listE"></output>                
                        </div>
                    </div>
                </div>
            </div>
         </div>
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right"><button href="#" class="btn btn-success"><span class="glyphicon glyphicon-refresh" aria="hidden"></span>Actualizar</button></div>
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
    $carnet = $_REQUEST['nameCarnetE'] ;
    
        
    echo 'el sexo es'.$_REQUEST['NameSexoE'];
    Repositorio_usuario::actualizar_usuario(Conexion::obtener_conexion(), $usuario, $carnet);
    //Conexion::cerrar_conexion();
}
?>