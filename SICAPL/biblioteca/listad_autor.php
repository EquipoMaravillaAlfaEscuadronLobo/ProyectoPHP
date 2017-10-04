
<table padding="20px" class="responsive-table display" id="tabla-paginada">
                    <thead class="">
                    <th class="text-center"></th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Apellido</th>
                    <th class="text-center">Fecha de Nacimiento</th>
                    <th class="text-center">Biografia</th>
                    
                    <th class="text-center"></th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionAut()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Hugo</td>
                            <td class="text-center">Aguirre</td>
                            <td class="text-center">01-01-1700</td>
                            <td class="text-center"><button class="btn btn-info">Biografia</button></td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionAut()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Homero</td>
                            <td class="text-center">---</td>
                            <td class="text-center">700 AC</td>
                            <td class="text-center"><button class="btn btn-info">Biografia</button></td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="btn btn-success" onclick="abrirEdicionAut()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">Salvador Salazar</td>
                            <td class="text-center">Arrue</td>
                            <td class="text-center">09-05-1925</td>
                            <td class="text-center"><button class="btn btn-info">Biografia</button></td>
                            
                            <td class="text-center"><button class="btn btn-danger"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>
                        
                    </tbody>
                </table>


                 <div id="edicionAut" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('frm_edit_aut.php'); ?>
    </div>
    <div class="modal-footer">
    <div class="row">
        <div class="col-md-6 text-right"><a href="#" class="modal-action modal-close waves-effect btn btn-success">Actualizar</a></div>
        <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>