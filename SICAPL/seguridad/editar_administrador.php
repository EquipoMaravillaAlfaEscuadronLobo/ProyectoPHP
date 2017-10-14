<form id="editar-formulario" method="post" action="" autocomplete="off" >
    <div id="edicion" class="modal modal-fixed-footer nuevo">
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
                                        <input type="text" id="idUserE" name="nameUserE" class="text-center validate" minlength="4" maxlength="14" required="" value=" ">
                                        <label for="idUserE">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-credit-card prefix"></i> 
                                        <input type="text" id="idDuiE" name="idDuiE" class="text-center validate" minlength="10" required="" value=" ">
                                        <label for="idDuiE">Dui <small>(Ej: 02436390-9)</small></label>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-eye prefix"></i> 
                                        <input type="password" id="idPass1E" name="namePass1E" class="text-center validate" autocomplete="off" minlength="5" maxlength="10" >
                                        <label for="idPass1E">Contraseña(opcional)</label>
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
                                        <input type="email" id="idEmailE" name="nameEmail" class="text-center validate" required=""  value=" ">
                                        <label for="idEmail">Email <small>(Ej: correo@gmail.com)</small> </label>
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
                                                    <input type="radio" id="idHombreE"  name="NameSexoE" class="text-center with-gap" >
                                                    <label for="idHombreE">Masculino</label>

                                                    <input type="radio" id="idMujerE" name="NameSexoE" class="text-center with-gap">
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
                                                    <input type="radio" id="idRootE"  name="NameNivelE"  class="text-center with-gap" >
                                                    <label for="idRootE">Root</label>

                                                    <input type="radio" id="idAdministradorE" name="NameNivelE"  class="text-center with-gap">
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
                                            <input class="file-path validate" type="text" name="nameFotoE" id="idFoto">
                                            <input type="file" id="files" name="files[]">
                                        </div>
                                    </div>
                                    <div class="input-field col m5">
                                        <i class="fa fa-eye prefix"></i> 
                                        <input type="password" id="idValidacionX" name="nameValidacionX" class="text-center validate" autocomplete="off">
                                        <label for="idValidacionX">Contraseña Actual</label>
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
                <div class="col-md-6 text-right"><button href="#" class="btn btn-success" onclick="prueva()">Guardar</button></div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
            </div>
        </div>
    </div>
</form>

<script>
function prueva(){
    alert('bien hecho carajo');
    
}
</script>