 <div class="row">
     </row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Prestamos</h3> </div>
                        <div class="col-md-2">  <a class="btn btn_primary"  target="_blank" onclick="nuevoPretamoAct()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                        </span>Nuevo Prestamo</a></div>
                    </div>       
                </div>
                <div class="panel-body">                
                    <table padding="20px" class="responsive-table display" id="data-table-simple">
                        <thead>
                        <th>Codigo</th>
                        <th>Tipo</th>
                        <th>Usuario</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1995-25-05</td>
                                <td>Silla</td>
                                <td>Carlos Antonio Torres Martinez</td>
                                <td>12/08/2017</td>
                                <td>31/08/2017</td>
                                <td class="alert alert-warning"><a class="btn btn-warning "   onclick="nuevaCat(5) "><span aria-hidden="true" class="fa fa-exclamation-circle">
                        </span>Pendiente</a></td>
                            </tr>
                            <tr>
                                <td>1995-12-3</td>
                                <td>Mesa</td>
                                <td>Roberto Carlos Guevara Lopez</td>
                                <td>12/08/2017</td>
                                <td>29/08/2017</td>
                                <td class="alert alert-success">Finalizado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                  
                </div>
            </div>
        </div>
    </row>
</div>



<div id="nuevoPrestamoAct" class="modal modal-fixed-footer nuevo ">

    <div class="modal-content">
    
        <?php   include('prestamo_act.php'); ?>
 
    </div>
   <div class="modal-footer ">
        <a href="#" class="modal-action modal-close waves-effect btn btn-success">Guardar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>

<div id="actPres" class="modal modal-fixed-footer nuevo ">
    
    <div class="modal-content">
    
        <?php   include('actualizar_prestamo.php'); ?>
 
    </div>
   <div class="modal-footer ">
        <a href="#" class="modal-action modal-close waves-effect btn btn-success">Finalizar</a>
        <a href="#" class="modal-action modal-close waves-effect btn btn-warning ">Actualizar</a>
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Salir</a>
    </div>
</div>