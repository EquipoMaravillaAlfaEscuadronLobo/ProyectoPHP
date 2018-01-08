<?php
include_once '../app/Conexion.php';
include_once '../modelos/Encargado_mantenimiento.php';
include_once '../repositorios/repositorio_encargado.php';
Conexion::abrir_conexion();

$encargado = Repositorio_encargado::obtener_encargado(Conexion::obtener_conexion(), $_POST['libro']);
//echo '<script language="javascript">alert("j'.$encargado->getCodigo_emantenimiento().'");</script>';
if(true){
//foreach ($listado as $fila) {
    ?>
<script type="text/javascript">
    
     var codigo="<?php echo $encargado->getCodigo_emantenimiento(); ?>";    
   var pass=doSearch(codigo);
   if(pass){
        
        var nombre="<?php echo $encargado->getNombre(); ?>";
        var telefono="<?php echo $encargado->getTelefono(); ?>" ;
       var direccion="<?php echo $encargado->getDirecccion(); ?>";
    var linea="";
        linea=linea.concat(
            "<tr>", 
            '<td style="display:none;"><input type="hidden" name="codsEncMant[]" value="'+codigo+'"></td>',
            '<td><input type="button" class="borrar btn-sm btn-danger" value="-"/>&nbsp;&nbsp'+nombre+"</td>",
            "<td>"+telefono+"</td>",
            "<td>"+direccion+"</td>",
            "</tr>"
            );
    $("table#datos_encargado2 tbody").append(linea);
   
    }else{
         swal("Importane!",  nombre+" ya fue ingresado", "warning")
     
    }
    
    
    //para no ingresar los mismos activo a la tabla
    function doSearch(codigo)
		{
                        var pso="true";
			var tableReg = document.getElementById('datos_encargado2');
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
    