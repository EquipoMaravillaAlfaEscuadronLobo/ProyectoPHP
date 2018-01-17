<form  method="post" action="" autocomplete="off" id="eliminar_formulario">
    <input type="hidden" name="banderaElimikjknacion" id="bandekjraEliminacion"/>
    

    <!--este es el modal-->
    <div id="restaurar_administrador" class="modal modal-fixed-footer nuevo">
        
    </div>
    <!--este es el fin de modal-->
</form>

<?php
if (isset($_REQUEST["banderaEliminacion"])) {

    $administrador = new Administrador();
    $administrador->setObservacion($_REQUEST['nameMotivoEliminacion']);
    $administrador->setEstado(0);
    $codigo_eliminar = $_REQUEST['nameOtroCarnet'];
    $verificacion = $_REQUEST['nameVerificacionE'];
    $codigo_administrador2 = $_REQUEST['nameSelectedAdministrador'];

    Repositorio_administrador::actualizar_activos_administradir(Conexion::obtener_conexion(), $codigo_eliminar, $codigo_administrador2);
    
    Repositorio_administrador::eliminar_administrador(Conexion::obtener_conexion(), $administrador, $codigo_eliminar, $verificacion);
}
?>