<?php
//$titulo1="";
//include_once '../plantillas/cabecera.php';
//$titulo1="";
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/repositorio_prestamolib.inc.php';
$codigo=$_REQUEST['codigo'];
$cantidad=$_REQUEST['cantidad'];
$dev=$_REQUEST['dev'];
//echo $codigo;
Conexion::abrir_conexion();
$listado= Repositorio_prestamolib::ListaLibrosPrestamo(Conexion::obtener_conexion(), $codigo);

?>
<input type="hidden" id="fechaDev" value="<?php echo $dev?>"> 
<table class="table table-hover">
        <thead>
        
        <th>C&oacute;digo</th>
        <th>T&iacute;tulo</th>
        <th>Devolver</th>
        </thead>
        <tr>
        <?php
        foreach ($listado as $fila) {
            # code...
            

            ?>
            
            <td><?php echo $fila['cl']?></td>
            <td><?php echo $fila['titulo']?></td>
            <td>
                <button class="btn btn-warning" onclick="devolucion('<?php echo $cantidad ?>','<?php echo $fila['cl'] ?>','<?php echo $fila[0] ?>')">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
<div class="row">
    <div class="col-md-6">
                <div class="input-field">
                                    <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                    <label for="fecha_pub" class="active">Nueva Fecha de Devoluci&oacute;n</label>
                                    <input type="text" class="fecha_dev2" id="newDev" value="<?php echo $dev ?>">
                </div>
                
                
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-success" id="actualizar"  onclick="actualizarFecha('<?php echo $codigo?>')">
                <i class="fa fa-refresh" aria-hidden="true"></i> Actualizar
                </button>
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-warning" id="finlizar"  onclick="finalizar('<?php echo $codigo ?>')">
                <i class="fa fa-reply" aria-hidden="true"></i> Devolver Todo
                </button>
            </div>
    
</div>

<script>
    $(document).ready(function () {
        
        $('.fecha_dev2').removeData('min');
        $('.fecha_dev2').pickadate({//es clase para validar las fechas del activo fijo
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 2, // Creates a dropdown of 15 years to control year,
            today: 'Hoy',
            clear: 'Borrar',
            close: 'Ok',
            format: 'dd-mm-yyyy',
            min: new Date(),
            closeOnSelect: true // Close upon selecting a date,
        });
    })
</script>
