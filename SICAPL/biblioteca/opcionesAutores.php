<?php
 	 include_once '../app/Conexion.php';
    include_once '../modelos/Autores.php';
    include_once '../repositorios/repositorio_autores.inc.php';
    Conexion::abrir_conexion();
    $resultado=Repositorio_autores::ListaAutores(Conexion::obtener_conexion());
        echo "<option value='0' disabled> Seleccione los Autores </option>";
    foreach ($resultado as $fila) {
        echo "<option value'".$fila[0]."'>";
        echo $fila[1]." ".$fila[2];
        echo "</option>";
        }
?>