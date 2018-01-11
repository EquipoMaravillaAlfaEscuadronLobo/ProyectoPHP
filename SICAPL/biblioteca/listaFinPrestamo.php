<?php
//$titulo1="";
//include_once '../plantillas/cabecera.php';
//$titulo1="";
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/repositorio_prestamolib.inc.php';
$codigo=$_REQUEST['codigo'];
//echo $codigo;
Conexion::abrir_conexion();
$listado= Repositorio_prestamolib::ListaLibrosPrestamo(Conexion::obtener_conexion(), $codigo);
?>
    <table>
        <thead>
        <th>C&oacute;digo</th>
        <th>T&iacute;tulo</th>
        <th>Acci&oacute;n</th>
        </thead>
        <tr>
        <?php
        foreach ($listado as $fila) {
            # code...

            ?>
            
            <td><?php echo $fila['cl']?></td>
            <td><?php echo $fila['titulo']?></td>
            <td>
                <button class="btn btn-danger" onclick="Baja('<?php echo $fila[0] ?>')"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
