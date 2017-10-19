<?php
include_once '../repositorios/repositorio_administrador.inc.php';
include_once '../app/Conexion.php';
?>


            <div class="panel" name="regisroAct">
                

                <div class=" text-center panel-body">
                <form  name="actAct" id="ActAct" method="post">
                    <input type="hidden" id="codActivo" name="codActivo">
                    <input type="hidden" id="codDetalle" name="codDetalle">
                    <div class="row">
                        <div class="col m1"></div>
                         <!--seccion del combo para encargado  -->
                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="fa fa-user-circle prefix"></i>   
                            </div>
                        </div>
                        <div class="input-field col m3">
                           <select required="" name="adminedit" id="adminEdit" >
                                <option value="0" disabled selected>Seleccione Encargado</option>
                                <?php
                                Conexion::abrir_conexion();
                                Repositorio_administrador::lista_administradores2(Conexion::obtener_conexion());
                                ?>
                            </select>
                        </div>
                         
                        <!-- termona el combo de encargado   -->
                        <div class="input-field col m3">
                                                    <i class="fa fa-info-circle prefix "></i> 
                                                    <input type="text" id="estadoE" name="estadoE" class="text-center validate" required="" readonly=""
                                                    value="" 
                                                    >
                                                    <label for="estadoE">Estado <small></small> </label>
                                                </div>
                        <!-- foto  -->
                        <div class="col m1">
                             
                         </div>
                       <div class="col m3">
                            <div class="file-field input-field m5">
                                <div class="btn">
                                    <span><i class="glyphicon glyphicon-picture" aria-hidden="true"></i>Foto</span>
                                    <input type="file">
                                </div>
                                <div class="">
                                    <input type="file" accept="image/*" id="idFotoe" name="idFotoe" class="form-control  validate">
                                </div>
                            </div>
                        </div>
                        <!-- termina foto -->
                         
                        </div>
                    <div class="col-md-6">
                    <img src="" id="idFotoea" width="30%">
                </div>
                    <div class="row">
                        <output id="list"> <img src="" id="idFotoea" width="30%"></output>                
                    </div>

                      
                    <div class="row"><!--  panel de Caracteristicas   -->
                        
                        <div class="col m1"></div><!--  para dejar espacio en los lados   -->
                        <div class="col-md-10"> <!--  div para centralizar      -->
                            <div class="panel-group" id="accordion">
                                <div class="panel" name="caracteristicas">
                                    <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#caracteristicasMod">Detalles  </a></div>
                                    <div id="caracteristicasMod" class="panel-collapse collapse in">
                                         <div class="panel-body">                                            

                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-barcode prefix"></i> 
                                                    <input type="text" id="nserieE" name="nserieE" class="text-center validate" required="" value="Sin Numero de Serie" onclick = "if (this.value == 'Sin Numero de Serie')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Numero de Serie'">
                                                    <label for="precioUnitario">Numero de Serie <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>

                                                <div class="input-field col m5">
                                                    <i class="fa fa-adjust prefix"></i> 
                                                    <input type="text" id="colorE" name="colorE" class="text-center validate" required="" >
                                                    <label for="idEmail">Color<small></small> </label>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-registered prefix"></i> 
                                                    <input type="text" id="marcaE" name="marcaE" class="text-center validate" required="" value="Sin Marca" onclick = "if (this.value == 'Sin Marca')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Marca'">
                                                    <label for="precioUnitario">Marca <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>

                                                <div class="input-field col m5">
                                                    <i class="fa fa-windows prefix"></i> 
                                                    <input type="text" id="soE" name="soE" class="text-center validate" required="" value="Sin Sistema Operativo" onclick = "if (this.value == 'Sin Sistema Operativo')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Sistema Operativo'">
                                                    <label for="idEmail">Sistema Operativo <small></small> </label>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-crop prefix"></i> 
                                                    <input type="text" id="dimensionesE" name="dimensionesE" class="text-center validate" required="" value="Sin Dimenciones" onclick = "if (this.value == 'Sin Dimenciones')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Dimenciones'">
                                                    <label for="dimensines">Dimensiones <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>

                                                <div class="input-field col m5">
                                                    <i class="fa fa-circle-o-notch prefix"></i> 
                                                    <input type="text" id="ramE" name="ramE" class="text-center validate" required="" value="Sin Memoria Ram" onclick = "if (this.value == 'Sin Memoria Ram')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Memoria Ram'">
                                                    <label for="dimensines">Memoria Ram <small></small> </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m5">
                                                    <i class="fa fa-laptop prefix"></i> 
                                                    <input type="text" id="modeloE" name="modeloE" class="text-center validate" required="" value="Sin Modelo" onclick = "if (this.value == 'Sin Modelo')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Modelo'">
                                                    <label for="idEmail">Modelo<small></small> </label>
                                                </div>


                                                <div class="col m1"></div>
                                                <div class="input-field col m5">
                                                    <i class="fa fa-hdd-o prefix"></i> 
                                                    <input type="text" id="ddE" name="ddE" class="text-center validate" required="" value="Sin Disco Duro" onclick = "if (this.value == 'Sin Disco Duro')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Disco Duro'">
                                                    <label for="idEmail">Disco Duro <small></small> </label>
                                                </div> 
                                            </div>
                                            <div class="row">

                                                <div class="input-field col m5">
                                                    <i class="fa fa-microchip prefix"></i> 
                                                    <input type="text" id="proE" name="proE" class="text-center validate" required="" value="Sin Procesador" onclick = "if (this.value == 'Sin Procesador')
                                                                this.value = ''" onblur="if (this.value == '')
                                                                            this.value = 'Sin Procesador'">
                                                    <label for="idEmail">Procesador <small></small> </label>
                                                </div>
                                                <div class="col m1"></div>
                                                <div class="input-field col m5">
                                                    <textarea id="otroE" name="otroE" class="materialize-textarea" style="font-size:15px"></textarea>
                                                    <label for="textarea1" style="font-size:15px"><i class="  fa fa-pencil-square-o"></i>&nbsp Otro</label>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col m1"></div><!--  para dejar espacio en los lados   -->
                        
                    </div> <!-- termina el div row de Caracteristicas     -->
                    </form>
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




