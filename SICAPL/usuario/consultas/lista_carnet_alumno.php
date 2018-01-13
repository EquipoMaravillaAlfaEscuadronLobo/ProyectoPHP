<?php
Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
?>


<table padding="20px" class="responsive-table display" id="catalogoLb">
    <thead class="">


    <th class="text-center">Carnet</th>
    <th class="text-center">Nombre Completo</th>
    <th class="text-center">Telefono</th>
    <th class="text-center">Direccion</th>
    <th class="text-center">Correo</th>
    <th class="text-center">Foto</th>
    <th class="text-center"></th>

</thead>
<tbody>
    <?php foreach ($lista_usuarios as $lista_usu) { ?>
        <tr>

            <th class="text-center"><?php echo $lista_usu->getCodigo_usuario(); ?></th>
            <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getTelefono(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getDireccion(); ?></td>
            <td class="text-center"><?php echo $lista_usu->getEmail(); ?></td>
            <td class="text-center">
                <img class="presentacionXZ" src="<?php echo $direccion . $lista_usu->getFoto(); ?>"/>
            </td>
            <td class="text-center">
                <button class="btn btn-primary" onclick="imprimir_individual('<?php echo $lista_usu->getCodigo_usuario();?>')"> 
                    <i class="material-icons prefix">print</i> 
                </button>
            </td>
        </tr>
        <?php            
    }
    ?>

</tbody>
</table>
<script>
     function imprimir_individual(carnet) {
   
            var url = "../usuario/reportes/imprimir_carnet.php?carnet=" + carnet;

            var a = document.createElement("a");
            a.target = "_blank";
            a.href = url;
            a.click();
   
    }
</script>
