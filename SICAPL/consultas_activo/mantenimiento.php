<?php
include_once '../app/Conexion.php';
include_once '../modelos/Mantenimiento.php';
include_once '../repositorios/repositorio_mantenimiento.php';
include_once '../modelos/Encargado_mantenimiento.php';
include_once '../repositorios/repositorio_encargado.php';
Conexion::abrir_conexion();
$listado = Repositorio_mantenimiento::ListaMantAct(Conexion::obtener_conexion());
?>
<table padding="20px" class="responsive-table display" id="catalogoAut">
    <thead class="">

    <th class="text-center">Encargado</th>
    <th class="text-center">Telefono</th>
    <th class="text-center">Direcci&oacuten</th>
    <th class="text-center">Fecha</th>
    <th class="text-center"></th>



</thead>
<tbody>
    <?php
    foreach ($listado as $fila) {
        $listado_encargadpo = Repositorio_mantenimiento::ListarEncargados(Conexion::obtener_conexion(), $fila['cod']);
        $listado_encargadpoT = Repositorio_mantenimiento::ListarEncargados(Conexion::obtener_conexion(), $fila['cod']);
        $listado_encargadpoD = Repositorio_mantenimiento::ListarEncargados(Conexion::obtener_conexion(), $fila['cod']);
        ?>
        <tr>            
            <td class="text-center"><?php
                foreach ($listado_encargadpo as $filaEn) {
                    $encargadpo = Repositorio_encargado::obtener_encargado(Conexion::obtener_conexion(), $filaEn['codMant']);

                    echo $encargadpo->getNombre() . " <br />";
                }
                ?></td>
            <td class="text-center"><?php
                foreach ($listado_encargadpoT as $filaEn1) {
                    $encargadpo = Repositorio_encargado::obtener_encargado(Conexion::obtener_conexion(), $filaEn1['codMant']);

                    echo $encargadpo->getTelefono() . " <br />";
                }
                ?></td>
            <td class="text-center"><?php
                foreach ($listado_encargadpoD as $filaEn2) {
                    $encargadpo = Repositorio_encargado::obtener_encargado(Conexion::obtener_conexion(), $filaEn2['codMant']);

                    echo $encargadpo->getDirecccion() . " <br />";
                }
                ?></td>

            <td class="text-center"><?php echo date_format(date_create($fila['fecha']), 'd-m-Y') ?></td>
            <td class="text-center">
                <button class="btn btn-info" 
                onclick="verMantenimiento('<?php echo $fila['cod'] ?>', '<?php echo $fila['fecha'] ?>', '<?php echo $fila['costo'] ?>', '<?php echo $fila['des'] ?>')"> 
                <i class="fa fa-eye"></i>
                </button>
            </td>
        </tr>
    <?php } ?>

</tbody>
</table>

