<div class="container">
    <form name="signupForm" method="post" action="">
        <div class="row">
            <div class="panel" name="libros">
                <div class="panel-heading text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Registro De Usuarios</h3>
                        </div>
                    </div>
                </div>

                <div class=" text-center panel-body">
                    <div class="row">
                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="Medium material-icons prefix">account_circle</i> 
                            <input type="text" id="firstname" name="nameNombre"  class="text-center validate" maxlength="10" minlength="3" required>

                            <label for="firstname">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                        </div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">account_circle</i> 
                            <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                            <label for="idNombre">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">local_phone</i> 
                            <input type="text" id="idTelefono" name="nameTelefono" class="text-center">
                            <label for="idTelefono">Numero Telefonico <small>(Ej: 2255-5555)</small></label>
                        </div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">mail</i> 
                            <input type="email" id="idEmail" name="nameEmail" class="text-center">
                            <label for="idEmail">Email <small>(Ej: correo@gmail.com)</small> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">location_on</i> 
                            <input type="text" id="idEmail" name="nameEmail" class="text-center">
                            <label for="idEmail">Direccion <small>(Ej: Verapaz, Colonia Mercenenes)</small> </label>
                        </div>

                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="material-icons prefix">location_city</i>     
                            </div>

                        </div>

                        <div class="input-field col m4">

                            <select>

                                <option value = "" disabled selected>Seleccione Institucion</option>
                                <option value = "1">Centro Escolar Presbitero Norberto Marroquín</option>
                                <option value = "2">Instituto Nacional de San José Verapaz</option>
                                <option value = "3">Instituto Nacional Dr. Sarvelio Navarrete</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m5">
                            <i class="Medium material-icons prefix">wc</i> 
                            
                            <div class="radio-inline">
                                <span>Sexo</span>
                               
                                <input type="radio" id="hombre"  name="sexo"  class="text-center with-gap">
                                <label for="hombre">Masculino</label>
                                
                                <input type="radio" id="mujer" name="sexo"  class="text-center with-gap">
                                <label for="mujer">Femenino</label>
                                
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
                                    <input class="file-path validate" type="text">
                                    <input type="file" id="files" name="files[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <output id="list"></output>                
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

        </div>
    </form>
</div>
