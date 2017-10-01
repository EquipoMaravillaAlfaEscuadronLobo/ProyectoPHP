<!--inicio de container-->
<div class="container">
    <form id="FORMULARIO" name="FormuluarioUsuario" method="post" action="" autocomplete="off" >
        <div class="panel" name="libros">
            <!--inicio cabecera de panel-->
            <div class="panel-heading text-center">
                <div class="row"> 
                    <div class="col s12">
                        <h3>Registro De Administradores</h3>
                    </div>
                </div>
            </div>
            <!--fin de cabecer de panel-->

            <!--inicio de body-->
            <div class="text-center panel-body">
                <!--inicio fila nombres-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5 input-group">
                        <i class="Medium material-icons prefix">account_circle</i> 
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required>
                        <label for="idNombre" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">account_circle</i> 
                        <input type="text" id="idApellido" name="nameApellido"  class="text-center validate" maxlength="25" minlength="3" required>
                        <label for="idApellido">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <!--fin fila nombres-->
                <!--inicio fila fecha y usuario-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">today</i> 
                        <input type="text" id="idFecha" name="nameFecha" class="text-center datepicker" required="">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">face</i> 
                        <input type="text" id="idUser" name="nameUser" class="text-center validate" minlength="4" maxlength="14" required="">
                        <label for="idUser">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                    </div>
                </div>
                <!--fin fila fecha y usuario-->
                <!--inicio contrase;as-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">remove_red_eye</i> 
                        <input type="password" id="idPass1" name="namePass1" class="text-center validate" autocomplete="off" minlength="5">
                        <label for="idPass1">Contraseña</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">remove_red_eye</i> 
                        <input type="password" id="idPass2" name="namePass2" class="text-center validate" autocomplete="off"  minlength="5">
                        <label for="idPass2">Repita Contraseña</label>
                    </div>
                </div>
                <!--fin contrase;ase-->
                <!--inicio dui y sexo-->
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">credit_card</i> 
                        <input type="text" id="idDui" name="nameDui" class="text-center" minlength="10" required="">
                        <label for="idDui">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>

                    <div class="col m5">
                        <div class="row">
                            <div class="col m1"><i class="Medium material-icons prefix">wc</i> </div>
                            <div class="col m1"><span>Sexo</span></div>
                            <div class="col m10">
                                <div class="radio-inline">
                                    <input type="radio" id="idHombre"  name="NameSexo" class="text-center with-gap">
                                    <label for="idHombre">Masculino</label>

                                    <input type="radio" id="idMujer" name="NameSexo" class="text-center with-gap">
                                    <label for="idMujer">Femenino</label>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <!--fin dui y sexo-->
                <!--inicio foto y nivel-->
                <div class="row">

                    <div class="col m1"></div>
                    <div class="file-field input-field col m5">
                        <div class="btn btn-primary">
                            <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="nameFoto" id="idFoto">
                            <input type="file" id="files" name="files[]">
                        </div>
                    </div>

                    <div class="col m5">
                        <div class="row">
                            <div class="col m1"><i class="Medium material-icons prefix">star</i> </div>
                            <div class="col m1"><label>Nivel</label></div>
                            <div class="col m10">
                                <div class="radio-inline">
                                    <input type="checkbox" id="idRoot"  name="NameNivel"  class="text-center with-gap" >
                                    <label for="idRoot">Root</label>

                                    <input type="checkbox" id="idAdministrador" name="NameNivel"  class="text-center with-gap" >
                                    <label for="idAdministrador">Administrador</label>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <!--fin foto y nivel-->
                <!--inicio mostrar foto-->
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
                <!--fin mostrar foto-->
                <!--inicio botones-->
                <div class="row text-center">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                        Guardar</button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                    </button>
                </div>
                <!--fin botones-->

            </div>
            <!--fin de body-->
        </div>
        <!--fin de panel-->
    </form>
<!--fin de formulario-->
</div>
<!--fin de container-->

<script>
    $('#FORMULARIO').attr('autocomplete', 'off');
    document.getElementById('FORMULARIO').setAttribute('autocomplete', 'off');
</script>