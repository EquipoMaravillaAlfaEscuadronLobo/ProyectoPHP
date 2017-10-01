<form  method="post" action="" autocomplete="off" id="editar-formulario">
    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Modificacion de Usuario</h3>
                    </div>
                </div>
            </div>
            <div class=" text-center panel-body">
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="Medium material-icons prefix">account_circle</i> 
                        <input type="text" id="idNombreE" name="nameNombreE"  class="text-center validate" maxlength="25" minlength="3" required value="Jenniffer Joanna">
                        <label for="idNombreE" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <i class="material-icons prefix">account_circle</i> 
                        <input type="text" id="idApellidoE" name="nameApellidoE"  class="text-center validate" maxlength="25" minlength="3" required value="Abarca">
                        <label for="idApellidoE">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="material-icons prefix">location_on</i> 
                        <input type="text" id="idDireccionE" name="nameDireccionE" class="text-center validate" minlength="10" minlength="100" required="" value="CALLE AGUSTIN LARA NO. 69-B COL. EX-NORMAL TUXTEPEC">
                        <label for="nameDireccionE">Direccion <small>(Ej: Verapaz, Colonia Mercenenes)</small> </label>
                    </div>

                    <div class="input-field col m5">
                        <i class="material-icons prefix">mail</i> 
                        <input type="email" id="idEmailE" name="nameEmailE" class="text-center validate" maxlength="35" required="" value="juribe@idiomas.udea.edu.co">
                        <label for="idEmailE">Email <small>(Ej: correo@gmail.com)</small> </label>
                    </div> 
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="material-icons prefix">local_phone</i> 
                        <input type="text" id="idTelefonoE" name="nameTelefonoE" class="text-center" required="" minlength="8"  value="2449-7352">
                        <label for="idTelefonoE">Numero Telefonico <small>(Ej: 2255-5555)</small></label>
                    </div>

                    <div class="input-field col m1">
                        <div class="input-field col m1">
                            <i class="material-icons prefix">location_city</i>     
                        </div>
                    </div>
                    <div class="input-field col m4">
                        <select required="">
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
                    <div class="col m5">
                        <i class="Medium material-icons prefix">wc</i> 
                        <div class="radio-inline">
                            <span>Sexo</span>
                            <input type="radio" id="hombreE"  name="NameSexoE"  class="text-center with-gap" checked="">
                            <label for="hombreE">Masculino</label>

                            <input type="radio" id="mujerE" name="NamexoE"  class="text-center with-gap">
                            <label for="mujerE">Femenino</label>
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
                <div class="row text-center">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-edit" aria="hidden"></span>                            
                        Modificar</button>
                    <button type="reset" class="btn btn-danger" onclick="AlertaExttoZZZ()">
                        <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>


