<div class="row">
	<!--  panel de mantenimiento     -->
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading">	Datos de Mantenimiento</div>
			<div class="panel-body">

				<i class="fa fa-calendar">&nbspFecha</i><input type="text" name="fecha" value="<?php echo date("d-m-Y");?>">
				<i  class="fa fa-usd" aria-hidden="true"> &nbspPrecio<input type="text" name="$$$" placeholder="Costo"></i>
				
				<div class="row">
				<i class="	fa fa-pencil-square-o"> &nbspDescripcion</i>
					<textarea rows="6" cols="50" placeholder="Costo">
						
					</textarea>
				</div>
			</div>
		</div>
	</div>


	<!--  panel de activo    -->
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading">	Datos del Activo</div>
			<div class="panel-body">
 					<label>Codigo</label>
                    <input type="text" id="entrada"  value="1995-150-001" >
                    <label>Tipo</label>
                    <input type="text" id="entrada"  value="Mesa" >
				
			</div>
		</div>
		
	</div>
	<!--  panel de fecha    -->
	<div class="col-md-4">
		
	</div>
</div>

<div id="nuevo" class="modal modal-sm " >
	<div class="modal-conten ">

	<?php include('nueva_categoria.php');?>
	</div>
	 <div class="modal-footer modal-sm">
		<a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>