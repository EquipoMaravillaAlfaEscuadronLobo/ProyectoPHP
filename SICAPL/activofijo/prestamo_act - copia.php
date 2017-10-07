
	<div class="row ">
		<div class="col-md-5">
		<div class="panel-group" id="accordion">
			<div class="panel panel-default" name="libros">
				<div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-10">

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Activo</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)"></div>
                
                </div>
                <div class="col-md-1">
                   <a data-toggle="collapse" data-parent="#accordion" href="#activo1">
                   <i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i>
                </a>
                </div>
                <div class="col-md-1">                   
                  <i class="fa fa-minus" id="despliegue" aria-hidden="true"></i>                
                </div>
                    </div>
                </div>
				<div id="activo1" class="panel-collapse collapse in">
				<div class="panel-body">
					<div class="panel-body">
                        <table class="table table-striped table-bordered">
                            
                            <tr>
                                <td width="40%"><b>Código:</b></td>
                                <td  colspan="3"><div id="codigo"></div></td>
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
                            <tr>
                                <td ><b>Tipo:</b></td>
                                <td colspan="3"><div id="tipo"></div></td>
                            </tr>
                            <tr>
                                <td ><b>Encargado:</b></td>
                                <td colspan="3"><div id="encargado"></div></td>
                            </tr>
                            <tr>
                                <td ><b>Estado:</b></td>
                                <td colspan="3"><div id="estado"></div></td>
                            </tr>
                           
                        </table>
                    </div>
					
				</div>
				</div>
			</div>
			</div>
			<button class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>Agregar Activo</button>
		</div>



		 <div class="col-md-4"><!-- panel datos de usuario -->        
            <div class="panel panel-default" name="user">
                <div class="panel-heading p_libro">
                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:16px">Buscar Usuario</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)">
                 </div>              
                
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
                                <td><b>Ultimo:</b></td>
                                <td><div id="ultimo"></div></td>
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
                            <input type="text" id="fecha" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required value="<?php echo date("d-m-Y"); ?>" readonly> 
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

 <script crossorigin="a
    nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
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