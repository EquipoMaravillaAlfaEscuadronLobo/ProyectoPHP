 <div class="row">
     
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
                    <table padding="20px" class="responsive-table display" id="tabla-listPrestamoActivo">
                        <thead>
                        <th>Cantidad</th>
                        <th>Tipo</th>
                        <th>Usuario</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Silla</td>
                                <td>Carlos Antonio Torres Martinez</td>
                                <td>12/08/2017</td>
                                <td>31/08/2017</td>
                                <td class="alert alert-warning"><a class="btn btn-warning "   onclick="nuevaCat(5) "><span aria-hidden="true" class="fa fa-exclamation-circle">
                        </span>Pendiente</a></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Mesa</td>
                                <td>Roberto Carlos Guevara Lopez</td>
                                <td>12/08/2017</td>
                                <td>29/08/2017</td>
                                <td class="alert alert-success">Finalizado</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    
</div>



<div id="nuevoPrestamoAct" class="modal modal-fixed-footer nuevo ">
    <div class="modal-heading panel-heading">
        Registrar Prestamo 
    </div>
    <div class="modal-content">
    
        <?php   include('prestamo_act.php'); ?>
 
    </div>
   <div class="modal-footer ">
        <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="glyphicon glyphicon-floppy-disk"></i>  Guardar</a></div>
        
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a></div>
        </div>
    </div>
</div>

<div id="actPres" class="modal modal-fixed-footer nuevo ">
    <div class="modal-heading panel-heading">
        Actualizar Prestamo 
    </div>
    <div class="modal-content">
    
        <?php   include('actualizar_prestamo.php'); ?>
 
    </div>
   <div class="modal-footer ">
   <div class="row">
        <div class="col-md-2 text-right"></div>
        <div class="col-md-6">
            <a href="#" class="modal-action modal-close waves-effect btn btn-success"><i class="fa fa-check"></i> Finalizar</a>
            <a href="#" class="modal-action modal-close waves-effect btn btn-warning " disabled> <i class="fa fa-refresh" ></i> Actualizar</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
        </div>
        <div class="col-md-2 text-right"></div>
        </div>
    </div>
</div>