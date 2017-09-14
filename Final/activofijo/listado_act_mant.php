 
<div>
	<row>
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
				<div class="row">
					<div class="col-md-8"><h3>Listado de Prestamos</h3>
				</div>
					<div class="col-md-2"><input class="buscar" type="text" placeholder="Buscar"></div><div class="col-md-2"><button class="btn btn-buscar">Buscar</button></div>
				</div>
				<div class="col-md-2">
					<a class="btn btn_nuevo"  target="_blank" onclick="nuevoPrestamo()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span >Nuevo Prestamo</a>
				</div>
				</div>
				<div class="panel-body">				
					<table>
						<thead>
							<th>Codigo</th>
							<th>Activo</th>
							<th>Estado</th>
							
							<th>&nbsp;</th>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>silla</td>
								<td>danado</td>
								<td >
								<div class="col-md-1">
										<a class="btn btn_nuevo"  target="_blank" onclick="nuevoMant()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
					                        </span >Mantenimiento</a>
									</div>
								</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Iliada- Homero</td>
								<td>Carlos Antonio Torres Martinez</td>
								<td>12/08/2017</td>
								<td>29/08/2017</td>
								<td class="btn-success">Finalizado</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</row>
</div>

<div id="nuevoMant" class="modal modal-fixed-footer ">
<div class="modal-content modal=lg">
 <div class="modal-header">
        
        <h3 class="modal-title">Registrar Mantenimiento</h4>
      </div>
	
	<?php include('registrar_mant.php');?>
	</div>
	 <div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>

