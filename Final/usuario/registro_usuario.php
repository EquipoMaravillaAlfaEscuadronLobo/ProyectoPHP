<div class="container">
    <form name="FormuluarioUsuario" method="post" action="">
    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
            <div class="row">
                <div class="col-md-12">
                    <h4>Registro De Usuarios</h4>
                </div>
                </div>
            </div>
            
            <div class=" text-center panel-body">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="input-field col m5">
                    <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                    <label for="idNombre">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                </div>
                <div class="input-field col m5">
                    <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                    <label for="idNombre">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                </div>
                </div>
            </div>
          
            <div class="row">
                <div class="col-md-1"></div>
                <div class="input-field col m5">
                    <input type="text" id="idTelefono" name="nameTelefono" class="text-center">
                    <label for="idTelefono">Numero Telefonico <small>(Ej: 2255-5555)</small></label>
                </div>
                <div class="input-field col m5">
                    <input type="email" id="idEmail" name="nameEmail" class="text-center">
                    <label for="idEmail">Email <small>(Ej: correo@gmail.com)</small> </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="input-field col m5">
                    <input type="text" id="idEmail" name="nameEmail" class="text-center">
                    <label for="idEmail">Direccion <small>(Ej: Verapaz, Colonia Mercenenes)</small> </label>
                </div>
                <div class="input-field col m5">
                    <input type="text" id="idInstitucion" name="nameInstitucion" class="text-center">
                    <label for="idInstitucion">Institucion <small>(Ej: Centro Escolar Presbitero Norberto Marroquín)</small></label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="input-field col m5">
                    <input type="date" id="idFecha" name="nameFecha" class="text-center datepicker">
                    <label for="idFecha">Fecha de Nacimiento</label>
                </div>
                <div class="input-field col m5">
                    <input type="text" id="idInstitucion" name="nameInstitucion" class="text-center">
                    <label for="idInstitucion">Institucion <small>(Ej: Centro Escolar Presbitero Norberto Marroquín)</small></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="input-field col m5">
                    <input type="date" id="idFecha" name="nameFecha" class="text-center datepicker">
                    <label for="idFecha">Fecha de Nacimiento</label>
                </div>

                <div class="input-field col m5">
                    <div class="row">
                        
                        <div class="input-group" radio>
                            <input type="radio" name="sexo" id="hombre" value="Hombre">
                            <label for="hombre">Hombre</label>
                            
                            <input type="radio" name="sexo" id="mujer" value="Mujer">
                            <label for="mujer">Mujer</label>
                        </div>

<!--                        <div class="input-group radio col m6">
                            <input type="radio" id="idMasculino" name="nameMasculino"  >
                            <label for="idMasculino">Masculino</label>
                        </div>
                        <div class="input-field col m6">
                            <input type="radio" id="iFemenino" name="nameFemenino">
                            <label for="idFemenino">Femenino</label>
                        </div>-->

                    </div>

                </div>
            </div>

            <div class="row">

                <div class="col-md-4"></div>
                <div class="file-field input-field col-md-4">
                    <div class="btn">
                        <span>Foto</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                        <input type="file" id="files" name="files[]">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-4">
                    <output id="list"></output>                
                </div>
            </div>
            <div class="row text-center">
                <button class="btn btn-success">Guardar</button>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </div>
        </div>
    </form>
</div>