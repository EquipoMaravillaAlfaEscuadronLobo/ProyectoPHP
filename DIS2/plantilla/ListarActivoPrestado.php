<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Control de Activo Fijo y Prestamo de libros</title>


        <link rel="stylesheet" href="css/bootstrap4.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css"> 
        <link rel="stylesheet" href="css/sb-admin.css">
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <script src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" class="init">
	

$(document).ready(function() {
	$('#example').DataTable();
} );


	</script>



    </head>
    <!--         barra lateral-->
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

        <!-- BARRA DE NAVEGACION FRONTAL -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="barraLateral">
            <a class="navbar-brand text-center" href="#"><strong>SICAP</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#barraResponsiva" aria-controls="barraResponsiva" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barraResponsiva">
                <ul class="navbar-nav navbar-sidenav">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="ActivoFijo">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseActivoFijo">
                            <i class="fa fa-fw fa-institution"></i>
                            <span class="nav-link-text">Gestion De Activo Fijo</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseActivoFijo">
                            <li>
                                <a href="#">Registro de Activo Fijo</a>
                            </li>
                            <li>
                                <a href="#">Inventario</a>
                            </li>
                            <li>
                                <a href="#">Mantenimientos</a>
                            </li>
                            <li>
                                <a href="#">Prestamos</a>
                            </li>
                            <li>
                                <a href="#">Consultas</a>
                            </li><li>
                                <a href="#">Reportes</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Biblioteca">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInventario">
                            <i class="fa fa-fw fa-book"></i>
                            <span class="nav-link-text">Gestion de Biblioteca</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseInventario">
                            <li>
                                <a href="#">Bibliografia</a>
                            </li>
                            <li>
                                <a href="#">Registros</a>
                            </li>
                            <li>
                                <a href="#">Prestamos</a>
                            </li>
                            <li>
                                <a href="#">Consultas</a>
                            </li>
                            <li>
                                <a href="#">Reportes</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Usuarios">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMantenimiento" >
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Gestion de Usuarios</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseMantenimiento">
                            <li>
                                <a href="#">Registro</a>
                            </li>
                            <li>
                                <a href="#">Modificacion</a>
                            </li>
                            <li>
                                <a href="#">Consulta</a>
                            </li>
                            <li>
                                <a href="#">Reporte</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Seguridad">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSeguridad">
                            <i class="fa fa-fw fa-key"></i>
                            <span class="nav-link-text">Seguridad</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseSeguridad">
                            <li>
                                <a href="#">Administradores</a>
                            </li>
                            <li>
                                <a href="#">Backup</a>
                            </li>
                            <li>
                                <a href="#">Bitacora</a>
                            </li>

                        </ul>
                    </li>



                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ayuda">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAyuda">
                            <i class="fa fa-fw fa-wrench"></i>
                            <span class="nav-link-text">Ayuda</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapseAyuda">
                            <li>
                                <a href="#">Manuales de Ayuda</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--                opciones de barra frontal de lado izquierdo-->

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Notificaciones
                                <span class="badge badge-pill badge-primary"><!-- 6 New--></span>
                            </span>
                            <span class="new-indicator text-primary d-none d-lg-block">
<!--                                <i class="fa fa-fw fa-circle"></i>
                                <span class="number">3</span>-->
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin de barra de navegacion -->

        <div class="content-wrapper">

            <div class="container-fluid">
                <div class="row">
                    <div class="col">

                        <div class="card">
                            <div class="card-block ">
                                <h3 class="card-title mr-1 text-center">Listado de Prestamos de Activos.</h3>
                                <table id="example" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="3%">&nbsp;</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Especialidad</th>
                                            <th>Sexo</th>
                                            <th width="3%">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                         
                                            <tr>
                                                <td style="cursor:pointer"><img src="../images/edit.png" style="width:20px"></td>
                                                <td align="left">Juan</td>
                                                <td align="left">andres</td>
                                                <td align="left">Gomez</td>
                                                <td align="left">Bolaños</td>

                                                <td style="cursor:pointer"><img src="../images/imp.jpg" style="width:20px"></td>
                                            </tr>
                                           
                                      
                                  
                                    </tbody>
                                </table>
                                <form action="">
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
                                        </div>
                                        <div class="col-6">
                                            <label for="pass">Contraseña</label>
                                            <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass">
                                        </div>
                                    </div>
                                </form>
                                <a href="#" class="btn btn-success">Guardar</a>
                                <a href="#" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  fin container-fluid -->

        </div>
        <!-- fin content-wrapper -->

        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>DISEÑO DE SISTEMAS II</small>
                    <small>SICAP 2017</small>
                </div>
            </div>
        </footer>

        <!-- Scroll to Top Button -->


        <!-- Logout Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap4.min.js"></script>
        <script src="js/materialize.min.js"></script>

    </body>

</html>
