<div class="row">


	<!--  panel de encargado    -->
	<div class="col-md-4">
		<div class="panel-group" id="accordion">
			<div class="panel" name="libros">
				<div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#encarg1">Encargado </a></div>
				<div id="encarg1" class="panel-collapse collapse in">
				<div class="panel-body">
				<div class="row">
				<div class="col-md-5">
					<input class="buscar" type="text" placeholder="Buscar">
					
				</div>
				<div class="col-md-4">
				<button class="btn btn-buscar-md" o ">Buscar</button>
				</div>
				<div class="col-md-2">
				<a class="btn btn_primary"  target="_blank" onclick="nuevoEnc()"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
				</div>
				
				</div>
					<input type="text" id="codigo" placeholder="Nombre" autofocus onkeypress="buscarLibro(event)">
					<input type="text" id="titulo" placeholder="Telefono" disabled>
					<input type="text" id="encargado" placeholder="Correo" disabled>
					
				</div>
				</div>
			</div>
			</div>
			<button class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>Agregar Activo</button>
		</div>
	<!--  panel de mantenimiento     -->
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading">	Datos de Mantenimiento</div>
			<div class="panel-body">

				<i class="fa fa-calendar">&nbspFecha</i><input type="text" name="fecha" value="<?php echo date("d-m-Y");?>">
				<i  class="fa fa-usd" aria-hidden="true"> &nbspPrecio<input type="text" name="$$$" placeholder="Costo"></i>
				
				<div class="row">
				<div class="col=md-12">
				<i class="	fa fa-pencil-square-o"> &nbspDescripcion</i>
					<textarea rows="50" cols="50" placeholder="Costo">
						
					</textarea>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--  panel de activo    -->
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading">	Datos del Activo</div>
			<div class="panel-body">
			<div class="row" id="para buscar activo">
				<div class="col-md-8"><input class="buscar" type="text" placeholder="Buscar"></div>
				<div class="col-md-2"><button class="btn btn-buscar-md" onclick="nuevoEnc() ">Buscar</button></div>
			</div>
				<div class="row">
 					<label>Codigo</label>
                    <input type="text" id="entrada"  value="1995-150-001" >
                    <label>Tipo</label>
                    <input type="text" id="entrada"  value="Mesa" >
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

<div id="nuevoEncargadoo" class="modal modal-fixed-footer " >

	<div class="modal-content">	
	<?php include('nuevo_encargado.php');?>
	</div>
	 <div class="modal-footer ">
		<a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>