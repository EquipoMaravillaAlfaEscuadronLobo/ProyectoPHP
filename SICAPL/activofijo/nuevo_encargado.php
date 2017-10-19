
<div class="row">
    <div class="col-md-12">
        <form id="FORMUL" name="FORMUL" method="post"  autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="bander" id="bander">
            <div class="panel">

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-id-badge prefix" aria-hidden="true"></i>
                                <label for="Titulo">Nombre</label>
                                <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-home prefix" aria-hidden="true"></i>
                                <label for="Titulo">Direccion</label>
                                <input type="text" id="idDirecciono" name="nameDireccion"  class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-mobile prefix" aria-hidden="true"></i>
                                <label for="Titulo">Telefono</label>
                                <input type="text" id="idTelefono" name="nameTelefono"  class="text-center validate">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-at prefix" aria-hidden="true"></i>
                                <label for="Titulo">Correo</label>
                                <input type="text" id="idEmail" name="nameEmail"  class="text-center validate">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $('#FORMUL').attr('autocomplete', 'off');
    document.getElementById('FORMUL').setAttribute('autocomplete', 'off');


</script>

<?php
if (isset($_REQUEST["bander"])) {

    include_once '../app/Conexion.php';
    include_once '../modelos/Encargado_mantenimiento.php';
    include_once '../repositorios/repositorio_encargado.php';



    Conexion::abrir_conexion();

    $encargado = new Encargado_mantenimiento();
    $encargado->setNombre($_REQUEST["nameNombre"]);
    $encargado->setDirecccion($_REQUEST["nameDireccion"]);
    $encargado->setTelefono($_REQUEST["nameTelefono"]);
    $encargado->setCorreo($_REQUEST["nameEmail"]);

    Repositorio_encargado::insertar_encargado(Conexion::obtener_conexion(), $encargado);
    //echo '<script>swal("Excelente!", "Registro guardado con exito", "success");</script>';
    Conexion::cerrar_conexion();
}
?>