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

    </head>
<!--         barra lateral-->
    <body class="fixed-nav sticky-footer bg-danger" id="page-top">

        <!-- BARRA DE NAVEGACION FRONTAL -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="barraLateral">
            <a class="navbar-brand text-center" href="#"><strong>SICAP</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#barraResponsiva" aria-controls="barraResponsiva" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="barraResponsiva">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordionZ">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseActivoFijo" data-parent="#exampleAccordion">
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
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseInventario" data-parent="#exampleAccordion">
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
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapMantenimiento" data-parent="#exampleAccordion">
                            <i class="fa fa-fw fa-users"></i>
                            <span class="nav-link-text">Gestion de Usuarios</span>
                        </a>
                        <ul class="sidenav-second-level collapse" id="collapMantenimiento">
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
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSeguridad" data-parent="#exampleAccordion">
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



                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAyuda" data-parent="#exampleAccordion">
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
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="messagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">6 New</span>
                            </span>
                            <span class="new-indicator text-primary d-none d-lg-block">
<!--                                <i class="fa fa-fw fa-circle"></i>
                                <span class="number">3</span>-->
                            </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">New Messages:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>David Miller</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>Jane Smith</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <strong>John Doe</strong>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">
                                View all messages
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <!--  <a class="nav-link dropdown-toggle mr-lg-2" href="#" id="alertsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-fw fa-bell"></i>
                          <span class="d-lg-none">Alerts
                            <span class="badge badge-pill badge-warning">6 New</span>
                          </span>
                          <span class="new-indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                            <span class="number">6</span>
                          </span>
                        </a> -->
                        <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">New Alerts:</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up"></i>
                                        Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-danger">
                                    <strong>
                                        <i class="fa fa-long-arrow-down"></i>
                                        Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <span class="text-success">
                                    <strong>
                                        <i class="fa fa-long-arrow-up"></i>
                                        Status Update</strong>
                                </span>
                                <span class="small float-right text-muted">11:21 AM</span>
                                <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item small" href="#">
                                View all alerts
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-sign-out"></i>Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- fin de barra de navegacion -->

        <div class="content-wrapper">

            <div class="container-fluid">

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /.content-wrapper -->

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

    </body>

</html>
