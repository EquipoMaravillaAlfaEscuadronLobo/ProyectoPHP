<?php
Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios_eliminados(Conexion::obtener_conexion());
$direccion = '../../SICAPL/foto_usuario/';
?>




 
        <table padding="20px" class="responsive-table display" id="tabla-paginada4">
            <thead class="">

            <th class="text-center">Foto</th>
            <th class="text-center">Carnet</th>
            <th class="text-center">Nombre Completo</th>
            <th class="text-center">Motivo de eliminación</th>
            <th class="text-center"></th>
            </thead>
            <tbody>
                <?php foreach ($lista_usuarios as $lista_usu) { ?>
                    <tr>
                        <td class="text-center">
                            <img class="presentacionXZ" src="<?php echo $direccion . $lista_usu->getFoto(); ?>"/>
                        </td>


                        <th class="text-center"><?php echo $lista_usu->getCodigo_usuario(); ?></th>
                        <td class="text-center"><?php echo $lista_usu->getNombre() . " " . $lista_usu->getApellido(); ?></td>
                        <td class="text-center"><?php echo $lista_usu->getMotivo_eliminacion(); ?></td>

                        <td class="text-center">restaurar</td>

                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
   


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