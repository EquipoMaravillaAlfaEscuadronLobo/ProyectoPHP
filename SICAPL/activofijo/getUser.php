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
        document.getElementById('fotA').setAttribute("src", "../imagenes/tipo.jpg")


        activar();
    </script>


    <?php
}
?>