<?php
$titulo1="";
include_once '../plantillas/cabecera.php';
$titulo1="";
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
Conexion::abrir_conexion();
$listado=Repositorio_libros::ListaDarBaja(Conexion::obtener_conexion(), 'cej-002');
?>
    <table>
        <thead>
        <th>Codigo</th>
        <th>Titulo</th>
        <th>Accion</th>
        </thead>
        <tr>
        <?php
        foreach ($listado as $fila) {
            # code...

            ?>
            <tr></tr>
            <td><?php echo $fila[0]?></td>
            <td><?php echo $fila[1]?></td>
            <td>
                <button class="btn btn-danger" onclick="Baja('<?php echo $fila[0] ?>')"><i class="fa fa-trash"></i></button>
            </td>
        </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
