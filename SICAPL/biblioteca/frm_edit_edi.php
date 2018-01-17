<div class="panel modal modal-fixed-footer nuevo" id="edicionEdi" >
            <div class="panel-heading">Modificar Editorial</div>
          
                <div class="panel-body"><form action="ediEditorial.php" method="post" id="frmEditEditorial" name="frmEditEditorial">
					<div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                        			<label for="codigo">Codigo</label>
                        			<input type="text" id="codigoe_edit" name="codigoe_edit" class="form-control" readonly="true" placeholder=" ">
                        		</div>
                        	</div>
                        
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        			<label for="nombre">Nombre</label>
                        			<input type="text" id="nombree_edit" name="nombree_edit" class="form-control" placeholder=" ">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-phone prefix" aria-hidden="true"></i>
                                    <label for="telefono">Telefono</label>
                                    <input type="text" id="telefonoe_edit" name="telefonoe_edit" class="form-control" placeholder=" ">
                                </div>
                            </div>
                       
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
                        			<label for="email" data-error="wrong" data-success="right">Email</label>
                        			<input type="email" id="email_edit" name="email_edit" class="form-control validate" placeholder=" ">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	
                        <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-map-marker prefix" aria-hidden="true"></i>
                                    <label for="fecha_nac" class="active">Direccion</label>
                                    <textarea id="direccion_edit" name="direccion_edit" class="materialize-textarea" placeholder=" "></textarea>
                                </div>
                            </div>
                        </div>
</form>
                </div>
            <div class="panel-footer">
                <div class="row">
        <div class="col-md-6 text-right"><button onclick="actualizarEdit()" class="waves-effect btn btn-success"><i class="fa fa-refresh"></i> Actualizar</button></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="fa fa-times"></i> Salir</a></div>
        </div>
            </div>
                
          
        </div>