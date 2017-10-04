 <div class="panel">
            <div class="panel-heading">
            Modificar Libro
            </div>
           
                <div class="panel-body"><form action="">
						<div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                        			<label for="codigo">Codigo</label>
                        			<input type="text" id="codigo" class="form-control" disabled>
                        		</div>
                        	</div>
                        
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-bookmark prefix" aria-hidden="true"></i>
                        			<label for="Titulo">Titulo</label>
                        			<input type="text" id="Titulo" class="form-control">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        		<i class="fa fa-pencil prefix" aria-hidden="true"></i>
                        			<select multiple>
								      <option value="0" disabled selected>Eliga los autores</option>
								      <option value="1">Homero</option>
								      <option value="2">Salarrue</option>
								      <option value="3">Otro</option>
								    </select>
								    <label>Autores</label>
                        		</div>
                        	</div>
                        
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-sort prefix" aria-hidden="true"></i>
                        			<label for="cantidad">Cantidad</label>
                        			<input type="number" id="cantidad" class="form-control">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        		<i class="fa fa-bookmark-o prefix" aria-hidden="true"></i>
                        			<select>
								      <option value="0" disabled selected>Eliga la editorial</option>
								      <option value="1">Homero</option>
								      <option value="2">Salarrue</option>
								      <option value="3">Otro</option>
								    </select>
								    <label>Editorial</label>
                        		</div>
                        	</div>
                       
                        	<div class="col-md-6">
                        	<i class="fa fa-shopping-cart prefix" aria-hidden="true"></i>
                        		<div class="radio-inline">
                        			<input type="radio" name="origen" id="donadoe" value="Donado" class=" with-gap">
                        			<label for="donadoe">Donado</label>
                        			<input type="radio" name="origen" id="compradoe" value="Comprado" class="with-gap">
                        			<label for="compradoe">Comprado</label>
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        			<label for="fecha_pub" class="active">Fecha de Publicacion</label>
                        			<input type="date" id="fecha_pub" class="form-control datepicker">
                        		</div>
                        	</div>
                        
                        	<div class="col-md-6">
                        		<div class="file-field input-field">
                        			<div class="btn">
        									<span><i class="fa fa-camera" aria-hidden="true"></i>Foto</span>
        									<input type="file">
      									</div>
      									<div class="file-path-wrapper">
                        					<input type="text" id="file_foto" class="form-control file-path validate">
                        				</div>
                        		</div>
                        	</div>
                        </div>
                       </form>
                </div>
                
            
        </div>