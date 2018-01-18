
 <form id="imprimir_mante" method="post" action="../reportesActivo/imp_mant.php" target="_blank">
<div class="row" id="ver_mante">
    
    <table>
        <tbody>
            <tr >
                <td style="height:10px;"><div class="col m12">
                        <div class="input-field">
                            <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                            <label for="fecha_pub" class="active" style="font-size:16px">Fecha de Mantenimiento</label>
                            <input type="text" placeholder="" name="ver_fecha_mant" id="ver_fecha_mant" readonly=""   >
                        </div>
                    </div></td>
                <td style="height:10px;">
                    <div class="input-field col m12">
                        <i class="fa fa-usd prefix"></i> 
                        <input type="number" name="ver_costoTotal"  placeholder="" min="0" step="any" id="ver_costoTotal"  class="text-center validate" readonly="">
                        <label for="precioUnitario" style="font-size:16px">Precio Total<small></small> </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="height:15px;">
                    <div class="input-field col s12">
                        <textarea id="ver_descrMant" name="ver_descrMant" placeholder="" minlength="8"  readonly="" class="materialize-textarea"  ></textarea>
                        <label for="textarea1" style="font-size:15px"><i class="fa fa-pencil-square-o"></i>&nbspDescripción</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table id="ver_manteniemiento_encargados"  >
        <caption>Encargados </caption>
        <thead>
        <th > Nombre</th>
        <th  >Teléfono</th>
        <th  >Direcci&oacuten</th>
        <th  >Correo</th>
        </thead>
        <tbody></tbody>
    </table>
    <div class="row"><input type="text" style="display: none"></div>
     <div class="row"><input type="text" style="display: none"></div>
        
    <table id="ver_manteniemiento_activos"  >
        <caption>Activos </caption>
        <thead>
        <th  >C&oacutedigo</th>
        <th  >Tipo</th>
        </thead>
        <tbody></tbody>
    </table>
</div>
 </form>