<div class="row">
	<div class="col-md-8">
		<div class="panel">
			<div class="panel-heading"><h3>Registro de Activo Fijo</h3></div>
			<div class="panel-body"><div class="row">
				<div class="col-md-12 input-field">
				<span class="glyphicon glyphicon-sort prefix" aria="hidden"></span>
					<label for="">Cantidad</label>
					<input type="number">
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 input-field">
					<span class="glyphicon glyphicon-tag prefix" aria="hidden"></span>
					<select>
				      <option value="0" disabled selected>Seleccione una Categoria</option>
				      <option value="1">Silla</option>
				      <option value="2">Mesa</option>
				      <option value="3">Computadora</option>
				    </select>
				    <label>  Categoria</label>
				</div>
				<div class="col-md-4">
					<button class="btn"><i class="material-icons">add</i> <b class="text-center">Nueva Categoria</b></button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<span class="glyphicon glyphicon-barcode prefix" aria="hidden"></span>
					<label for="">  Serie</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<i class="material-icons prefix">color_lens</i>
					<label for="">Color</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<span class="glyphicon glyphicon-registration-mark prefix" aria="hidden"></span>
					<label for="">Marca</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<i class="material-icons prefix">laptop_windows</i>
					<label for="">Modelo</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<i class="material-icons prefix">memory</i>
				
					<label for="">RAM</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<span class="glyphicon glyphicon-cd prefix" aria="hidden"></span>
					<label for="">Memoria</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<i class="material-icons prefix">desktop_mac</i>
					<label for="">Sistema Operativo</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
					<i class="material-icons prefix">transform</i>
					<label for="">Dimensiones</label>
					<input type="text">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 input-field">
				<i class="material-icons prefix">photo</i>
					<label for="">Foto</label>
					<input type="text">
				</div>
			</div>
			
			</div>
		</div>
	</div>
	<div class="col-md-4">
        
<?php $hoy= date('d/m/Y'); ?>
        <div class="row">
        	<div class="panel">
        		<div class="panel-heading">Fecha</div>
        		<div class="panel-body"><input type="date" id="entrada" class="datepicker" value="<?php echo date("d/m/Y", strtotime($hoy)) ?>" ></div>
        	</div>
        </div>
        <div class="row">
        	<div class="panel">
        		<div class="panel-heading">Origen</div>
        		<div class="panel-body">
        		
        		<input type="radio" id="origen2" class="with-gap"  name="origen">
        		<label for="origen2">Comprado</label><br>
        		<input type="radio" id="origen3" class=" with-gap"  name="origen">
        		<label for="origen3">Donado</label><br>
        		
        		
        		</div>
        	</div>
        </div>
        </div>
</div>