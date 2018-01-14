<?php
Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios_completa(Conexion::obtener_conexion());
$direccion = '../../foto_usuario/';
?>
<table padding="20px" class="responsive-table display" id="catalogoAut">
    <thead class="">

    <th class="text-center">Foto</th>
    <th class="text-center">Nombre</th>
    <th class="text-center">Carnet</th>
    <th class="text-center">Prestamos de activo</th>
    <th class="text-center">Prestamos de libros</th>


</thead>
<tbody>
    <?php
    foreach ($lista_usuarios as $lista_carnet) {
        $observaciones_activo = Repositorio_usuario::obtener_observaciones_activo(Conexion::obtener_conexion(), $lista_carnet->getCodigo_usuario());
        $observaciones_libro = Repositorio_usuario::obtener_observaciones_libro(Conexion::obtener_conexion(), $lista_carnet->getCodigo_usuario());
        
                
        if ($observaciones_activo !="" || $observaciones_libro!="") {
            ?>
            <tr>
                <td class="text-center">
                    <img class="presentacionXZ" src="../../SICAPL/foto_usuario/<?php echo $lista_carnet->getFoto(); ?> "/>

                </td>
                <td class="text-center"><?php echo $lista_carnet->getCodigo_usuario() ?></td>
                <td class="text-center"><?php echo $lista_carnet->getNombre() . " " . $lista_carnet->getApellido(); ?></td>
                <td class="text-center"><?php echo $observaciones_activo ?></td>
                <td class="text-center"><?php echo $observaciones_libro ?></td>
            </tr>
    <?php 
}
 } 
?>

</tbody>
</table>

