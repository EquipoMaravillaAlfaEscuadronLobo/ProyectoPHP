
 <div>
    <row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Activos</h3>
                        </div>
                        
                    </div>       
                </div>
                <div class="panel-body">                
                    <table padding="20px" class="responsive-table display" id="tabla-listManteActivo">
                        <thead>
                        <th>Código</th>
                        <th>Tipo</th>
                        <th>Encargado</th>
                        <th>Estado</th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1995-25-05</td>
                                <td>Silla</td>
                                <td>Ligia Alferez Muños</td>
                                <td>Bueno</td>
                                <td class="alert alert-warning"><a class="btn btn_primary"  target="_blank" onclick="nuevoMant()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>MANTENIMIENTO</a></td>
                            </tr>
                            <tr>
                                <td>1995-25-06</td>
                                <td>Silla</td>
                                <td>Ligia Alferez Muños</td>
                                <td>Bueno</td>
                                <td class="alert alert-success"><a class="btn btn_primary"   onclick="nuevoMant()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>MANTENIMIENTO</a></td>
                            </tr>
                            <tr>
                                <td>1995-12-01</td>
                                <td>Mesa</td>
                                <td>Ligia Alferez Muños</td>
                                <td class="btn btn-danger" ">Malo</td>
                                <td class="alert alert-success"><a class="btn btn_primary"   onclick="nuevoMant()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>MANTENIMIENTO</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                  
                </div>
            </div>
        </div>
    </row>
</div>


<div id="nuevoMant" class="modal modal-fixed-footer nuevo">
	<div class="modal-heading panel-heading">
        Registrar Mantenimiento
    </div>
	<div class="modal-content ">	
		<?php include('registrar_mant.php');?>
	</div>
	 <div class="modal-footer">
		<div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<div id="nuevoEncargado" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading">
        Registrar Encargado de Mantenimiento 
    </div>
    <div class="modal-content"> 
    <?php include('nuevo_encargado.php');?>
    </div>
     <div class="modal-footer ">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>
<div id="actualizarCaracteristicas" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading">
       Actualizar Detalles Activo Fijo
    </div>
    <div class="modal-content"> 
        
    <?php include('actualizar_caracteristicas.php');?>
    </div>
     <div class="modal-footer ">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>