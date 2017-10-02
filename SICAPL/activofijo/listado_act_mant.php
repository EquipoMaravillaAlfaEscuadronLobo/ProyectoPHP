
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
                    <table padding="20px" class="responsive-table display" id="data-table-simple">
                        <thead>
                        <th>Codigo</th>
                        <th>Activo</th>
                        <th>Estado</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cuentos de Barro- Salarrue</td>
                                <td>Carlos Antonio Torres Martinez</td>
                                <td>12/08/2017</td>
                                <td>31/08/2017</td>
                                <td class="alert alert-warning"><a class="btn btn_primary"  target="_blank" onclick="nuevoMant()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>MANTENIMIENTO</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Iliada- Homero</td>
                                <td>Carlos Antonio Torres Martinez</td>
                                <td>12/08/2017</td>
                                <td>29/08/2017</td>
                                <td class="alert alert-success"><a class="btn btn_primary"   onclick="nuevoEnc() "><span aria-hidden="true" class="glyphicon glyphicon-plus">
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
