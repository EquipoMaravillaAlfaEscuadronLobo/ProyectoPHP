<div class="container">
   
    <div id="nuevo" class="modal">
    <?php include('../plantillas/pruebas.php'); ?>
</div>

    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Lista De Administradores</h3>
                    </div>
                </div>
            </div>
            

            <div class="panel-body">
                <table padding="20px" class="responsive-table display" id="data-table-simple">
                    <thead class="">
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Nombre Completo</th>
                    <th class="text-center">Usuario</th>
                    <th class="text-center">Nivel</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Eliminar</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><button class="btn btn-success btn-block btn-large" onclick="abrirModal()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">jhon Cefhdsk hfkadhfkj fhafkjahkjna</td>
                            <td class="text-center">jhon01</td>
                            <td class="text-center">Admin</td>
                            <td class="text-center"><img src="../imagenes/imagenes.jpg" class="presentacionXZ" alt=""></td>
                            <td class="text-center"><button class="btn btn-danger btn-block btn-large"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>

                        <tr>
                            <td class="text-center"><button class="btn btn-success btn-block btn-large"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">albertano Cefhdsk hfkadhfkj fhafkjahkjna</td>
                            <td class="text-center">albert 02</td>
                            <td class="text-center">root </td>
                            <td class="text-center"><img src="../imagenes/imagenes.jpg" class="presentacionXZ" alt=""></td>
                            <td class="text-center"><button class="btn btn-danger btn-block btn-large"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


