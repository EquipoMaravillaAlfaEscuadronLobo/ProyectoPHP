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
        document.getElementById('fot').setAttribute("title", "Observaciones")
        document.getElementById('fot').setAttribute("rel", "popover")
        document.getElementById('fot').setAttribute("data-container", "body")
        document.getElementById('fot').setAttribute("data-togle", "popover")
        document.getElementById('fot').setAttribute("data-placement", "top")
        document.getElementById('fot').setAttribute("data-content", "<?php if($fila['obsP']!=""){echo "<ol><li>".$fila['obsP']."</li></ol>";}else{ echo "No tiene observaciones";} ?>")
        <?php 
            if ($fila['esta']=='si') {
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
                <script>
                    $(document).ready(function() {
   $('[rel="popover"]').popover({
       trigger: 'hover',
       html: true,
   })
  });
                </script>