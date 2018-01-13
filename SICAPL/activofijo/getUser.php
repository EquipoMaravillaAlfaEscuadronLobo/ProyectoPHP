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
        document.getElementById('nombreUserA').innerHTML = "<?php echo $fila['nombre'] ?>";
        document.getElementById('sexoA').innerHTML = "<?php echo $fila['sexo'] ?>";
        document.getElementById('fotA').setAttribute("src", "<?php echo $fila['foto'] ?>");
        document.getElementById('codigouserA').value="<?php echo $fila['codigo_usuario'] ?>";
        
     <?php 
            if ($fila[11]=='si') {
         ?>
          document.getElementById('actual_prestamo_activo').innerHTML = "<?php echo 'Prestamo Pendiente'?>";
          $('#actual_prestamo_activo').removeClass('alert-success');
          $('#actual_prestamo_activo').addClass('alert-danger');

        <?php 
            }else {
         ?>
        document.getElementById('actual_prestamo_activo').innerHTML = "<?php echo 'sin Prestamos' ?>";
        $('#actual_prestamo_activo').removeClass('alert-danger');
        $('#actual_prestamo_activo').addClass('alert-success');
        <?php } ?>
		</script>


    	<?php
    }                    
                    
 ?>