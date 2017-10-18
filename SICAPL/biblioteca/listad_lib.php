<?php 
include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::ListaLibros(Conexion::obtener_conexion());
 ?>
<table padding="20px" class="responsive-table display" id="data-table-simple">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Autores</th>
                    <th class="text-center">Editorial</th>
                    <th class="text-center">Cantidad</th>
                    
                    <th class="text-center"></th>

                    </thead>
                    <tbody>

                    <?php 
                        foreach ($listado as $fila) {
                            # code...
                        
                     ?>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionLib('<?php echo $fila['codigo'] ?>','<?php echo $fila['cedit'] ?>','<?php echo $fila['titulo'] ?>','<?php echo $fila['fecha_publicacion'] ?>','<?php echo $fila['foto'] ?>','<?php echo $fila['cantidad'] ?>')"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center"><?php echo $fila['titulo'] ?></td>
                            <td class="text-center"><?php echo $fila['autor'] ?></td>
                            <td class="text-center"><?php echo $fila['editorial'] ?></td>
                            <td class="text-center"><?php echo $fila['cantidad'] ?></td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <?php } ?>
                       
                    </tbody>
                </table>


               <div id="edicionLib" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('frm_edit_lib.php'); ?>
    </div>
    <div class="modal-footer">
    <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success">Actualizar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>