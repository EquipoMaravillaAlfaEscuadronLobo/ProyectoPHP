<?php
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado = Repositorio_libros::BuscarUsuario(Conexion::obtener_conexion(), $_POST['libro']);
//$numero=$_POST['numero'];

foreach ($listado as $fila) {
    ?>
    <script type="text/javascript">

		document.getElementById('carnetA').innerHTML = "<?php echo $fila['codigo_usuario'] ?>";
                document.getElementById('nombreUserA').innerHTML = "<?php echo $fila['nombre'].' '.$fila['apellido'] ?>";
        document.getElementById('codigouserA').value = "<?php echo $fila['codigo_usuario'] ?>";
        document.getElementById('sexoA').innerHTML = "<?php echo $fila['sexo'] ?>";
        document.getElementById('sexoA').innerHTML = "<?php echo $fila['sexo'] ?>";
        document.getElementById('fotA').setAttribute("src", "../foto_usuario/<?php echo $fila['foto'] ?>")
        document.getElementById('fotA').setAttribute("title", "Observaciones")
        document.getElementById('fotA').setAttribute("rel", "popover")
        document.getElementById('fotA').setAttribute("data-container", "body")
        document.getElementById('fotA').setAttribute("data-togle", "popover")
        document.getElementById('fotA').setAttribute("data-placement", "top")
        document.getElementById('fotA').setAttribute("data-content", "<?php if($fila['obsP']!=""){echo "<ol><li>".$fila['obsP']."</li></ol>";}else{ echo "No tiene observaciones";} ?>")
        <?php 
            if ($fila[11]=='si') {
         ?>
          document.getElementById('actualA').innerHTML = "<?php echo 'Prestamo Pendiente'?>";
          $('#actualA').removeClass('alert-success');
          $('#actualA').addClass('alert-danger');

        <?php 
            }else {
         ?>
        document.getElementById('actualA').innerHTML = "<?php echo 'sin Prestamos' ?>";
        $('#actualA').removeClass('alert-danger');
        $('#actualA').addClass('alert-success');
        
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