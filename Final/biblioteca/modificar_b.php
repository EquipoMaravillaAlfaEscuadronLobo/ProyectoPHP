<div class="container">
    <div class="panel-group" id="accordion">
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-mlibros">Listado de Libros</a></div>
            <div id="collapse-mlibros" class="panel-collapse collapse">
                <div class="panel-body"><table padding="20px" class="responsive-table display" id="data-table-simple">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Autores</th>
                    <th class="text-center">Editorial</th>
                    <th class="text-center">Cantidad</th>
                    
                    <th class="text-center"></th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Papirusa</td>
                            <td class="text-center">Hugo Aguirre</td>
                            <td class="text-center">Harday Electric</td>
                            <td class="text-center">4</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Iliada</td>
                            <td class="text-center">Homero</td>
                            <td class="text-center">Anaya</td>
                            <td class="text-center"> 3</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Odisea</td>
                            <td class="text-center">Homero</td>
                            <td class="text-center">Anaya</td>
                            <td class="text-center">3</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Cuentos de Barro</td>
                            <td class="text-center">Salarrue</td>
                            <td class="text-center">Oceano</td>
                            <td class="text-center">2</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-mautores">Listado de Autores</a></div>
            <div id="collapse-mautores" class="panel-collapse collapse">
                <div class="panel-body"><form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                                    <label for="codigo">Codigo</label>
                                    <input type="text" id="codigo" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                                    <label for="apellido">Apellido</label>
                                    <input type="text" id="apellido" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                    <label for="fecha_nac" class="active">Fecha de Nacimiento</label>
                                    <input type="date" id="fecha_nac" class="form-control datepicker">
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="file-field input-field">
                                    
                                    
                                        <div class="btn">
                                            <span><i class="fa fa-address-book" aria-hidden="true"></i>Biografia</span>
                                            <input type="file">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input type="text" id="bio" class="form-control file-path validate">
                                        </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success">Guardar</button><button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-meditoriales">Listado de Editoriales</a></div>
            <div id="collapse-meditoriales" class="panel-collapse collapse">
                <div class="panel-body"><form action="">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                                    <label for="codigo">Codigo</label>
                                    <input type="text" id="codigo" class="form-control" disabled>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-phone prefix" aria-hidden="true"></i>
                                    <label for="telefono">Telefono</label>
                                    <input type="text" id="telefono" class="form-control">
                                </div>
                            </div>
                       
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                    <input type="email" id="email" class="form-control validate" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                        <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-map-marker prefix" aria-hidden="true"></i>
                                    <label for="fecha_nac" class="active">Direccion</label>
                                    <textarea id="direccion" name="direccion" class="materialize-textarea"></textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="panel-footer text-center">
                    <button class="btn btn-success">Guardar</button><button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>