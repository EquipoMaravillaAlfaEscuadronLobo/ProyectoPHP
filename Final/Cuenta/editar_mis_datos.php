<!--inicio de container -->
<div class="container">
    <!--    inicio de formulario-->
    <form id="FORMULARIO" method="post" action="" autocomplete="off" >
        <!-- inicio de panel-->
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row"> 
                    <div class="col s12">
                        <h3>Mis Datos</h3>
                    </div>
                </div>
            </div>
            <!--inicio de panel body-->
            <div class="text-center panel-body">
                <!--inicio fila de nombre y apellido -->
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
                <!--fin de fila nombre y apellido-->
                <!--inciio de fecha y usuario-->
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
                <!--fin de fecha y usuario-->
                <!--inicio de contrase;a-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">remove_red_eye</i> 
                        <input type="password" id="idPass1" name="namePass1" class="text-center validate" autocomplete="off" minlength="5">
                        <label for="idPass1">Escriba la ingrese Nueva contraseña</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">remove_red_eye</i> 
                        <input type="password" id="idPass2" name="namePass2" class="text-center validate" autocomplete="off"  minlength="5">
                        <label for="idPass2">repita nueva contraseña</label>
                    </div>
                </div>
                <!--fin de contrase;a-->
                <!--inici de sexo y dui-->
                <div class="row">
                    <div class="col m1"></div>
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
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">credit_card</i> 
                        <input type="text" id="idDui" name="nameDui" class="text-center" minlength="10" required="">
                        <label for="idDui">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>


                </div>
                <!--fin de sexo y dui-->
                <!--inicio de foto-->
                <div class="row">
                    <div class="col m3"></div>
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
                </div>
                <!--fin de foto-->
                <!--inicio mostrar foto -->
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
                <div class="row text-center">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                        Guardar</button>
                    <button type="reset" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                    </button>
                </div>
            </div>
            <!--fin de panel body-->
        </div>
        <!--fin de panel-->
    </form>
    <!--fin de formulario-->
</div>
<!--fin de container-->



