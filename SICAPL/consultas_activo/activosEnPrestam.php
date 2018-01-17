<?php 
   include_once '../app/Conexion.php';
    include_once '../repositorios/repositorio_prestamoact.php';
    Conexion::abrir_conexion();
    $listado= Repositorio_prestamoact::ListaActPrestamos(Conexion::obtener_conexion());

 ?>
				
                    <table padding="20px" class="responsive-table display" id="LibPres">
                        <thead>
                        <th>C&oacute;digo</th>
                        <th>Tipo</th>
                        <th>Usuario</th>                        
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($listado as $fila) {
                                $fdev=date_create($fila['fechaDev']);
                                $hoy=new DateTime("now");
                         ?>
                            <tr rel="popover" data-container="body" data-togle="popover" data-placement="top" 
                                title="Codigo Prestamo" data-content="<b> <?php echo $fila['codPac'] ?>">
                               <td><?php echo $fila['codigo'] ?></td>
                                
                                <td><?php echo $fila['tipo'] ?></td>
                                <td><?php echo $fila['nombre'] ?></td>
                                <td><?php echo date_format(date_create($fila['fechSal']),'d-m-Y') ?></td>
                                <td><?php echo  date_format(date_create($fila['fechaDev']),'d-m-Y')  ?></td>
                                <td class="alert <?php if($fdev>$hoy){echo 'alert-warning';}else{echo 'alert-danger';} ?> " >Pendiente</td>
                            </tr>
                            <?php } ?>
                           
                        </tbody>
</table>
               


