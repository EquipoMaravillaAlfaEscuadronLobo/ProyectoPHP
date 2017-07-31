<?php
$titulo = 'REGISTRO';
include_once './Conexion.inc.php';
include_once './RepositorioUsuario.inc.php';
include_once '../plantilla/documento-declaracion.inc.php';
include_once './ValidadorRegistro.inc.php';
if (isset($_POST['enviar'])) {
    
    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave1'], $_POST['clave2']);
if ($validador -> registro_valido()) {
    //$usuario = new usuario
}
    
}

include '../plantilla/barra.inc.php';

?>
<div class="container">
    
    <div class="jumbotron">
        <h1 class="text-center">FORMULARIO DE REGISTRO</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">INSTRUCCIONES</h3>                  

                </div>
                <div class="panel-body"><br>
                    <p class="text-justify">
                        PARA UNIRTE AL BLOG INTRODUCE UN NOMBRE DE
                        USUARIO UN EMAIL Y UNA CONTRASENIA QUE 
                        SEAN REALES 
                    </p>
                    <br>
                    <a href="#">ya tienes cuenta?</a>
                    <br><br>
                    <a href="#">olvidaste tu contrasenia</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">INTRODUCE TUS DATOS </h3>                  
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <?php
                        if (isset($_POST['enviar'])) {
                            include_once '../plantilla/registro_validado.inc.php';    
                            
                        } else {
                            include_once '../plantilla/registro_vacio.inc.php';    
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include_once '../plantilla/documento-cierre.inc.php';
?>