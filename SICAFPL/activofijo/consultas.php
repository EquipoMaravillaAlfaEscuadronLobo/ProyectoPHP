<div class="container-fluid">
    <div class="panel-group" id="accordion3">
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-Catlibros">Mantenimiento</a>

            </div>

            <div id="collapse-Catlibros" class="panel-collapse collapse">
                <div class="panel-body" >
                    <?php include('../consultas_activo/mantenimiento.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-LibPres">Activos en Prestamo</a>

            </div>

            <div id="collapse-LibPres" class="panel-collapse collapse">
                <div class="panel-body" >
                    <?php include('../consultas_activo/activosEnPrestam.php'); ?>
                </div>
            </div>
            
            </div><!-- hasta aki cada consulta-->
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-activos-baja">Activos Dados de Baja</a>

            </div>

            <div id="collapse-activos-baja" class="panel-collapse collapse">
                <div class="panel-body " >
                    <?php include('../consultas_activo/activosBaja.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->

        
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-CatAutores">Encargados de Mantenimiento</a>

            </div>

            <div id="collapse-CatAutores" class="panel-collapse collapse">
                <div class="panel-body " >
                    <?php include('../consultas_activo/catalogoEncargados.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-Depre">Depreciación</a>

            </div>

            <div id="collapse-Depre" class="panel-collapse collapse">
                <div class="panel-body " >
                    <?php include('../consultas_activo/depreciacion.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
        
                
        
    </div>
</div>

<div id="ver_manteniemiento" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading text-center">
        <h4>  Mantenimiento </h4> 
    </div>
    <div class="modal-content"> 
        <?php include('../consultas_activo/ver_manteniminento.php'); ?>
    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-6 text-right"><button  class="btn btn-success  " type="submit" form="imprimir_mante" >
                    <span class="fa fa-print" ></span>
                    Imprimir</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Salir</a></div>
        </div>
    </div>
</div>

<div id="ver_depre" class="modal modal-fixed-footer " >
    <div class="modal-heading panel-heading text-center">
        <h4>  Depreciación </h4> 
    </div>
    <div class="modal-content"> 
        <?php include('../consultas_activo/ver_depreciacion.php'); ?>
    </div>
    <div class="modal-footer ">
        <div class="row">
            <div class="col-md-6 text-right"><button  class="btn btn-success  " type="submit" form="imprimir_depre" >
                    <span class="fa fa-print" ></span>
                    Imprimir</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Salir</a></div>
        </div>
    </div>
</div>