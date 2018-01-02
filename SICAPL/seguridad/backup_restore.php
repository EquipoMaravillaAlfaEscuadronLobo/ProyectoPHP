<?php
include_once '../app/Conexion.php';
include_once '../repositorios/repositorio_prestamolib.inc.php';
Conexion::abrir_conexion();
$listado = Repositorio_prestamolib::ListaPrestamos(Conexion::obtener_conexion());
?>
<div class="container">
    <row>
        <!--        <div class="col-md-1"></div>-->
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Backup/Restaurar</h3>
                        </div>
                        <div class="col-md-2">
                            <a href="../repositorios/repositorio_Backup.php" class="btn btn_primary">
                                <span aria-hidden="true" class="glyphicon glyphicon-plus">
                                </span>Nuevo Backup
                            </a>
                        </div>
                    </div>       
                </div>
                <div class="panel-body">				
                    <table padding="20px" class="responsive-table display" id="tabla-paginada4">
                        <thead>
                        <th style="cursor:pointer" class="text-center">Restaurar</th>
                        <th class="text-center">Fecha</th>
                        <th class="text-center">Hora</th>
                        </thead>
                        <tbody>
                            <?php
                            //include_once './Connet.php';
                            include '../repositorios/repositorio_Connet.php';
                            $ruta = BACKUP_PATH;
                            if (is_dir($ruta)) {
                                if ($aux = opendir($ruta)) {
                                    while (($archivo = readdir($aux)) !== false) {
                                        if ($archivo != "." && $archivo != "..") {
                                            $nombrearchivo = str_replace(".sql", "", $archivo);
                                            $hora = str_replace("-", ":", substr($nombrearchivo, 11, 18));
                                            $hora = str_replace("(", "", $hora);
                                            $hora = str_replace(")", "", $hora);
                                            $hora = str_replace("_hrs", "", $hora);
                                            $dia = str_replace("-", "/", substr($nombrearchivo, 0, 9));
                                            $ruta_completa = $ruta . $archivo;
                                            if (is_dir($ruta_completa)) {
                                                
                                            } else {
                                                ?>
                                                <tr>
                                                    <td class="text-center">
                                                        <button class="btn btn-success" onclick="abrir_venta_restaurar('<?php echo $ruta_completa;?>')">
                                                            <i class="Medium material-icons">autorenew</i> 
                                                        </button>
                                                    </td>
                                                    <td class="text-center"><?php echo $dia; ?></td>
                                                    <td class="text-center"><?php echo $hora; ?></td>
                                                </tr>

                                                <?php
                                            }
                                        }
                                    }
                                    closedir($aux);
                                }
                            } else {
                                echo $ruta . " No es ruta válida";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </row>
</div>

<form id="vandera_simple" method="post" action="" autocomplete="off" enctype="multipart/form-data">
    <input type="hidden" name="banderaSimple" id="banderaSimple"/>
    <input type="hidden" name="punto" id="punto"/>
    <!--    este es el modal-->
    <div id="restaurar" class="modal modal-fixed-footer nuevo">
        <div class="modal-heading panel-heading">
            <h3 class="text-center">Restaurar Datos de Sistema</h3>
        </div>
      
        <div class="modal-content modal-sm">
            <br><br><br><br><br>
            <div class="row">
                
                <div class="col-md-12">
                    <div class="input-field col m4"></div>
                 <div class="input-field col m5">
                        <i class="fa fa-expeditedssl prefix"></i> 
                        <input type="password" id="idVerificacion" name="nameRequerido" required="" class="text-center validate" autocomplete="off">
                        <label for="idVerificacion">Para continuar por favor ingrese su contraseña</label>
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




<script type="text/javascript">
    function llamar_restaurar(punto) {
        window.open("../repositorios/repositorio_Restore.php?restorePoint=" + punto, "_parent");

    }
    function abrir_venta_restaurar(punto) {
        $("#punto").val(punto);
        $('#restaurar').modal('open');
    }

</script>

<?php
if (isset($_REQUEST["banderaSimple"])) {
    if (Repositorio_administrador::verificar_pass(Conexion::obtener_conexion(), $_REQUEST['nameRequerido'])) {
        $punto = $_REQUEST['punto'];
        echo '<script>llamar_restaurar("'.$punto.'");</script>';
    }else{
        echo '<script>swal({
                    title: "Advertencia!",
                    text: "la contraseña que introdujo no es correcta, por lo que no se restauraran los datos",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
    }
    
}
?>



