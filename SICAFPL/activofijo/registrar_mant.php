

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


<form name="mant" id="mant" class="mant" method="post" action="" onsubmit="return guardar_mante()">
    <input type="hidden" id="pass" name="pass"/>
    <input type="hidden" id="eviar_mantenimiento" name="eviar_mantenimiento" value="no"/>
    <input type="hidden" id="redireccionar" name="redireccionar" value="si"/>
    <input type="hidden" id="nserieEAD" name="nserieEAD">
    <input type="hidden" id="colorEAD" name="colorEAD">
    <input type="hidden" id="marcaEAD" name="marcaEAD">
    <input type="hidden" id="soEAD" name="soEAD">
    <input type="hidden" id="dimensionesEAD" name="dimensionesEAD">
    <input type="hidden" id="ramEAD" name="ramEAD">
    <input type="hidden" id="modeloEAD" name="modeloEAD">
    <input type="hidden" id="ddEAD" name="ddEAD">
    <input type="hidden" id="proEAD" name="proEAD">
    <input type="hidden" id="otroEAD" name="otroEAD">
    <input type="hidden" id="actualizarDetalles" name="actualizarDetalles" >
    <!--  panel de activo    -->
    <div class="col-md-6">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" name="activo">
                <div class="panel-heading p_libro"><div class="row">
                        <div class="col-md-10">

                            <div class="input-field">
                                <i class="fa fa-search prefix" aria-hidden="true"></i>
                                <label for="" style="font-size:17px">Buscar Activo</label>
                                <input type="text"  id="codigo_bus_mant" list="listaActivosMantenimineto" autofocus  onkeypress="buscarActivo_mantenimiento(this)">
                            </div>

                        </div>
                        <div class="col-md-2"></div>
                    </div>

                </div>
                <div id="activo1" class="panel-collapse collapse in">

                    <div class="panel-body"  >
                        <div class="row">
                            <div class="input-field col m6">
                                <i class="fa fa-sitemap prefix"></i> 
                                <select name="selectCatMant" id="selectCatMant" class="selectCat" >
                                    <?php
                                    include'select_categoria.php';
                                    ?>
                                </select>
                                <label style="font-size:16px">Tipo <small></small> </label>
                            </div>

                            <div class="input-field col m3">
                                <i class="fa fa-barcode prefix" title="Indique el numero correlativo del activo para agragar varios a la tabla &#13;p. ej. 5-14, 25"></i> 
                                <input type="text" id="correlativoMant" name="correlativoMant" class="text-center validate" 
                                       value="---"

                                       onclick = "if (this.value == '---')
                                                   this.value = ''" 
                                       onblur="if (this.value == '')
                                                   this.value = '---'"
                                       title="Indique el numero correlativo del activo para agregar varios a la tabla  &#13;p. ej. 5-14, 25"
                                       >
                                <label style="font-size:12px" title="Indique el numero correlativo del activo para agragar varios a la tabla&#13;p. ej. 5-14, 25">Selección Multiple  <small></small> </label>
                            </div>

                            <div class="input-field col-md-offset-2 col m3 text-center"   >
                                <button id="agrActMant"  class="btn-sm btn-success modal-action " type="button" onclick="javascript:agregarMant()"  >
                                    <span class="fa fa-mail-forward" aria="hidden" ></span>
                                    Agregar</button>
                            </div>
                        </div>

                        <table class="table table-hover" id="tabla_activo_mantenimiento">
                            <caption>Activos </caption>
                            <thead>
                            <th>C&oacutedigo</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th><input type="button" onclick='act_caract()' class="btn-success btn-sm "  value="Actualizar Detalles"/><input  type="hidden"  required="" id="bandera_tabla_activo_prestamo" name="bandera_tabla_activo_prestamo" /></th>
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

                <table class="table table-striped table-bordered" >
                    <tr>
                    <table class="table table-striped table-bordered" id="datos_mantenimiento">
                        <caption>Datos de Mantenimiento</caption>
                        <tbody>
                            <tr >
                                <td class="text-left">
                                    <div class="col m12 text-left">
                                        <div class="input-field">
                                            <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                            <label for="fecha_pub" class="active" style="font-size:16px">Fecha de Mantenimiento</label>
                                            <input type="text" value="<?php echo date("d-m-Y"); ?>" id="fecha_mant" required="" name="fecha_mant" class="form-control datepicker2" >
                                        </div>
                                    </div>
                                </td>
                                <td style="height:10px;">
                                    <div class="input-field col m12">
                                        <i class="fa fa-usd prefix"></i> 
                                        <input type="number"  min="0" step="any" id="costoTotal" name="CostoTotal" class="text-center validate" required="">
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

                                        <div class="input-field">
                                            <i class="fa fa-search prefix" aria-hidden="true"></i>
                                            <label for="" style="font-size:17px">Buscar Encargado</label>
                                            <input type="text"  id="codigo_encargado" list="listaeman" autofocus  onkeypress="agrEnca()">
                                        </div>

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
                            <th>Teléfono</th>
                            <th>Direcci&oacuten</th>
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

        echo "<option value='$fila[1]' label='$fila[0]'>";
    }
    ?>
</datalist>

<datalist id="listaActivosMantenimineto">
    <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_categoria.php';

    Conexion::abrir_conexion();
    $listadoA = Repositorio_activo::lista_activo_mantenimiento(Conexion::obtener_conexion());


    foreach ($listadoA as $fila) {
        echo "<option value='$fila[0]'> " . Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila["codigo_tipo"]) . "</option>";
    }
    ?>


    <?php
    if (isset($_REQUEST["pass"])) {

        include_once '../app/Conexion.php';
        include_once '../modelos/Mantenimiento.php';
        include_once '../modelos/Detalles.php';
        include_once '../modelos/Activo.php';
        include_once '../repositorios/repositorio_mantenimiento.php';
        include_once '../repositorios/repositorio_prestamoact.php';
        include_once '../repositorios/repositorio_activo.php';
        include_once '../repositorios/repositorio_detalles.php';

        Conexion::abrir_conexion();
        $actualizarDetalles = $_POST['actualizarDetalles'];

        $red = $_POST['redireccionar'];
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
                if ($actualizarDetalles == "si") {
                    $detalle = new Detalles();
                    $detalle->setCodigo_detalle($_REQUEST["codDetalleEAD"]);
                    $detalle->setSeri($_REQUEST["nserieEAD"]);
                    $detalle->setColor($_REQUEST["colorEAD"]);
                    $detalle->setMarca($_REQUEST["marcaEAD"]);
                    $detalle->setSistema($_REQUEST["soEAD"]);
                    $detalle->setDimencione($_REQUEST["dimensionesEAD"]);
                    $detalle->setRam($_REQUEST["ramEAD"]);
                    $detalle->setModelo($_REQUEST["modeloEAD"]);
                    $detalle->setMemoria($_REQUEST["ddEAD"]);
                    $detalle->setProcesador($_REQUEST["proEAD"]);
                    $detalle->setOtros($_REQUEST["otroEAD"]);



                    $listado = Repositorio_activo::obtener_activo(Conexion::obtener_conexion(), $activos[$i]);

                    foreach ($listado as $fila) {

                        Repositorio_detalle::actualizar_detalle(Conexion::obtener_conexion(), $detalle, $fila['codigo_detalle']);
                    }
                }
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
        }
    }
    ?>

