

<div class="row"><!--  panel de Caracteristicas   -->

    <div class="col-md-12"> <!--  div para centralizar      -->

        <div class="panel" >


            <div class="panel-body">                                            

                <div class="row">

                    <div class="input-field col m5">
                        <i class="fa fa-barcode prefix"></i> 
                        <input type="text" id="nserie" name="nserie" class="text-center validate" required="" value="Sin Numero de Serie" onclick = "if (this.value == 'Sin Numero de Serie')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Numero de Serie'">
                        <label for="precioUnitario">Numero de Serie <small></small> </label>
                    </div>
                    <div class="col m1"></div>

                    <div class="input-field col m5">
                        <i class="fa fa-adjust prefix"></i> 
                        <input type="text" id="color" name="color" class="text-center validate" required="" >
                        <label for="idEmail">Color<small></small> </label>
                    </div>
                </div>
                <div class="row">

                    <div class="input-field col m5">
                        <i class="fa fa-registered prefix"></i> 
                        <input type="text" id="marca" name="marca" class="text-center validate" required="" value="Sin Marca" onclick = "if (this.value == 'Sin Marca')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Marca'">
                        <label for="precioUnitario">Marca <small></small> </label>
                    </div>
                    <div class="col m1"></div>

                    <div class="input-field col m5">
                        <i class="fa fa-windows prefix"></i> 
                        <input type="text" id="so" name="so" class="text-center validate" required="" value="Sin Sistema Operativo" onclick = "if (this.value == 'Sin Sistema Operativo')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Sistema Operativo'">
                        <label for="idEmail">Sistema Operativo <small></small> </label>
                    </div>

                </div>
                <div class="row">

                    <div class="input-field col m5">
                        <i class="fa fa-crop prefix"></i> 
                        <input type="text" id="dimensiones" name="dimensiones" class="text-center validate" required="" value="Sin Dimenciones" onclick = "if (this.value == 'Sin Dimenciones')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Dimenciones'">
                        <label for="dimensines">Dimensiones <small></small> </label>
                    </div>
                    <div class="col m1"></div>

                    <div class="input-field col m5">
                        <i class="fa fa-circle-o-notch prefix"></i> 
                        <input type="text" id="ram" name="ram" class="text-center validate" required="" value="Sin Memoria Ram" onclick = "if (this.value == 'Sin Memoria Ram')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Memoria Ram'">
                        <label for="dimensines">Memoria Ram <small></small> </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m5">
                        <i class="fa fa-laptop prefix"></i> 
                        <input type="text" id="modelo" name="modelo" class="text-center validate" required="" value="Sin Modelo" onclick = "if (this.value == 'Sin Modelo')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Modelo'">
                        <label for="idEmail">Modelo<small></small> </label>
                    </div>


                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <i class="fa fa-hdd-o prefix"></i> 
                        <input type="text" id="dd" name="dd" class="text-center validate" required="" value="Sin Disco Duro" onclick = "if (this.value == 'Sin Disco Duro')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Disco Duro'">
                        <label for="idEmail">Disco Duro <small></small> </label>
                    </div> 
                </div>
                <div class="row">

                    <div class="input-field col m5">
                        <i class="fa fa-microchip prefix"></i> 
                        <input type="text" id="pro" name="pro" class="text-center validate" required="" value="Sin Procesador" onclick = "if (this.value == 'Sin Procesador')
                                    this.value = ''" onblur="if (this.value == '')
                                                this.value = 'Sin Procesador'">
                        <label for="idEmail">Procesador <small></small> </label>
                    </div>
                    <div class="col m1"></div>
                    <div class="input-field col m5">
                        <textarea id="otro" name="otro" class="materialize-textarea" style="font-size:15px"></textarea>
                        <label for="textarea1" style="font-size:15px"><i class="  fa fa-pencil-square-o"></i>&nbsp Otro</label>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div> <!-- termina el div row de Caracteristicas     -->
