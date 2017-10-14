<?php
Conexion::abrir_conexion();
$lista_admnistradores = Repositorio_administrador::lista_administradores(Conexion::obtener_conexion());
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
                    <th class="text-center"></th>
                    <th class="text-center">Nombre Completo</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">Nivel</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center"></th>

                    </thead>
                    <tbody>
                        <?php foreach ($lista_admnistradores as $lista) { ?>

                            <tr>
                                <td class="text-center">
                                    <button class="btn btn-success" onclick="abrir_edicion_administrador('<?php echo $lista->getNombre();?>' ,
                                                '<?php echo $lista->getApellido();?>','<?php echo $lista->getCodigo_administrador();?>',
                                                '<?php echo $lista->getDui();?>','<?php echo $lista->getFecha();?>',
                                                '<?php echo $lista->getEmail();?>','<?php echo $lista->getPasword();?>')">
                                        <i class="Medium material-icons prefix">edit</i> 
                                    </button>
                                </td>
                                <td class="text-center"><?php echo $lista->getNombre() . " " . $lista->getApellido(); ?></td>
                                <td class="text-center"><?php echo $lista->getCodigo_administrador(); ?></td>
                                <td class="text-center"><?php if ($lista->getNivel() == '0') {
                            echo 'Root';
                        } else {
                            echo 'Administradro';
                        } ?></td>
                                <td class="text-center"><img src="../imagenes/imagenes.jpg" class="presentacionXZ" alt=""></td>
                                <td class="text-center"><button class="btn btn-danger" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">delete</i> </button></td>
                            </tr>
                          <?php } Conexion::cerrar_conexion(); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--esta es para abrir la ventana de edicion-->
<div id="edicion" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <div class="row">
            <div class="col-md-12">
   <?php include('./editar_administrador.php'); ?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>


