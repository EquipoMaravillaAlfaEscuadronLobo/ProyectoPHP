<?php
include_once '../repositorios/repositorio_categoria.php';   
include_once '../app/Conexion.php'; 
include_once '../modelos/Categoria.php';
?>
<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("jquery", "1.2", {uncompressed:true}); 
</script>
<!--formulario usuario-->
<div class="container">
    <form id="FORMULARIO1" method="post" class="form-horizontal" action="" autocomplete="off">
    <input type="hidden" name="bandera1" id="bandera">
        <div class="row" name="filaForm">
            <div class="panel" name="regisroAct">
                <div class="panel-heading text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Registro De Activo Fijo</h3>
                        </div>
                    </div>
                </div>

                <div class=" text-center panel-body">
                    <div class="row">
                        <div class="col m1"></div>
                         <!--seccion del combo para encargado  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-user-circle prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m3">
                            <select required="">
                                <option value = "" disabled selected>Seleccione Encargado</option>
                                <option value="1">Ligia Alferez Muños</option>
                                <option value="2">Alberto Pérez Guzman</option>
                            </select>
                        </div>
                         <div class="col m1"></div>
                        <!-- termona el combo de encargado   -->
                        <div class="input-field col m4">
                            <i class="fa fa-calendar prefix"></i> 
                            <input type="text" id="fecha" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required value="<?php echo date("d-m-Y"); ?>" readonly> 
                            <label for="idNombre" class="col-sm-4 control-labe">Fecha</label>
                        </div>
                       
                    </div>
                    <div class="row" >
                        <div class="col m1"></div>
                        <!--seccion del combo para categoria  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-sitemap prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m2" > 
                        <select id="selectCat" name="selectCat">
                            <?php include('select_categoria.php'); ?>  
                        </select>
                             
                        </div>
                        <div class="input-field col m1">
                            <input type="text" name="cantidad" placeholder="Cantidad">
                        </div>
                        <div class="input-field col m1">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(1)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
                        </div>
                        <!-- termona el combo de categoria   -->
                        <div class="input-field col m5">
                            <i class="fa fa-usd prefix"></i> 
                            <input type="text" id="precioUnitario" name="precioUnitario" class="text-center validate" required="">
                            <label for="precioUnitario">Precio Unitario <small></small> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m1"></div>
                        <!--seccion del combo para proveedor  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-truck prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m3">
                            <select required="" >
                                <option value="0" disabled selected>Seleccione Proveedor</option>
                                <option value="1">AESIP</option>
                                <option value="2">BREA</option>
                                <option value="3">COMPUMUNDO</option>
                            </select>
                        </div>
                        <div class="input-field col m1">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevaCat(2)"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
                        </div>

                        <!-- termina el combo de proveedor   -->
                        <!-- foto  -->
                        <div class="col m6">
                            <div class="file-field input-field col m10">
                                <div class="btn btn-primary">
                                    <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="nameFoto" id="idFoto">
                                    <input type="file" id="files" name="files[]">
                                </div>
                            </div>
                        </div>
                        <!-- termina foto -->

                    </div>
                    <div class="row">
                        <output id="list"></output>                
                    </div>
                    <div class="row"><!--  panel de Caracteristicas   -->
                        
                        <div class="col m1"></div><!--  para dejar espacio en los lados   -->
                        <div class="col-md-10"> <!--  div para centralizar      -->
                            <div class="panel-group" id="accordion">
                                <div class="panel" name="caracteristicas">
                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#caracteristicas">Detalles  </a></div>
                                    <div id="caracteristicas" class="panel-collapse collapse ">
                                        <div class="panel-body">                                            

                                                <div class="row">

                                                    <div class="input-field col m5">
                                                        <i class="fa fa-barcode prefix"></i> 
                                                        <input type="text" id="precioUnitario" name="precioUnitario" class="text-center validate" required="">
                                                        <label for="precioUnitario">Numero de Serie <small></small> </label>
                                                    </div>
                                                    <div class="col m1"></div>

                                                    <div class="input-field col m5">
                                                        <i class="fa fa-adjust prefix"></i> 
                                                        <input type="email" id="idEmail" name="nameEmail" class="text-center validate" required="" >
                                                        <label for="idEmail">Color<small></small> </label>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="input-field col m5">
                                                        <i class="fa fa-registered prefix"></i> 
                                                        <input type="text" id="precioUnitario" name="precioUnitario" class="text-center validate" required="">
                                                        <label for="precioUnitario">Marca <small></small> </label>
                                                    </div>
                                                    <div class="col m1"></div>

                                                     <div class="input-field col m5">
                                                        <i class="fa fa-windows prefix"></i> 
                                                        <input type="email" id="idEmail" name="nameEmail" class="text-center validate" required="" >
                                                        <label for="idEmail">Sistema Operativo <small></small> </label>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">

                                                    <div class="input-field col m5">
                                                        <i class="fa fa-crop prefix"></i> 
                                                        <input type="text" id="dimensiones" name="precioUnitario" class="text-center validate" required="">
                                                        <label for="dimensines">Dimensiones <small></small> </label>
                                                    </div>
                                                    <div class="col m1"></div>

                                                     <div class="input-field col m5">
                                                        <i class="fa fa-circle-o-notch prefix"></i> 
                                                        <input type="text" id="dimensiones" name="precioUnitario" class="text-center validate" required="">
                                                        <label for="dimensines">Memoria Ram <small></small> </label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col m5">
                                                        <i class="fa fa-laptop prefix"></i> 
                                                        <input type="email" id="idEmail" name="nameEmail" class="text-center validate" required="" >
                                                        <label for="idEmail">Modelo<small></small> </label>
                                                    </div>
                                                   

                                                    <div class="col m1"></div>
                                                    <div class="input-field col m5">
                                                        <i class="fa fa-hdd-o prefix"></i> 
                                                        <input type="email" id="idEmail" name="nameEmail" class="text-center validate" required="" >
                                                        <label for="idEmail">Disco Duro <small></small> </label>
                                                    </div> 
                                                </div>
                                                <div class="row">
                                                    <div class="col m4"></div>
                                                     <div class="input-field col m5">
                                                        <i class="fa fa-microchip prefix"></i> 
                                                        <input type="email" id="idEmail" name="nameEmail" class="text-center validate" required="" >
                                                        <label for="idEmail">Procesador <small></small> </label>
                                                    </div>
                                                    <div class="col m2"></div>
                                                </div>
                                                  

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col m1"></div><!--  para dejar espacio en los lados   -->
                        
                    </div> <!-- termina el div row de Caracteristicas     -->
                </div><!-- termina div panel center-->

                <div class="row">
                    <output id="list"></output>                
                </div>
                <!-- botones -->
                <div class="row text-center" name="botones">
                    <button class="btn btn-success">
                        <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                        Guardar</button>
                    <button type="reset" class="btn btn-danger" onclick="AlertaExttoZZZ()">
                        <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                    </button>
                </div><!-- Termina botones -->
                
            </div> <!-- Termina panel regisroAct -->
        </div><!-- Termina filaForm -->
</form><!--fin formulario usuario-->

</div><!--fin container-->



<script crossorigin="a
        nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
</script>


<div id="nuevaCat" class="modal modal-fixed-footer" ><!-- para llamar al modal PARA REGISTRAR CATEGORIA-->
    <div class="modal-heading panel-heading">
         <i class="fa fa-sitemap prefix"></i> &nbsp;Registrar categoria
    </div>
   
    <div class="modal-content ">
             <?php include('nueva_categoria.php');?>
    
    </div>
     <div class="modal-footer">
        <div class="row">
        <div class="col-md-6 text-right"><button class="btn btn-success modal-action modal-close" type="submit" form="FORMULARIO2">
                <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                Guardar</button></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>


<div id="nuevoProv" class="modal modal-fixed-footer" ><!-- para llamar al modal PARA REGISTRAR PROVEEDOR-->
 <div class="modal-heading panel-heading">
         <i class="fa fa-truck prefix" aria-hidden="true"></i>&nbsp;Registrar Proveedo
    </div>
     
    <div class="modal-content ">
             <?php include('nuevo_proveedor.php');?>
    
    </div>
     <div class="modal-footer">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<script language="javascript">// <![CDATA[ PARA QUE NO SE ACTUALICE CUANDO GUARDA EN LOS MODALES
$(document).ready(function() {
   // Esta primera parte crea un loader no es necesaria
    
   // Interceptamos el evento submit
    $('#FORMULARIO2, #fat, #fo3').submit(function() {
  // Enviamos el formulario usando AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            // Mostramos un mensaje con la respuesta de PHP
            success: function() {
                  recargarS2('selectCat');
            }
        })        
        return false;
    }); 
})
// FUENTE: http://www.miguelmanchego.com/2009/ajax-enviar-formularios-sin-recargar-jquery/ ]]>
    

function recargarS2(val){
 
   //esperando la carga...
   
   //realizo la call via jquery ajax
   $.ajax({
        url: 'select_categoria.php',
        data: 'id='+val,
        success: function(resp){

         $('#selectCat').html(resp) 
         }
    });
}

</script>

