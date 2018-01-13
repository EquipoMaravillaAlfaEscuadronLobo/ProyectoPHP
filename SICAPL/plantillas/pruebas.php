<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../modelos/Usuario.php';
include_once '../repositorios/repositorio_usuario.inc.php';
include_once '../app/Conexion.php';
//echo $_SESSION['nivel'];  

Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
?>
</nav>





<table padding="20px" class="responsive-table display" id="catalogoLb">
    <thead class="">

    <th class="text-center"></th>
    <th class="text-center">Carnet</th>
    <th class="text-center">Nombre Completo</th>
    <th class="text-center">Telefono</th>
    <th class="text-center">Direccion</th>
    <th class="text-center">Correo</th>
    <th class="text-center">Foto</th>
    <th class="text-center"><input type="checkbox" id=""  name="" value="Masculino" class="text-center with-gap" >
<label for="idHombre"></label></th>

</thead>
<tbody>
    <?php foreach ($lista_usuarios as $lista_usu) { ?>
        <tr>
            <td class="text-center">
                <button class="btn btn-primary" onclick="imprimir_individual('<?php echo $lista_usu->getCodigo_usuario(); ?>')"> 
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

               <input type="checkbox" id="id_imprimir_carnet"  name="NameSexo" value="Masculino" class="text-center with-gap" >
                <label for="id_imprimir_carnet"></label>
            </td>

        </tr>
        <?php
    }
    ?>

</tbody>
</table>





<?php
include_once '../plantillas/pie_de_pagina.php';
?>


