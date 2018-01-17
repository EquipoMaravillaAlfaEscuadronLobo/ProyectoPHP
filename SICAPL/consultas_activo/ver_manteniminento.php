
<div class="row">
    <table>
        <tbody>
            <tr >
                <td style="height:10px;"><div class="col m12">
                        <div class="input-field">
                            <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                            <label for="fecha_pub" class="active" style="font-size:16px">Fecha de Mantenimiento</label>
                            <input type="text" placeholder="" id="ver_fecha_mant" readonly=""   >
                        </div>
                    </div></td>
                <td style="height:10px;">
                    <div class="input-field col m12">
                        <i class="fa fa-usd prefix"></i> 
                        <input type="number" placeholder="" min="0" step="any" id="ver_costoTotal"  class="text-center validate" readonly="">
                        <label for="precioUnitario" style="font-size:16px">Precio Total<small></small> </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="height:15px;">
                    <div class="input-field col s12">
                        <textarea id="ver_descrMant" placeholder="" minlength="8"  readonly="" class="materialize-textarea"  ></textarea>
                        <label for="textarea1" style="font-size:15px"><i class="fa fa-pencil-square-o"></i>&nbspDescripción</label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <table id="ver_manteniemiento_encargados" class="text-center">
        <caption>Encargados </caption>
        <thead>
        <th class="text-center">Nombre</th>
        <th class="text-center">Teléfono</th>
        <th class="text-center">Direcci&oacuten</th>
        <th class="text-center">Correo</th>
        </thead>
        <tbody></tbody>
    </table>
    <div class="row"><input type="text" style="display: none"></div>
     <div class="row"><input type="text" style="display: none"></div>
        
    <table id="ver_manteniemiento_activos" class="text-center">
        <caption>Activos </caption>
        <thead>
        <th class="text-center">C&oacutedigo</th>
        <th class="text-center">Tipo</th>
        </thead>
        <tbody></tbody>
    </table>
</div>


