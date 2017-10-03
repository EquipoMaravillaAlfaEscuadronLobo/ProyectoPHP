<form id="FORMULARIO" method="post" action="" autocomplete="off" >
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
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required value="Ligia Alferez">
                        <label for="idNombre" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-user-circle prefix"></i> 
                        <input type="text" id="idApellido" name="nameApellido"  class="text-center validate" maxlength="25" minlength="3" required value="Muñoz">
                        <label for="idApellido">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-calendar prefix"></i> 
                        <input type="text" id="idFecha" name="nameFecha" class="text-center datepicker" required="" value="2 de Octubre, 1990">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-vcard prefix"></i> 
                        <input type="text" id="idUser" name="nameUser" class="text-center validate" minlength="4" maxlength="14" required="" value="jhon01">
                        <label for="idUser">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-eye prefix"></i> 
                        <input type="password" id="idPass1" name="namePass1" class="text-center validate" autocomplete="off" minlength="5">
                        <label for="idPass1">Contraseña</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-eye prefix"></i> 
                        <input type="password" id="idPass2" name="namePass2" class="text-center validate" autocomplete="off"  minlength="5">
                        <label for="idPass2">Repita Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-credit-card prefix"></i> 
                        <input type="text" id="idDui" name="nameDui" class="text-center" minlength="10" required="" value="0000000-0">
                        <label for="idDui">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>

                    <div class="col m5">
                        <div class="row">
                            <div class="col m1">
                                <i class="fa fa-intersex prefix"></i> 
                            </div>
                            <div class="col m1"><span>Sexo</span></div>
                            <div class="col m10">
                                <div class="radio-inline">
                                    <input type="radio" id="idHombre"  name="NameSexo" class="text-center with-gap" >
                                    <label for="idHombre">Masculino</label>

                                    <input type="radio" id="idMujer" name="NameSexo" class="text-center with-gap" checked="">
                                    <label for="idMujer">Femenino</label>
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
                            <input class="file-path validate" type="text" name="nameFoto" id="idFoto" value="imagenes.jpg">
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

                                    <input type="checkbox" id="idAdministrador" name="NameNivel"  class="text-center with-gap" checked="">
                                    <label for="idAdministrador">Administrador</label>
                                </div>
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
                            <span class="glyphicon glyphicon-edit" aria="hidden"></span>                            
                            Modificar</button>
                        <button type="reset" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


