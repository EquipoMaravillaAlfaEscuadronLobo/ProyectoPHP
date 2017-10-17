<?php
 	 include_once '../app/Conexion.php';
    include_once '../modelos/Editorial.php';
    include_once '../repositorios/repositorio_editorial.php';
    Conexion::abrir_conexion();
    $resultado=Repositorio_Editorial::ListaEditorial(Conexion::obtener_conexion());
        echo "<option value='0'> Seleccione la Editorial </option>";
    foreach ($resultado as $fila) {
        if (isset($_POST['seleccionado'])) {
        echo "<option value='".$fila['codigo_editorial']."' selected>";
        }
        echo "<option value='".$fila['codigo_editorial']."'>";
        echo $fila['nombre'];
        echo "</option>";
        }
?>