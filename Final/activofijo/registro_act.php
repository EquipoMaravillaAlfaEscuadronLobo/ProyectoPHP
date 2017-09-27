<!--formulario usuario-->
<div class="container">
    <form id="FORMULARIO" method="post" class="form-horizontal" action="" autocomplete="off">
        <div class="row">
            <div class="panel" name="libros">
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
                        <div class="input-field col m5">
                            <i class="fa fa-calendar prefix"></i> 
                            <input type="text" id="fecha" name="nameNombre"  class="text-center validate" maxlength="25" minlength="3" required value="<?php echo date("d-m-Y");?>" readonly> 
                            <label for="idNombre" class="col-sm-4 control-labe">Fecha</label>
                        </div>
                        <div class="input-field col m5">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m1"></div>
                        <!--seccion del combo para categoria  -->
                         <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-sitemap prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m2">
                            <select required="">
                                <option value = "" disabled selected>Seleccione Categoria</option>
                              <option value="1">Silla</option>
                              <option value="2">Mesa</option>
                              <option value="3">Computadora</option>
                            </select>
                            </div>
                            <div class="input-field col m1">
                        <input type="text" name="cantidad" placeholder="Cantidad">
                        </div>
                        <div class="input-field col m1">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevoEnc()"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
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
                            <select required="">
                                <option value="0" disabled selected>Seleccione Proveedor</option>
                              <option value="1">AESIP</option>
                              <option value="2">BREA</option>
                              <option value="3">COMPUMUNDO</option>
                            </select>
                            </div>
                            <div class="input-field col m1">
                            <a class="btn btn_primary"  target="_blank" onclick="nuevoEnc()"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a>
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
                        <!--  panel de Caracteristicas   -->
                        <div class="col m1"></div>
    <div class="col-md-10">
        <div class="panel-group" id="accordion">
            <div class="panel" name="caracteristicas">
                <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#caracteristicas">Caracteristicas </a></div>
                <div id="caracteristicas" class="panel-collapse collapse in">
                <div class="panel-body">
               <div class="col-md-6"><!-- panel de caracteristicass generales-->
                     
                    
                        <i class="fa fa-barcode prefix"></i>
                        <input type="text" name="" placeholder="serie">
                        <i class="fa fa-adjust"></i>
                        <input type="text" name="" placeholder="color">
                        <i class="  fa fa-registered"></i>
                        <input type="text" name="" placeholder="marca"> 
                        <i class="fa fa-laptop"></i>
                        <input type="text" name="" placeholder="modelo">
                        <i class="fa fa-crop"></i>
                        <input type="text" name="" placeholder="dimenciones">   
                  
                    
                </div><!--termina panel de caracteristicas generales -->
                    
                    
                </div>
                </div>
            </div>
            </div>
           
        </div>
        <div class="col m1"></div>
    <!--  panel de mantenimiento     -->
                    </div>
                    </div><!-- termina div panel center-->
                    
                    <div class="row">
                        <output id="list"></output>                
                    </div>
                    <!-- botones -->
                    <div class="row text-center">
                        <button class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                            Guardar</button>
                        <button type="reset" class="btn btn-danger" onclick="AlertaExttoZZZ()">
                            <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                        </button>
                    </div>
                    <!-- Termina botones -->
                </div>
            </div>

        </div>
    </form>
</div>
<!--fin formulario usuario-->

<script crossorigin="a
    nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
        </script>







