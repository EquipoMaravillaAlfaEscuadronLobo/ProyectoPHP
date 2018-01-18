<?php
include_once '../app/Conexion.php';
include_once '../modelos/Mantenimiento.php';
include_once '../modelos/Encargado_mantenimiento.php';
include_once '../repositorios/repositorio_mantenimiento.php';
include_once '../repositorios/repositorio_encargado.php';
Conexion::abrir_conexion();

$listado = Repositorio_mantenimiento::ListarEncargados(Conexion::obtener_conexion(), $_POST['codigo']);

foreach ($listado as $fila1) {
     $encargadpo = Repositorio_encargado::obtener_encargado(Conexion::obtener_conexion(), $fila1['codMant']);// recupero el encardo
    ?>
    <script type="text/javascript">
        var nombre = "<?php echo $encargadpo->getNombre(); ?>";
        var telefono = "<?php echo $encargadpo->getTelefono(); ?>";
        var dir = "<?php echo $encargadpo->getDirecccion(); ?>";
         var correo = "<?php echo $encargadpo->getCorreo(); ?>";
        var linea = "";
        linea = linea.concat(
                "<tr>",
                '<td  > <input type="hidden" name="nombre" value="'+ nombre +'"> ' + nombre + "</td>",
                '<td > <input type="hidden" name="tel" value="'+ telefono +'">' + telefono + "</td>",
                '<td > <input type="hidden" name="dir" value="'+ dir +'">' + dir + "</td>",
                '<td > <input type="hidden" name="co" value="'+ correo +'">' + correo + "</td>",
                "</tr> "
                );
       
        $("table#ver_manteniemiento_encargados tbody").append(linea).closest("table#ver_manteniemiento_encargados");

    </script>
    <?php
}
?>
 