<?php
include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';
?>
<!--inicio de container-->
<div class="container">
    <form id="FORMULARIO" name="FormuluarioUsuario" method="post" action="" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="banderaRegistro" id="banderaRegistro"/>
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
                        <i class="fa fa-user-circle prefix"></i> 
                        <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required>
                        <label for="idNombre" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-user-circle prefix"></i> 
                        <input type="text" id="idApellido" name="nameApellido"  class="text-center validate" maxlength="25" minlength="3" required>
                        <label for="idApellido">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <!--fin fila nombres-->
                <!--inicio fila fecha y usuario-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-vcard prefix"></i> 
                        <input type="text" id="idUser" name="nameUser" class="text-center validate" minlength="4" maxlength="14" required="">
                        <label for="idUser">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                    </div> 
                    <div class="input-field col m5">
                        <i class="fa fa-credit-card prefix"></i> 
                        <input type="text" id="idDui" name="nameDui" class="text-center validate" minlength="10" required="">
                        <label for="idDui">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>
                </div>
                <!--fin fila fecha y usuario-->
                <!--inicio contrase;as-->
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-eye prefix"></i> 
                        <input type="password" id="idPass1" autocomplete="off" name="namePass1" class="text-center validate" autocomplete="off" minlength="6">
                        <label for="idPass1">Contraseña</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-eye prefix"></i> 
                        <input type="password" id="idPass2" name="namePass2" class="text-center validate" autocomplete="off" >
                        <label for="idPass2">Repita Contraseña</label>
                    </div>
                </div>
                <!--fin contrase;ase-->
                <!--inicio dui y sexo-->
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-calendar prefix"></i> 
                        <input type="text" id="idFecha" name="nameFecha" class="text-center datepicke-cumple" required="">
                        <label for="idFecha">Fecha de Nacimiento</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-envelope-o prefix"></i> 
                        <input type="email" id="idEmail" name="nameEmail" class="text-center validate" required="" >
                        <label for="idEmail">Email <small>(Ej: correo@gmail.com)</small> </label>
                    </div>     
                </div>
                <!--fin dui y sexo-->
                <!--inicio foto y nivel-->
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
                                    <input type="radio" id="idHombre"  name="NameSexo" value="Masculino" class="text-center with-gap" checked="">
                                    <label for="idHombre">Masculino</label>

                                    <input type="radio" id="idMujer" name="NameSexo" value="Femenino" class="text-center with-gap">
                                    <label for="idMujer">Femenino</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col m5">
                        <div class="row">
                            <div class="col m1">
                                <i class="glyphicon glyphicon-star"></i> 
                            </div>
                            <div class="col m1"><label>Nivel</label></div>
                            <div class="col m10">
                                <div class="radio-inline">
                                    <input type="radio" id="idAdministrador" name="NameNivel" value="1"  class="text-center with-gap" checked="">
                                    <label for="idAdministrador">Administrador</label>


                                    <input type="radio" id="idRoot"  name="NameNivel" value="0"  class="text-center with-gap">
                                    <label for="idRoot">Root</label>

                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="row">
                    <div class="col m4"></div>

                    <div class="col-md-5">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span><i class="glyphicon glyphicon-picture" aria-hidden="true"></i>Foto</span>
                                <input type="file" id="files"  name="foto" accept="image/*">

                            </div>
                            <div class="file-path-wrapper">
                                <input type="text" accept="image/*"  class="form-control file-path validate">
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
                    <button class="btn btn-success" type="submit">
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
<?php
if (isset($_REQUEST["banderaRegistro"])) {
    Conexion::abrir_conexion();
    $administrador = new Administrador();

    $administrador->setApellido($_REQUEST["nameApellido"]);
    $administrador->setCodigo_administrador($_REQUEST["nameUser"]);
    $administrador->setDui($_REQUEST["nameDui"]);
    $administrador->setEstado(1);
    $administrador->setNombre($_REQUEST["nameNombre"]);
    $administrador->setNivel($_REQUEST['NameNivel']);
    $administrador->setObservacion("este bicho es malo");
    $administrador->setPasword($_REQUEST["namePass1"]);
    $administrador->setSexo($_REQUEST['NameSexo']);
    $administrador->setEmail($_REQUEST['nameEmail']);
    $administrador->setFecha($_REQUEST['nameFecha']);
    
    $ruta = '../foto_admi/';
    $correlativo = Repositorio_administrador::numero_administradores(Conexion::obtener_conexion());
    $foto = $ruta .$correlativo. basename($_FILES["foto"]["name"]); ///ruta
    $foto2 = basename($_FILES["foto"]["name"]); //nombre de archivo

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
        $administrador->setFoto($correlativo.$foto2);
    } else {
        $administrador->setFoto("");
    }
    


    // $administrador->setFoto(addslashes(file_get_contents($_FILES['nameFoto']['tmp_name'])));
    Repositorio_administrador::insertar_administrador(Conexion::obtener_conexion(), $administrador);
}
?>