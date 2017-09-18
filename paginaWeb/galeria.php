<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Casa de Encuentro Juevenil, Verapaz San Vicente</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<style>
#gallery {
  padding: 10px 0 0 10px;
  background-color: white;
  text-align: center;
  margin: 0 auto;
  border: 2px solid blue;
}

.gallery-item {
  width: 200px;
  height: 200px;
  float:left;
  margin: 10px;
  overflow: hidden;
  cursor: pointer;
  border: 10px solid #fff;
  border-radius: 5px;
  box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.5);
}
  
.modal {
  text-align: center;
  margin: 0 auto 20px auto;
}

.modal-open {
  margin: 0 auto;
  overflow: auto;
} 

#modal-image {
  margin: 0 auto;
  max-width:100%;
  border-radius: 5px;
}  

.modal-image-caption {
  text-transform: capitalize;
}
</style>
<body class="theme-red">
    
    
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
   
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="#" class="bars"></a>
                <a class="navbar-brand" href="#">Casa de Encuentro Juevenil</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <a class="navbar-brand" href="#">San José Verapaz</a>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="image">
                    <!--<img src="images/user.png" width="48" height="48" alt="User" />-->
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></div>
                    <div class="email"></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></i>
                        <ul class="dropdown-menu pull-right">
                            
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header text-center">MENU</li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-green">explore</i>
                            <span>Historia</span>
                        </a>
                    </li>
                    <li>
                        <a href="galeria.php">
                            <i class="material-icons col-blue">collections</i>
                            <span>Galerias</span>
                        </a>
                    </li>
                    <li>
                        <a href="noticias.php">
                            <i class="material-icons col-blue-grey">description</i>
                            <span>Noticias</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-deep-orange">book</i>
                            <span>Catalogo de libros</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="material-icons col-deep-purple">event</i>
                            <span>Proximos Eventos</span>
                        </a>
                    </li>
                    <li class="header">Nosotros</li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-red">contacts</i>
                            <span>Contactenos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons col-amber">mail</i>
                            <span>Sugerencias</span>
                        </a>
                    </li>
                  
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="#">UES FMP</a>.
                </div>
               
            </div>
            <!-- #Footer -->
        </aside>\
        <!-- #END# Left Sidebar -->
              
    </section>

    <section class="content">
        <div class="container-fluid">
           
            <div id="gallery row clearfix">
                                                 
                <h2>Gallery of Images</h2>
                
                <div class="gallery-item"><img src="http://placehold.it/300x200.png&text=image+1" alt="gallery image one" title="Gallery Image One"/></div>
                <div class="gallery-item"><img src="http://placehold.it/400x300.png&text=image+2" alt="gallery image two" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300x150.png&text=image+3" alt="gallery image three" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300x600.png&text=image+4" alt="gallery image four" /></div>
                <div class="gallery-item"><img src="http://placehold.it/250x250.png&text=image+5" alt="gallery image five" /></div>
                <div class="gallery-item"><img src="http://placehold.it/200x200.png&text=image+6" alt="gallery image six" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+7" alt="gallery image seven" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+8" alt="gallery image eight" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+9" alt="gallery image nine" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+10" alt="gallery image ten" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+11" alt="gallery image eleven" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+12" alt="gallery image twelve" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+13" alt="gallery image thirteen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+14" alt="gallery image fourteen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+15" alt="gallery image fifteen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+16" alt="gallery image sixteen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+17" alt="gallery image seventeen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+18" alt="gallery image eighteen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+19" alt="gallery image nineteen" /></div>
                <div class="gallery-item"><img src="http://placehold.it/300.png&text=image+20" alt="gallery image twenty" /></div>

            </div><!-- /.gllery -->
           
        </div>
    </section>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myModalLabel">Image from Gallery.</h4>
          <br/>
          <nav class="botones"></nav>
          </div>
          <div class="modal-body clearfix">
           <h4 class='modal-image-caption'></h4>
            <img id="modal-image" class="img-responsive" src=""><br/>
        </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="js/galeria.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
   

</body>

</html>