<?php 
  include_once '../app/Conexion.php';
    include_once '../modelos/Encargado_mantenimiento.php';
    include_once '../repositorios/repositorio_encargado.php';
    Conexion::abrir_conexion();
    $listado= Repositorio_encargado::lista_encargado(Conexion::obtener_conexion());
 ?>
<table padding="20px" class="responsive-table display" id="oatalogoEdit">
                    <thead class="">
                   
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
                            
                            <td class="text-center"><?php echo $fila['nombre'] ?></td>
                            <td class="text-center"><?php echo $fila['dir'] ?></td>
                            <td class="text-center"><?php echo $fila['correo'] ?></td>
                            <td class="text-center"><?php echo $fila['tel'] ?></td>
                            
                           
                        </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>


                

