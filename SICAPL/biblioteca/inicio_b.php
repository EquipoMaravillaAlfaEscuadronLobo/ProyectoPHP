<?php
$titulo1 = "Biblioteca";
include_once('../plantillas/cabecera.php');
include_once('../plantillas/menu.php');
?>

<div class="nav-content" name="">
    <ul class="tabs tabs-transparent">
        <li class="tab">
            <a  href="#test2">
                <i class="fa fa-plus" aria-hidden="true"></i>Registro
            </a>
        </li>
        <li class="tab">
            <a href="#test1">
                <i class="fa fa-book" aria-hidden="true"></i>  Bibliografia
            </a>
        </li>


        <li class="tab">
            <a class="active" href="#test3">
                <i class="fa fa-handshake-o" aria-hidden="true"></i> Prestamo
            </a>
        </li>
        <li class="tab">
            <a href="#test5">
                <i class="fa fa-list-alt" aria-hidden="true"></i>
                Consultas
            </a>
        </li>
        <li class="tab">
            <a href="#test6">
                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                Reportes
            </a>
        </li>
    </ul>
</div>
</nav>

<div class="col s12" id="test1">

    <?php include('modificar_b.php'); ?>
</div>
<div class="col s12" id="test2">
    <?php include('registro_b.php'); ?>
</div>
<div class="col s12" id="test3">
    <?php include('listado_p_b.php'); ?>
</div>

<div class="col s12" id="test5">
    <?php include('consultas.php'); ?>

</div>

<div class="col s12" id="test6">
    <?php include('reportes.php'); ?>

</div>





<?php
include_once('../plantillas/pie_de_pagina.php');
?>
<script type="text/javascript">
    $(document).ready(function () {

        $('.librof').submit(function () {
            var formData = new FormData(document.getElementById('frmLibro'));

            //var codigo=$('#codigol').val();

            // alert(codigo);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function (resp) {
                if (resp == 1) {
                    swal("Exito", "Libro Registrado", "success")
                            .then((value) => {
                                document.getElementById('frmLibro').reset();

                                location.href = "inicio_b.php";
                            }
                            )



                } else {
                    if (resp == 0) {


                    } else {
                        swal("Oops", resp, "error")

                    }
                }
                )
                        return false;

            })
        })

        $('.autorf').submit(function () {
            //var codigo=$('#codigol').val();
            //alert(codigo);
            var formData = new FormData(document.getElementById('frmAutor'))
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function (resp) {
                if (resp == 1) {
                    swal("Exito", "Autor Registrado", "success")
                            .then((value) => {
                                document.getElementById('frmAutor').reset();
                                recargarCombos();

                            }
                            )

                } else {
                    swal("Oops", resp, "error")
                }


            })
            return false;
        })

        $('.editorialf').submit(function () {
            //var codigo=$('#codigol').val();
            // alert(codigo);
            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                data: $(this).serialize()
            }).done(function (resp) {
                if (resp == 1) {
                    swal("Exito", "Editorial Registrada", "success")
                            .then((value) => {
                                document.getElementById('frmEditoriales').reset();
                                recargarCombos();

                            }
                            )


                } else {
                    swal("Oops", "Editorial no registrada", "error")

                }
            })
            return false;
        })


    });
    function recargarCombos() {
        $.ajax({
            url: 'opcionesAutores.php',
            type: 'POST',
            data: ''
        }).done(function (resp) {
            $('select').material_select('destroy');
            $('select.autores').html(resp).fadeIn();
            $('select').material_select();
        })

        $.ajax({
            url: 'opcionesEditorial.php',
            type: 'POST',
            data: ''
        }).done(function (resp) {
            $('select').material_select('destroy');
            $('select.editorial').html(resp).fadeIn();
            $('select').material_select();
        })
    }
</script>
<script src="../js/sweetalert2.js"></script>
<script type="text/javascript">
    function editLibro() {
        document.frmEditLib.submit();
    }
    function abrirBajaLibros(codigo) {

        $.post("listadoDarBaja.php", {codigo: codigo}, function (mensaje) {
            $('#bajaLib2').html(mensaje).fadeIn();

        });


        $('#bajaLib').modal('open');
    }
    function Baja(codigo) {
        swal("Cuidado", "Seleccione el Motivo Por el que desea dar de Baja", "info", {
            buttons: {
                cancel: "Cancelar",
                catch : {
                    text: "Dañado",
                    value: "catch",
                },

                defeat: "Extraviado",
                otro: {
                    text: 'otro',
                    value: 'otros',
                },
            },

        }).then((value) => {
            var inputValue;
            switch (value) {

                case "otros":
                    swal("Escriba el motivo", {
                        content: 'input',
                        buttons: {
                            cancel: "Cancelar",
                            confirm: true,
                        },

                    }).then((value2, confirm) => {
                        swal(value2 + confirm);
                        $.ajax({
                            url: 'bajaLibro.php?codigo=' + codigo + '&motivo=' + value2,
                            type: 'GET',
                            dataType: "html",
                            data: {codigo: codigo, motivo: value2},
                            cache: false,
                            contentType: false,
                            processData: false
                        }).done(function (resp) {
                            if (resp == 1) {
                                swal("Exito", "Libro Borrado", "success", {
                                }).then(() => {
                                    location.href = "inicio_b.php";

                                });

                            } else {
                                swal("Oops", "No se pudo dar de Baja", "error")

                            }
                        })
                    });
                    break;

                case "catch":
                    inputValue = "Dañado";
                    $.ajax({
                        url: 'bajaLibro.php?codigo=' + codigo + '&motivo=' + inputValue,
                        type: 'GET',
                        dataType: "html",
                        data: {codigo: codigo, motivo: inputValue},
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function (resp) {
                        if (resp == 1) {
                            swal("Exito", "Libro Borrado", "success", {
                            }).then((value2) => {
                                location.href = "inicio_b.php";

                            });

                        } else {
                            swal("Oops", "No se pudo dar de Baja", "error")

                        }
                    })
                    break;
                case "defeat":
                    inputValue = "Extraviado";
                    $.ajax({
                        url: 'bajaLibro.php?codigo=' + codigo + '&motivo=' + inputValue,
                        type: 'GET',
                        dataType: "html",
                        data: {codigo: codigo, motivo: inputValue},
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function (resp) {
                        if (resp == 1) {
                            swal("Exito", "Libro Borrado", "success", {
                            }).then((value2) => {
                                location.href = "inicio_b.php";

                            });

                        } else {
                            swal("Oops", "No se pudo dar de Baja", "error")

                        }
                    })
                    break;



            }

        });
    }
</script>


