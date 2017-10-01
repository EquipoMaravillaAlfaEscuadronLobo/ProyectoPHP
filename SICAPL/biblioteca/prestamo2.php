

<div class="row">
    <div class="col-md-5">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" name="libros">
                <div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-10">

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Libro</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)"></div>
                
                </div>
                <div class="col-md-1">
                   <a data-toggle="collapse" data-parent="#accordion" href="#libro1">
                   <i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i>
                </a>
                </div>
                <div class="col-md-1">
                   
                  <i class="fa fa-minus" id="despliegue" aria-hidden="true"></i>
                
                </div>
                    </div>
                </div>
                <div id="libro1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td width="60%"><b>Titulo:</b></td>
                                <td width="40%"><div id="titulo"></div></td>
                            </tr>
                            <tr>
                                <td><b>Autor:</b></td>
                                <td><div id="autor"></div></td>
                            </tr>
                            <tr>
                                <td><b>Genero:</b></td>
                                <td><div id="genero"></div></td>
                            </tr>
                            <tr>
                                <td><b>Fecha de Publicacion:</b></td>
                                <td><div id="fecha_pub"></div></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <but class="btn" onClick="addLibro()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
            </span>Agregar Libro</button>
        </but></div>
    <div class="col-md-5">
        
            <div class="panel panel-default" name="libros">
                <div class="panel-heading p_libro">

               
                

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Usuario</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)"></div>
                
                
                </div>
                
                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td width="60%"><b>Nombre:</b></td>
                                <td width="40%"><div id="nombre"></div></td>
                            </tr>
                            <tr>
                                <td><b>Edad:</b></td>
                                <td><div id="edad"></div></td>
                            </tr>
                            <tr>
                                <td><b>Sexo:</b></td>
                                <td><div id="sexo"></div></td>
                            </tr>
                            <tr>
                                <td><b>Ultimo:</b></td>
                                <td><div id="ultimo"></div></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        
        
    
    <div class="col-md-2">
        <div class="panel">
            <div class="panel-heading">Fechas</div>
            <div class="panel-body">
                
                <input type="text" id="fecha_sal" placeholder="Fecha de Salida" value="31/08/2017">
                <input type="date" id="fecha_dev" class="datepicker" placeholder="Fecha de Devolucion" >
            </div>
        </div>
    </div>
</div>

