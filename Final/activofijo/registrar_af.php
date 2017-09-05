<div class="container-fluid">
    <div class="row">
    <div class="col-md-10">
    <div class="row">
        	<div class="panel">
        		<div class="panel-body">
        			<div class="row">
        				<div class="input-field col-md-6"><label for="responsable">Nombre del responsable</label><input type="text" id="responsable" name="responsable"></div>
        				<div class="input-field col-md-6"><label for="ubicacion">Departamento</label><input type="text" id="ubicacion" name="ubicacion"></div>
        			</div>
        		</div>
        	</div>
		</div>
        
    <div class="row">
        
            <div class="panel">
                <div class="panel-heading">
                    <h3>Registro de Activo Fijo</h3>
                </div>
                <div class="panel-body" id="formulario">
                    <div class="row">
                        <div class="col-md-1">
                            Cantidad
                        </div>
                        <div class="col-md-5">
                            Descripción del Activo Fijo
                        </div>
                        <div class="col-md-2">
                            Código
                        </div>
                        <div class="col-md-2">
                            No. de Serie
                        </div>
                        <div class="col-md-2">
                           Precio
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <input class="form-control activo" type="text"/>
                        </div>
                        <div class="col-md-5">
                            <input class="form-control activo" type="text"/>
                        </div>
                        <div class="col-md-2">
                           <select class="browser-default activo"><option value="0" selected>Seleccione una opcion</option></select>
                         

                        </div>
                        <div class="col-md-2">
                            <input class="form-control activo" type="text"/>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control activo" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-default btn-xs " type="button" onclick="addFila()">
                        <span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>
                        
                    </button>
                </div>
            </div>
          
        </div>
        </div>
        <div class="col-md-2">
        

        <div class="row">
        	<div class="panel">
        		<div class="panel-heading">Fecha</div>
        		<div class="panel-body"><input type="date" class="datepicker activo" value="<?php echo date('d-m-Y'); ?>"></div>
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
</div>

<script>
		function addFila(){
			var script=document.createElement("div");
 			script.innerHTML="<div class='row'><div class='col-md-1'><input class='form-control activo' type='text'/></div><div class='col-md-5'><input class='form-control activo' type='text'/></div><div class='col-md-2'><input class='form-control activo' type='text'/></div><div class='col-md-2'><input class='form-control activo' type='text'/></div><div class='col-md-2'><input class='form-control activo' type='text'/></div></div>";
 			var fila=document.getElementById("formulario");
 			fila.appendChild(script);
 		}
</script>