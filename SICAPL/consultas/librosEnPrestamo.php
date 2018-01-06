<?php 
   include_once '../app/Conexion.php';
    include_once '../repositorios/repositorio_prestamolib.inc.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_prestamolib::ListaPrestamos(Conexion::obtener_conexion());

 ?>
				
                    <table padding="20px" class="responsive-table display" id="LibPres">
                        <thead>
                        <th>Codigo</th>
                        
                        <th>Usuario</th>
                        <th>Libro</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($listado as $fila) {
                                $fdev=date_create($fila['Devolucion']);
                                $hoy=new DateTime("now");
                         ?>
                            <tr>
                               <td><?php echo $fila['codigo'] ?></td>
                                
                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo $fila['titulo'] ?></td>
                                <td><?php echo date_format(date_create($fila['fecha_salida']),'d-m-Y') ?></td>
                                <td><?php echo  date_format(date_create($fila['Devolucion']),'d-m-Y')  ?></td>
                                <td class="alert <?php if($fdev>$hoy){echo 'alert-warning';}else{echo 'alert-danger';} ?> " >Pendiente</td>
                            </tr>
                            <?php } ?>
                           
                        </tbody>
</table>
               


