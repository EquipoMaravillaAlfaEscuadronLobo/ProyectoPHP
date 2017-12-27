<?php
include_once '../app/Conexion.php';
include_once '../modelos/PrestamoAct.php';
include_once '../repositorios/repositorio_prestamoact.php';
Conexion::abrir_conexion();

$listado = Repositorio_prestamoact::obtenerPact(Conexion::obtener_conexion(), $_POST['codigo']);
//echo '<script language="javascript">alert("'.$_POST['codigo'].'");</script>';
//$numero=$_POST['numero'];

foreach ($listado as $fila) {
    ?>
    <script type="text/javascript">
        //LLENANDO LOS DATOS DEL USUARIO 

        $('#fecha_dev_act').val("<?php echo date_format(date_create($fila['fech_dev']), 'd-m-Y'); ?>");
        document.getElementById('fecha_sal_act').innerHTML = "<?php echo date_format(date_create($fila['fech_sal']), 'd-m-Y'); ?>";
        document.getElementById('carnetAct').innerHTML = "<?php echo $fila['carnet']; ?>";
        document.getElementById('nombreUserAct').innerHTML = "<?php echo $fila['nombre']; ?>";
        document.getElementById('sexoAct').innerHTML = "<?php echo $fila['sexo']; ?>";
        //document.getElementById('fotAct').setAttribute("src", "../imagenes/tipo.jpg");
   
    <?php
    Conexion::abrir_conexion();
    $listado1 = Repositorio_prestamoact::obtenerListActP(Conexion::obtener_conexion(), $fila['mov_activos']);
    foreach ($listado1 as $fila1) {
        
        ?>
            // alert("codigo");
            var codigo = "<?php echo $fila1['codigo']; ?>";
            var tipo = "<?php echo $fila1['tipo']; ?>";
            var select='';
            var linea = "";
            linea = linea.concat(
                    "<tr>",
                    '<td> <input type="hidden" name="codsActsA[]" value="' + codigo + '"> ' + codigo + "</td>",
                    "<td>" + tipo + "</td>",
                    "<td><div><select name='accion[]'>",
                   " <option value='1'>Devolver</option>",
                    "<option value='3'>Dañado</option>",
                    "<option value='1'>Extraviado</option>",
                    "</select></div></td>",
                    '<td><textarea name="observaciones[]" id="observaciones[]" style="font-size:8px"></textarea></td>',
                    "</tr>"
                    );
            $("table#tabla_activo_prestamo_act tbody").append(linea);

    <?php } ?>

    </script>
    <?php
}
?>
 