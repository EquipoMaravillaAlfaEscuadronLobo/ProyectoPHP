<?php 
	include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::BuscarUsuario(Conexion::obtener_conexion(),$_POST['libro']);
    $lista=$_POST['lista'];
    $tipo=$_POST['libro'];
     
    // foreach ($listado as $fila) {
    	?>
		<script type="text/javascript">

		alert('<?php echo $lista." ".$tipo; ?>');
		</script>


    	<?php
    //}                    
                    
 ?>