<?php
$titulo1 = 'Restaurar';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include './repositorio_Connet.php';
$restorePoint = SGBD::limpiarCadena($_REQUEST['restorePoint']);

$sql = explode(";", file_get_contents($restorePoint));
$totalErrors = 0;
set_time_limit(60);
$con = mysqli_connect(SERVER, USER, PASS, BD);
mysqli_set_charset($con, "utf8");
$con->query("SET FOREIGN_KEY_CHECKS=0");

for ($i = 0; $i < (count($sql) - 1); $i++) {
    if ($con->query($sql[$i] . ";")) {
        
    } else {
        $totalErrors++;
    }
}
$con->query("SET FOREIGN_KEY_CHECKS=1");
$con->close();
if ($totalErrors <= 0) {
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