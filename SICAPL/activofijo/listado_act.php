<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Administrador.inc.php';
include_once '../modelos/Detalles.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_categoria.php';
include_once '../repositorios/repositorio_administrador.inc.php';
include_once '../repositorios/repositorio_detalles.php';
Conexion::abrir_conexion();
$listado = Repositorio_activo::lista_activo(Conexion::obtener_conexion());
?> 
<div>
    <row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Activo Fijo</h3></div>

                    </div>

                </div>
                <div class="panel-body">				
                    <table padding="20px" class="responsive-table display" id="tabla-listActivo">
                        <thead class="">
                        <td class="text-center" >&nbsp;</td>
                        <th class="text-center">Código</th>
                        <th class="text-center" >Tipo</th>
                        <th class="text-center">Encargado</th>

                        </thead>
                         <tbody>
                    <?php 
                        foreach ($listado as $fila) {
                            
                        
                     ?>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirActivo('<?php echo $fila['codigo_activo'] ?>',
                                                                                                         '<?php echo $fila['codigo_administrador'] ?>',
                                                                                                         '<?php echo $fila['foto'] ?>',
                                                                                                         '<?php echo $fila['estado'] ?>', 
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getCodigo_detalle() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getColor() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getDimencione() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getMarca() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getMemoria() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getModelo() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getOtros() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getProcesador() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getRam() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getSeri() ?>',
                                                                                                         '<?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getSistema() ?>')"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center"><?php echo Repositorio_detalle::obtener_detalle(Conexion::obtener_conexion(), $fila['codigo_detalle'])->getColor() ?></td>
                            <td class="text-center"><?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo'] )?></td>
                            <td class="text-center"><?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre(); ?></td>
                            
                         
                        </tr>
                        <?php } ?>
                    
                    </tbody>
                    </table>
                </div>

            </div>
        </div>
    </row>
</div>

<div id="editActivo" class="modal modal-fixed-footer nuevo">
    <div class="modal-heading panel-heading">
        <h3>Modificación De Activo Fijo</h3>
    </div>
    <div class="modal-content">
        <?php include('edit_aactivo.php'); ?>
    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>





