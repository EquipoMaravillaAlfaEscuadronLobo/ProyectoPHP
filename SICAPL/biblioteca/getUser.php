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

        document.getElementById('sexo').innerHTML = "<?php echo $fila['sexo'] ?>";
        document.getElementById('fot').setAttribute("src", "../foto_usuario/<?php echo $fila['foto'] ?>")
        <?php 
            if ($fila[11]=='si') {
         ?>
          document.getElementById('actual').innerHTML = "<?php echo 'Prestamo Pendiente'?>";
          $('#actual').removeClass('alert-success');
          $('#actual').addClass('alert-danger');

        <?php 
            }else {
         ?>
        document.getElementById('actual').innerHTML = "<?php echo 'sin Prestamos' ?>";
        $('#actual').removeClass('alert-danger');
        $('#actual').addClass('alert-success');
        <?php } ?>
		</script>


    	<?php
    }                    
                    
 ?>