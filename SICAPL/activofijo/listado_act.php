 
<div>
	<row>
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-8"><h3>Listado de Activo Fijo</h3></div>
						
					</div>
				
				</div>
				<div class="panel-body">				
					<table padding="20px" class="responsive-table display" id="tabla-listActivo">
						<thead class="">
						<td class="text-center" >&nbsp;</td>
                    <th class="text-center" >Tipo</th>
                    <th class="text-center">Código</th>
                    <th class="text-center">Encargado</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center" >Silla </button></td>
                            <td class="text-center" >&nbsp;</td>
                            <td class="text-center">1995-25</td>
                            <td class="text-center" >&nbsp;</td>
                            
                        </tr>
                        
                        <tr>
                        	<td class="text-center" >&nbsp;</td>
                            <td class="text-center"><button class="btn btn-success" onclick="nuevaCat(6)"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">1995-25-05</td>
                            <td class="text-center">Ligia Alferez Muños</td>                           
                        </tr>
                        <tr>
                        	<td class="text-center" >&nbsp;</td>
                            <td class="text-center"><button class="btn btn-success" onclick="nuevaCat(6)"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">1995-25-06</td>
                            <td class="text-center">Ligia Alferez Muños</td>                           
                        </tr>
						<tr>
						
                            <td class="text-center" >Mesa </button></td>
                            <td class="text-center" >&nbsp;</td>
                            <td class="text-center">1995-12</td>
                            <td class="text-center" >&nbsp;</td>
                            
                        </tr>
                        <tr>
                        	<td class="text-center" >&nbsp;</td>
                            <td class="text-center"><button class="btn btn-success" onclick="nuevaCat(6)"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">1995-12-01</td>
                            <td class="text-center">Ligia Alferez Muños</td>                           
                        </tr>

							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</row>
</div>

<div id="editActivo" class="modal modal-fixed-footer nuevo">
	<div class="modal-heading panel-heading">
		<h3>Modificación De Activo Fijo</h3>
	</div>
	<div class="modal-content">
	<?php include('edit_aactivo.php');?>
	</div>
	 <div class="modal-footer">
		<a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>


<div id="nuevoMant" class="modal modal-fixed-footer nuevo">
	<div class="modal-heading panel-heading">
        Registrar Mantenimiento
    </div>
	<div class="modal-content ">	
		<?php include('registrar_mant.php');?>
	</div>
	 <div class="modal-footer">
		<div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<div id="nuevoEncargado" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading">
        Registrar Encargado de Mantenimiento 
    </div>
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
    <div class="modal-heading panel-heading">
       Actualizar Detalles Activo Fijo
    </div>
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