
<table padding="20px" class="responsive-table display" id="data-table-simple">
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
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionLib()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Papirusa</td>
                            <td class="text-center">Hugo Aguirre</td>
                            <td class="text-center">Harday Electric</td>
                            <td class="text-center">4</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionLib()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Iliada</td>
                            <td class="text-center">Homero</td>
                            <td class="text-center">Anaya</td>
                            <td class="text-center"> 3</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionLib()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Odisea</td>
                            <td class="text-center">Homero</td>
                            <td class="text-center">Anaya</td>
                            <td class="text-center">3</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionLib()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Cuentos de Barro</td>
                            <td class="text-center">Salarrue</td>
                            <td class="text-center">Oceano</td>
                            <td class="text-center">2</td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                    </tbody>
                </table>


               <div id="edicionLib" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('frm_edit_lib.php'); ?>
    </div>
    <div class="modal-footer">
    <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success">Actualizar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>