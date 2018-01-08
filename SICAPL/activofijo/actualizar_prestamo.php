<form name="actualizar_prestamo_activo" id="actualizar_prestamo_activo" method="post">
    <input type="hidden" name="pas" id="pas">
    <input type="hidden" name="codigouserActP" id="codigouserActP">
    <input type="hidden" name="codigoPrestamoAct" id="codigoPrestamoAct">
    <input type="hidden" name="opcion" id="opcion">
    <input type="hidden" name="fechComp" id="fechComp">
    <div class="row ">
        <div class="col-md-7">
            <div class="panel panel-default" name="user">

                <div class="panel-heading p_libro">
                    <i class="fa fa-television" aria-hidden="true"></i><label for="" style="font-size:17px"> &nbsp;&nbsp;Activos </label>
                </div>                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-1 text-right">
                            <i class="fa fa-search">  </i>
                        </div>
                        <div class="col-md-5 text-left">
                            <span> <input name="buscarAc" id="buscarAc" type="text" placeholder="Buscar ">  </span>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered responsive-table display" id="listActivoAct">
                        <thead>
                        <th>Código</th>
                        <th>Tipo</th>
                        <th >
                            <div class="">

                                <select class="form-group" id="sel1" name="sell" onchange="cambiar(this.value)">
                                    <option value="2" selected="" disabled="">Accion</option>
                                    <option value="1">Devolver</option>
                                    <option value="3">Dañado</option>
                                    <option value="4">Extraviado</option>
                                </select>
                            </div>
                        </th>
                        <th >Observación </th>
                        </thead> 
                        <tbody>

                        </tbody>


                    </table>

                </div>
            </div>


        </div>





        <div class="col-md-5"><!-- panel datos de usuario -->        
            <div class="panel panel-default" name="user">
                <div class="panel-heading p_libro">
                    <i class="fa fa-user-o prefix" aria-hidden="true"></i><label for="" style="font-size:16px"> Usuario</label>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col m6">
                            <div class="input-field ">
                                <i class="fa fa-calendar-check-o prefix" style="color: green"></i> 
                                <input type="text" id="fecha_sal_act" name="fecha_sal_act"  class="text-center validate" maxlength="25" minlength="3" required placeholder="" readonly> 
                                <label for="idNombre" class="col-sm-4 control-labe" style="font-size:18px">Fecha de Salida</label>
                            </div>

                        </div>

                        <div class="col m6">
                            <div class="input-field">
                                <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                <label for="fecha_pub" class="active" style="font-size:14px">Fecha de Devolución</label>
                                <input onchange="validarFecha()" type="text" id="fecha_dev_act" name="fecha_devolucion_act" class="form-control datepicker fecha_dev"  placeholder="">
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-3" >
                            <img src="" id="fotA" class="presentacionXZ">
                        </div>
                        <div class="col-md-9">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td width="30%"><b>Carnet:</b></td>
                                    <td width="70%" colspan="3"> <div id="carnetAct" ></div></td>
                                </tr>
                                <tr>
                                    <td ><b>Nombre:</b></td>
                                    <td colspan="3"><div id="nombreUserAct"></div></td>
                                </tr>
                                <tr>
                                    <td><b>Sexo:</b></td>
                                    <td><div id="sexoAct"></div></td>
                                </tr>
                                 <tr>
                                    <td><b>Telefono:</b></td>
                                    <td><div id="telAct"></div></td>
                                </tr>
                                 <tr>
                                    <td><b>Correo:</b></td>
                                    <td><div id="corrAct"></div></td>
                                </tr>
                                 <tr>
                                    <td><b>Direccion:</b></td>
                                    <td><div id="dirAct"></div></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                     <div class="input-field col s12">
                            <textarea id="observacion_pres_act" name="observacion_pres_act" class="materialize-textarea"></textarea>
                            <label for="textarea1" style="font-size:15px">Observaciones</label>
                        </div>
                                    </td>
                                </tr>
                                    

                            </table>
                        </div>

                    </div>
                  


                </div>
            </div>
        </div>
    </div>
</form>
<script>
    // fuente https://es.stackoverflow.com/questions/14610/como-buscar-en-tabla-php-con-jquery
    // captura el evento keyup cuando escribes en el input
    $("#buscarAc").keyup(function () {
        _this = this;
        // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
        $.each($("#listActivoAct tbody tr"), function () {
            if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
                $(this).hide();
            else
                $(this).show();
        });
    });

    //para cambiar todos lo select
    function cambiar(valor) {

        $('select[name*=accion_select]').val(valor);
        document.getElementById("btnfinalizar").disabled = false;
    }
    
    function activar_btn_act(){
         document.getElementById("btn_actualizar_prestamo").disabled = false;
         document.getElementById("btnfinalizar").disabled = false;
    }
    //activa el boton y evita que la fecha quede vacia
    function validarFecha() {
        var feact = document.getElementById("fechComp").value;
        var feanew = document.getElementById("fecha_dev_act").value;
        if (feanew == "") {
            document.getElementById("fecha_dev_act").value = feact;
        }
        //alert(feanew);

        document.getElementById("btn_actualizar_prestamo").disabled = false;
    }
    
     
</script>
<?php
if (isset($_REQUEST["pas"])) {

    include_once '../app/Conexion.php';
    include_once '../modelos/PrestamoAct.php';
    include_once '../repositorios/repositorio_prestamoact.php';

    Conexion::abrir_conexion();
    // echo '<script language="javascript">alert("paso");</script>';
    $usuario = $_POST['codigouserActP'];
    $salida = $_POST['fecha_salida'];
    $devolucion = $_POST['fecha_devolucion_act'];
    $devolucion = date_format(date_create($devolucion), 'Y-m-d');
    $libros = $_POST['codsActsA']; //son los activos pero fue mas facil comentar esto a cambiar el nombre
    $observacions = $_POST['observaciones'];//observaciones de los actiovos
    $observacion = $_POST['observacion_pres_act'];//observaciones del prestamo o usuario
    $aciones = $_POST['accion_select']; //para acutlizar el estado del activo 
    $opcion = $_POST['opcion'];
    $codPrestamo = $_POST['codigoPrestamoAct'];
//echo $usuario;
    $Prestamo = new PrestamoActivo();
    $Prestamo->setUsuario($usuario);
    $Prestamo->setSalida($salida);
    $Prestamo->setDevolucion($devolucion);
    $longitud = count($libros);

    if ($opcion == 2) {
        if (Repositorio_prestamoact::Actualizar(Conexion::obtener_conexion(), $devolucion, $observacions, $codPrestamo)) {
            for ($i = 0; $i < $longitud; $i++) {
                if (Repositorio_prestamoact::ActualizarActivo(Conexion::obtener_conexion(), $libros[$i], $aciones[$i], $observacions[$i])) {
                    echo "<script type='text/javascript'>";
                    echo "swal({
                    title: 'Exito',
                    text: 'Prestamo Actualizado',
                    type: 'success'},
                    function(){
                       location.href='inicio_activo.php';
                    }
                    );";
                    echo "</script>";
                }
            }
        } else {
            echo "<script type='text/javascript'>";
            echo 'swal({
                    title: "Ooops",
                    text: "Prestamo no Actualizado",
                    type: "error"},
                    function(){
                       location.href="inicio_activo.php";
                    }
                    );';
            echo "</script>";
        }
    } else {
        if (Repositorio_prestamoact::Finalizar(Conexion::obtener_conexion(), $codPrestamo,$observacion)) {
            for ($i = 0; $i < $longitud; $i++) {
                if (Repositorio_prestamoact::ActualizarActivo(Conexion::obtener_conexion(), $libros[$i], $aciones[$i], $observacions[$i])) {
                    echo "<script type='text/javascript'>";
                    echo "swal({
                    title: 'Exito',
                    text: 'Prestamo Finalizado',
                    type: 'success'},
                    function(){
                       $('#tabla-paginada4').DataTable().ajax.reload();
                    }
                    );";
                    echo "</script>";
                }
            }
        } else {
            echo "<script type='text/javascript'>";
            echo 'swal({
                    title: "Ooops",
                    text: "Prestamo no Actualizado",
                    type: "error"},
                    function(){
                       location.href="inicio_activo.php";
                    }
                    );';
            echo "</script>";
        }
    }


//
//    if (Repositorio_prestamoact::GuardarPrestamoAct(Conexion::obtener_conexion(), $Prestamo)) {
//        //	echo "hasta aki";
//        $prestamo1 = Repositorio_prestamoact::obtenerUltimoPact(Conexion::obtener_conexion());
//        //echo $prestamo1;
//        for ($i = 0; $i < $longitud; $i++) {
//            if (!Repositorio_prestamoact::GuardarActivos(Conexion::obtener_conexion(), $prestamo1,  $libros[$i] )) {
//                echo "<script type='text/javascript'>";
//                echo 'swal({
//                    title: "Ooops",
//                    text: "Prestamo no Registrado",
//                    type: "error"},
//                    function(){
//                       location.href="inicio_activo.php";
//                       
//                     
//                        
//                    }
//
//                    );';
////echo "alert('datos no atualizados')";
////echo "location.href='inicio_b.php'";
//                echo "</script>";
//            }
//        }
//        echo "<script type='text/javascript'>";
//        echo "swal({
//                    title: 'Exito',
//                    text: 'Prestamo Registrado',
//                    type: 'success'},
//                    function(){
//                       location.href='inicio_activo.php';
//                       
//                     
//                        
//                    }
//
//                    );";
//        //echo "alert('datos actualizados')";
//        //echo "location.href='inicio_b.php'";
//        echo "</script>";
//    }
}
?>