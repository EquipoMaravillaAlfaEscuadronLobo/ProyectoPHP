
<form method="POST" name="frmPrestamoLibro" id="frmPrestamoLibro" action="newPrestamo.php">
<input type="hidden" name="num" id="num">
<div class="row">
    <div class="col-md-6">
        <div class="panel-group" id="accordion2">
        <div id="borrar1">
            <div class="panel panel-default" name="libros" id="libros1">
                <div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-10">

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Libro</label><input type="text" id="codigol1" name="codigol1" autofocus onkeypress="buscarLibro2(this,event)" list="listaLibros"></div>

                </div>
                <div class="col-md-1">
                   <a data-toggle="collapse" data-parent="#accordion" href="#libro1">
                   <i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i>
                </a>
                </div>

                    </div>
                </div>
                <div id="libro1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td width="60%"><b>Titulo:</b></td>
                                <td width="40%"><div id="titulo1"></div></td>
                            </tr>
                            <tr>
                                <td><b>Autor:</b></td>
                                <td><div id="autor1"></div></td>
                            </tr>
                            <tr>
                                <td><b>Fecha de Publicacion:</b></td>
                                <td><div id="fecha_pub1"></div></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <but class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
            </span>Agregar Libro</button>
        </but></div>
    <div class="col-md-6"><!-- panel datos de usuario -->
            <div class="panel panel-default" name="user">
                <div class="panel-heading p_libro">
                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:16px">Buscar Usuario</label><input type="text" id="codigouser" name="codigouser" autofocus onkeypress="buscarUser(this)" list="listaUsuarios">
                 </div>

                </div>

                   <div class="panel-body">
                        <div class="row">
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
                                                <input type="text" id="fecha_dev" name="fecha_devolucion" class="form-control datepicker" value="<?php echo date("Y-m-d"); ?>">
                                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" >
                                <img src="" id="fot" class="presentacionXZ">
                            </div>
                            <div class="col-md-9">
                                 <table class="table table-striped table-bordered">
                            <tr>
                                <td width="30%"><b>Carnet:</b></td>
                                <td width="70%" colspan="3"> <div id="carnet"></div></td>
                            </tr>
                            <tr>
                                <td ><b>Nombre:</b></td>
                                <td colspan="3"><div id="nombreUser"></div></td>
                            </tr>
                            <tr>

                                <td><b>Sexo:</b></td>
                                <td><div id="sexo"></div></td>
                            </tr>



                            </table>
                                </div>
                        </div>



                    </div>
                </div>
            </div>
</div>
</form>

<datalist id="listaLibros">
  <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::ListaLibros(Conexion::obtener_conexion());


     foreach ($listado as $fila) {
        echo "<option value='$fila[2]'>$fila[0]</option>";
    }

 ?>
</datalist>

<datalist id="listaUsuarios">
  <?php
    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    Conexion::abrir_conexion();
    $listado=Repositorio_libros::BuscarUsuarios(Conexion::obtener_conexion());


     foreach ($listado as $fila) {
        echo "<option value='$fila[0]'>$fila[2] $fila[3]</option>";
    }

 ?>
</datalist>
<datalist id="listaLibros2"></datalist>


<script type="text/javascript">

    function eliminar (numero,event) {
       if(event.keyCode !== 13){
        var id='borrar'+numero;
        var top=document.getElementById('accordion2');
        var bottom=document.getElementById(id);
        //alert(bottom)
        if (bottom.parentNode) {
        bottom.parentNode.removeChild(bottom);
        };
    }
}


</script>
