<div class="row">


	<!--  panel de encargado    -->
	<div class="col-md-4">
		<div class="panel-group" id="accordion">
			<div class="panel" name="libros">
				<div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-8">

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Encargado</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)"></div>
                
                </div>
                <div class="col-md-2">
				<a class="btn btn_primary"  target="_blank" onclick="nuevaCat(3)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
				</div>
                <div class="col-md-1">
                   <a data-toggle="collapse" data-parent="#accordion" href="#encarg1">
                   <i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i>
                </a>
                </div>
                <div class="col-md-1">                   
                  <i class="fa fa-minus" id="despliegue" aria-hidden="true"></i>                
                </div>
                    </div>
                </div>
				<div id="encarg1" class="panel-collapse collapse in">
				<div class="panel-body">
					<table class="table table-striped table-bordered">
						 <tr>
                                <td width="40%"><b>Nombre:</b></td>
                                <td width="60%"><div id="nombre"></div></td>
                         </tr>
                         <tr>
                                <td width="40%"><b>Telefono:</b></td>
                                <td width="60%"><div id="nombre"></div></td>
                         </tr>
                         <tr>
                                <td width="40%"><b>Correo:</b></td>
                                <td width="60%"><div id="nombre"></div></td>
                         </tr>
					</table>
					
				</div>
				</div>
			</div>
			</div>
			<button class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>Agregar Encargado</button>
		</div>
	
	<!--  panel de activo    -->
	<div class="col-md-4">
		<div class="panel">
			 <div class="panel-heading p_libro">
                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:16px">Buscar Activo</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)">
                 </div>              
                
                </div>

			<div class="panel-body">
			<table class="table table-striped table-bordered">		
				 <tr>
                                <td width="40%"><b>Codigo:</b></td>
                                <td  colspan="3"><div id="codigo"></div></td>
                            </tr>
                            <tr>
                                <td ><b>Tipo:</b></td>
                                <td colspan="3"><div id="tipo"></div></td>
                            </tr>
                            <tr>
                            	<td colspan="4">
	                                <div class="row"><!-- seccion para elegir varios activos -->
										<div class="input-field col m3">
		                        			<i class="fa fa-arrow-left prefix"></i> 
		                        			<label for="Titulo">Desde</label>
		                        			<input type="text" id="Titulo" class="form-control">
		                        		</div>
		                        		<div class="col m1"></div>
										<div class="input-field col m3">
		                        			<i class="fa fa-arrow-right prefix"></i> 
		                        			<label for="Titulo">Hasta</label>
		                        			<input type="text" id="Titulo" class="form-control">	                        			
		                        		</div>

		                        		<div class="col m5"></div>
									</div><!-- termina seccion -->
								</td>
                            </tr>
                            
                            </table>	
			</div>
		</div>
		
	</div>

	<!--  panel de mantenimiento     -->
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading">	Datos de Mantenimiento</div>
			<div class="panel-body">

				<div class="row">
				<div class="col m12">
					<div class="input-field">
                        			<i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        			<label for="fecha_pub" class="active" style="font-size:16px">Fecha de Mantenimiento</label>
                        			<input type="date" id="fecha_pub" class="form-control datepicker" >
                        		</div>
				</div>	
					</div>
				<div class="row">
					<div class="input-field col m12">
                            <i class="fa fa-usd prefix"></i> 
                            <input type="text" id="precioUnitario" name="precioUnitario" class="text-center validate" required="">
                            <label for="precioUnitario" style="font-size:16px">Precio <small></small> </label>
                        </div>
				</div>
				
				<div class="textarea">
				<div class="col-md-12">
				<i class="	fa fa-pencil-square-o"> &nbspDescripcion</i>
					<textarea rows="20" cols="30" placeholder="Costo">
						
					</textarea>
					</div>
				</div>
				<div class="row">
				<div class="col-md-12">
				<a class="btn btn_primary"  target="_blank" onclick="nuevaCat(4)"><span aria-hidden="true" >Actualizar Detalles</span></a>
				</div>
				</div>


			</div>
		</div>
	</div>

</div>


	<script>
		function addLibro(){
			var imagenes=document.getElementsByName('libros').length+1;
			var script=document.createElement("div");
 			script.innerHTML="<div class='panel' name='libros'><div class='panel-heading'><a data-toggle='collapse' data-parent='#accordion"+imagenes+"' href='#activo"+imagenes+"'>Datos de libros</a></div><div id='collapse"+imagenes+"' class='panel-collapse collapse in'><div class='panel-body'><input type='text' placeholder='codigo' autofocus><input type='text' placeholder='titulo' disabled><input type='text' placeholder='Autor' disabled><input type='text' placeholder='Gener' disabled><input type='text' placeholder='Fecha de Publicacion' disabled></div></div></div>";
 			var fila=document.getElementById("accordion");
 			fila.appendChild(script);
 		}
 		function buscarLibro(event){
 			 if (event.keyCode == 13) {
		        document.getElementById('titulo').value="Iliada";
		        document.getElementById('autor').value="Homero";
		        document.getElementById('genero').value="Epopeya";
		        document.getElementById('fecha_pub').value="762 A.C";

		        document.getElementById('titulo').disabled=false;
		        document.getElementById('autor').disabled=false;
		        document.getElementById('genero').disabled=false;
		        document.getElementById('fecha_pub').disabled=false;

		        $('#titulo').attr("readOnly","");
		        document.getElementById('autor').disabled=false;
		        document.getElementById('genero').disabled=false;
		        document.getElementById('fecha_pub').disabled=false;

        }
       
    
 		}

 		
 		
</script>

<div id="nuevoEncargadoo" class="modal modal-fixed-footer " >

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

<div id="actualizarCaracteristicas" class="modal modal-fixed-footer " >

	<div class="modal-content">	
		
	<?php include('actualizar_caracteristicas.php');?>
	</div>
	 <div class="modal-footer ">
		<div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>