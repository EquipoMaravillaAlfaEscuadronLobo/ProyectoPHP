<!--<form id="prestamoAct" id="prestamoAct" method="post" action=""> -->
<input type="hidden" name="passsss" id="passsss">
<input type="hidden" name="codTipo" id="codTipo">
<input type="hidden" name="codAct" id="codAct">
<div class="row">

    <div class="col-md-6">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" name="activo">
                <div class="panel-heading p_libro">

                    <div class="row">
                        <div class="col-md-10">

                            <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:17px">Buscar Activo</label><input type="text" id="codigo" list="listaActivos" autofocus onkeypress="buscarActivo(this)"></div>

                        </div>
                        <form id="prestamoAct" id="prestamoAct" method="post">
                        <div class="col-md-1">
                            <a data-toggle="collapse" data-parent="#accordion" href="#activo1">
                                <i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="col-md-1">                   
                            <i class="fa fa-minus" id="despliegue" aria-hidden="true"></i>                
                        </div>
                    </div>
                </div>
                <div id="activo1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered">

                                <tr>
                                    <td width="40%"><b>Código:</b></td>
                                    <td  colspan="2"><div id="codigoActivoA"></div></td>
                                    <td >
                                        <input type="checkbox" id="mostrar"  name="mostrar"  class="text-center with-gap" onchange="javascript:ocultar()" value="0">
                                        <label for="mostrar">Multiple</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">

                                        <div class="row" id="oculto" style="display:none"><!-- seccion para elegir varios activos -->
                                            <div class="input-field col m3">
                                                <i class="fa fa-arrow-left prefix"></i> 
                                                <label for="Titulo">Cantidad</label>
                                                <input type="number" min="1" max="100" id="desde" class="form-control" onkeypress="listar(this)">
                                            </div>
                                            <div class="row" id="informacion"> </div>
                                            
                                            
                                        </div><!-- termina seccion -->
                                    </td>
                                </tr>
                                <tr>
                                    <td ><b>Tipo:</b></td>
                                    <td colspan="3"><div id="tipoActivoA"></div></td>
                                </tr>
                                
                                    <tr>
                                        <td ><b>Encargado:</b></td>
                                        <td colspan="3"><div id="encargadoA"></div></td>
                                    </tr>
                                 <!--   <tr>
                                        <td ><b>Estado:</b></td>
                                        <td colspan="3"><div id="estado"></div></td>
                                    </tr>
                                -->
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <button class="btn" onClick="addActivo()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
            </span>Agregar Activo</button>
    </div>



     <div class="col-md-6"><!-- panel datos de usuario -->        
            <div class="panel panel-default" name="user">
                <div class="panel-heading p_libro">
                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="" style="font-size:16px">Buscar Usuario</label><input type="text" id="codigouser" name="codigouser" autofocus onkeypress="buscarUser2(this)" list="listaUsuarios">
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
                                                <input type="text" id="fecha_dev" name="fecha_devolucion" class="form-control datepicker" value="<?php echo date("d-m-Y"); ?>">
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
                                <td width="70%" colspan="3"> <div id="carnetA"></div></td>
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
                        </div>
                       


                    </div>
                </div>
            </div>
            
    </div>




<script crossorigin="a
        nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
</script>
<script>

    function ocultar() {

        elment = document.getElementById('oculto');
        check = document.getElementById('mostrar');
        if (check.checked) {
            document.getElementById('codigoActivoA').innerHTML = document.getElementById("codTipo").value;
            elment.style.display = 'block';

        } else {
            document.getElementById('codigoActivoA').innerHTML = document.getElementById("codAct").value;
            elment.style.display = 'none';
            
        }
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
    $listado=  Repositorio_activo::lista_activo(Conexion::obtener_conexion());

     
     foreach ($listado as $fila) {
        echo '<option value="'.$fila["codigo_activo"].'">'.Repositorio_categoria::obtener_categoria(Conexion::obtener_conexion(), $fila["codigo_tipo"]).'</option>';
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
<datalist id="listaLibros22"></datalist>

<?php
if ($_REQUEST["passsss"]=="ok") {


}
    ?>