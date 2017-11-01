<?php
include_once '../app/Conexion.php';
include_once '../modelos/Activo.php';
include_once '../modelos/Detalles.php';
include_once '../repositorios/repositorio_activo.php';
include_once '../repositorios/repositorio_detalles.php';
?>
<form  method="post"  autocomplete="off" id="eliminarAct" name="eliminarAct">
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
                                <i class="fa fa-vcard prefix prefix"></i> 
                                <input type="text" id="codD" style="font-size: 22px" name="codD"  class="text-center " maxlength="25" minlength="3" required value="Abarca" disabled="">
                                <label for="idCarnetEliminado" style="font-size: 20px">Codigo de activo</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m1"></div>
                            <div class="input-field col m10">
                                <div class="input-field">
                                    <i class="fa fa-edit prefix" aria-hidden="true"></i>
                                    <label for="idMotivoEliminacion" class="text-center" style="font-size: 20px">Escriba el motivo por el que se le da de baja</label>
                                    <textarea  id="idMotivoE" name="idMotivoE" class="materialize-textarea text-center" style="font-size: 20px"></textarea>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col m4"></div>
                            <div class="input-field col m5">
                                <i class="fa fa-expeditedssl prefix"></i> 
                                <input type="password" id="idVal" name="idVal" class="text-center " autocomplete="off">
                                <label for="idValidacionXE" style="font-size: 20px">Para continuar por favor ingrese su contraseña</label>
                            </div>

                        </div>

                    </div>
                </div>
            
        
    </div>
    <!--este es el fin de modal-->
</form>
<script type="text/javascript">
    function  valiD(){

        var p1 =document.getElementById('idVal').value;
        var p= document.getElementById('Secreto').value;
         var m= document.getElementById('idMotivoE').value;
         
        if(p1==p){
            if(m!=" "){
                // document.eliminarAct.submit();
            }else{swal ( "Oops" ,  "ingrese el motivo" ,  "error" );}
           
        }else{swal ( "Oops" ,  "Contraseña Incorrecta" ,  "error" );}
       
    }
</script>

<?php
if (isset($_REQUEST["bandiminacion"])) {
//    include_once '../app/Conexion.php';
//    include_once '../modelos/Usuario.php';
//    include_once '../repositorios/repositorio_usuario.inc.php';
//    
//    echo "tenemos bandera<br>";
//    
    
}
?>
