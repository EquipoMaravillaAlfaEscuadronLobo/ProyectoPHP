<?php
include_once '../app/Conexion.php';
include_once '../modelos/Mantenimiento.php';
include_once '../repositorios/repositorio_mantenimiento.php';
Conexion::abrir_conexion();

$listado = Repositorio_mantenimiento::obtenerActivos(Conexion::obtener_conexion(), $_POST['codigo']);

foreach ($listado as $fila1) {
    ?>
    <script type="text/javascript">

      
        var codigo = "<?php echo $fila1['cod']; ?>";
        var tipo = "<?php echo $fila1['tipo']; ?>";
        var linea = "";
        linea = linea.concat(
                "<tr>",
                '<td  > <input type="hidden" name="cod" value="'+ codigo +'"> ' + codigo + "</td>",
                '<td >  <input type="hidden" name="tipo" value="'+ tipo +'">'+ tipo + "</td>",
                "</tr>"
                );
       
        $("table#ver_manteniemiento_activos tbody").append(linea).closest("table#ver_manteniemiento_activos");



    </script>
    <?php
}
?>
 