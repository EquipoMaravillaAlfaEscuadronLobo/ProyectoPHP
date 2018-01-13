<?php
Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
?>

<form action="../usuario/reportes/imprimir_lista_carnet.php" method="get" target="_blank">
<table padding="20px" class="responsive-table display" id="catalogoLb">
    <thead class="">

    <th class="text-center"></th>
    <th class="text-center">Carnet</th>
    <th class="text-center">Nombre Completo</th>
    <th class="text-center">Telefono</th>
    <th class="text-center">Direccion</th>
    <th class="text-center">Correo</th>
    <th class="text-center">Foto</th>
    <th class="text-center">seleccionar</th>

</thead>
<tbody>
    <?php foreach ($lista_usuarios as $lista_usu) { ?>
        <tr>
            <td class="text-center">
                <button class="btn btn-primary"> 
                    <i class="material-icons prefix">print</i> 
                </button>
            </td>
            <th class="text-center"><?php echo $lista_usu->getCodigo_usuario(); ?></th>
            <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getTelefono(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getDireccion(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getEmail(); ?></td>
            <td class="text-center">
                <img class="presentacionXZ" src="<?php echo $direccion . $lista_usu->getFoto(); ?>"/>
            </td>
            <td class="text-center">

                <input type="checkbox" name="lista_usuario[]"
                       id="<?php echo $lista_usu->getCodigo_usuario(); ?>" 
                       value="<?php echo $lista_usu->getCodigo_usuario(); ?>">
                <label for="<?php echo $lista_usu->getCodigo_usuario();?>"></label>
            </td>

        </tr>
        <?php
    }
    ?>

</tbody>
</table>
   
</form>
<script>
    function imprimir_individual(carnet) {

        var url = "../usuario/reportes/imprimir_carnet.php?carnet=" + carnet;

        var a = document.createElement("a");
        a.target = "_blank";
        a.href = url;
        a.click();

    }
</script>
