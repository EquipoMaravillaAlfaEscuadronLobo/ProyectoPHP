
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                <link href="../css/bootstrap.min.css" rel="stylesheet">
                    <link href="../css/materialize.min.css" rel="stylesheet">
                    </link>
                </link>
                <link href="../css/estilos.css" rel="stylesheet">
                </link>
	<div class="row">
		<div class="col-md-6">
		<div class="panel-group" id="accordion">
			<div class="panel" name="libros">
				<div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Datos de libros</a></div>
				<div id="collapse1" class="panel-collapse collapse in">
				<div class="panel-body">
					<input type="text" id="codigo" placeholder="codigo" autofocus onkeypress="buscarLibro(event)">
					<input type="text" id="titulo" placeholder="titulo" disabled>
					<input type="text" id="autor" placeholder="Autor" disabled>
					<input type="text" id="genero" placeholder="Genero" disabled>
					<input type="text" id="fecha_pub" placeholder="Fecha de Publicacion" disabled>
				</div>
				</div>
			</div>
			</div>
			<but class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>Agregar Libro</button>
		</div>


		<div class="col-md-6">
			<div class="panel">
				<div class="panel-heading">Datos de Usuario</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-4" id="foto">
							
						</div>
					</div>
					<input type="text" id="codigo" placeholder="codigo" autofocus>
					<input type="text" id="nombre" placeholder="Nombre" readonly="">
					<input type="text" id="edad" placeholder="Edad" disabled>
					<input type="text" id="telefono" placeholder="Telefono" disabled>
					<input type="text" id="fecha_sal" placeholder="Fecha de Salida" value="31/08/2017">
					<input type="date" id="fecha_dev" placeholder="Fecha de Devolucion" >
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
 			script.innerHTML="<div class='panel' name='libros'><div class='panel-heading'><a data-toggle='collapse' data-parent='#accordion"+imagenes+"' href='#collapse"+imagenes+"'>Datos de libros</a></div><div id='collapse"+imagenes+"' class='panel-collapse collapse in'><div class='panel-body'><input type='text' placeholder='codigo' autofocus><input type='text' placeholder='titulo' disabled><input type='text' placeholder='Autor' disabled><input type='text' placeholder='Gener' disabled><input type='text' placeholder='Fecha de Publicacion' disabled></div></div></div>";
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