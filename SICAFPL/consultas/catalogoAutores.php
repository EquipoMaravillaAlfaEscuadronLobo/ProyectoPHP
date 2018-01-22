<?php
include_once '../app/Conexion.php';
include_once '../modelos/Autores.php';
include_once '../repositorios/repositorio_autores.inc.php';
Conexion::abrir_conexion();
$listado = Repositorio_autores::ListaAutores(Conexion::obtener_conexion());
?>
<table padding="20px" class="responsive-table display" id="catalogoAut">
    <thead class="">
    
    <th class="text-center">Nombre</th>
    <th class="text-center">Apellido</th>
    <th class="text-center">Fecha de Nacimiento</th>
    <th class="text-center">Biografia</th>



</thead>
<tbody>
    <?php
    foreach ($listado as $fila) {
        # code...
        ?>
        <tr>
            
            <td class="text-center"><?php echo $fila['nombre'] ?></td>
            <td class="text-center"><?php echo $fila['apellido'] ?></td>
            <td class="text-center"><?php echo date_format(date_create($fila['nacimiento']), 'd-m-Y') ?></td>
            <td class="text-center"><a class="btn btn-info" href="pdf.php?direccion=<?php echo $fila['biografia']; ?>" target="_blank">Biografia</a></td>


        </tr>
    <?php } ?>

</tbody>
</table>

