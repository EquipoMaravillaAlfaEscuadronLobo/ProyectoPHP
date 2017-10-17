<?php 
    include_once '../app/Conexion.php';
    include_once '../modelos/Autores.php';
    include_once '../repositorios/repositorio_autores.inc.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_autores::ListaAutores(Conexion::obtener_conexion());
 ?>
<table padding="20px" class="responsive-table display" id="tabla-paginada">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Fecha de Nacimiento</th>
                    <th class="text-center">Biografia</th>
                    
                    <th class="text-center"></th>

                    </thead>
                    <tbody>
                    <?php 
                        foreach ($listado as $fila) {
                            # code...
                        
                     ?>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionAut('<?php echo $fila['codigo_autor'] ?>','<?php echo $fila['nombre'] ?>','<?php echo $fila['apellido'] ?>','<?php echo $fila['nacimiento'] ?>')"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center"><?php echo $fila['nombre'] ?></td>
                            <td class="text-center"><?php echo $fila['apellido'] ?></td>
                            <td class="text-center"><?php echo $fila['nacimiento'] ?></td>
                            <td class="text-center"><a class="btn btn-info" href="pdf.php?direccion=<?php echo $fila['biografia']; ?>" target="_blank">Biografia</a></td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <?php } ?>
                    
                    </tbody>
                </table>


                 <div id="edicionAut" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('frm_edit_aut.php'); ?>
    </div>
    <div class="modal-footer">
    <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success">Actualizar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function mostrarpdf (direccion) {
      window.open()
    }
</script>