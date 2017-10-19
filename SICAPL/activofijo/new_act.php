
<?php
//if (isset($_REQUEST["bandera1"])) {


    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../modelos/Detalles.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_detalles.php';
    Conexion::abrir_conexion();
    $cant = $_REQUEST['cantidad'];


    $detalle = new Detalles();
    $detalle->setSeri($_REQUEST["nserie"]);
    $detalle->setColor($_REQUEST["color"]);
    $detalle->setMarca($_REQUEST["marca"]);
    $detalle->setSistema($_REQUEST["so"]);
    $detalle->setDimencione($_REQUEST["dimensiones"]);
    $detalle->setRam($_REQUEST["ram"]);
    $detalle->setModelo($_REQUEST["modelo"]);
    $detalle->setMemoria($_REQUEST["dd"]);
    $detalle->setProcesador($_REQUEST["pro"]);
    $detalle->setOtros($_REQUEST["otro"]);
    Repositorio_detalle::insertar_detalle(Conexion::obtener_conexion(), $detalle);

    $activo = new Activo();
    $activo->setCodigo_activo($_REQUEST["selectCat"]);
    $activo->setCodigo_administrador($_REQUEST["admin"]);
    //DANDO FORMATO A LA FECHA
    $originalDate = $_REQUEST['fecha_adq'];
    $fecha = $_REQUEST['fecha_adq'];
    list($dia, $mes, $year) = explode("/", $fecha);
    $fecha = $year . "-" . $mes . "-" . $dia;
//fin fecha
    $R = Repositorio_detalle::obtener_ultimo_detale(Conexion::obtener_conexion());

    $activo->setFecha_adquicision($fecha);
    $activo->setCodigo_tipo($_REQUEST["selectCat"]);
    $activo->setPrecio($_REQUEST["precioUnitario"]);
    $activo->setCodigo_proveedor($_REQUEST['selectPro']);

    //para la foto
    $ruta = '../fotoActivos/';
    $foto = $ruta . basename($_FILES["foto"]["name"]);
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
        $activo->setFoto($foto);
        
    } else {
        $activo->setFoto("");
        
    }

    //fin para foto
    //$activo->setFoto($_REQUEST["fotoActivo"]);
    $activo->setEstado('1');
    $activo->setCodigo_detalle($R);
    $correlativo = Repositorio_activo::obtener_nactivo(Conexion::obtener_conexion(), $_REQUEST["selectCat"]);



    for ($i = 1; $i <= $cant; $i++) {
        Repositorio_detalle::insertar_detalle(Conexion::obtener_conexion(), $detalle);
        $R = Repositorio_detalle::obtener_ultimo_detale(Conexion::obtener_conexion());
        $activo->setCodigo_detalle($R);
        $correlativo++;
        if (($correlativo / 10) < 1) {
            $cod = $_REQUEST["selectCat"] . "-000" . $correlativo;
        } else {
            if (($correlativo / 10) < 10) {
                $cod = $_REQUEST["selectCat"] . "-00" . $correlativo;
            } else {
                if (($correlativo / 10) < 100) {
                    $cod = $_REQUEST["selectCat"] . "-0" . $correlativo;
                } else {

                    $cod = $_REQUEST["selectCat"] . "-" . $correlativo;
                }
            }
        }

        //$cod=$_REQUEST["selectCat"]."-".$correlativo; 
        $activo->setCodigo_activo($cod);
       echo Repositorio_activo::insertar_activo(Conexion::obtener_conexion(), $activo);
    }
    //
    Conexion::cerrar_conexion();
//}
?>