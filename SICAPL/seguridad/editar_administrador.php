<form id="editar_formulario" method="post" action="" autocomplete="off" enctype="multipart/form-data">
    <input type="hidden" name="banderaEdicion" id="banderaEliminacion"/>
    <input type="hidden" name="codigo_original" id="codigo_original"/>
    <input type="hidden" id="idSecreto" value="">

    <!--    este es el modal-->
    <div id="edicion_administradores" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading">
            <h3 class="text-center">Editar Administradores</h3>
        </div>

        <div class="modal-content modal-lg">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
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
                                <input type="text" id="idUserE" name="nameUserE" class="text-center validate" minlength="6" maxlength="14" required="" value=" " disabled="">
                                <label for="idUserE">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-credit-card prefix"></i> 
                                <input type="text" id="idDuiE" name="nameDuiE" class="text-center validate" minlength="10" required="" value="d">
                                <label for="idDuiE">Dui <small>(Ej: 02436390-9)</small></label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-eye prefix"></i> 
                                <input type="password" id="idPass1E" name="namePass1E" class="text-center validate" autocomplete="off" minlength="6" maxlength="10" value="d" >
                                <label for="idPass1E">nueva contraseña(opcional)</label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-eye prefix"></i> 
                                <input type="password" id="idPass2E" name="namePass2E" class="text-center validate" autocomplete="off"  minlength="6" maxlength="10" value="d">
                                <label for="idPass2E">Repita Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-calendar prefix"></i> 
                                <input type="text" id="idFechaE" name="nameFechaE" class="text-center datepicke-cumple" required="" value=" ">
                                <label for="idFechaE">Fecha de Nacimiento</label>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-envelope-o prefix"></i> 
                                <input type="email" id="idEmailE" name="nameEmailE" class="text-center validate" required=""  value="X ">
                                <label for="idEmailE">Email <small>(Ej: correo@gmail.com)</small> </label>
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
                                            <input type="radio" id="idHombreE"  name="NameSexoE" class="text-center with-gap" value="Masculino">
                                            <label for="idHombreE">Masculino</label>

                                            <input type="radio" id="idMujerE" name="NameSexoE" class="text-center with-gap" value="Femenino">
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
                                            <input type="radio" id="idRootE"  name="NameNivelE" value="0"  class="text-center with-gap" >
                                            <label for="idRootE">Root</label>

                                            <input type="radio" id="idAdministradorE" name="NameNivelE" value="1"  class="text-center with-gap">
                                            <label for="idAdministradorE">Administrador</label>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="col-md-5">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span><i class="fa fa-camera" aria-hidden="true"></i>Foto</span>
                                        <input type="file" id="foto1" name="foto1" accept="image/*">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input type="text"  class="form-control file-path validate">
                                    </div>
                                </div>
                            </div>
                            <div class="input-field col m5">
                                <i class="fa fa-expeditedssl prefix"></i> 
                                <input type="password" id="idVerificacion" name="nameVerificacion" class="text-center validate" autocomplete="off">
                                <label for="idVerificacion">Para continuar por favor ingrese su contraseña</label>
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
        <div class="modal-footer">
            <div class="row">
                <div class="col-md-6 text-right">
                    <button href="#" class="btn btn-success">
                        <span class="glyphicon glyphicon-refresh" aria="hidden"></span> Actualizar
                    </button>
                </div>
                <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><span class="glyphicon glyphicon-remove" aria="hidden"></span>Salir</a></div>
            </div>
        </div>
    </div>
    <!--aqui termina el modal-->

</form>
<?php
if (isset($_REQUEST["banderaEdicion"])) {

    $administrador = new Administrador();

    $administrador->setApellido($_REQUEST["nameApellidoE"]);
    //$administrador->setCodigo_administrador($_REQUEST["nameUserE"]);
    $administrador->setDui($_REQUEST["nameDuiE"]);
    $administrador->setNombre($_REQUEST["nameNombreE"]);
    $administrador->setNivel($_REQUEST['NameNivelE']);
    $administrador->setObservacion("NINGUNA");
    $administrador->setPasword($_REQUEST["namePass1E"]);
    $administrador->setSexo($_REQUEST['NameSexoE']);
    $administrador->setEmail($_REQUEST['nameEmailE']);
    $administrador->setFecha($_REQUEST['nameFechaE']);
    $codigo_original = $_REQUEST['codigo_original']; ///ESTE ES EL ID ADMINISTRADOR
    $verificacion = $_REQUEST['nameVerificacion'];

    $ruta = '../foto_admi/';
    $foto =$ruta.basename($_FILES["foto1"]["name"]);
    $foto2=basename($_FILES["foto1"]["name"]);
    if($foto2==""){
        $foto2=$_FILES['foto1']['name'];
        $foto ="";

    }
    if($foto!=""){
    if (move_uploaded_file($_FILES['foto1']['tmp_name'], $foto)) {
       $administrador->setFoto($foto2);
      // echo "1";
    }else{
        $administrador->setFoto("");
        //echo "2";
    }
}else{
      $administrador->setFoto($foto2);

}

    Repositorio_administrador::actualizar_administrador(Conexion::obtener_conexion(), $administrador, $codigo_original, $verificacion);
    //Conexion::cerrar_conexion();
}
?>
