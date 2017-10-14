<?php
     include_once '../app/Conexion.php';
      include_once '../repositorios/repositorio_autores.inc.php';
      Conexion::abrir_conexion();
      $ultimoAutor=repositorio_autores::ObtenerUltimo(Conexion::abrir_conexion());
?>

<div class="container">
    <div class="panel-group" id="accordion">
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-libros">Registro de Libros</a></div>
            <div id="collapse-libros" class="panel-collapse collapse">
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
                        			<input type="radio" name="origen" id="donador" value="Donado" class=" with-gap">
                        			<label for="donador">Donado</label>
                        			<input type="radio" name="origen" id="comprador" value="Comprado" class="with-gap">
                        			<label for="comprador">Comprado</label>
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
        									<span><i class="glyphicon glyphicon-picture" aria-hidden="true"></i>Foto</span>
        									<input type="file">
      									</div>
      									<div class="file-path-wrapper">
                        					<input type="text" id="file_foto" class="form-control file-path validate">
                        				</div>
                        		</div>
                        	</div>
                        </div>
                       
                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success">Guardar</button><button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-autores">Registro de Autores</a></div>
            <div id="collapse-autores" class="panel-collapse collapse">
                <div class="panel-body"><form action="newAutor.php" name="frmAutor" method="post" id="frmAutor">
                        <div class="row">
                        	<div class="col-md-12">
                        		<div class="input-field">
                        			<i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                        			<label for="codigo">Codigo</label>
                        			<input type="text" id="codigo" class="form-control" disabled value="<?php echo $ultimoAutor ?>">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        			<label for="nombre">Nombre</label>
                        			<input type="text" id="nombre" name="nombre" class="form-control">
                        		</div>
                        	</div>
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        			<label for="apellido">Apellido</label>
                        			<input type="text" id="apellido" name="apellido" class="form-control">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        			<label for="fecha_nac" class="active">Fecha de Nacimiento</label>
                        			<input type="date" id="fecha_nac" name="fecha_nac" class="form-control datepicker">
                        		</div>
                        	</div>
                        
                        	<div class="col-md-6">
                        		<div class="file-field input-field">
                        			
                        			
                        				<div class="btn">
        									<span><i class="fa fa-address-book" aria-hidden="true"></i>Biografia</span>
        									<input type="file">
      									</div>
      									<div class="file-path-wrapper">
                        					<input type="text" id="bio" name="bio" class="form-control file-path validate">
                        				</div>
                        		</div>
                        	</div>
                        </div>
                </div>
                <div class="panel-footer text-center">
                    <button type="submit" class="btn btn-success" form="frmAutor">Guardar</button><button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-editoriales">Registro de Editoriales</a></div>
            <div id="collapse-editoriales" class="panel-collapse collapse">
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
                        			<i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        			<label for="nombre">Nombre</label>
                        			<input type="text" id="nombre" class="form-control">
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	<div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-phone prefix" aria-hidden="true"></i>
                                    <label for="telefono">Telefono</label>
                                    <input type="text" id="telefono" class="form-control">
                                </div>
                            </div>
                       
                        	<div class="col-md-6">
                        		<div class="input-field">
                        			<i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
                        			<label for="email" data-error="wrong" data-success="right">Email</label>
                        			<input type="email" id="email" class="form-control validate" >
                        		</div>
                        	</div>
                        </div>
                        <div class="row">
                        	
                        <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-map-marker prefix" aria-hidden="true"></i>
                                    <label for="fecha_nac" class="active">Direccion</label>
                                    <textarea id="direccion" name="direccion" class="materialize-textarea"></textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="panel-footer text-center">
                    <button id="btn_enviar" class="btn btn-success">Guardar</button><button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="jquery-1.3.min.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
   // Esta primera parte crea un loader no es necesaria
    $().ajaxStart(function() {
        $('#loading').show();
        $('#result').hide();
    }).ajaxStop(function() {
        $('#loading').hide();
        $('#result').fadeIn('slow');
    });
   // Interceptamos el evento submit
    $('#frmAutor, #fat, #fo3').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function() {
                   swal({
                    title: "Exito",
                    text: "Autor Registrado",
                    type: "success"},
                    function(){
                        //location.href="home.php";
                    }
            }
        })        
        return false;
    }); 
})


    
function AutorValidado(){
    return true;
}
</script>