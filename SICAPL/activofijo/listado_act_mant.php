<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Administrador.inc.php';
include_once '../modelos/Detalles.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_categoria.php';
include_once '../repositorios/repositorio_administrador.inc.php';
include_once '../repositorios/repositorio_detalles.php';
Conexion::abrir_conexion();
$listado = Repositorio_activo::lista_activo_mantenimiento2(Conexion::obtener_conexion());
?> 
 <div>
    <row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Activos</h3>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn_primary"   onclick="nuevoMant('no')"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>MANTENIMIENTO</a>
                        </div>
                    </div>       
                </div>
                <div class="panel-body">                
                    <table padding="20px" class="responsive-table display" id="tabla-listManteActivo">
                        <thead class="">                       
                        <th class="text-center">Código</th>
                        <th class="text-center" >Tipo</th>
                        <th class="text-center">Encargado</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">&nbsp;</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listado as $fila) {
                                ?>
                                <tr>
                                   
                                    <td class="text-center"><?php echo $fila['codigo_activo']; ?></td>
                                    <td class="text-center"><?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?></td>
                                    <td class="text-center"><?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre() .
                                            " " . Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido();
                                            ?></td>
                                    <td class="text-center <?php
                                    if ($fila['estado'] == 1) {
                                        echo "btn-success";
                                    }
                                    if ($fila['estado'] == 0) {
                                        echo "btn-danger";
                                    }
                                    if ($fila['estado'] == 4) {
                                        echo "btn-danger";
                                    }
                                    if ($fila['estado'] == 2) {
                                        echo " btn-warning";
                                    }
                                    if ($fila['estado'] == 3) {
                                        echo " btn-warning";
                                    }
                                    ?>"
                                        style="font-size: 16px">
                                            <?php
                                            if ($fila['estado'] == 1) {
                                                echo "Disponible";
                                            }
                                            if ($fila['estado'] == 0) {
                                                echo "Dado de Baja";
                                            }
                                            if ($fila['estado'] == 2) {
                                                echo "Prestado";
                                            }
                                            if ($fila['estado'] == 3) {
                                                echo "Dañado";
                                            }
                                            if ($fila['estado'] == 4) {
                                                echo "Extaviado";
                                            }
                                            ?>

                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn_primary"   onclick="nuevoMant('<?php echo $fila['codigo_activo'] ?>')"><span aria-hidden="true" class="fa fa-wrench">
                        </span></a>
                                    </td>


                                </tr>
<?php } ?>

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                  
                </div>
            </div>
        </div>
    </row>
</div>



