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
         $('#codigoPrestamoAct').val("<?php echo $_POST['codigo']; ?>");//envia el codigo del prestamo para actualizarlo
        $('#codigouserActP').val("<?php echo $fila['carnet']; ?>");//para obener el codigo de usuario
        $('#fechComp').val("<?php echo date_format(date_create($fila['fech_dev']), 'd-m-Y'); ?>");
        $('#fecha_dev_act').val("<?php echo date_format(date_create($fila['fech_dev']), 'd-m-Y'); ?>");
        $('#fecha_sal_act').val("<?php echo date_format(date_create($fila['fech_sal']), 'd-m-Y'); ?>");
        document.getElementById('carnetAct').innerHTML = "<?php echo $fila['carnet']; ?>";
        document.getElementById('nombreUserAct').innerHTML = "<?php echo $fila['nombre']; ?>";
        document.getElementById('sexoAct').innerHTML = "<?php echo $fila['sexo']; ?>";
         document.getElementById('telAct').innerHTML = "<?php echo $fila['tel']; ?>";
          document.getElementById('corrAct').innerHTML = "<?php echo $fila['correo']; ?>";
           document.getElementById('dirAct').innerHTML = "<?php echo $fila['dir']; ?>";
        //document.getElementById('fotAct').setAttribute("src", "../imagenes/tipo.jpg");
        $("table#listActivoAct tbody tr").remove();
    <?php
    Conexion::abrir_conexion();
    $listado1 = Repositorio_prestamoact::obtenerListActP(Conexion::obtener_conexion(), $fila['mov_activos']);
    foreach ($listado1 as $fila1) {
        ?>
            // alert("codigo");
            var codigo = "<?php echo $fila1['codigo']; ?>";
            var tipo = "<?php echo $fila1['tipo']; ?>";
            var estado= "<?php echo $fila1['estado']; ?>";
            if(estado==2){
            var sel = '<div class="form-group">' +
                    '<select class="form-control accion_select" onchange="activar_btn_act()" id="accion_select1[]" name="accion_select1[]">' +
                    '<option value="2" >En Prestamo</option>' +
                    '<option value="1" >Devolver</option>' +
                    '<option value="3" >Dañado</option>' +
                    '<option value="4" >Extaviado</option>' +
                    '</select>' +
                    '</div>';
        }else{if(estado==1){
            var sel = '<div class="form-group">' +
                    '<select class="form-control accion_select btn-success" onchange="activar_btn_act()"  id="accion_select1[]" name="accion_select1[]">' +                    
                    '<option value="1"  selected="">Devuelto</option>' +
                    '<option value="2" >En Prestamo</option>' +
                    '</select>' +
                    '</div>';
        }else{var sel = '<div class="form-group">' +
                    '<select class="form-control accion_select btn-success" onchange="activar_btn_act()"  id="accion_select1[]" name="accion_select1[]">' +                    
                    '<option value="'+estado+'"  selected="">No Disponible</option>' +
                    '</select>' +
                    '</div>';
            
        }
            
            
        }
            var linea = "";
            linea = linea.concat(
                    "<tr>",
                    '<td> <input type="hidden" name="codsActsA[]" value="' + codigo + '"> ' + codigo + "</td>",
                    "<td>" + tipo + "</td>",
                    "<td whith='80'>" + sel + "</td>",
                    '<td><textarea name="observaciones[]" id="observaciones[]" style="font-size:8px"></textarea></td>',
                    "</tr>"
                    );
            //

            $("table#listActivoAct tbody").append(linea).closest("table#listActivoAct");

    <?php } ?>

    </script>
    <?php
}
?>
 