<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../modelos/Usuario.php';
include_once '../repositorios/repositorio_usuario.inc.php';
include_once '../app/Conexion.php';
//echo $_SESSION['nivel'];
?>
</nav>

<button class="btn btn-success" onclick="ya()">
    <span class="glyphicon glyphicon-floppy-disk" aria="hidden">
    </span>                            
    Guardar</button>

<?php
Conexion::obtener_conexion();
$carnet = Repositorio_usuario::ultimo_usuario_insertado(Conexion::obtener_conexion());
echo $carnet->getCodigo_usuario();
?>

<script>
    swal({
        title: "Usuario Registro con Exito",
        text: "Desea imprimir el carnet?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Sí, Imprimir",
        cancelButtonText: "No, Gracias",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function (isConfirm) {
        if (isConfirm) {
            var url = "../usuario/reportes/imprimir_carnet.php?carnet=" + 'DF17-11';

            var a = document.createElement("a");
            a.target = "_blank";
            a.href = url;
            a.click();
        } else {
            location.href = "pruebas.php";
        }
    });
</script>

<?php
include_once '../plantillas/pie_de_pagina.php';
?>


