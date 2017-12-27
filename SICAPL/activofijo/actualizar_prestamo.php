
<input type="hidden" name="codigo" id="codigo">
<div class="row ">
    <div class="col-md-7">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" name="libros">
                <div class="panel-heading p_libro">
                    <div class="row">
                        <div class="col-md-10">
                            <i class="fa fa-user-o prefix" aria-hidden="true"></i><label for="" style="font-size:17px"> Activos </label>
                        </div>
                    </div>
                </div>
                <div id="activo1" class="panel-collapse collapse in">
                    <div class="panel-body">

                        <table class="table table-striped table-bordered responsive-table display" id="tabla_activo_prestamo_act">
                            <thead>
                            <th>Código</th>
                            <th>Tipo</th>
                            <th >
                               <div><select name="accion[]">
                    <option value="1" selected>Devolver</option>
                    <option value="3">Dañado</option>
                    <option value="1">Extraviado</option>
                    </select></div>
                            </th>
                            <th >Observación </th>
                            </thead> 
                            <tbody>
                                <tr>
                                    <td></td><td></td>
                                    <td>
                                       <div><select name="accion[]">
                    <option value="1" selected>Devolver</option>
                    <option value="3">Dañado</option>
                    <option value="1">Extraviado</option>
                    </select></div> 
                                    </td>
                                    <td></td>
                                </tr>
                                    
                            </tbody>
                          

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>





    <div class="col-md-5"><!-- panel datos de usuario -->        
        <div class="panel panel-default" name="user">
            <div class="panel-heading p_libro">
                <i class="fa fa-user-o prefix" aria-hidden="true"></i><label for="" style="font-size:16px"> Usuario</label>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col m6">
                        <div class="input-field ">
                            <i class="fa fa-calendar-check-o prefix" style="color: green"></i> 
                            <input type="text" id="fecha_sal_act" name="fecha_sal_act"  class="text-center validate" maxlength="25" minlength="3" required value="12/08/2017" readonly> 
                            <label for="idNombre" class="col-sm-4 control-labe" style="font-size:18px">Fecha de Salida</label>
                        </div>

                    </div>

                    <div class="col m6">
                        <div class="input-field">
                            <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                            <label for="fecha_pub" class="active" style="font-size:14px">Fecha de Devolución</label>
                            <input type="text" id="fecha_dev_act" name="fecha_devolucion" class="form-control datepicker" placeholder="">
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
                                <td width="70%" colspan="3"> <div id="carnetAct" ></div></td>
                            </tr>
                            <tr>
                                <td ><b>Nombre:</b></td>
                                <td colspan="3"><div id="nombreUserAct"></div></td>
                            </tr>
                            <tr>

                                <td><b>Sexo:</b></td>
                                <td><div id="sexoAct"></div></td>
                            </tr>



                        </table>
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1" style="font-size:15px">Observaciones</label>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<?php

include_once '../app/Conexion.php';
include_once '../modelos/PrestamoAct.php';
include_once '../repositorios/repositorio_prestamoact.php';

//echo '<script language="javascript">alert("'.$cod.'");</script>';
?>