<?php
include_once '../app/Conexion.php';
Conexion::abrir_conexion();
$listado = Repositorio_usuario::lista_usuarios_de_baja(Conexion::obtener_conexion());
?>
<table padding="20px" class="responsive-table display" id="oatalogoEdit">
    <thead class="">

  <th class="text-center">Foto</th>
    <th class="text-center">Nombre</th>
    <th class="text-center">Motivo de eliminacion</th>



</thead>
<tbody>
    <?php
    foreach ($listado as $lista_usu) {
        # code...
        ?>
        <tr>

            <td class="text-center">
                <img class="presentacionXZ" src="../../SICAPL/foto_usuario/<?php echo $lista_usu->getFoto();?> "/>
                
            </td>
           <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
           <td class="text-center"><?php echo $lista_usu->getMotivo_eliminacion() ?></td>
           


        </tr>
    <?php } ?>

</tbody>
</table>




