<div class="container">


    <div class="row">
        <div class="panel" name="libros">
            <div class="panel-heading text-center">
                <div class="row">

                    <div class="col-md-12">
                        <h3>Lista De Usuarios</h3>
                    </div>
                </div>
            </div>


            <div class="panel-body">
                <table padding="20px" class="responsive-table display" id="data-table-simple">
                    <thead class="">
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Nombre Completo</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Direccion</th>
                    <th class="text-center">Correo</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Eliminar</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"><button class="btn btn-success btn-block btn-large" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">jhon Cefhdsk hfkadhfkj fhafkjahkjna</td>
                            <td class="text-center">7433-1233</td>
                            <td class="text-center">Colonia Avenidsd fkjaskldjfak ldjfakdjalda dfhsj dfaf Sur</td>
                            <td class="text-center">jego@gmj iadkj l.com dfadf </td>
                            <td class="text-center"><img src="../imagenes/imagenes.jpg" class="presentacionXZ" alt=""></td>
                            <td class="text-center"><button class="btn btn-danger btn-block btn-large"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>

                        <tr>
                            <td class="text-center"><button class="btn btn-success btn-block btn-large" onclick="abrirEdicion()"> <i class="Medium material-icons prefix">edit</i> </button></td>
                            <td class="text-center">jhon Cefhdsk hfkadhfkj fhafkjahkjna</td>
                            <td class="text-center">7433-1233</td>
                            <td class="text-center">Colonia Avenidsd fkjaskldjfak ldjfakdjalda dfhsj dfaf Sur</td>
                            <td class="text-center">jego@gmj iadkj l.com dfadf </td>
                            <td class="text-center"><img src="../imagenes/imagenes.jpg" class="presentacionXZ" alt=""></td>
                            <td class="text-center"><button class="btn btn-danger btn-block btn-large"> <i class="Medium material-icons prefix">delete</i> </button></td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>

<!--esta es para abrir la ventana de edicion-->
<div id="edicion" class="modal modal-fixed-footer nuevo">
    <div class="modal-content">
        <div class="row">
            <div class="col-md-12">   <?php include('editar_usuario.php'); ?></div>
        </div>
     
    </div>
</div>



