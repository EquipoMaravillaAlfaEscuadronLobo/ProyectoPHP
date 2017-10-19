<?php
include_once '../app/Conexion.php';
include_once '../modelos/Encargado_mantenimiento.php';
include_once '../repositorios/repositorio_encargado.php';

$r = $_POST["texto"];
$enca = Repositorio_encargado::obtener_encargado(Conexion::obtener_conexion(), $r);
echo '<script>alert("'.$r.'");</script>'; 
echo '<script>full();</script>'; 
?>
<script>
    function full(){
        
    }
    </script>
