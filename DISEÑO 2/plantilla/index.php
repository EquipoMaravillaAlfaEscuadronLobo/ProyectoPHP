<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
                <title>
                    Iniciar Sesión
                </title>
                
                    <link href="css/materialize.min.css" rel="stylesheet">
                    <link href="css/bootstrap.min.css" rel="stylesheet">
                    </link>
                </link>
                <link href="css/estilos.css" rel="stylesheet">
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="container login">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default ">
                        <div class="panel-heading text-center">
                            <h3>
                                Inicio de Sesión
                            </h3>
                        </div>
                        <div class="panel-body">
                        	<div class="row">
                        		<div class="col-md-3"><h4>Nombre:</h4></div>
                        		<div class="col-md-9"><input type="text" name="nombre" id="nombre" class="form-control" autofocus/></div>
                        	</div>
                        	<div class="row">
                        		<div class="col-md-3"><h4>Contraseña:</h4></div>
                        		<div class="col-md-9"><input type="password" name="clave" id="clave" class="form-control" /></div>
                        	</div>
                        	<div class="row">
                        	<div class="col-md-6"><button type="button" class="form-control btn btn-primary" onclick="validar()"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Ingresar</button></div>
                        	<div class="col-md-6"><button type="reset" class="form-control btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</button></div>
                        	
                        
                    </div>
                        </div>
                        
                <div class="col-md-3">
                </div>
            </div>
            </form>
        </div>
        <script crossorigin="a
	nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/materialize.min.js">
        </script>
        <script>
        	function validar(){
        		location.href='home.php'
        	}
        </script>
    </body>
</html>