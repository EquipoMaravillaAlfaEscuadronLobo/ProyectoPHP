 
<div>
	<row>
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
				<div class="row">
					<div class="col-md-8"><h3>Listado de Activo Fijo</h3>
				</div>
					<div class="col-md-2"><input class="buscar" type="text" placeholder="Buscar"></div><div class="col-md-2"><button class="btn btn-buscar">Buscar</button></div>
				</div>
				
				</div>
				<div class="panel-body">				
					<table>
						<thead>
							<th>Codigo</th>
							<th>Tipo</th>
							
						</thead>
						<tbody>
							<tr> <!- para el panel desplegable de las categorias*/->
							<td width="25">
									1
							</td>
							<td >
								<div class="row">
									<div class="col-md-6">
									<div class="panel-group" id="accordion">
										<div class="panel" name="libros">
											<div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Sillas</a></div>
											<div id="collapse1" class="panel-collapse collapse in">
											<div class="panel-body">
											<!- aqui van la lista de las categorias ->							
								
								</div>
										</div>
									</div>
									</div>
									
								</div>
								</td>
							</tr><!- termina el panel ->

							<tr> <!- para el panel desplegable de las categorias*/->
							<td>
									1
							</td>
							<td>
								<div class="row">
									<div class="col-md-6">
									<div class="panel-group" id="accordion">
										<div class="panel" name="mesas">
											<div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">mesas</a></div>
											<div id="collapse2" class="panel-collapse collapse in">
											<div class="panel-body">
											<!- aqui van la lista de las categorias ->							
								
								</div>
										</div>
									</div>
									</div>
									
								</div>
								</td>
							</tr><!- termina el panel ->
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</row>
</div>

<div id="nuevo" class="modal modal-fixed-footer">
	<div class="modal-content">
	<?php include('prestamo_b.php');?>
	</div>
	 <div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>