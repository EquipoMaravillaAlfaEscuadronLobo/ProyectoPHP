<!--formulario usuario-->

            <div class="panel" name="regisroAct">
                

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
                                <option value="1" selected>Ligia Alferez Muños</option>
                                <option value="2">Alberto Pérez Guzman</option>
                            </select>
                        </div>
                         <div class="col m1"></div>
                        <!-- termona el combo de encargado   -->
                        
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
                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#caracteristicasMod">Detalles  </a></div>
                                    <div id="caracteristicasMod" class="panel-collapse collapse ">
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
                    <button class="alert alert-success"><a class="btn btn_primary"   onclick="nuevoMant()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>MANTENIMIENTO</a></button>
                        <button class="btn btn-danger"> <i class="Medium material-icons prefix" onclick="AlertaExttoZZZ()">delete</i> </button>
                       
                    
                </div><!-- Termina botones -->
                
            </div> <!-- Termina panel regisroAct -->
        



<script crossorigin="a
        nonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="https://code.jquery.com/jquery-2.2.4.min.js">
</script>




