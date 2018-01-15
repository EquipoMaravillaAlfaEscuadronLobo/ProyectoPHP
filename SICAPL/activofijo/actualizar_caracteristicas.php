

<div class="row"><!--  panel de Caracteristicas   -->

    <div class="col-md-1colorEAD"> <!--  div para centralizar      -->

        <div class="panel" >


            <div class="panel-body">                                            
                <form  name="actActEAD" id="ActActEAD" method="post"  enctype="multipart/form-data">
                    
                  

                    <div class="row">

                        <div class="input-field col m5">
                            <i class="fa fa-barcode prefix"></i> 
                            <input type="text" id="nserieEAd1" name="nserieEAd1" class="text-center validate" required="" value="Sin Numero de Serie" onclick = "if (this.value == 'Sin Numero de Serie')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Numero de Serie'">
                            <label for="precioUnitario">Numero de Serie <small></small> </label>
                        </div>
                        <div class="col m1"></div>

                        <div class="input-field col m5">
                            <i class="fa fa-adjust prefix"></i> 
                            <input type="text" id="colorEAd1" name="colorEAd1" class="text-center validate"  >
                            <label for="idEmail">Color<small></small> </label>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col m5">
                            <i class="fa fa-registered prefix"></i> 
                            <input type="text" id="marcaEAd1" name="marcaEAd1" class="text-center validate" required="" value="Sin Marca" onclick = "if (this.value == 'Sin Marca')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Marca'">
                            <label for="precioUnitario">Marca <small></small> </label>
                        </div>
                        <div class="col m1"></div>

                        <div class="input-field col m5">
                            <i class="fa fa-windows prefix"></i> 
                            <input type="text" id="soEAd1" name="soEAd1" class="text-center validate" required="" value="Sin Sistema Operativo" onclick = "if (this.value == 'Sin Sistema Operativo')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Sistema Operativo'">
                            <label for="idEmail">Sistema Operativo <small></small> </label>
                        </div>

                    </div>
                    <div class="row">

                        <div class="input-field col m5">
                            <i class="fa fa-crop prefix"></i> 
                            <input type="text" id="dimensionesEAd1" name="dimensionesEAd1" class="text-center validate" required="" value="Sin Dimenciones" onclick = "if (this.value == 'Sin Dimenciones')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Dimenciones'">
                            <label for="dimensines">Dimensiones <small></small> </label>
                        </div>
                        <div class="col m1"></div>

                        <div class="input-field col m5">
                            <i class="fa fa-circle-o-notch prefix"></i> 
                            <input type="text" id="ramEAd1" name="ramEAd1" class="text-center validate" required="" value="Sin Memoria Ram" onclick = "if (this.value == 'Sin Memoria Ram')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Memoria Ram'">
                            <label for="dimensines">Memoria Ram <small></small> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m5">
                            <i class="fa fa-laptop prefix"></i> 
                            <input type="text" id="modeloEAd1" name="modeloEAd1" class="text-center validate" required="" value="Sin Modelo" onclick = "if (this.value == 'Sin Modelo')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Modelo'">
                            <label for="idEmail">Modelo<small></small> </label>
                        </div>


                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="fa fa-hdd-o prefix"></i> 
                            <input type="text" id="ddEAd1" name="ddEAd1" class="text-center validate" required="" value="Sin Disco Duro" onclick = "if (this.value == 'Sin Disco Duro')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Disco Duro'">
                            <label for="idEmail">Disco Duro <small></small> </label>
                        </div> 
                    </div>
                    <div class="row">

                        <div class="input-field col m11">
                            <i class="fa fa-microchip prefix"></i> 
                            <input type="text" id="proEAd1" name="proEAd1" class="text-center validate" required="" value="Sin Procesador" onclick = "if (this.value == 'Sin Procesador')
                                        this.value = ''" onblur="if (this.value == '')
                                                    this.value = 'Sin Procesador'">
                            <label for="idEmail">Procesador <small></small> </label>
                        </div>
                    </div>
                      <div class="row">
                        <div class="input-field col m11">
                            <textarea id="otroEAd1" name="otroEAd1" class="materialize-textarea" style="font-size:15px"></textarea>
                            <label for="textarea1" style="font-size:15px"><i class="  fa fa-pencil-square-o"></i>&nbsp Otro</label>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div> <!-- termina el div row de Caracteristicas     -->


<?php
if (isset($_REQUEST["banderaActivEAD"])) {


    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../modelos/Detalles.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_detalles.php';
    Conexion::abrir_conexion();

    $detalle = new Detalles();
    $detalle->setCodigo_detalle($_REQUEST["codDetalleEAD"]);
    $detalle->setSeri($_REQUEST["nserieEAD"]);
    $detalle->setColor($_REQUEST["colorEAD"]);
    $detalle->setMarca($_REQUEST["marcaEAD"]);
    $detalle->setSistema($_REQUEST["soEAD"]);
    $detalle->setDimencione($_REQUEST["dimensionesEAD"]);
    $detalle->setRam($_REQUEST["ramEAD"]);
    $detalle->setModelo($_REQUEST["modeloEAD"]);
    $detalle->setMemoria($_REQUEST["ddEAD"]);
    $detalle->setProcesador($_REQUEST["proEAD"]);
    $detalle->setOtros($_REQUEST["otroEAD"]);


    Repositorio_detalle::actualizar_detalle(Conexion::obtener_conexion(), $detalle, $_REQUEST["codDetalleEAD"]);
}
?>