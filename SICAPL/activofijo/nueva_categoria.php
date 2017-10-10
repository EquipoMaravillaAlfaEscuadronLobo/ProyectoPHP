<div class="row">
    <div class="col-md-12">
        <form id="FORMULARIO" name="FormuluarioUsuario" method="post" action="" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="bandera" id="bandera">
            <div class="panel">				
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-sitemap prefix"></i> 
                                <label for="Titulo">Nombre</label>
                                <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" maxlength="25" maxlength="3" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-barcode prefix" aria-hidden="true"></i>
                                <label for="Titulo">Código</label>
                                <input type="text" id="idApellido" name="nameApellido"  class="text-center validate" maxlength="25" minlength="3" required="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-success" type="submit">
                <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                Guardar</button>
        </form>
    </div>
</div>
<script>
    $('#FORMULARIO').attr('autocomplete', 'off');
    document.getElementById('FORMULARIO').setAttribute('autocomplete', 'off');


</script>

<?php
if (isset($_REQUEST["bandera"])) {
    echo "paso";
        
    include_once '../app/Conexion.php';
    include_once '../modelos/categoria.inc.php';
    include_once '../repositorios/repositorio_categoria.php';

    echo '<script language="javascript">alert("paso");</script>'; 
    Conexion::abrir_conexion();

    $categoria = new Categoria();
    $categoria->setCodigo_tipo($_REQUEST["nameNombre"]);
    $categoria->setNombre($_REQUEST["nameApellido"]);

    Repositorio_categoria::insertar_categoria(Conexion::obtener_conexion(), $categoria);
    Conexion::cerrar_conexion();
}
?>