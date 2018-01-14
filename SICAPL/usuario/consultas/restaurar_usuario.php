<?php
session_start();
if (!isset($_SESSION['user']) && ($titulo1 != "Inicio de Sesion" && $titulo1 != "Recuperar Contraseña")) {
    header("Location: ../index.php");
}

$titulo1 = '';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
       <!-- <title><?php echo $titulo1; ?></title>-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../../css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="../../css/materialize.css" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link href="../../css/foto.css" rel="stylesheet">
        <!--<link href="../css/materialdesignicons.min.css" rel="stylesheet">-->
        <link href="../../css/sweetalert.css" rel="stylesheet">

        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <script src="../../js/sweetalert.min.js"></script>


    </head>
    <body>
        <?php
//session_start();
        include_once '../../app/Conexion.php';
        include_once '../../repositorios/repositorio_notificaciones.php';
        Conexion::abrir_conexion();
        $numero = repositorio_notificaciones::numero_notifiaciones(Conexion::obtener_conexion());
        ?>
        <nav class="nav-extended">
            <div class="nav-wrapper">
                <div class="brand-logo">
                    <a href="../../app/home.php">
                        <img src="../../imagenes/libros.png" alt="" width="80%" height="100%">
                    </a>
                </div>

                <a class="button-collapse" data-activates="mobile-demo" href="#">
                    <i class="material-icons">
                        menu
                    </i>
                </a>
                <ul class="right hide-on-med-and-down" id="nav-mobile">
                    <li>
                        <a href="../activofijo/inicio_activo.php"> 

                            <i class="fa fa-television" aria-hidden="true"></i>  Activo Fijo
                        </a>
                    </li>
                    <li>
                        <a href="../biblioteca/inicio_b.php">
                            <i class="fa fa-book" aria-hidden="true"></i> Gestión de Biblioteca
                        </a>
                    </li>
                    <li>
                        <a href="../usuario/inicio_usuario.php">
                            <i class="fa fa-users" aria-hidden="true"></i>  Gestión de Usuarios
                        </a>
                    </li>
                    <?php if ($_SESSION['nivel'] == '0') { ?>          
                        <li>
                            <a href="../seguridad/inicio_seguridad.php">
                                <i class="fa fa-lock" aria-hidden="true"></i>  Seguridad
                            </a>
                        </li>
                    <?php } ?>

                    <li>
                        <a href="../Cuenta/inicio_cuenta.php">
                            <i class="fa fa-wrench" aria-hidden="true"></i> Mi Cuenta
                            <span style="font-weight: bold; font-size: 15px" class="label-count">(<?php echo $numero; ?>)</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            Ayuda
                        </a>
                    </li>

                    <li>
                        <a href="../sesiones/cerrar.php">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesion
                        </a>
                    </li>




                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <a href="../activofijo/inicio_af.php">
                            <i class="fa fa-television" aria-hidden="true"></i>  Activo Fijo
                        </a>
                    </li>
                    <li>
                        <a href="../biblioteca/inicio_b.php">
                            <i class="fa fa-book" aria-hidden="true"></i>  Gestión de Biblioteca
                        </a>
                    </li>
                    <li>
                        <a href="../usuario/inicio_usuario.php">
                            <i class="fa fa-users" aria-hidden="true"></i>  Gestión de Usuarios
                        </a>
                    </li>
                    <?php if ($_SESSION['nivel'] == '0') { ?>          
                        <li>
                            <a href="../seguridad/inicio_seguridad.php">
                                <i class="fa fa-lock" aria-hidden="true"></i>  Seguridad
                            </a>
                        </li>
                    <?php } ?>

                    <li>
                        <a href="../Cuenta/inicio_cuenta.php">
                            <i class="fa fa-wrench" aria-hidden="true"></i>  Mi Cuenta
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            Ayuda
                        </a>
                    </li>
                    <li>
                        <a href="../sesiones/cerrar.php">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </nav>


<?php
$nombre = $_REQUEST['nombre'];
$carnet = $_REQUEST['carnet'];
Conexion::abrir_conexion();
include_once '../../repositorios/repositorio_usuario.inc.php';
Repositorio_usuario::restaurar_usuario(Conexion::obtener_conexion(), $carnet, $nombre);


?>



         <!--<script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="../js/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <!--<script src="../js/jquery-1.11.2.js"></script>
        <script type="text/javascript" src="../js/jquery.min.js"></script>-->
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/materialize.js"></script>
        <script src="../../js/jquery.inputmask.bundle.js"></script>
        <script src="../../js/modales.js"></script>
        <script src="../../js/jquery.dataTables.min.js"></script>
        <script src="../../js/data-tables-script.js"></script>
        <script src="../../js/jquery.validate.js"></script>
        <script type="text/javascript" src="../js/validacionBiblioteca.js"></script>
        <script src="../js/alertaPersonalizadas.js"></script>
        <script src="../js/mi_validacion.js"></script>
        <script src="../js/validacion_simple.js"></script>
        <script src="../js/validacion_editar.js"></script>
        <script src="../js/validacion_elimnar.js"></script>
        <script src="../js/jquery.inputmask.bundle.js"></script>
        <script src="../js/Mascara.js"></script>
        <script src="../js/inicializaciones.js"></script>
        <!--<script src="../js/validacionBiblioteca.js"></script>-->
        <script src="../js/validacionAutores.js"></script>
        <script src="../js/validacionEditoriales.js"></script>

        <script src="../js/validacionBibliotecaEdit.js"></script>
        <script src="../js/validacionAutoresEdit.js"></script>
        <script src="../js/validacionEditorialesEdit.js"></script>

        <script type="text/javascript" src="../js/jquery.validate.js"></script>
        <script src="../js/sweetalert.min.js"></script>
        <script src="../js/Libros.js"></script>
        <?php
        if ($titulo1 != "Biblioteca") {
            ?>
            <script src="../js/Activo.js"></script>
            <?php
        }
        ?>
        <script src="../js/foto.js"></script>

    </body>
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">Derechos Reservados UES-FMP</div>

            </div>
        </div>
    </footer>
</html>


