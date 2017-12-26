
<script language="javascript">
$(document).ready(function() {

  $('form').keypress(function(e){   
    if(e == 13){
      return false;
    }
  });
 
  $('input').keypress(function(e){
    if(e.which == 13){
      return false;
    }
  });

});
</script>

<form id="prestamoAct" name="prestamoAct" method="post" action=""> 

    <input type="hidden" name="passsss" id="passsss">
    <input type="hidden" name="codTipo" id="codTipo">
    <input type="hidden" name="codAct" id="codAct">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12"><!-- panel datos de usuario -->        
                <div class="panel panel-default" name="user">
                    <div class="panel-heading p_libro">
                        <div class="col-md-10">
                            <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:16px">Buscar Usuario</label><input type="text" id="codigouserA" required="" name="codigouserA" autofocus onkeypress="buscarUser2(this)" list="listaUsuarios">
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

                                <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Activo</label><input type="text" required="" id="codigo" list="listaActivos" autofocus  onkeypress="buscarActivo(this)"></div>

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
                                    <div class="input-field col-md-offset-2 col m1"   >
                                        <button id="agrAct" class="btn btn-success modal-action " type="button" onclick="javascript:agregar()" disabled="" >
                                            <span class="fa fa-mail-forward" aria="hidden" ></span>
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

</form>
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
       
        return false;
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
    $listado = Repositorio_activo::lista_activo2(Conexion::obtener_conexion());


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
if (isset($_REQUEST["passsss"])) {

    include_once '../app/Conexion.php';
    include_once '../modelos/PrestamoAct.php';
    include_once '../repositorios/repositorio_prestamoact.php';

    Conexion::abrir_conexion();
   // echo '<script language="javascript">alert("paso");</script>';
    $usuario = $_POST['codigouserA'];
    $salida = $_POST['fecha_salida'];
    $devolucion = $_POST['fecha_devolucion'];
    $devolucion = date_format(date_create($devolucion), 'Y-m-d');
    $libros = $_POST['codsActs'];
//echo $usuario;
    $Prestamo = new PrestamoActivo();
    $Prestamo->setUsuario($usuario);
    $Prestamo->setSalida($salida);
    $Prestamo->setDevolucion($devolucion);
    
    $longitud = count($libros);

//Recorro todos los elementos
  

    if (Repositorio_prestamoact::GuardarPrestamoAct(Conexion::obtener_conexion(), $Prestamo)) {
        //	echo "hasta aki";
        $prestamo1 = Repositorio_prestamoact::obtenerUltimoPact(Conexion::obtener_conexion());
        //echo $prestamo1;
        for ($i = 0; $i < $longitud; $i++) {echo '<script language="javascript">alert("' . $libros[$i] . '");</script>';
            if (!Repositorio_prestamoact::GuardarActivos(Conexion::obtener_conexion(), $prestamo1,  $libros[$i] )) {
                echo "<script type='text/javascript'>";
                echo 'swal({
                    title: "Ooops",
                    text: "Prestamo no Registrado",
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
                    text: 'Prestamo Registrado',
                    type: 'success'},
                    function(){
                       location.href='inicio_activo.php';
                       
                     
                        
                    }

                    );";
        //echo "alert('datos actualizados')";
        //echo "location.href='inicio_b.php'";
        echo "</script>";
    }
}
?>