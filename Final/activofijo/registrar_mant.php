<div class="row">
	<div class="col-md-6">
		<div class="panel">
			<div class="panel-heading"> Mantenimiento</div>
			<div class="panel-body"><div class="row">

			<div class="row">
				<div class="col-md-8input-field">
					<span class="glyphicon glyphicon-user prefix" aria="hidden"></span>
					<select>
				      <option value="0" disabled selected>Seleccione Encargado</option>
				      <option value="1">Silla</option>
				      <option value="2">Mesa</option>
				      <option value="3">Computadora</option>
				    </select>
				    <label>  Categoria</label>
				    <div class="col-md-4" >
					<button class="btn" onclick="abrirModal()"><i class="material-icons" >add</i> <b class="text-center">Nuevo Encargado</b></button>
				</div>
				</div>
				
			</div>

				<div class="col-md-12 input-field">
				<span class="glyphicon glyphicon-usd prefix" aria="hidden"></span>
					<label for="">Costo</label>
					<input type="number">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12 input-field">
				<span class="glyphicon glyphicon-pencil prefix" aria="hidden"></span>
					<label for="">  Detalle</label><br>
					<textarea>...</textarea>
					
				</div>
			</div>
			
			
			</div>
		</div>
	</div>
	<div class="col-md-3">
        

        <div class="row">
        	<div class="panel">
        		<div class="panel-heading">Activo</div>

        		<div class="panel-body">
        		<label>Codigo</label>
        			<input type="text" id="entrada"  value="1995-150-001" >
        			<label>Tipo</label>
        			<input type="text" id="entrada"  value="Mesa" ></div>
        		</div></div>
        </div>
        <div class="col-md-3">
        <div class="row">
        	<div class="panel">
        		<div class="panel-heading">Fecha</div>
        		<div class="panel-body"><input type="date" id="entrada" class="datepicker" value="<?php echo date("d/m/Y", strtotime($hoy)) ?>" ></div>
        	</div>
        </div>
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