<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
            <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
                <title>
                    Activo Fijo
                </title>
                <link href="../css/bootstrap.min.css" rel="stylesheet">
                    <link href="../css/materialize.min.css" rel="stylesheet">
                    </link>
                </link>
                <link href="../css/estilos.css" rel="stylesheet">
                </link>
            </meta>
        </meta>
    </head>
<body>
	 <nav class="nav-extended">
            <div class="nav-wrapper">
                <a class="brand-logo" href="../home.php">
                    Logo
                </a>
                <a class="button-collapse" data-activates="mobile-demo" href="#">
                    <i class="material-icons">
                        menu
                    </i>
                </a>
                <ul class="right hide-on-med-and-down" id="nav-mobile">
                    <li>
                        <a href="inicio_af.php">
                            Activo Fijo
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Gestión de Biblioteca
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Gestión de Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Seguridad
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ayuda
                        </a>
                    </li>
                    <li>
                        <a href="../index.php">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li>
                        <a href="inicio_af.php">
                            Activo Fijo
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Gestión de Biblioteca
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Gestión de Usuarios
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Seguridad
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ayuda
                        </a>
                    </li>
                    <li>
                        <a href="../index.php">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-content" name="">
                <ul class="tabs tabs-transparent">
                    <li class="tab">
                        <a class="active" href="#test2">
                            Inventario
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test1">
                            Registro de Activo Fijo
                        </a>
                    </li>
                    
                    
                    <li class="tab">
                        <a href="#test3">
                            Mantenimiento
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test4">
                            Prestamo
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test5">
                            Consultas
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#test6">
                            Reportes
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="col s12" id="test1">
           
           <?php include('registrar_af.php');?>
        </div>
        <div class="col s12" id="test2">
           <h1>Inventario</h1>
        </div>
        <div class="col s12" id="test3">
           <h1>Mantenimiento</h1>
        </div>
        <div class="col s12" id="test4">
           <h1>prestamos</h1>
        </div>
        <div class="col s12" id="test5">
            <h1>Consultas</h1>
        </div>
        <div class="col s12" id="test6">
            <h1>Reportes</h1>
        </div>
        
        <script crossorigin="a
	nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>
        <script src="../js/bootstrap.js">
        </script>
        <script src="../js/materialize.js">
        </script>
        <script>
  
  	 $(document).ready(function(){
 
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal({
      dismissible: false, // Modal can be dismissed by clicking outside of the modal
      opacity: .8, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%' // Ending top style attribute
     
    }
  );
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    dateFormat: 'dd-mm-yyyy',
     max: new Date(),
    closeOnSelect: true // Close upon selecting a date,
  });
  });
 		
 	

  </script>
</body>
</html>