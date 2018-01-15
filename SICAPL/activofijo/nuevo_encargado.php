
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
                                <label for="idNombre">Nombre</label>
                                <input type="text" id="idNombre" pattern="[A-Za-z]{4-28}" name="nameNombre"  class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-home prefix" aria-hidden="true"></i>
                                <label for="idDireccion">Direccion</label>
                                <input type="text" id="idDirecciono" min="10" name="nameDireccion"  class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-mobile prefix" aria-hidden="true"></i>
                                <label for="idTelefono">Telefono</label>
                                <input type="text" id="idTelefono" name="nameTelefono" class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-at prefix" aria-hidden="true"></i>
                                <label for="idEmail">Correo</label>
                                <input type="email" id="idEmail" name="nameEmail"  class="text-center validate" value="Sin Correo"
                                       onclick = "if (this.value == 'Sin Correo')
                                                   this.value = ''" onblur="if (this.value == '')
                                                               this.value = 'Sin Correo'">
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

    //
    //Conexion::cerrar_conexion();
}
?>