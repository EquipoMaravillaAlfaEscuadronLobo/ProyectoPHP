<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_categoria.php';
include_once '../repositorios/repositorio_administrador.inc.php';
Conexion::abrir_conexion();

$listado = Repositorio_activo::obtener_activo(Conexion::obtener_conexion(), $_POST['libro']);
 $lista=$_POST['lista'];
    $tipo=$_POST['libro'];
//$numero=$_POST['numero'];

foreach ($listado as $fila) {
    ?>
<script type="text/javascript">
     var codigo="<?php echo $fila['codigo_activo']; ?>";    
   var pass=doSearch(codigo);
   if(pass){
        var estado="<?php echo $fila['estado'];?>";
        var tipo="<?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?>";
        var encargado="<?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre() . " " . Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido(); ?>" ;
    if(estado==1){    
    var sel = '<div class="form-group">' +
                    '<select class="form-control accion_select"  id="accion_select_mantenimiento[]" name="accion_select_mantenimiento[]">' +
                   
                    '<option value="1" selected="" class="btn-success">Disponible</option>' +
                    '</select>' +
                    '</div>';    
        }else{
             var sel = '<div class="form-group">' +
                    '<select class="form-control accion_select"  id="accion_select_mantenimiento[]" name="accion_select_mantenimiento[]">' +
                   
                    '<option value="1"  class="btn-success">Disponible</option>' +
                    '<option value="3" selected="" class="btn-warning">Dañado</option>' +
                    '</select>' +
                    '</div>';    
            }
    var linea="";
        linea=linea.concat(
            "<tr>",
            '<td><input type="button" class="borrar_activo btn-sm btn-danger" value="-"/>&nbsp;&nbsp; <input type="hidden" name="codsActsMant[]" value="'+codigo+'"> '+codigo+"</td>",
            "<td>"+tipo+"</td>",
            "<td>"+sel+"</td>",
           ' "<td><input type="button" class="btn-success btn-sm " onclick="nuevaCat(4)" value="Actualizar Detalles"/></td>',
            
            "</tr>"
            );
    $("table#tabla_activo_mantenimiento tbody").append(linea);
   document.getElementById('bandera_tabla_activo_prestamo').innerHTML = "<?php echo "paso" ?>";
    }else{
         swal("Importane!",  codigo+" ya fue ingresado", "warning")
     
    }
    
    
    //para no ingresar los mismos activo a la tabla
    function doSearch(codigo)
		{
                        var pso="true";
			var tableReg = document.getElementById('tabla_activo_mantenimiento');
			var searchText = codigo;
			var cellsOfRow="";
			var found=false;
			var compareWith="";
 
 
			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++)
			{
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				found = false;
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length && !found; j++)
				{
                                    
					compareWith = cellsOfRow[j].innerHTML;
                                        
					// Buscamos el texto en el contenido de la celda
					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
					{
						found = true;
					}
				}
				if(found)
				{
					pso= false;//tableReg.rows[i].style.display = '';
				} else {
					// si no ha encontrado ninguna coincidencia, esconde la
					// fila de la tabla
					//tableReg.rows[i].style.display = 'none';
                                       pso=  true;
				}
			}
		return pso;}
     
    </script>


    <?php
}
?>
    