<?php
//$titulo1="";
//include_once '../plantillas/cabecera.php';
//$titulo1="";
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
$codigo=$_REQUEST['codigo'];
//echo $codigo;
Conexion::abrir_conexion();
$listado=Repositorio_libros::ListaDarBaja(Conexion::obtener_conexion(), $codigo);
?>
    <table>
        <thead>
        <th>C&oacute;digo</th>
        <th>T&iacute;tulo</th>
        <th>Acci&oacute;n</th>
        <th>C&oacute;digo de Barras</th>
        </thead>
        <tr>
        <?php
        foreach ($listado as $fila) {
            # code...

            ?>
            
            <td><?php echo $fila[0]?></td>
            <td><?php echo $fila[1]?></td>
            <td>
                <button class="btn btn-danger" onclick="Baja('<?php echo $fila[0] ?>')"><i class="fa fa-trash"></i></button>
            </td>
            <td ><a class="btn btn-info" href="../reportes/imprimir_barcode.php?codigo=<?php echo $fila[0]?>" target="_blank"><i class="fa fa-barcode" aria-hidden="true"></i>  Imprimir</a></td>
        </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
