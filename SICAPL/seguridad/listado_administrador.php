<?php
Conexion::abrir_conexion();
//session_start();
$lista_admnistradores = Repositorio_administrador::lista_administradores(Conexion::obtener_conexion(),$_SESSION['user']);
$ruta =  '../foto_admi/';
?>
<div class="container">
    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Lista De Administradores</h3>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table padding="20px" class="responsive-table table-sm display" id="data-table-simple">
                    <thead class="">
                    <th class="text-center "></th>
                    <th class="text-center ">Usuario</th>
                    <th class="text-center ">Nombre Completo</th>
                    <th class="text-center ">DUI</th>
                    <th class="text-center ">Correo</th>
                    <th class="text-center ">Nivel</th>
                    <th class="text-center ">Foto</th>
                    <th class="text-center "></th>

                    </thead>
                    <tbody>
                        <?php foreach ($lista_admnistradores as $lista) { ?>
                            <tr>
                                <td class="text-center">
                                    <button class="btn btn-success" onclick="abrir_edicion_administrador('<?php echo $lista->getNombre(); ?>',
                                                        '<?php echo $lista->getApellido(); ?>', '<?php echo $lista->getCodigo_administrador(); ?>',
                                                        '<?php echo $lista->getDui(); ?>', '<?php echo $lista->getFecha(); ?>',
                                                        '<?php echo $lista->getEmail(); ?>', '<?php echo 'PASWORD_AC'; ?>',
                                                        '<?php echo $lista->getNivel(); ?>', '<?php echo $lista->getSexo(); ?>')">
                                        <i class="Medium material-icons prefix">edit</i> 
                                    </button>
                                </td>
                                <td class="text-center"><?php echo $lista->getCodigo_administrador(); ?></td>
                                <td class="text-center"><?php echo $lista->getNombre() . " " . $lista->getApellido(); ?></td>
                                <td class="text-center"><?php echo $lista->getDui(); ?></td>
                                <td class="text-center"><?php echo $lista->getEmail(); ?></td>
                                
                                <td class="text-center"><?php
                                    if ($lista->getNivel() == '0') {
                                        echo 'Root';
                                    } else {
                                        echo 'Administrador';
                                    }
                                    ?></td>
                                <td class="text-center">
                                    <img src="<?php echo $ruta . $lista->getFoto(); ?>" class="presentacionXZ fotosLibros" alt="">
                                </td>
                                <td class="text-center">
                                    <button class="btn btn-danger" onclick="abrir_eliminacion_administrador('<?php echo $lista->getNombre(); ?>',
                                                        '<?php echo $lista->getApellido(); ?>', '<?php echo $lista->getCodigo_administrador(); $_SESSION['seleccionado'] = $lista->getCodigo_administrador() ?>','111111')"> 
                                        <i class="Medium material-icons prefix">delete</i> 
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        //Conexion::cerrar_conexion(); 
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--esta es para abrir la ventana de edicion-->
<?php
include_once './editar_administrador.php';
?>
<!--esta es para abrir la ventana de edicion-->


<!--esta es para abrir la ventana de dar de baja-->
<?php
include_once './eliminar_administrado.php';
?>
<!--esta es para abrir la ventana de dar de baja-->







