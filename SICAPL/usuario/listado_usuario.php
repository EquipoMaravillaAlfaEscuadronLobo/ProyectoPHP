<?php
Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
$direccion = '../foto_usuario/';
?>


<div class="container">
    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row">

                    <div class="col-md-12">
                        <h3>Lista De Usuarios</h3>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table padding="20px" class="responsive-table display" id="data-table-simple">
                    <thead class="">
                    
                    <th class="text-center"></th>
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
                            <td class="text-center">
                                    <button class="btn btn-success" onclick="abrir_edicion_usuario('<?php echo $lista_usu->getNombre();?>',
                                                '<?php echo $lista_usu->getApellido();?>','<?php echo $lista_usu->getDireccion();?>',
                                                '<?php echo $lista_usu->getEmail();?>','<?php echo $lista_usu->getTelefono();?>',
                                                '<?php echo $lista_usu->getSexo();?>','111111','<?php echo $lista_usu->getCodigo_usuario();?>','<?php echo $lista_usu->getCodigo_institucion();?>' )">
                                        <i class="Medium material-icons prefix">edit</i> 
                                    </button>
                                </td>
                                <th class="text-center"><?php echo $lista_usu->getCodigo_usuario();?></th>
                                <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
                                <td class="text-center"><?php echo $lista_usu->getTelefono(); ?></td>
                                <td class="text-center"><?php echo $lista_usu->getDireccion(); ?></td>
                                <td class="text-center"><?php echo $lista_usu->getEmail(); ?></td>
                                <td class="text-center">
                                    <img class="presentacionXZ" src="<?php echo $direccion . $lista_usu->getFoto();?>"/>
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger" onclick="abrir_eliminacion_usuario('<?php echo $lista_usu->getNombre();?>','<?php echo $lista_usu->getApellido();?>','<?php echo $lista_usu->getCodigo_usuario();?>','111111')"> 
                                        <i class="Medium material-icons prefix">delete</i> 
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>
<!--esta es la ventana de edicion-->
<?php
include_once './editar_usuario.php';
?>
<!--este es el fin la ventana de edicion-->

<!--esta es la ventana de eliminacion-->
<?php
include_once './eliminar_usuario.php';
?>
<!--este es el fom ventana de eliminacion-->