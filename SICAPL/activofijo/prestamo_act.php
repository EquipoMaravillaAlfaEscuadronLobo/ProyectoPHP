<!--<form id="prestamoAct" id="prestamoAct" method="post" action=""> -->
<input type="hidden" name="passsss" id="passsss">
<input type="hidden" name="codTipo" id="codTipo">
<input type="hidden" name="codAct" id="codAct">
<div class="container-fluid" >
    <div class="row">
    <div class="col-md-12"><!-- panel datos de usuario -->        
        <div class="panel panel-default" name="user">
            <div class="panel-heading p_libro">
                <div class="col-md-10">
                    <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:16px">Buscar Usuario</label><input type="text" id="codigouser" name="codigouser" autofocus onkeypress="buscarUser2(this)" list="listaUsuarios">
                    </div>              
                </div>
            </div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-3" >
                        <img src="" id="fotA" class="presentacionXZ">
                    </div>
                    <div class="col-md-5">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td width="30%"><b>Carnet:</b></td>
                                <td width="70%" colspan="3"> <div id="carnetA" onchange="activar()"></div></td>
                            </tr>
                            <tr>
                                <td ><b>Nombre:</b></td>
                                <td colspan="3"><div id="nombreUserA"></div></td>
                            </tr>
                            <tr>

                                <td><b>Sexo:</b></td>
                                <td><div id="sexoA"></div></td>
                            </tr>



                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="col m6">
                            <div class="input-field ">
                                <i class="fa fa-calendar-check-o prefix" style="color: green"></i> 
                                <input type="text" id="fecha" name="fecha_salida"  class="text-center validate" maxlength="25" minlength="3" required value="<?php echo date("d-m-Y"); ?>" readonly> 
                                <label for="idNombre" class="col-sm-4 control-labe" style="font-size:18px">Fecha de Salida</label>
                            </div>

                        </div>

                        <div class="col m6">
                            <div class="input-field">
                                <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                <label for="fecha_pub" class="active" style="font-size:16px">Fecha de Devolución</label>
                                <input type="text" id="fecha_dev" name="fecha_devolucion" class="form-control datepicker" value="<?php echo date("d-m-Y"); ?>">
                            </div>
                        </div>  
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>
    <div class="row">
<div class="col-md-12">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default" name="activo">
            <div class="panel-heading p_libro">
                <div class="col-md-10">

                    <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Activo</label><input type="text" id="codigo" list="listaActivos" autofocus onkeypress="buscarActivo(this)"></div>

                </div>
                <form id="prestamoAct" id="prestamoAct" method="post">

            </div>
            <div id="activo1" class="panel-collapse collapse in">
               
                    <div class="panel-body">
                        <div class="row">
                            <div class="input-field col m3">
                                <i class="fa fa-sitemap prefix"></i> 
                                <input type="text" id="catPrestAct" name="catPrestAct" class="text-center validate" required="" value="---" readonly="">
                                <label style="font-size:16px">Categoria <small></small> </label>
                            </div>
                            <div class="col m1"></div>
                            <div class="input-field col-md-offset-2 col m3">
                                <i class="fa fa-barcode prefix"></i> 
                                <input type="text" id="codPrestAct" name="codPrestAct" class="text-center validate codPrestAct" required="" value="---"  readonly="">
                                <label style="font-size:16px">Codigo <small></small> </label>
                            </div>
                            <div class="col m1"></div>
                            <div class="input-field col m2">
                                <i class="fa fa-barcode prefix" title="Indique el numero correlativo del activo para agragar varios a la tabla"></i> 
                                <input type="text" id="correlativo" name="correlativo" class="text-center validate" required="" 
                                       value="p. ej. 5-14, 25, 95"
                                       pattern="[0-9]"
                                       onclick = "if (this.value == 'p. ej. 5-14, 25, 95')
                                                   this.value = ''" 
                                       onblur="if (this.value == '')
                                                   this.value = 'p. ej. 5-14, 25, 95'"

                                       >
                                <label style="font-size:16px" >Seleccion Multiple  <small></small> </label>
                            </div>
                            <div class="input-field col-md-offset-2 col m1">
                                <button id="agrAct" class="btn btn-success modal-action " onclick="javascript:agregar()" disabled="" >
                                    <span class="fa fa-mail-forward" aria="hidden"></span>
                                    Agregar</button>
                            </div>
                        </div>

                        <table class="table table-striped table-bordered" id="tabla_activo_prestamo">
                            <caption>Activos A Prestar</caption>
                            <thead>
                            <th>Codigo</th>
                            <th>Categoria</th>
                            <th>Responsable</th>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
    </div>


<script crossorigin="a
        nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
</script>
<script>
    function  activar() {//para activar boton de agregar, se llama en getuser y get activo
        if (document.getElementById("carnetA").value != "" &&
                document.getElementById("codPrestAct").value != "---") {
            document.getElementById("agrAct").disabled = false;
        }


    }

    function agregar() {
        llenarTact(document.getElementById("codPrestAct").value, document.getElementById("correlativo").value);
    }


</script>
<datalist id="listaActivos">
    <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../modelos/Detalles.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_detalles.php';
    Conexion::abrir_conexion();
    $listado = Repositorio_activo::lista_activo(Conexion::obtener_conexion());


    foreach ($listado as $fila) {
        echo '<option value="' . $fila["codigo_activo"] . '">' . Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila["codigo_tipo"]) . '</option>';
    }
    ?>
</datalist>
<datalist id="listaUsuarios">
    <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado = Repositorio_libros::BuscarUsuarios(Conexion::obtener_conexion());


    foreach ($listado as $fila) {
        echo "<option value='$fila[0]'>$fila[2] $fila[3]</option>";
    }
    ?>
</datalist>
<datalist id="listaLibros22"></datalist>

<?php
if ($_REQUEST["passsss"] == "ok") {
    
}
?>