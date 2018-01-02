

<style type="text/css">

    /*#caja_busqueda 
   {
   width:400px;
   height:25px;
   border:solid 2px #979DAE;
   font-size:16px;
   }
   #display estilos para la caja principal de busqueda*/
    /*estilos para la caja principal en donde se puestran los resultados de la busqueda en forma de lista*/
    #display 
    {

        display:none;
        overflow:hidden;
        z-index:10;
        border: solid 1px #666;
    }
    .display_box /*estilos para cada caja unitaria de cada usuario que se muestra*/
    {

        text-decoration:none;
        color:#3b5999; 
    }

    .display_box:hover /*estilos para cada caja unitaria de cada usuario que se muestra. cuando el mause se pocisiona sobre el area*/
    {
        background: #415AB5;
        color: #FFF;
    }
    .desc
    {
        color:#666;
        font-size:16;
    }
    .desc:hover
    {
        color:#FFF;
    }

    /* Easy Tooltip */
</style>

<form name="mant" id="mant" onsubmit="return validarTablas()" method="post" action="">
    <input type="hidden" id="pass" name="pass"/>
    <!--  panel de activo    -->
    <div class="col-md-6">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" name="activo">
                <div class="panel-heading p_libro"><div class="row">
                        <div class="col-md-10">

                            <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Activo</label><input type="text"  id="codigo" list="listaActivosMantenimineto" autofocus  onkeypress="buscarActivo_mantenimiento(this)"></div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </div>
                <div id="activo1" class="panel-collapse collapse in">

                    <div class="panel-body">
                        <div class="row">
                            <div class="input-field col m2">
                                <i class="fa fa-sitemap prefix"></i> 
                                <input type="text" id="catMantAct" name="catMantAct" class="text-center validate" required="" value="---" readonly="">
                                <label style="font-size:16px">Categoria <small></small> </label>
                            </div>

                            <div class="input-field col-md-offset-2 col m4">
                                <i class="fa fa-barcode prefix"></i> 
                                <input type="text" id="codMantAct" name="codMantAct" class="text-center validate codPrestAct" required="" value="---"  readonly="">
                                <label style="font-size:16px">Codigo <small></small> </label>
                            </div>

                            <div class="input-field col m3">
                                <i class="fa fa-barcode prefix" title="Indique el numero correlativo del activo para agragar varios a la tabla &#13;p. ej. 5-14, 25"></i> 
                                <input type="text" id="correlativoMant" name="correlativoMant" class="text-center validate" 
                                       value="---"
                                       pattern="[0-9]"
                                       onclick = "if (this.value == '---')
                                                   this.value = ''" 
                                       onblur="if (this.value == '')
                                                   this.value = '---'"
                                       title="Indique el numero correlativo del activo para agregar varios a la tabla  &#13;p. ej. 5-14, 25"
                                       >
                                <label style="font-size:12px" title="Indique el numero correlativo del activo para agragar varios a la tabla&#13;p. ej. 5-14, 25">Seleccion Multiple  <small></small> </label>
                            </div>

                            <div class="input-field col-md-offset-2 col m1"   >
                                <button id="agrActMant" disabled="" class="btn-sm btn-success modal-action " type="button" onclick="javascript:agregarMant()"  >
                                    <span class="fa fa-mail-forward" aria="hidden" ></span>
                                    Agregar</button>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered" id="tabla_activo_mantenimiento">
                            <caption>Activos </caption>
                            <thead>
                            <th>Codigo</th>
                            <th>Categoria</th>
                            <th>Estado</th>
                            <th>&nbsp;<input type="hidden"  required="" id="bandera_tabla_activo_prestamo" name="bandera_tabla_activo_prestamo" /></th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel-group">
            <div class="panel panel-default" name="activo">
                <div class="panel-heading p_libro"><div class="row">
                        <div class="col-md-10">

                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <form id="prestamoAct" id="prestamoAct" method="post">

                </div>
                <table class="table table-striped table-bordered" >
                    <tr>
                    <table class="table table-striped table-bordered" id="datos_mantenimiento">
                        <caption>Datos de Mantenimiento</caption>
                        <tbody>
                            <tr >
                                <td style="height:10px;"><div class="col m12">
                                        <div class="input-field">
                                            <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                            <label for="fecha_pub" class="active" style="font-size:16px">Fecha de Mantenimiento</label>
                                            <input type="text" value="<?php echo date("d-m-Y"); ?>" id="fecha_mant" required="" name="fecha_mant" class="form-control datepicker2" >
                                        </div>
                                    </div></td>
                                <td style="height:10px;">
                                    <div class="input-field col m12">
                                        <i class="fa fa-usd prefix"></i> 
                                        <input type="text" id="costoTotal" name="CostoTotal" class="text-center validate" required="">
                                        <label for="precioUnitario" style="font-size:16px">Precio Total<small></small> </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" style="height:15px;">
                                    <div class="input-field col s12">
                                        <textarea id="descrMant" minlength="8" name="descrMant" required="" class="materialize-textarea"  ></textarea>
                                        <label for="textarea1" style="font-size:15px"><i class="fa fa-pencil-square-o"></i>&nbspDescripción</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </tr>
                    <tr>
                    <table class="table table-striped table-bordered" id="datos_encargado">

                        <tbody>
                            <tr style="height:15px;">
                                <td style="height:13px;">
                                    <div class="col-md-10">

                                        <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Encargado</label><input type="text"  id="codigo_encargado" list="listaeman" autofocus  onkeypress="buscarEncargado(this)"></div>

                                    </div>
                                    <div class="col-md-2">
                                        <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(3)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                        <table class="table table-striped table-bordered" id="datos_encargado2">
                            <caption>Encargados</caption>
                            <thead>   
                            <th style="display:none;"  ></th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody >

                            </tbody>
                        </table>
                        </tr>
                        </tbody>
                    </table>
                    </tr>

                </table>
            </div>
        </div>
    </div>


</form>

<datalist id="listaeman">
    <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Encargado_mantenimiento.php';
    include_once '../repositorios/repositorio_encargado.php';

    Conexion::abrir_conexion();
    $listado = Repositorio_encargado::lista_encargado(Conexion::obtener_conexion());


    foreach ($listado as $fila) {
        echo "<option value='$fila[0]'>$fila[1]</option>";
    }
    ?>
</datalist>

<datalist id="listaActivosMantenimineto">
    <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_categoria.phppositorio_activo.php';
    Conexion::abrir_conexion();
    $listado = Repositorio_activo::lista_activo_mantenimiento(Conexion::obtener_conexion());


    foreach ($listado as $fila) {
        echo "<option value='$fila[0]'> " . Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila["codigo_tipo"]) . "</option>";
    }
    ?>
</datalist>    


<script>
    function  activarMant() {//para activar boton de agregar, se llama en getuser y get activo

        if (document.getElementById("codMantAct").value != "---") {
            document.getElementById("agrActMant").disabled = false;
        }
    }
//para eliminar de las tablas
// fuente https://es.stackoverflow.com/questions/9141/eliminar-fila-de-tabla-html-con-jquery-o-js
    $(document).on('click', '.borrar', function (event) {
        event.preventDefault();
        $(this).closest('tr').remove();
    });

    $(document).on('click', '.borrar_activo', function (event) {
        event.preventDefault();
        $(this).closest('tr').remove();
    });


    function agregarMant() {

        llenarTactMant(document.getElementById("codMantAct").value, document.getElementById("correlativoMant").value);

        return false;
    }

    function validarTablas() {
        var ok = true;
        if ($('#tabla_activo_mantenimiento >tbody >tr').length == 0) {
            ok = false;

            swal("Ooops", "Tabla de activos vacia", "warning");
        } else {
            if ($('#datos_encargado2 >tbody >tr').length == 0) {
                ok = false;
                swal("Ooops", "Tabla de encargados vacia", "warning");

            }

        }
        // codigo para verificar cuantos activos fueron a manteniemieto y siguen daniados
        var sel = document.mant.elements["accion_select_mantenimiento[]"];//se obtiene los elementos
        var cont = 0;
        for (var i = 0; i < sel.length; i++) {
            if (sel[i].value == "3") {//verifica si hay activos con codigo de estado 3 que es el de danado
                cont++;
                ok = false;
            }
        }
        if (cont > 0) {//si hay activos con codido 3 
            swal({
                title: "Desea continuar?",
                text: "Hay activo que fueron a manteniminto y siguen dañados!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Si, continuar!",
                closeOnConfirm: false
            },
                    function () {
                        ok = true;
                    });
        }


        return ok;
    }
</script>


</script>

<?php
if (isset($_REQUEST["pass"])) {

    include_once '../app/Conexion.php';
    include_once '../modelos/Mantenimiento.php';
    include_once '../repositorios/repositorio_mantenimiento.php';
    include_once '../repositorios/repositorio_prestamoact.php';

    Conexion::abrir_conexion();

    $devolucionMant = $_POST['fecha_mant'];
    $devolucionMant = date_format(date_create($devolucionMant), 'Y-m-d');
    $activos = $_POST['codsActsMant'];
    $encargados = $_POST['codsEncMant'];
    $acionesMant = $_POST['accion_select_mantenimiento'];
//echo $usuario;
    $mant = new Mantenimiento();
    $mant->setCosto($_POST['CostoTotal']);
    $mant->setDescripcion($_POST['descrMant']);
    $mant->setFecha($devolucionMant);

    $longitud = count($activos);
    $longitud2 = count($encargados);
//Recorro todos los elementos


    if (Repositorio_mantenimiento::GuardarMantAct(Conexion::obtener_conexion(), $mant)) {
        //	echo "hasta aki";
        $prestamo1 = Repositorio_mantenimiento::obtenerUltimoMant(Conexion::obtener_conexion());
        //echo $prestamo1;
        for ($i = 0; $i < $longitud; $i++) {
            Repositorio_prestamoact::ActualizarActivo(Conexion::obtener_conexion(), $activos[$i], $acionesMant[$i], "");
            if (!Repositorio_mantenimiento::GuardarActivos(Conexion::obtener_conexion(), $activos[$i], $prestamo1)) {
                echo "<script type='text/javascript'>";
                echo 'swal({
                    title: "Ooops",
                    text: "Mantenimiento no Registrado",
                    type: "error"},
                    function(){
                       location.href="inicio_activo.php";
                       
                     
                        
                    }

                    );';
//echo "alert('datos no atualizados')";
//echo "location.href='inicio_b.php'";
                echo "</script>";
            }
        }
        for ($i = 0; $i < $longitud2; $i++) {
            if (!Repositorio_mantenimiento::GuardarEncargados(Conexion::obtener_conexion(), $encargados[$i], $prestamo1)) {
                echo "<script type='text/javascript'>";
                echo 'swal({
                    title: "Ooops",
                    text: "Mantenimiento no Registrado",
                    type: "error"},
                    function(){
                       location.href="inicio_activo.php";
                       
                     
                        
                    }

                    );';
//echo "alert('datos no atualizados')";
//echo "location.href='inicio_b.php'";
                echo "</script>";
            }
        }
        echo "<script type='text/javascript'>";
        echo "swal({
                    title: 'Exito',
                    text: 'Mantenimiento Registrado',
                    type: 'success'},
                    function(){
                       location.href='inicio_activo.php';
                    }
                    );";
        echo "</script>";
    }
}
?>

