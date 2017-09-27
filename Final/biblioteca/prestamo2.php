

<div class="row">
    <div class="col-md-5">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default" name="libros">
                <div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-10">

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Libro</label><input type="text" id="codigo" list="list_lib" class="icons" autofocus onkeypress="buscarLibro2(event)"></div>
                
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
                <div id="libro1" class="panel-collapse collapse">
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
    </div>


    <div class="col-md-5">
        <div class="panel">
            <div class="panel-heading p_libro">

                <div class="row">
                <div class="col-md-10">

                 <div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Usuario</label><input type="text" id="codigo" list="list_user"  onkeypress="buscarLibro2(event)"></div>
                
                </div>
               
                
                    </div>
                </div>
            <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td width="60%"><b>Nombre:</b></td>
                                <td width="40%"><div id="nombre"></div></td>
                            </tr>
                            <tr>
                                <td><b>Apellido:</b></td>
                                <td><div id="apellido"></div></td>
                            </tr>
                            <tr>
                                <td><b>Telefono:</b></td>
                                <td><div id="telefono"></div></td>
                            </tr>
                            <tr>
                                <td><b>Edad:</b></td>
                                <td><div id="edad"></div></td>
                            </tr>
                            <tr>
                                <td><b>Ultimo:</b></td>
                                <td class="alert alert-success"><div id="ultimo">Finalizado</div></td>
                            </tr>
                        </table>
                    </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="panel">
            <div class="panel-heading">Fechas</div>
            <div class="panel-body">
                <label for="fecha_sal">Fecha de Salida</label>
                <input type="date" id="fecha_sal" class="datepicker" value="<?php echo (String)date("Y-m-d H:i:s") ?>">
                <label for="fecha_dev">Fecha de Devolucion</label>
                <input type="date" id="fecha_dev" class="datepicker">
               
            </div>
        </div>
    </div>
</div>

<datalist id="list_lib">
    
    <option value="0001-001-003-001"><img src="" alt="">Papirusa- Hugo Aguirre</option>
    <option value="2">Iliada- Homero</option>
    <option value="3">Odisea- Homero</option>
    <option value="4">Cuentos de Barro- Salarrue</option>
    <option value="5">Otro...</option>
</datalist>

<datalist id="list_user">
    
    <option value="0001-001-003-001"><img src="" alt="">Carlos Antonio Torres</option>
    <option value="2">Boris Ricardo Miranda</option>
    <option value="3">Romario Abelardo Villalobos</option>
    
</datalist>