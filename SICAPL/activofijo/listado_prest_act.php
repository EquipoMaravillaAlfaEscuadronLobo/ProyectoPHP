<?php
include_once '../app/Conexion.php';
include_once '../repositorios/repositorio_prestamoact.php';
Conexion::abrir_conexion();
$listado = Repositorio_prestamoact::ListaPrestamosAct(Conexion::obtener_conexion());
?>
<div class="row">

    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8"><h3>Listado de Prestamos</h3> </div>
                    <div class="col-md-2">  <a class="btn btn_primary"  target="_blank" onclick="nuevoPretamoAct()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                            </span>Nuevo Prestamo</a></div>
                </div>       
            </div>
            <div class="panel-body">				
                <table padding="20px" class="responsive-table display" id="tabla-paginada4">
                    <thead>
                    <th style="display:none;"  ></th>
                    <th>C&oacutedigo</th>
                    <th>Usuario</th>
                    <th>Fecha Salida</th>
                    <th>Fecha Devolución</th>
                    <th>Estado</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listado as $fila) {
                            $fdev = date_create($fila['Devolucion']);
                            $hoy = new DateTime("now");
                            $codigo = $fila['codigo'];
                            ?>
                        <tr rel="popover" data-container="body" data-togle="popover" data-placement="top"  title="Activos"
                                data-content="<?php
                                    Conexion::abrir_conexion();
                                    $listado1 = Repositorio_prestamoact::obtenerListActP(Conexion::obtener_conexion(), $fila['codigo']);
                                    foreach ($listado1 as $fila1) {
                                        echo $fila1['codigo'] . "<br/>";
                                    }
                                    ?>">
                                <td style="display:none;"  ></td>
                                <td><?php echo $fila['codigo']; ?></td>

                                <td><?php echo $fila['nombre'] ?></td>
                                

                                </td>
                                <td><?php echo date_format(date_create($fila['fecha_salida']), 'd-m-Y') ?></td>
                                <td><?php echo date_format(date_create($fila['Devolucion']), 'd-m-Y') ?></td>

                                <td class="text-center <?php
                                if ($fila['estado'] == 1) {
                                    echo "alert-success";
                                }
                                if ($fila['estado'] == 0) {
                                    if ($fdev > $hoy) {
                                        echo " alert-warning";
                                    } else {
                                        echo "alert-danger";
                                    }
                                }
                                    ?>"
                                <?php
                                if ($fila['estado'] == 0) {
                                    echo ' onclick="actualizarPrestamoActivo(' . $fila['codigo'] . ')" ';
                                }
                                ?>
                                    style="font-size: 16px">

                                    <?php
                                    if ($fila['estado'] == 1) {
                                        echo "Finalizado";
                                    }
                                    if ($fila['estado'] == 0) {
                                        echo "Pendiente";
                                    }
                                    ?>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>



<div id="nuevoPrestamoAct" class="modal modal-fixed-footer prestamoActivo ">
    <div class="modal-heading panel-heading">
        Registrar Prestamo 
    </div>
    <div class="modal-content">

        <?php include('prestamo_act.php'); ?>

    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><button id="gp" class="btn btn-success modal-action " onclick="registrar()" >
                    <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<div id="actPres" class="modal modal-fixed-footer prestamoActivo ">
    <div class="modal-heading panel-heading">
        Actualizar Prestamo 
    </div>
    <div class="modal-content">

        <?php include('actualizar_prestamo.php'); ?>

    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-2 text-right"></div>
            <div class="col-md-6">
                <button id="btnfinalizar" class="btn btn-success modal-action " disabled=""
                        onclick="finalizar()">
                    <span class="fa fa-check" aria="hidden"></span>
                    Finalizar</button>
                <button id="btn_actualizar_prestamo" class="btn btn-success modal-action" disabled="" onclick="actualizar()">
                    <span class="fa fa-refresh" aria="hidden"></span>
                    Actualizar</button>
                <a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
            </div>
            <div class="col-md-2 text-right"></div>
        </div>
    </div>
</div>  