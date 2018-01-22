<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_categoria.php';
include_once '../repositorios/repositorio_administrador.inc.php';
Conexion::abrir_conexion();

$listado = Repositorio_activo::obtener_activo(Conexion::obtener_conexion(), $_POST['libro']);
//$numero=$_POST['numero'];
//echo '<script language="javascript">alert("'.$listado.'");</script>'; 
foreach ($listado as $fila) {
    ?>
    <script type="text/javascript">
        stado="<?php echo $fila['estado']; ?>";
       if(stado==1){
        document.getElementById('catPrestAct').value = "<?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?>";
        document.getElementById('codPrestAct').value = "<?php echo $fila['codigo_activo']; ?>";
        document.getElementById('codTipo').value = "<?php echo $fila['codigo_tipo']; ?>";
        activar();  
        document.getElementById('codigoActivoA').innerHTML = "<?php echo $fila['codigo_activo']; ?>";
        document.getElementById('tipoActivoA').innerHTML = "<?php echo Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila['codigo_tipo']); ?>";
    
        document.getElementById('encargadoA').innerHTML = "<?php echo Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getNombre() . " " . Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $fila['codigo_administrador'])->getApellido();?>";
    }else{
        if(stado==2){
        swal("Importane!", "<?php echo $fila['codigo_activo']; ?>"+" Esta prestado", "warning");
    }else{
        swal("Importane!", "<?php echo $fila['codigo_activo']; ?>"+" No esta disponible", "warning");
        
    }
    }
    </script>


    <?php
}
?>