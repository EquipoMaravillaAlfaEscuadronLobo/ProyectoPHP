<?php
include_once '../modelos/Bitacora.php';
include_once '../repositorios/repositorio_bitacora.php';
Conexion::abrir_conexion();
$lista_bitacora = Repositorio_Bitacora::lista_bitacora(Conexion::obtener_conexion());


?>

<div class="container">
    <div class="panel">
        <div class="panel-heading text-center">
            <div class="row">
                <div class="col-md-12">
                    <h3>Bitacora de Sistema</h3>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col m12 text-center" >
                    <div class="radio-inline">
                        <input type="checkbox" id="idTodo"  name="NameTodo"  class="text-center with-gap" >
                        <label for="idTodo">Mostrar Todo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col m1"></div>
                <div class="input-field col m5">
                    <i class="fa fa-calendar prefix"></i> 
                    <input type="text" id="idFechaInicio" name="nameFechaInicio" class="text-center datepicker" required="">
                    <label for="idFechaInicio">Fecha de Inicial</label>
                </div>

                <div class="input-field col m5">
                    <i class="fa fa-calendar prefix"></i> 
                    <input type="text" id="idFechaFinal" name="nameFechaFinal" class="text-center datepicker" required="">
                    <label for="idFechaFinal">Fecha Final</label>
                </div>
            </div>
            <table padding="20px" class="responsive-table table-sm display" id="tabla-paginada">
                <thead class="">
<th class="text-center alert-success">N</th>
                <th class="text-center alert-success">Administrador</th>
                <th class="text-center alert-success">Accion</th>
                <th class="text-center alert-success">Fecha</th>
                <th class="text-center alert-success">Hora</th>

                </thead>
                <tbody>
                    <?php foreach ($lista_bitacora as $listaB) {?>
                    <tr>
                        <td class="text-center "><?php echo $listaB->getCodigo_bitacora()?></td>
                        <td class="text-center "><?php echo $listaB->getCodigo_administrador()?></td>
                        <td class="text-center "><?php echo $listaB->getAccion();?></td>
                        <td style="width: 100px;" class="text-center "><?php $dia = date_create($listaB->getFecha()); echo date_format($dia,'d-m-Y'); ?></td>
                        <td class="text-center "><?php $hora = date_create($listaB->getFecha()); echo date_format($hora,'h:i:s'); ?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>



