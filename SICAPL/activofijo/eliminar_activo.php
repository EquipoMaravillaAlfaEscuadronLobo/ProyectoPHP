<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Detalles.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_detalles.php';
?>
<form  method="post"  autocomplete="off" id="eliminarAct" name="eliminarAct" id="eliminarAct">
    <input type="hidden" name="bandiminacion" id="bandiminacion"/>
    <input type="hidden" id="Secreto" value="" name="Secreto">
    <input type="hidden" id="codDA" value="" name="codDA">

    <!--este es el modal-->

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="row">
                    <div class="col m1"></div>

                    <div class="input-field col m5">
                        <i class="fa fa-barcode prefix "></i> 
                        <input type="text" id="codD" style="font-size: 22px" name="codD" value="" placeholder="" class="text-center " maxlength="25" minlength="3" required disabled="">
                        <label for="idCarnetEliminado" style="font-size: 20px">Codigo de activo</label>
                    </div>
                    <div class="input-field col m5">
                        <i class="fa fa-info-circle prefix "></i> 
                        <select   id="motivo" name="motivoDA">                            
                            <option value="0" >Otro</option>
                            <option value="0" >Dañado</option>
                            <option value="4" >Extaviado</option>
                        </select>
                        <label for="idCarnetEliminado" style="font-size: 20px">Motivo</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col m1"></div>
                    <div class="input-field col m10">
                        <div class="input-field">
                            <i class="fa fa-edit prefix" aria-hidden="true"></i>
                            <label for="idMotivoEliminacion" class="text-center" style="font-size: 20px">Especifique motivo...</label>
                            <textarea required="" minlength="10" id="idMotivoE" name="idMotivoE" class="materialize-textarea text-center" style="font-size: 20px"></textarea>
                        </div>
                    </div> 
                </div>


            </div>
        </div>


    </div>
    <!--este es el fin de modal-->
</form>


<?php
if (isset($_REQUEST["bandiminacion"])) {
    include_once '../app/Conexion.php';
    include_once '../modelos/PrestamoAct.php';
    include_once '../repositorios/repositorio_prestamoact.php';
    Conexion::abrir_conexion();
    $motivo = $_POST['motivoDA'];
    $observacion = $_POST['idMotivoE'];
    $cod=$_POST['codDA'];
    
    Repositorio_prestamoact::ActualizarActivo(Conexion::obtener_conexion(), $cod, $motivo, $observacion);
    echo '<script language="javascript">swal({
                    title: "Exito",
                    text: "Activo Dado de baja",
                    type: "success"},
                    function(){
                       location.href="inicio_activo.php";
                    }
                    );</script>';
}
?>
