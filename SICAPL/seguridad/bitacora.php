<?php
include_once '../modelos/Bitacora.php';
include_once '../repositorios/repositorio_bitacora.php';
Conexion::abrir_conexion();
$lista_bitacora = Repositorio_Bitacora::lista_bitacora(Conexion::obtener_conexion());
?>

<div class="container">
    <div class="panel">
        <div class="panel-heading text-center">
            <div class="row">
                <div class="col-md-12">
                    <h3>Bitacora de Sistema</h3>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table padding="20px" class="responsive-table table-sm display" id="tabla-bitacora">
                <thead class="">
                <th class="text-center alert-success">N</th>
                <th class="text-center alert-success">Administrador</th>
                <th class="text-center alert-success">Accion</th>
                <th class="text-center alert-success">Fecha</th>
                <th class="text-center alert-success">Hora</th>

                </thead>
                <tbody>
<?php foreach ($lista_bitacora as $listaB) {
    $nombreB = Repositorio_Bitacora::nombre_de_administrador(Conexion::obtener_conexion(), $listaB->getCodigo_administrador());
    ?>
                        <tr>
                            <td class="text-center "><?php echo $listaB->getCodigo_bitacora() ?></td>
                            <td class="text-center "><?php echo $listaB->getCodigo_administrador() . "(" . $nombreB . ')' ?></td>
                            <td class="text-center "><?php echo $listaB->getAccion(); ?></td>
                            <td style="width: 100px;" class="text-center "><?php $dia = date_create($listaB->getFecha());
    echo date_format($dia, 'd-m-Y'); ?></td>
                            <td class="text-center "><?php $hora = date_create($listaB->getFecha());
    echo date_format($hora, 'h:i:s'); ?></td>
                        </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



