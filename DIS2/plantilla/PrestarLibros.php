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
        <link rel="stylesheet" href="css/sweetalert.css">
        
              
                <style>
            textarea{
                width: 100%;
                height: 84px;
            }
        </style>

<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-42119746-3', 'auto');
      ga('send', 'pageview');
    

function alertaExito() {
                swal('Exito', 'Datos Guardados', 'success');
            }


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
                            <span class="nav-link-text">Gestion De Libros</span>
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
                                <h3 class="card-title mr-1 text-center">Prestamo de Libros</h3>

                                <form action="">
                                    <div class="form-group row">
                                        <div class="col-1"></div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Codigo de Libro</label>
                                            <input type="text" style="text-align:center" class="form-control" placeholder="CEJ-001-0001" name="nombre" id="nombre"disabled="" >
                                        </div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Nombre del Activo</label>
                                            <input type="text" style="text-align:center" class="form-control" placeholder="La soledad de los números primos" name="nameUsuario" id="idUsuario" disabled="">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-1"></div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Carnet De Usuario</label>
                                            <input type="text" style="text-align:center" class="form-control" placeholder="MA14049" name="nombre">
                                        </div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Nombre de usuario</label>
                                            <input type="text" style="text-align:center" class="form-control" placeholder="Boris Ricardo Miranda Ayala" name="nameUsuario" id="idUsuario" disabled="">

                                        </div>
                                    </div> <div class="form-group row">
                                        <div class="col-1"></div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Ejemplares disponibles</label>
                                            <input type="text" style="text-align:center" class="form-control" placeholder="10" name="nombre" disabled="">
                                        </div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Ejemplares Solicitados</label>
                                            <input type="number" min="1" max="10" style="text-align:center" class="form-control" placeholder="10" name="nameUsuario" id="idUsuario" >

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-1"></div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Fecha De Prestamo</label>
                                            <input type="datetime" class="form-control" placeholder="11/07/2015" name="nombre" disabled="">
                                        </div>
                                        <div class="col-5 text-center">
                                            <label for="nombre">Fecha De Devolucion</label>
                                            <input type="datetime" class="form-control" placeholder="12/07/217" name="nameUsuario" id="idUsuario">

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-1"></div>
                                        <div class="col-10 text-center">
                                            <label for="nombre">Observaciones</label>
                                            <textarea name="" id="" cols="30" placeholder="Observaciones de Activo..."></textarea>

                                        </div>

                                    </div>
                                    <div class="text-center mt-3 mb-4">
                                        
                                        <botton class="btn btn-success" onClick="alertaExito()">Guardar</botton>
                                        
                                        <a href="#" class="btn btn-danger">Cancelar</a>
                                    </div>

                                </form>

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
        <script src="js/sweetalert.js"></script>

    </body>

</html>
