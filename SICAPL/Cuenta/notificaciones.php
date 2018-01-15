<div class="container-fluid">
    <div class="panel-group" id="accordion3">
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold "  data-parent="#accordion3" href="#collapse-Catlibros">Prestamos de libros por caducar/caducados</a>

            </div>

            <div id="collapse-Catlibros" class="panel-collapse collapse">
                <div class="panel-body" >
                    <?php
                    include_once '../app/Conexion.php';
                    include_once '../repositorios/repositorio_prestamolib.inc.php';
                    Conexion::abrir_conexion();
                    $listado = Repositorio_prestamolib::ListaPrestamos(Conexion::obtener_conexion());
                    ?>
                    <div>
                        <row>
                            <div class="col-md-12">
                                <table padding="20px" class="responsive-table display" id="tabla-paginada4">
                                    <thead>

                                    <th class="text-center">Carnet</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Libro/s</th>
                                    <th class="text-center">Fecha Devolucion</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($listado as $fila) {
                                            $fdev = date_create($fila['Devolucion']);
                                            $hoy = new DateTime("now");
                                            $rango = new DateTime("now +2 day");
                                            if (($fdev < $rango)) {
                                                ?>

                                                <tr>

                                                    <td class="text-center"><?php echo $fila['user'] ?></td>
                                                    <td class="text-center" rel="popover" data-container="body" data-togle="popover" data-placement="top" 
                                                        title="Informaci&oacute;n de contacto:" data-content="<b>Tel&eacute;fono: </b><?php echo $fila['telefono'] ?>
                                                        <br><b>Correo: </b><?php echo $fila['correo'] ?>"><?php echo $fila['nombre'] ?></td>
                                                    <td class="text-center"><?php echo $fila['titulo'] ?></td>

                                                    <td class="text-center alert alert-danger"><?php echo date_format(date_create($fila['Devolucion']), 'd-m-Y') ?></td>

                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </row>
                    </div>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->

        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold" data-parent="#accordion3" href="#collapse-CatAutores">Prestamos de Activos por caducar/caducados</a>

            </div>

            <div id="collapse-CatAutores" class="panel-collapse collapse">
                <div class="panel-body" >

                    <?php
                    include_once '../app/Conexion.php';
                    include_once '../repositorios/repositorio_prestamoact.php';
                    Conexion::abrir_conexion();
                    $listado = Repositorio_prestamoact::ListaPrestamosAct(Conexion::obtener_conexion());
                    ?>
                    <div>
                        <row>
                            <div class="col-md-12">
                                <table padding="20px" class="responsive-table display" id="tabla-paginada3">
                                    <thead>

                                    <th class="text-center">Carnet</th>
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Activo/s</th>

                                    <th class="text-center">Fecha Devolucion</th>

                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($listado as $fila) {
                                            $fdev = date_create($fila['Devolucion']);
                                            $hoy = new DateTime("now");
                                            $rango = new DateTime("now +2 day");
                                            $codigo = $fila['codigo'];
                                            if ($fdev < $rango){
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php echo $fila['carnet']; ?></td>

                                                <td class="text-center"> <?php echo $fila['nombre'] ?></td>
                                                <td class="text-center"><?php
                                                    Conexion::abrir_conexion();
                                                    $listado1 = Repositorio_prestamoact::obtenerListActP(Conexion::obtener_conexion(), $fila['codigo']);
                                                    $n = 0;
                                                    foreach ($listado1 as $fila1) {
                                                        $n++;
                                                    }
                                                    echo $n . " " . $fila1['tipo'] . "<br>";
                                                    ?>
                                                </td>
                                                <td class="text-center alert alert-danger"><?php echo date_format(date_create($fila['Devolucion']), 'd-m-Y') ?></td>
                                            </tr>
                                            <?php }} ?>
                                    </tbody>
                                </table>
                            </div>
                        </row>
                    </div>
                </div>

            </div>

        </div><!-- hasta aki cada consulta-->
    </div>
</div>
