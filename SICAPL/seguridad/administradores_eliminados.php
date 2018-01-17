<?php
Conexion::abrir_conexion();
//session_start();
$lista_admnistradores = Repositorio_administrador::lista_administradores_eliminados(Conexion::obtener_conexion());
$ruta =  '../foto_admi/';
?>
<div class="container">
    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Administradores Dados de Baja</h3>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <table padding="20px" class="responsive-table table-sm display" id="tabla-listActivo">
                    <thead class="">
                    <th class="text-center "></th>
                    <th class="text-center ">Usuario</th>
                    <th class="text-center ">Nombre Completo</th>
                    <th class="text-center ">Motivo de Eliminación</th>
                    <th class="text-center ">Foto</th>
                    

                    </thead>
                    <tbody>
                        <?php foreach ($lista_admnistradores as $lista) { ?>
                            <tr>
                                <td class="text-center">
                                    <button class="btn btn-success" onclick="abrir_restaurar_administrador()">
                                        <i class="Medium material-icons prefix">autorenew</i> 
                                    </button>
                                </td>
                                <td class="text-center"><?php echo $lista->getCodigo_administrador(); ?></td>
                                <td class="text-center"><?php echo $lista->getNombre(). " ", $lista->getApellido(); ?></td>
                                <td class="text-center"><?php echo $lista->getObservacion(); ?></td>
                                <td class="text-center">
                                    <img src="<?php echo $ruta . $lista->getFoto(); ?>" class="presentacionXZ fotosLibros" alt="">
                                </td>
                            </tr>
                            <?php
                        }
                        //Conexion::cerrar_conexion(); 
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--esta es para abrir la ventana de dar de baja-->
<?php
include_once './restaurar_administrador.php';
?>
<!--esta es para abrir la ventana de dar de baja-->







