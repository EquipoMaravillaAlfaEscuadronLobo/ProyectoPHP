<?php 
	include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::BuscarUsuario(Conexion::obtener_conexion(),$_POST['libro']);
    //$numero=$_POST['numero'];
     
     foreach ($listado as $fila) {
    	?>
		<script type="text/javascript">

		document.getElementById('carnet').innerHTML = "<?php echo $fila['codigo_usuario'] ?>";
        document.getElementById('nombreUser').innerHTML = "<?php echo $fila['nombre'] ?>";
       //document.getElementById('edad').innerHTML = "<?php echo $fila['titulo'] ?>";
        document.getElementById('sexo').innerHTML = "<?php echo $fila['sexo'] ?>";
        document.getElementById('fot').setAttribute("src", "<?php echo $fila['foto'] ?>")


	//	document.getElementById('titulo<?php echo $numero ?>').value = <?php echo $fila['titulo'] ?>;
     ////   document.getElementById('autor<?php echo $numero ?>').value = <?php echo $fila[2] ?>;
      // document.getElementById('genero<?php echo $numero ?>').value = "Epopeya";
     //   document.getElementById('fecha_pub<?php echo $numero ?>').value = <?php echo $fila['fecha_publicacion'] ?>;
		</script>


    	<?php
    }                    
                    
 ?>