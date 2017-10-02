
	<div class="row ">
		<div class="col-md-5">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default" name="libros">
				<div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-10">

                 <i class="fa fa-user-o prefix" aria-hidden="true"></i><label for="" style="font-size:17px"> Activos </label>                
                </div>
                
                
                    </div>
                </div>
				<div id="activo1" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <th>Codigo</th>
                            <th>Tipo</th>
                            <th>&nbsp;</th>
                            
                            </thead>                            
                            <tr>
                                <td ><b>1995-25-05</b></td>
                                <td ><b>Silla</b></td>
                                <td >
                                    <p>
                                      <input type="checkbox" id="test5" />
                                      <label for="test5">Devolver</label>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td ><b>1995-25-05</b></td>
                                <td ><b>Silla</b></td>
                                <td >
                                    <p>
                                      <input type="checkbox" id="test5" />
                                      <label for="test5">Devolver</label>
                                    </p>
                                </td>
                            </tr>
                           
                        </table>
                    </div>
					
				</div>
				</div>
			</div>
			</div>
			
		</div>



		 <div class="col-md-4"><!-- panel datos de usuario -->        
            <div class="panel panel-default" name="user">
                <div class="panel-heading p_libro">
                 <i class="fa fa-user-o prefix" aria-hidden="true"></i><label for="" style="font-size:16px"> Usuario</label>
                              
                
                </div>
                
                    <div class="panel-body">
                         <table class="table table-striped table-bordered">
                            <tr>
                                <td width="40%"><b>Nombre:</b></td>
                                <td width="60%"><div id="nombre"></div></td>
                            </tr>
                            <tr>
                                <td><b>Edad:</b></td>
                                <td><div id="edad"></div></td>
                            </tr>
                            <tr>
                                <td><b>Sexo:</b></td>
                                <td><div id="sexo"></div></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <div class="row">
                                    <div class="input-field col s12">
                                      <textarea id="textarea1" class="materialize-textarea"></textarea>
                                      <label for="textarea1">Observaciones</label>
                                    </div>
                                </div>
                                </td>
                                
                            </tr>
                            
                        </table>


                    </div>
                </div>
            </div>
	

	<div class="col-md-3">
		<div class="panel">
		<div class="panel-heading">Fechas</div>
			<div class="panel-body">
				<div class="row">
				<div class="col m12">
					<div class="input-field ">
                            <i class="fa fa-calendar-check-o prefix" style="color: green"></i> 
                            <input type="text" id="fecha" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required value="12/08/2017" readonly> 
                            <label for="idNombre" class="col-sm-4 control-labe" style="font-size:18px">Fecha de Salida</label>
                    </div>
                    </div>
				</div>
				<div class="row">
				<div class="col m12">
					<div class="input-field">
                        			<i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        			<label for="fecha_pub" class="active" style="font-size:16px">Fecha de Devolución</label>
                        			<input type="date" id="fecha_pub" class="form-control datepicker" >
                        		</div>
				</div>	
					</div>
			</div>
		</div>
	</div>

	
	</div>

 