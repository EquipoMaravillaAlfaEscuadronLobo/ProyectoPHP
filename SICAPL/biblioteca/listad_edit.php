<?php 
  include_once '../app/Conexion.php';
    include_once '../modelos/Editorial.php';
    include_once '../repositorios/repositorio_editorial.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_editorial::ListaEditorial(Conexion::obtener_conexion());
 ?>
<table padding="20px" class="responsive-table display" id="tabla-paginada3">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Telefono</th>
                    
                    

                    </thead>
                    <tbody>
                    <?php 
                        foreach ($listado as $fila) {
                            # code...
                        
                     ?>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionEdi('<?php echo $fila['codigo_editorial'] ?>','<?php echo $fila['nombre'] ?>','<?php echo $fila['direccion'] ?>','<?php echo $fila['email'] ?>','<?php echo $fila['telefono'] ?>')"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center"><?php echo $fila['nombre'] ?></td>
                            <td class="text-center"><?php echo $fila['direccion'] ?></td>
                            <td class="text-center"><?php echo $fila['email'] ?></td>
                            <td class="text-center"><?php echo $fila['telefono'] ?></td>
                            
                           
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>



        <?php include('frm_edit_edi.php'); ?>
  

<script type="text/javascript">
     function actualizarEdit () {
        document.frmEditEditorial.submit();
    }
</script>