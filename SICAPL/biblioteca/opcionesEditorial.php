<?php
 	 include_once '../app/Conexion.php';
    include_once '../modelos/Editorial.php';
    include_once '../repositorios/repositorio_editorial.php';
    Conexion::abrir_conexion();
    $resultado=Repositorio_Editorial::ListaEditorial(Conexion::obtener_conexion());
        echo "<option value='0'> Seleccione la Editorial </option>";
    foreach ($resultado as $fila) {
        echo "<option value'".$fila[0]."'>";
        echo $fila[1];
        echo "</option>";
        }
?>