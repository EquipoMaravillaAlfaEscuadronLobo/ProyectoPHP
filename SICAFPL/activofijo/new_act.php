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
                                        if ($fila['estado'] == 0) {
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
                                                                '<?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre().
                                            " ".Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido(); ?>'
                                                                )"> <i class="Medium material-icons prefix">edit</i> </button></td>
                                    <td class="text-center"><?php echo $fila['codigo_activo']; ?></td>
                                    <td class="text-center"><?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?></td>
                                    <td class="text-center"><?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre().
                                            " ".Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido(); ?></td>
                                    <td class="text-center <?php
                                    if ($fila['estado'] == 1) {
                                        echo "btn-success";
                                    }
                                    if ($fila['estado'] == 0) {
                                        echo "btn-danger";
                                    }
                                    if ($fila['estado'] == 2) {
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
                    <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>
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
            <div class="col-md-6 text-right"><button id="gp" class="btn btn-success modal-action " type="" form="">
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
                data: $(this).serialize(),
                // Mostramos un mensaje con la respuesta de PHP
                success: function (resp) {
                     //
                    // $('#ttest2').load('new_act.php');
                     location.href="inicio_activo.php";
                    $('#ttest2').load('listado_act.php');

                    
                    $('#editActivo').modal('close');
                    document.getElementById('ActAct').reset();
                    
                    // swal ( "Exito" ,  "Registro guardado con exito", "success");
                }
            })
            return false;
        });
    })
// ]]></script>





<?php
//if (isset($_REQUEST["bandera1"])) {


    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../modelos/Detalles.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_detalles.php';
    Conexion::abrir_conexion();
    $cant = $_REQUEST['cantidad'];


    $detalle = new Detalles();
    $detalle->setSeri($_REQUEST["nserie"]);
    $detalle->setColor($_REQUEST["color"]);
    $detalle->setMarca($_REQUEST["marca"]);
    $detalle->setSistema($_REQUEST["so"]);
    $detalle->setDimencione($_REQUEST["dimensiones"]);
    $detalle->setRam($_REQUEST["ram"]);
    $detalle->setModelo($_REQUEST["modelo"]);
    $detalle->setMemoria($_REQUEST["dd"]);
    $detalle->setProcesador($_REQUEST["pro"]);
    $detalle->setOtros($_REQUEST["otro"]);
    Repositorio_detalle::insertar_detalle(Conexion::obtener_conexion(), $detalle);

    $activo = new Activo();
    $activo->setCodigo_activo($_REQUEST["selectCat"]);
    $activo->setCodigo_administrador($_REQUEST["admin"]);
    //DANDO FORMATO A LA FECHA
    $originalDate = $_REQUEST['fecha_adq'];
    $fecha = $_REQUEST['fecha_adq'];
    list($dia, $mes, $year) = explode("/", $fecha);
    $fecha = $year . "-" . $mes . "-" . $dia;
//fin fecha
    $R = Repositorio_detalle::obtener_ultimo_detale(Conexion::obtener_conexion());

    $activo->setFecha_adquicision($fecha);
    $activo->setCodigo_tipo($_REQUEST["selectCat"]);
    $activo->setPrecio($_REQUEST["precioUnitario"]);
    $activo->setCodigo_proveedor($_REQUEST['selectPro']);

    //para la foto
    $ruta = '../fotoActivos/';
    $foto = $ruta . basename($_FILES["foto"]["name"]);
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
        $activo->setFoto($foto);
        
    } else {
        $activo->setFoto("");
        
    }

    //fin para foto
    //$activo->setFoto($_REQUEST["fotoActivo"]);
    $activo->setEstado('1');
    $activo->setCodigo_detalle($R);
    $correlativo = Repositorio_activo::obtener_nactivo(Conexion::obtener_conexion(), $_REQUEST["selectCat"]);



    for ($i = 1; $i <= $cant; $i++) {
        Repositorio_detalle::insertar_detalle(Conexion::obtener_conexion(), $detalle);
        $R = Repositorio_detalle::obtener_ultimo_detale(Conexion::obtener_conexion());
        $activo->setCodigo_detalle($R);
        $correlativo++;
        if (($correlativo / 10) < 1) {
            $cod = $_REQUEST["selectCat"] . "-000" . $correlativo;
        } else {
            if (($correlativo / 10) < 10) {
                $cod = $_REQUEST["selectCat"] . "-00" . $correlativo;
            } else {
                if (($correlativo / 10) < 100) {
                    $cod = $_REQUEST["selectCat"] . "-0" . $correlativo;
                } else {

                    $cod = $_REQUEST["selectCat"] . "-" . $correlativo;
                }
            }
        }

        //$cod=$_REQUEST["selectCat"]."-".$correlativo; 
        $activo->setCodigo_activo($cod);
       echo Repositorio_activo::insertar_activo(Conexion::obtener_conexion(), $activo);
    }
    //
    Conexion::cerrar_conexion();
//}
?>