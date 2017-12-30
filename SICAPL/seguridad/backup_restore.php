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

                                                echo '<option class="center-align" value="' . $ruta_completa . '">' . $dia . $hora . ' </option>';
                                                echo '<tr>
                                            <td class="text-center">
                                                <button class="btn btn-success" onclick="llamar_restaurar("../backup/29-12-2017_(22-34-58_hrs).sql")">
                                                    <i class="Medium material-icons">autorenew</i> 
                                                </button>
                                            </td>
                                            <td class="text-center">' . $dia . '</td>
                                            <td class="text-center">' . $hora . '</td>
                                        </tr>';
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

<script type="text/javascript">
    function llamar_restaurar(punto) {
    window.open("../repositorios/repositorio_Restore.php="+punto, "_parent");
    
    }



</script>
