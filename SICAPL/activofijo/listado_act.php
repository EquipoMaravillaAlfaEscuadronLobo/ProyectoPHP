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
$listado = Repositorio_activo::lista_activo(Conexion::obtener_conexion());
?> 
<div>
    <row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Activo Fijo</h3></div>

                    </div>

                </div>
                <div class="panel-body">                
                    <table padding="20px" class="responsive-table display" id="tabla-listActivo">
                        <thead class="">
                        <td class="text-center" >&nbsp;</td>
                        <th class="text-center">Código</th>
                        <th class="text-center" >Tipo</th>
                        <th class="text-center">Encargado</th>
                        <th class="text-center">Estado</th>

                        </thead>
                        <tbody>
                            <?php
                            foreach ($listado as $fila) {
                                ?>
                                <tr>
                                    <td class="text-center">
                                        <button class="btn btn-success" 
                                        <?php
                                        if ($fila['estado'] == 0 || $fila['estado'] == 4) {
                                            echo 'disabled="true"';
                                        }
                                        ?>
                                                onclick="abrirActivo('<?php echo $fila['codigo_activo'] ?>',
                                                                    '<?php echo $fila['codigo_administrador'] ?>',
                                                                    '<?php echo $fila['foto'] ?>',
                                                                    '<?php
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
                                                ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getCodigo_detalle() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getColor() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getDimencione() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getMarca() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getMemoria() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getModelo() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getOtros() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getProcesador() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getRam() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getSeri() ?>',
                                                                    '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getSistema() ?>',
                                                                    '<?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre() .
                                            " " . Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido();
                                                ?>'
                                                                    )"> <i class="Medium material-icons prefix">edit</i> </button></td>
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


                                </tr>
<?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </row>
</div>

<div id="editActivo" class="modal modal-fixed-footer nuevo">
    <div class="modal-heading panel-heading text-center">
        <h3><i class="fa fa-edit"></i> &nbsp Modificación De Activo Fijo</h3>
    </div>
    <div class="modal-content">
<?php include('edit_aactivo.php'); ?>
    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-6 text-right"><button id="gp" class="btn btn-success modal-action " type="submit" form="ActAct">
                    <span class="glyphicon glyphicon-floppy-disk" ></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<div id="DActivo" class="modal modal-fixed-footer nuevo">
    <div class="modal-heading panel-heading text-center">
        <h3><i class="fa fa-edit"></i> &nbsp Dar De Baja Activo Fijo</h3>
    </div>
    <div class="modal-content">
<?php include('eliminar_activo.php'); ?>
    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-6 text-right"><button id="gp" class="btn btn-success  " onclick="valiD()">
                    <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>
                    Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>  
    </div>
</div>

<script language="javascript">// <![CDATA[

    $(document).ready(function () {

       // Interceptamos el evento submit
        $('#ActAct').submit(function () {
            // Enviamos el formulario usando AJAX
           
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                dataType: "html",
                data: $(this).serialize(),
                cache: false,
                contentType: false
                processData: false
                
                // Mostramos un mensaje con la respuesta de PHP
                }).done( function () {
                  
                  swal({
                    title: "Exito",
                    text: "Registro actualizado con exito!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_activo.php#ttest2";
                    
                });
                

                } 
                       
            )
            return false;
        });
    })

    function  valiD() {

        var p1 = document.getElementById('idVal').value;
        var p = document.getElementById('Secreto').value;
        var m = document.getElementById('idMotivoE').value;

        if (p1 == p) {
            if (m.length > 3) {
                document.eliminarAct.submit();
            } else {
                swal("Oops", "ingrese  Motivo Valido", "error");
            }

        } else {
            swal("Oops", "Contraseña Incorrecta", "error");
        }

    }
// ]]></script>