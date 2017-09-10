<div class="container">
    <form name="FormuluarioUsuario" method="post" action="" autocomplete="off" >
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row"> 
                    <div class="col s12">
                        <h4>Registro De Administradores</h4>
                    </div>
                </div>
            </div>

            <div class="text-center panel-body">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5 input-group">
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                        <label for="idNombre">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                        <label for="idNombre">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <input type="text" id="idDui" name="nameDui" class="text-center">
                        <label for="idTelefono">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <input type="text" id="idUser" name="nameUser" class="text-center" >
                        <label for="idUser">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <input type="password" id="idPass" name="namePass" class="text-center">
                        <label for="idPass">Contraseña</label>
                    </div>
                    <div class="input-field col m5">
                        <input type="password" id="idPass2" name="namePass2" class="text-center">
                        <label for="idPass">Repita Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <input type="date" id="idFecha" name="nameFecha" class="text-center datepicker">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>

                    <div class="col m3">
                        <div class="row">
                            <div class="col m2"><label for="">Sexo</label></div>
                            <div class="col m10">
                            <div class="radio-inline">
                            <p>
                                <input type="radio" name="sexo" id="hombre" value="Hombre" >
                                <label for="hombre"><i class="fa fa-mars"></i>Hombre </label>
                            </p><p> 
                                <input type="radio" name="sexo" id="mujer" value="Mujer">
                                <label for="mujer"><i class="fa fa-venus"></i>Mujer </label>
                            </p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col m2">
                        <div class="row">
                            <div class="col m2"><label for="">Nivel </label></div>
                            <div class="col m10">
                                <div class="radio-inline">
                                <p>
                                <input type="checkbox" name="nameNivel" id="idAdmin" value="admin">
                                <label for="idAdmin">Admin</label>
                                </p><p>
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
                    <div class="col m5"></div>
                    <div class="col m5 ">
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