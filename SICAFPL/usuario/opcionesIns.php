<option value = "" disabled selected>Seleccione Institucion</option>
<?php
include_once '../app/Conexion.php';
include_once '../modelos/Usuario.php';
include_once '../modelos/Institucion.php';
Conexion::abrir_conexion();
include_once '../repositorios/repositorio_usuario.inc.php';
include_once '../repositorios/repositorio_institucion.php';
                                $lista_instituciones = Repositorio_institucion::lista_institucion(Conexion::obtener_conexion());

                                foreach ($lista_instituciones as $lista_ins) {
                                    ?>
                                    <option value = '<?php echo $lista_ins->getCodigo_institucion(); ?>' ><?php echo $lista_ins->getNombre(); ?></option>
                                <?php } ?>