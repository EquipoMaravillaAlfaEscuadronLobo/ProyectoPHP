

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
<div class="row">
    <form name="mant" id="mant"  method="post" >
        <!--  panel de encargado    -->
        <div class="col-md-4">
            <div class="panel-group" id="accordion">
                <div class="panel" id="encargado">
                    <div class="panel-heading p_libro">
                        <input type="hidden" name="idenca" id="idenca" >
                        <div class="row">
                            <div class="col-md-8">

                                <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label  style="font-size:17px">Buscar Encargado</label><input type="text" id="codigoeman" autofocus onkeypress="buscarUser(this)" list="listaeman"></div>

                            </div>

                            <div class="col-md-2">
                                <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(3)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
                            </div>
                            <div class="col-md-1">
                                <a data-toggle="collapse" data-parent="#accordion" href="#encarg1">
                                    <i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-md-1">                   
                                <i class="fa fa-minus" id="despliegue" aria-hidden="true"></i>                
                            </div>
                        </div>
                        
                    </div>
                    <div id="encarg1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td width="40%"><b>Nombre:</b></td>
                                    <td width="60%"><div id="nombreEnc"></div></td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Telefono:</b></td>
                                    <td width="60%"><div id="telefono"></div></td>
                                </tr>
                                <tr>
                                    <td width="40%"><b>Correo:</b></td>
                                    <td width="60%"><div id="correo"></div></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <button class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                </span>Agregar Encargado</button>
        </div>

        <!--  panel de activo    -->
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading p_libro">
                    <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label  style="font-size:16px">Buscar Activo</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)">
                    </div>              

                </div>

                <div class="panel-body">
                    <table class="table table-striped table-bordered">		
                        <tr>
                            <td width="40%"><b>Código:</b></td>
                            <td  colspan="3"><div id="codigo"></div></td>
                        </tr>
                        <tr>
                            <td ><b>Tipo:</b></td>
                            <td colspan="3"><div id="tipo"></div></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="row"><!-- seccion para elegir varios activos -->
                                    <div class="input-field col m3">
                                        <i class="fa fa-arrow-left prefix"></i> 
                                        <label for="Titulo">Desde</label>
                                        <input type="text" id="Titulo" class="form-control">
                                    </div>
                                    <div class="col m1"></div>
                                    <div class="input-field col m3">
                                        <i class="fa fa-arrow-right prefix"></i> 
                                        <label for="Titulo">Hasta</label>
                                        <input type="text" id="Titulo" class="form-control">	                        			
                                    </div>

                                    <div class="col m5"></div>
                                </div><!-- termina seccion -->
                            </td>
                        </tr>

                    </table>	
                </div>
            </div>

        </div>

        <!--  panel de mantenimiento     -->
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading">	Datos de Mantenimiento</div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col m12">
                            <div class="input-field">
                                <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                <label for="fecha_pub" class="active" style="font-size:16px">Fecha de Mantenimiento</label>
                                <input type="date" id="fecha_pub" class="form-control datepicker" >
                            </div>
                        </div>	
                    </div>
                    <div class="row">
                        <div class="input-field col m12">
                            <i class="fa fa-usd prefix"></i> 
                            <input type="text" id="precioUnitario" name="precioUnitario" class="text-center validate" required="">
                            <label for="precioUnitario" style="font-size:16px">Precio Total<small></small> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="textarea1" class="materialize-textarea"  ></textarea>
                            <label for="textarea1" style="font-size:15px"><i class="fa fa-pencil-square-o"></i>&nbspDescripción</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(4)"><span aria-hidden="true" >Actualizar Detalles</span></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </form>
</div>


<datalist id="listaeman">
  <?php 
    include_once '../app/Conexion.php';
include_once '../modelos/Encargado_mantenimiento.php';
include_once '../repositorios/repositorio_encargado.php';

    Conexion::abrir_conexion();
    $listado=  Repositorio_encargado::lista_encargado(Conexion::obtener_conexion());

     
     foreach ($listado as $fila) {
        echo "<option value='$fila[0]'>$fila[1]</option>";
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
    

<script>

    function addLibro() {
        var imagenes = document.getElementsByName('libros').length + 1;
        var script = document.createElement("div");
        script.innerHTML = "<div class='panel' name='libros'><div class='panel-heading'><a data-toggle='collapse' data-parent='#accordion" + imagenes + "' href='#activo" + imagenes + "'>Datos de libros</a></div><div id='collapse" + imagenes + "' class='panel-collapse collapse in'><div class='panel-body'><input type='text' placeholder='codigo' autofocus><input type='text' placeholder='titulo' disabled><input type='text' placeholder='Autor' disabled><input type='text' placeholder='Gener' disabled><input type='text' placeholder='Fecha de Publicacion' disabled></div></div></div>";
        var fila = document.getElementById("accordion");
        fila.appendChild(script);
    }
    function buscarLibro(event) {
        if (event.keyCode == 13) {
            document.getElementById('titulo').value = "Iliada";
            document.getElementById('autor').value = "Homero";
            document.getElementById('genero').value = "Epopeya";
            document.getElementById('fecha_pub').value = "762 A.C";

            document.getElementById('titulo').disabled = false;
            document.getElementById('autor').disabled = false;
            document.getElementById('genero').disabled = false;
            document.getElementById('fecha_pub').disabled = false;

            $('#titulo').attr("readOnly", "");
            document.getElementById('autor').disabled = false;
            document.getElementById('genero').disabled = false;
            document.getElementById('fecha_pub').disabled = false;

        }


</script>



