<?php
include_once '../../reportes/vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
ob_start();
include_once '../../app/Conexion.php';
include_once '../../modelos/Usuario.php';
include_once '../../repositorios/repositorio_usuario.inc.php';
Conexion::abrir_conexion();

if (isset($_REQUEST['lista_usuario'])) {
    $lista_imprimir = $_REQUEST['lista_usuario'];
    foreach ($lista_imprimir as $key => $carnetI) {
       
        
       
        
        echo $carnetI . '<br/>';
    }
} else {
    echo 'no a seleccionado ningun usuario';
}
?>