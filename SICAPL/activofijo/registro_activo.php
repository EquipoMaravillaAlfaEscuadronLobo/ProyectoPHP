<div class="panel">
	<div class="panel-heading">Registro de Activo Fijo</div>
	<div class="panel-body">
	<div class="row">
		<!-- panel de datos generales  -->
		<div class="col-md-4">
			<div class="panel">
				<div class="panel-heading">Datos Generales</div>
				<div class="panel-body">
					<label><i class="fa fa-calendar"></i> Fecha</label>
					<input type="text" name="fecha" value="<?php echo date("d-m-Y");?>">
					<label><i class="fa fa-microchip"></i>Categoria</label>
					<div class="row"><!-- seccion del combo para categoria  -->
						<div class="col-md-5">
							<select>
						      <option value="0" disabled selected>Seleccione una Categoria</option>
						      <option value="1">Silla</option>
						      <option value="2">Mesa</option>
						      <option value="3">Computadora</option>
						    </select>
						</div>
						<div class="col-md-4">
						<input type="text" name="cantidad" placeholder="Cantidad">
						</div>
						<div class="col-md-3">
							<a class="btn btn_primary"  target="_blank" onclick="nuevoEnc()"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
						</div>
						
					</div><!-- termona el combo de categoria   -->
					
				    <label><i class="fa fa-truck"></i>Proveedor</label>
				    <div class="row"><!-- seccion del combo para proveedor  -->
						<div class="col-md-6">
						    <select>
						      <option value="0" disabled selected>Seleccione Proveedor</option>
						      <option value="1">AESIP</option>
						      <option value="2">BREA</option>
						      <option value="3">COMPUMUNDO</option>
						    </select>
				    </div>
						<div class="col-md-4">
							<a class="btn btn_primary"  target="_blank" onclick="nuevoEnc()"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
						</div>
					</div><!-- termona el combo de proveedor   -->
				    
				    <label><i class="fa fa-usd"></i> Precio</label>
				    <input type="text" name="" placeholder="$$$">
				</div>
			</div>
		</div>

		<!-- empieza el panel de carecteristicas -->
		<div class="col-md-8">
		<div class="panel">
		<div class="panel-heading">Caracteristicas </div>
			
				<div class="col-md-6"><!-- panel de caracteristicass generales-->
					<div class="panel">
					<div class="panel-heading">Generales</div>	
					<div class="panel-body">
						<i class="fa fa-barcode prefix"></i>
						<input type="text" name="" placeholder="serie">
						<i class="fa fa-adjust"></i>
						<input type="text" name="" placeholder="color">
						<i class="	fa fa-registered"></i>
						<input type="text" name="" placeholder="marca">	
						<i class="fa fa-laptop"></i>
						<input type="text" name="" placeholder="modelo">
						<i class="fa fa-crop"></i>
						<input type="text" name="" placeholder="dimenciones">	
					</div>
					</div>
				</div><!--termina panel de caracteristicas generales -->

				<div class="col-md-4"><!-- panel de caracteristicass generales-->
					<div class="panel">
					<div class="panel-heading"></div>	
					<div class="panel-body"></div>
					</div>
				</div><!--termina panel de caracteristicas generales -->
			
		</div>
		</div>
	</div>

	</div><!--termina el panel body  -->
</div>
