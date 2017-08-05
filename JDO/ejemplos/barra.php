<?php
include_once '../app/Conexion.inc.php';
include_once '../app/RepositorioUsuario.inc.php';

Conexion :: abrir_conexion();
$usuarios = array();
$usuarios = RepositorioUsuario::obtener_todos(Conexion::obtener_conexion());
echo count($usuarios);
Conexion::cerrar_conexion();


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Starter Template for Bootstrap</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/estilos.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">entrada</a></li>
                        <li><a href="#">registro</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav><br><br><br>
        <div class="container">
            <div class="jumbotron">
                <h1>titular</h1>
                <p>esto es el parrafo</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>columna lateral 12 de 4</h3>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> busqueda
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="que buscas?">
                                        </div>
                                        <button class="form-control">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-filter">filtro</span>
                                    </div>
                                    <div class="panel-body">

                                    </div>

                                </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true">Archivo</span>
                                    </div>
                                    <div class="panel-body">

                                    </div>

                                </div>
                            </div>  
                        </div>
                    </div>
                    <h3>columna lateral 12 de 8</h3>
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Archivo
                            </div>
                            <div class="panel-body">
                                <div class="form-group">

                                </div>
                                <?php
                                include_once '../app/Conexion.inc.php';
                                Conexion:: abrir_conexion();
                                Conexion:: cerrar_conexion();
                                ?>
                                <p>todavia no hay nada que mostrar </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">

            <div class="starter-template"><br><br>
                <h1>Bootstrap starter template</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>

        </div><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>