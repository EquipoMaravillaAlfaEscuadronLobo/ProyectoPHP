<?php 
   include_once '../app/Conexion.php';
    include_once '../repositorios/repositorio_prestamolib.inc.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_prestamolib::ListaPrestamos(Conexion::obtener_conexion());

 ?>
<div>
    <row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Prestamos</h3>
                        </div>
                        <div class="col-md-2">  <a class="btn btn_primary"  target="_blank" onclick="abrirModal()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                                </span>Nuevo Prestamo</a></div>
                    </div>       
                </div>
                <div class="panel-body">				
                    <table padding="20px" class="responsive-table display" id="tabla-paginada4">
                        <thead>
                        <th>Codigo</th>
                        <th>Libro</th>
                        <th>Usuario</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($listado as $fila) {
                         ?>
                            <tr>
                                <td><?php echo $fila['codigo'] ?></td>
                                <td><?php echo $fila['titulo'] ?></td>
                                <td><?php echo $fila['nombre']." ".$fila['apellido'] ?></td>
                                <td><?php echo $fila['salida'] ?></td>
                                <td><?php echo $fila['devolucion'] ?></td>
                                <td class="alert alert-warning" onclick="finalizar('<?php echo $fila['codigo'] ?>')">Pendiente</td>
                            </tr>
                            <?php } ?>
                            
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </row>
</div>

<div id="nuevo" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('prestamo2.php'); ?>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><button onclick="enviar()" class="waves-effect btn btn-success">Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function enviar () {
    document.getElementById('num').value= document.getElementsByName('libros').length;
    document.frmPrestamoLibro.submit();
}

function finalizar (codigo) {
  swal({
  title: "An input!",
  text: "Write something interesting:",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  inputPlaceholder: "Write something"
}, function (inputValue) {
  if (inputValue === false) return false;
  if (inputValue === "") {
    swal.showInputError("You need to write something!");
    return false
  }
  swal("Nice!", "You wrote: " + inputValue, "success");
});

}

</script>