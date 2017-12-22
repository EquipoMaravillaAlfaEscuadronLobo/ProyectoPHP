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
        ///alert('<?php echo $fila['codigo_activo']; ?>');
        //$(document).ready(function () {
   // }); 
   var pass=doSearch("<?php echo $fila['codigo_activo']; ?>");
   
   if(pass=="true"){
        var codigo="<?php echo $fila['codigo_activo']; ?>";
        var tipo="<?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?>";
        var encargado="<?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre() . " " . Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido(); ?>" ;
        var linea="";
        linea=linea.concat(
            "<tr>",
            "<td>"+codigo+"</td>",
            "<td>"+tipo+"</td>",
            "<td>"+encargado+"</td>",
            "</tr>"
            );
    $("table#tabla_activo_prestamo tbody").append(linea).closest("table#tabla_activo_prestamo");
    }else{
        alert("<?php echo $fila['codigo_activo']; ?>"+" ya fue ingresado")
    }
    </script>


    <?php
}
?>
    <script>//para no ingrasar los mismos activoa a la tabla de presatamo
        function doSearch(codigo)
		{
                        var pso="true";
			var tableReg = document.getElementById('tabla_activo_prestamo');
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
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
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