<?php
include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';
Conexion::abrir_conexion();
$administradorActual = Repositorio_administrador::obtener_administrador_actual(Conexion::obtener_conexion(), $_SESSION['user']);

$sexo = $administradorActual->getSexo();

?>


<!--inicio de container -->
<div class="container">
    <!--    inicio de formulario-->
    <form id="editar_formulario" method="post" action="" autocomplete="off" >
        <input type="hidden" name="banderaEdicion" id="banderaEdicion"/>
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
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5 input-group">
                        <i class="fa fa-user-circle prefix"></i> 
                        <input type="text" id="idNombreE" name="nameNombreE"  class="text-center validate" maxlength="25" minlength="3" required="" value="<?php echo $administradorActual->getNombre();?>">
                        <label for="idNombreE" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-user-circle prefix"></i> 
                        <input type="text" id="idApellidoE" name="nameApellidoE"  class="text-center validate" maxlength="25" minlength="3" required="" value="<?php echo $administradorActual->getApellido();?>">
                        <label for="idApellidoE">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-vcard prefix"></i> 
                        <input type="text" id="idUserE" name="nameUserE" class="text-center validate" minlength="4" maxlength="14" required="" value="<?php echo $administradorActual->getCodigo_administrador();?>" disabled="">
                        <label for="idUserE">Nmbre De Usuario<small>(Ej: juan01)</small> </label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-credit-card prefix"></i> 
                        <input type="text" id="idDuiE" name="nameDuiE" class="text-center validate" minlength="10" required="" value="<?php echo $administradorActual->getDui();?>">
                        <label for="idDuiE">Dui <small>(Ej: 02436390-9)</small></label>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-eye prefix"></i> 
                        <input type="password" id="idPass1E" name="namePass1E" class="text-center validate" autocomplete="off" minlength="5" maxlength="10" value="PASS_AC" >
                        <label for="idPass1E">nueva contraseña(opcional)</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-eye prefix"></i> 
                        <input type="password" id="idPass2E" name="namePass2E" class="text-center validate" autocomplete="off"  minlength="5" maxlength="10" value="PASS_AC">
                        <label for="idPass2E">Repita Contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-calendar prefix"></i> 
                        <input type="text" id="idFechaE" name="nameFechaE" class="text-center datepicker2" required="" value="<?php echo $administradorActual->getFecha();?>">
                        <label for="idFechaE">Fecha de Nacimiento</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-envelope-o prefix"></i> 
                        <input type="email" id="idEmailE" name="nameEmailE" class="text-center validate" required=""  value="<?php echo $administradorActual->getEmail();?>">
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
                                    <?php 
                                    ?>
                                    
                                    <input type="radio" id="idHombreE"  name="NameSexoE"
                                           class="text-center with-gap" value="0" <?php if ($sexo == "0") {echo 'checked=""'; }?>>
                                    <label for="idHombreE">Masculino</label>

                                    <input type="radio" id="idMujerE" name="NameSexoE" 
                                      class="text-center with-gap" value="1" <?php if ($sexo == "1") {echo 'checked=""'; }?>>
                                    <label for="idMujerE">Femenino</label>
                                </div>
                            </div>
                        </div>
                    </div>    
                     <div class="input-field col m5">
                        <i class="fa fa-expeditedssl prefix"></i> 
                <input type="password" id="idVerificacion" name="nameVerificacion" class="text-center validate" autocomplete="off">
                        <label for="idValidacionX">Para continuar por favor ingrese su contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m3"></div>
                    <div class="file-field input-field col m6">
                        <div class="btn btn-primary">
                            <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path" type="text" name="nameFotoE" id="idFoto" minlength="5">
                            <input type="file" id="files" name="files[]">
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
                </div>
                <div class="row text-center">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-refresh" aria="hidden"></span>                            
                        Actualizar</button>
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
<?php

if (isset($_REQUEST["banderaEdicion"])) {

    $administradorE = new Administrador();

    $administradorE->setApellido($_REQUEST["nameApellidoE"]);
    $administradorE->setCodigo_administrador($administradorActual->getCodigo_administrador());
    $administradorE->setDui($_REQUEST["nameDuiE"]);
    $administradorE->setNombre($_REQUEST["nameNombreE"]);
    $administradorE->setObservacion("NINGUNA");
    $administradorE->setPasword($_REQUEST["namePass1E"]);
    $administradorE->setSexo($_REQUEST['NameSexoE']);
    $administradorE->setEmail($_REQUEST['nameEmailE']);
    $administradorE->setFecha($_REQUEST['nameFechaE']);
    $verificacion = $_REQUEST['nameVerificacion'];

//echo 'vamos bien ' .$verificacion ;
    Repositorio_administrador::actualizar_mis_datos(Conexion::obtener_conexion(), $administradorE, $verificacion);
    //Conexion::cerrar_conexion();
}

?>


