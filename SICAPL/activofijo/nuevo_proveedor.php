
<div class="row">
    <div class="col-md-12">
        <form id="FORMULARIO3" name="FORMULARIO3" class="FORMULARIO3" method="post" action="" autocomplete="off" enctype="multipart/form-data" onsubmit="recargarCombos2();
              ">
            <input type="hidden" name="bandera2" id="bandera2" value="no" >
          
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-id-badge prefix" aria-hidden="true"></i>
                                <label for="Titulo">Nombre</label>
                                <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" required="" pattern="[a-zA-Z]{2,48}" title="El nombre de contener solo letrar">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-home prefix" aria-hidden="true"></i>
                                <label for="Titulo">Direccion</label>
                                <input type="text" id="idDirecciono" name="nameDireccion"  class="text-center validate" minlength="10"  required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-mobile prefix" aria-hidden="true"></i>
                                <label for="idTelefono">Telefono</label>
                                <input type="text" id="idTelefono" name="nameTelefono"  class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-at prefix" aria-hidden="true"></i>
                                <label for="idEmail">Correo</label>
                                <input type="email" id="idEmail" name="nameEmail"  class="text-center validate" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-fax prefix" aria-hidden="true"></i>
                                <label for="Titulo">Fax</label>
                                <input type="text" id="idFax" name="nameFax"  class="text-center validate" value="Sin Fax">
                            </div>
                        </div>
                    </div>


        </form>
    </div>
</div>

<script>
    $('.FORMULARIO3').attr('autocomplete', 'off');
    document.getElementById('FORMULARIO3').setAttribute('autocomplete', 'off');


</script>

<?php
if (isset($_REQUEST["bandera2"])
) {

    include_once '../app/Conexion.php';
    include_once '../modelos/Proveedor.php';
    include_once '../repositorios/repositorio_proveedor.php';


    Conexion::abrir_conexion();

    $proveedor = new Proveedor();



    $proveedor->setNombre($_REQUEST["nameNombre"]);
    $proveedor->setDireccion($_REQUEST["nameDireccion"]);
    $proveedor->setTelefono($_REQUEST["nameTelefono"]);
    $proveedor->setCorreo($_REQUEST["nameEmail"]);
    $proveedor->setFax($_REQUEST["nameFax"]);


    Repositorio_proveedor::insertar_proveedor(Conexion::obtener_conexion(), $proveedor);
    //Conexion::cerrar_conexion();
}
?>