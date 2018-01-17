<?php 
   include_once '../app/Conexion.php';
    include_once '../repositorios/repositorio_activo.php';
    Conexion::abrir_conexion();
    $listado= Repositorio_activo::lista_activo_baja(Conexion::obtener_conexion());

 ?>
				
                    <table padding="20px" class="responsive-table display" id="tabla-paginadaA2">
                        <thead>
                        <th>C&oacute;digo</th>
                        <th>Tipo</th>
                        <th>Administrador</th>                        
                        <th>Fecha Adquisición</th>
                        <th>Precio</th>
                        <th>Observaciones</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($listado as $fila) {                                
                         ?>
                            <tr >
                               <td><?php echo $fila['codigo'] ?></td>
                                
                                <td><?php echo $fila['tipo'] ?></td>
                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo $fila['f'] ?></td>
                                 <td><?php echo $fila['p'] ?></td>
                                  <td><?php echo $fila['o'] ?></td>
                                <td class="alert <?php echo 'alert-danger'; ?> " >Pendiente</td>
                            </tr>
                            <?php } ?>
                           
                        </tbody>
</table>
               


