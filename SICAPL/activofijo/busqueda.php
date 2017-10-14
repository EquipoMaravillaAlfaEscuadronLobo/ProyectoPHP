<?php
include_once '../app/Conexion.php';
include_once '../modelos/Encargado_mantenimiento.php';
include_once '../repositorios/repositorio_encargado.php';
if ($_POST) {
    Conexion::abrir_conexion();
    $conexion = Conexion::obtener_conexion();
    $q = $_POST['palabra']; //se recibe la cadena que queremos buscar



    if (isset($conexion)) {
        try {
            $sql = "select * from encargado_mantenimiento where nombre like '%$q%'";
            $sentencia = $conexion->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll();

            if (count($resultado)) {
                foreach ($resultado as $fila) {
                    ?>
                    <a onclick="llenar(<?php echo $fila['codigo_emantenimiento']; ?>)" style="text-decoration:none;" > <!--Recuperamos el id para pasarlo a otra pagina -->
                        <div class="display_box" align="left">

                            <div style="margin-right:6px; font-size:14px;" class="desc"><?php echo $fila['nombre']; ?></div></div> <!--Recuperamos la direccion recuperada de la bd -->
                    </a>
                   
                    <?php
                }
            }
        } catch (PDOException $exc) {
            print('ERROR' . $exc->getMessage());
        }
    }
} else {
    
}
?>

