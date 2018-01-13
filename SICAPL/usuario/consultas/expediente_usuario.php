<?php


Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
$direccion = '../../foto_usuario/';
              
?>
<table padding="20px" class="responsive-table display" id="catalogoAut">
    <thead class="">

    <th class="text-center">Foto</th>
    <th class="text-center">Nombre</th>
    <th class="text-center">Historial</th>


</thead>
<tbody>
    <?php
    foreach ($lista_usuarios as $lista_usu) {
        # code...
        ?>
        <tr>

            <td class="text-center">
                <img class="presentacionXZ" src="../../SICAPL/foto_usuario/<?php echo $lista_usu->getFoto();?> "/>
                
            </td>
           <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
           <td class="text-center"><?php echo $lista_usu->getObservacion() ?></td>
           


        </tr>
    <?php } ?>

</tbody>
</table>

