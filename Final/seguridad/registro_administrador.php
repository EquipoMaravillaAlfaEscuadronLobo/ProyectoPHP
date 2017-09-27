<div class="container">
    <form id="FORMULARIO" name="FormuluarioUsuario" method="post" action="" autocomplete="off" >
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row"> 
                    <div class="col s12">
                        <h3>Registro De Administradores</h3>
                    </div>
                </div>
            </div>

            <div class="text-center panel-body">
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
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">credit_card</i> 
                        <input type="text" id="idDui" name="nameDui" class="text-center validate" minlength="10" required="">
                        <label for="idDui">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">face</i> 
                        <input type="text" id="idUser" name="nameUser" class="text-center validate" minlength="4" maxlength="14" required="">
                        <label for="idUser">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">remove_red_eye</i> 
                        <input type="password" id="idPass1" name="namePass1" class="text-center validate" autocomplete="off" minlength="5">
                        <label for="idPass1">Contraseña</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">remove_red_eye</i> 
                        <input type="password" id="idPass2" name="namePass2" class="text-center validate">
                        <label for="idPass2">Repita Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">today</i> 
                        <input type="date" id="idFecha" name="nameFecha" class="text-center datepicker">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>

                    <div class="col m3">
                        <div class="row">
                            <div class="col m1"><i class="Medium material-icons prefix">wc</i> </div>
                            <div class="col m2"><label for="">Sexo</label></div>
                            <div class="col m9">
                                <div class="radio-inline">
                                    <p>
                                        <input type="radio" name="NameSexo" id="hombre" value="Hombre" class="text-center with-gap">
                                        <label for="hombre"><i class="fa fa-mars"></i>Hombre </label>
                                    </p>
                                    <p> 
                                        <input type="radio" name="NameSexo" id="mujer" value="Mujer" class="text-center with-gap">
                                        <label for="mujer"><i class="fa fa-venus"></i>Mujer </label>
                                    </p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="row">
                            <div class="col m2"><i class="Medium material-icons prefix">star</i></div>
                            <div class="col m2"><label for="">Nivel </label></div>
                            <div class="col m8">
                                <div class="radio-inline">
                                    <p>
                                        <input type="checkbox" name="nameNivel" id="idAdmin" value="admin" >
                                        <label for="idAdmin">Admin</label>
                                    </p>
                                    <p>
                                        <input type="checkbox" name="nameNivel" id="idRoot" value="root">
                                        <label for="idRoot">Root</label>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col m4"></div>
                    <div class="file-field input-field col m4">
                        <div class="btn btn-primary">
                            <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="nameFoto" id="idFoto">
                            <input type="file" id="files" name="files[]">
                        </div>
                    </div>
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
                <div class="row text-center">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                        Guardar</button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    $('#FORMULARIO').attr('autocomplete', 'off');
document.getElementById('FORMULARIO').setAttribute('autocomplete','off');
</script>