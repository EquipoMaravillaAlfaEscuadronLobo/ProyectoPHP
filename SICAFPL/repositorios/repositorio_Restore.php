<?php
$titulo1 = 'Restaurar';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include './repositorio_Connet.php';


//estos metodos se ejecutaran cuando el administrador halla confirmado su contraseña, luego de darle click al boton
//restaurar que se encuentra en el archivo backup_restore que se encuentra en la carpeta seguridad

//esto es para evitar inyecciones sql
$restorePoint = SGBD::limpiarCadena($_REQUEST['restorePoint']);

//recuperamos el punto de restauracion
$sql = explode(";", file_get_contents($restorePoint));

//establecemos banderas
$totalErrors = 0;
//limite de espera de la sentencia sql ejercutada
set_time_limit(60);

//establecemos que trabajaremos con mySql
//y enviamos los valores de las variables globales que recuperamos de el repositorio_Connet.php
$con = mysqli_connect(SERVER, USER, PASS, BD);

//establecemos la codificacion latina
mysqli_set_charset($con, "utf8");

//ejecutamos la sentencia
$con->query("SET FOREIGN_KEY_CHECKS=0");


//recorremos los valores de el punto de recuperacion del sistema
for ($i = 0; $i < (count($sql) - 1); $i++) {
    if ($con->query($sql[$i] . ";")) {
        
    } else {
        $totalErrors++;
    }
}
$con->query("SET FOREIGN_KEY_CHECKS=1");
$con->close();
if ($totalErrors <= 0) {
    //si todo se realiza con exito mandamos los mensajes de confirmacion
    echo '<script>swal({
                    title: "Exito",
                    text: "Se restauro el sistema a un estado anterio, vuelva a iniciar su sesión para continuar!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },function () {location.href="../sesiones/cerrar.php";});</script>';
} else {
    echo '<script>swal({
                    title: "Exito",
                    text: "Se restauro el sistema a un estado anterio, vuelva a iniciar su sesión para continuar!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },function () {location.href="../sesiones/cerrar.php";});</script>';
}
include_once '../plantillas/pie_de_pagina.php';


?>