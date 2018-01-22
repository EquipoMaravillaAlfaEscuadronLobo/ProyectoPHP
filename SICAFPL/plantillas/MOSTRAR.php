<?php
$titulo1 = 'pagina de pruebas';
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>

<?php
include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';

Conexion::abrir_conexion();
$resultado = Repositorio_administrador::lista_administradores(Conexion::obtener_conexion());

foreach ($resultado as $fila) {
    echo $fila ->getNombre()." ";
    echo $fila ->getApellido()." ";
    echo $fila ->getDui()." ";
    echo $fila ->getEstado()." ";
    echo $fila ->getObservacion()."<br>" ;
        ?>
<img src="data:image/jpg;base64,<?php echo base64_encode($fila ->getFoto()); ?>" >
    
<?php
}
Conexion::cerrar_conexion();
 include_once '../plantillas/pie_de_pagina.php';
?>



   
