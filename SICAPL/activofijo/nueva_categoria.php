<div class="row">
    <div class="col-md-12">
        <form id="FORMULARIO2" name="FORMULARIO2" class="FORMULARIO2" method="post"  autocomplete="off" enctype="multipart/form-data" >
            <input type="hidden" name="pbanderaCAtegoria" id="banderaCAtegoria" value="no">
            <div class="panel">				
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-sitemap prefix"></i> 
                                <label for="Titulo">Nombre</label>
                                <input type="text" id="NombreCat" name="nameNombre"  class="text-center validate" maxlength="25" maxlength="3" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-field">
                                <i class="fa fa-barcode prefix" aria-hidden="true"></i>
                                <label for="Titulo">Código</label>
                                <input type="text" id="codigoCat" name="nameApellido"  class="text-center validate" maxlength="25" minlength="3" required="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            
        </form>
    </div>
</div>
<script>
    $('#FORMULARIO2').attr('autocomplete', 'off');
    document.getElementById('FORMULARIO2').setAttribute('autocomplete', 'off');


</script>

<?php
if (
     $_REQUEST["nameApellido"] != ""
    && $_REQUEST["nameNombre"] != ""

    ) {
     
          
    include_once '../app/Conexion.php';
    include_once '../modelos/Categoria.php';
    include_once '../repositorios/repositorio_categoria.php';

    
    Conexion::abrir_conexion(); 

    $categoria = new Categoria();
    $categoria->setCodigo_tipo($_REQUEST["nameApellido"]);
    $categoria->setNombre($_REQUEST["nameNombre"]);

    Repositorio_categoria::insertar_categoria(Conexion::obtener_conexion(), $categoria); 
    Conexion::cerrar_conexion();
        
}
?>
