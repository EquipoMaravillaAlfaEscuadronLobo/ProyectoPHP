<?php
include_once '../app/Conexion.php';
include_once '../repositorios/repositorio_prestamolib.inc.php';
Conexion::abrir_conexion();
$listado = Repositorio_prestamolib::ListaPrestamos(Conexion::obtener_conexion());
?>
<div>
    <row>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-8"><h3>Listado de Prestamos</h3>
                        </div>
                        <div class="col-md-2">  <a class="btn btn_primary"  target="_blank" onclick="abrirModal()"><span aria-hidden="true" class="glyphicon glyphicon-plus">
                                </span>Nuevo Prestamo</a></div>
                    </div>       
                </div>
                <div class="panel-body">				
                    <table padding="20px" class="responsive-table display" id="tabla-paginada4">
                        <thead>
                        <th>Codigo</th>

                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Libro</th>
                        <th>Fecha Salida</th>
                        <th>Fecha Devolucion</th>
                        <th>Estado</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listado as $fila) {
                                $fdev = date_create($fila['Devolucion']);
                                $hoy = new DateTime("now");
                                ?>
                                <tr>
                                    <td><?php echo $fila['codigo'] ?></td>
                                    <td><?php echo $fila['user'] ?></td>
                                    <td rel="popover" data-container="body" data-togle="popover" data-placement="top" 
                                        title="Informaci&oacute;n de contacto:" data-content="<b>Tel&eacute;fono: </b><?php echo $fila['telefono'] ?>
                                        <br><b>Correo: </b><?php echo $fila['correo'] ?>"><?php echo $fila['nombre'] ?></td>
                                    <td><?php echo $fila['titulo'] ?></td>
                                    <td><?php echo date_format(date_create($fila['fecha_salida']), 'd-m-Y') ?></td>
                                    <td><?php echo date_format(date_create($fila['Devolucion']), 'd-m-Y') ?></td>
                                    <td class="alert <?php
                                    if ($fdev > $hoy) {
                                        echo 'alert-warning';
                                    } else {
                                        echo 'alert-danger';
                                    }
                                    ?>  pendiente" onclick="abrirFinPres('<?php echo $fila['codigo'] ?>', '<?php echo date_format(date_create($fila['Devolucion']), 'd-m-Y') ?>', '<?php echo $fila['cantidad'] ?>')">Pendiente</td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </row>
</div>

<div id="nuevo" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php include('prestamo2.php'); ?>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col-md-6 text-right"><button onclick="enviar()" class="waves-effect btn btn-success">Guardar</button></div>
            <div class="col-md-6 text-left"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>

<div id="finalizarPL" class="modal modal-fixed-footer nuevo">
    <div class="modal-content modal-lg">
        <?php //include('./ListaFinPrestamo.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div id="finalizarPL2"></div>
            </div>


        </div>
    </div>
    <div class="modal-footer">
        <div class="row">

            <div class="col-md-12 text-center"><a href="#" class="modal-action modal-close waves-effect btn btn-danger">Salir</a></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function enviar() {
        if (window.event.keyCode !== 13) {
            var bandera = true;
            var ultimo = document.getElementsByName('libros');
            var conteo = ultimo.length;
            var last = ultimo[conteo - 1].id.substr(6);
           // alert(last);
            document.getElementById('num').value = last;
            for(var i=1;i<=last;i++){
               
               if($('#codigol'+i).length != 0){
                if(document.getElementById('codigol'+i).value===""||document.getElementById('codigouser').value===""){
                    bandera=false;
                    
                }
            }
                }
                if(bandera==true){
             document.frmPrestamoLibro.submit();
                }else{
                    swal("Cuidado","Campos Vacios","error");
                }
        }
    }

    function devolucion(dev,count, cl, cp) {
        if (count == 1)
        {
            finalizar(cp);
        } else {
            finalizar1(cl, cp, count-1, dev);
        }
    }
    function finalizar1(cl, cp, count, dev) {
        swal("Seguro que desea devolver est libro", {
            buttons: {
                cancel: "Cancelar",
                confirm: {
                    text: "Confirmar",
                    value: "confirm"
                }
            },
            icon: "info",
        }).then(value => {
            switch(value){
                case "confirm":
                    $.ajax({
                url: 'devolver1.php?codigop=' + cp + '&codigol=' + cl,
                type: 'GET',
                dataType: "html",
                data: {codigop: cp, codigol: cl},
                cache: false,
                contentType: false,
                processData: false
            }).done(function (resp) {
                if (resp == 1) {
                    swal("Exito", "Libro Devuelto", "success")
                            .then((value) => {
                                $.post("listaFinPrestamo.php", {codigo: cp, dev: dev, cantidad: count}, function (mensaje) {
                                    $('#finalizarPL2').html(mensaje).fadeIn();

                                });
                            }
                            );
                    $("#tabla-paginada4").load("listado_p_b.php #tabla-paginada4");
                } else {
                    swal("Oops", resp, "error")

                }
            });
                    break;
                default:
                    return false;
                    break;
            }

        })
    }
    function finalizar(codigo) {

        swal("Seguro que desea finalizar el prestamo?", {
            content: {
                element: 'input',
                attributes: {
                    placeholder: 'Escriba aqui una observacion',
                    type: 'text',

                }
            },
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                confirm: true,
            },
        }).then((value, confirm) => {
            swal(value + confirm)
            $.ajax({
                url: 'finalizarPrestamo.php?codigo=' + codigo + '&motivo=' + value,
                type: 'GET',
                dataType: "html",
                data: {codigo: codigo, motivo: value},
                cache: false,
                contentType: false,
                processData: false
            }).done(function (resp) {
                if (resp == 1) {
                    swal("Exito", "Prestamo Finalizado", "success")
                            .then((value) => {
                                location.href = "inicio_b.php";
                            }
                            );
                } else {
                    swal("Oops", resp, "error")

                }
            });
        });





    }
    function actualizarFecha(codigo) {
        var fecha = document.getElementById('newDev').value;
        $.ajax({
            url: 'actualizarPrestamo.php?codigo=' + codigo + '&fecha=' + fecha,
            type: 'GET',
            dataType: "html",
            data: {codigo: codigo, fecha: fecha},
            cache: false,
            contentType: false,
            processData: false
        }).done(function (resp) {
            if (resp == 1) {
                swal("Exito", "Fecha de Prestamo Actualizada", "success")
                        .then((value) => {
                            location.href = "inicio_b.php";
                        }
                        );
            } else {
                swal("Oops", resp, "error")

            }
        });
    }


</script>

<script>
    function abrirFinPres(codigo, dev, cant) {

        $.post("listaFinPrestamo.php", {codigo: codigo, cantidad: cant, dev: dev}, function (mensaje) {
            $('#finalizarPL2').html(mensaje).fadeIn();

        });


        $('#finalizarPL').modal('open');
    }
</script>