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
                    <th>Codigo</th>
                    <th>Usuario</th>
                    <th>Datos</th>
                    <th>Fecha Salida</th>
                    <th>Fecha Devolucion</th>
                    <th>Estado</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listado as $fila) {
                            $fdev = date_create($fila['Devolucion']);
                            $hoy = new DateTime("now");
                            $codigo = $fila['codigo'];
                            ?>
                            <tr>
                                <td style="display:none;"  ></td>
                                <td><?php echo $fila['codigo']; ?></td>

                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo $fila['titulo'] ?></td>
                                <td><?php echo date_format(date_create($fila['fecha_salida']), 'd-m-Y') ?></td>
                                <td><?php echo date_format(date_create($fila['Devolucion']), 'd-m-Y') ?></td>
                                <?php
                                ?>
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
            <div class="col-md-6 text-right"><button id="gp" class="btn btn-success modal-action " type="submit" form="prestamoAct">
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
<script type="text/javascript">
    function  actualizar() {
        document.getElementById("opcion").value = 2;
        document.actualizar_prestamo_activo.submit();
    }
    function  finalizar() {
        if (validarTablas_dev()) {
            document.getElementById("opcion").value = 1;
            document.actualizar_prestamo_activo.submit();          
        }
    }
    
    function validarTablas_dev() {
        
        var okk = true;
        // codigo para verificar no finalizar con activos en prestamo
        var sel1 = document.actualizar_prestamo_activo.elements["accion_select[]"];//se obtiene los elementos
        var cont1 = 0;
        for (var i = 0; i < sel1.length; i++) {
            if (sel1[i].value == "2") {//verifica si hay activos con codigo de estado 2, que es el de en prestamo
                cont1++;
                okk = false;
            }
        }
         
        if (cont1 > 0) {//si hay activos con codido 3 
            swal("Ooops", "No puede finalizar el prestamo con activos pendientes de devolver", "warning");
            
        }


        return okk;
    }
</script>   