
function buscarUser2(valor) {
    var depto = valor.value;
    if (depto != "") {
        $.post("../activofijo/getUser.php", {libro: depto}, function (mensaje) {
            $('#listaLibros22').html(mensaje).fadeIn();
        });
    }
}


//function eliminar(numero) {
//    if (window.event.keyCode != 13) {
//        var id = 'borrar' + numero;
//        var top = document.getElementById('accordion2');
//        var bottom = document.getElementById(id);
//        //alert(bottom)
//        if (bottom.parentNode) {
//            bottom.parentNode.removeChild(bottom);
//        }
//        ;
//    }
//}
function buscarActivo(valor) {
//alert("paso");
    var depto = valor.value;
    if (depto != "") {
        llenarTact(depto, "---");
    }
}

function buscarActivo_mantenimiento(valor) {
    var depto = valor.value;

    if (depto.length == 16) {
        llenarTactMant(depto, "---");
    }
//alert("paso");
//    var depto = valor.value;
////var numero=valor.id.substr(7)
////alert(valor.id);
//
//    if (depto != "") {
//        $.post("../activofijo/getAct_mantenimiento.php", {libro: depto}, function (mensaje) {
//            $('#listaLibros22').html(mensaje).fadeIn();
//
//
//        });
//    }

}

function buscarEncargado(valor) {
//alert("paso");
    var depto = valor;
//var numero=valor.id.substr(7)
//alert(valor.id);
    if (depto != "" && depto.length > 0) {
        $.post("../activofijo/llenar_encargado.php", {libro: depto}, function (mensaje) {
            $('#listaLibros22').html(mensaje).fadeIn();


        });
    }

}

function listar(valor) {
//alert("paso");
    var depto = valor.value;
//var numero=valor.id.substr(7)
//alert(valor.id);
    if (depto != "") {
        $.post("../activofijo/listar.php", {libro: depto}, function (mensaje) {
            $('#informacion').html(mensaje).fadeIn();


        });
    }

}

function llenarTact(valor, lista) {

    var depto = valor;

    if (lista == "---") {
//var numero=valor.id.substr(7)
//alert(valor.id);
        if (depto != "") {//alert("paso"+depto);
            $.post("../activofijo/llenar.php", {libro: depto, lista: "depto2"}, function (mensaje) {
                $('#listaLibros22').html(mensaje).fadeIn();

            });

        }
    } else {
        lista = lista.split('/');
        var tipo = lista[0];

        lista = lista[1];
        lista = lista.split(','); //primero separo por " , "+
        var numero = [];
        var lista2 = [];
        var lista3 = [];
        var cap = ""; // codigo activo prestamo
        numero[0] = "---";
        lista2[0] = "";
        //var noDisponible = "";
        for (var i = 0; i < lista.length; i++) {
            if (lista[i].length > 2) {
                lista2.push(lista[i]);
            } else {
                numero.push("" + lista[i]);
            }
        }
        for (var i = 1; i < lista2.length; i++) {
            lista3 = lista2[i].split('-');

            for (var j = lista3[0]; j <= lista3[1]; j++) {
                numero[numero.length] = "" + j;
            }
        }
        var cosd = document.prestamoAct.elements["codsActs[]"];//se obtiene los elementos;
        var p = 0;
        var agregados = "";
        var no = "";
        var listacod = [];
        for (var i = 1; i < numero.length; i++) {
            p = 0;
            if (numero[i].length == 1) {
                cap = tipo + "-000" + numero[i];
            }

            if (numero[i].length == 2) {
                cap = tipo + "-00" + numero[i];
            }

            if (numero[i].length == 3) {
                cap = tipo + "-0" + numero[i];
            }

            if (numero[i].length == 4) {
                cap = tipo + "-" + numero[i];
            }
            listacod.push(cap);//llenando lista de cosigos solicitados 

            if ($('#tabla_activo_prestamo >tbody >tr').length != 0) {
                for (var j = 0; j < cosd.length; j++) {

                    if (cosd[j].value == cap) {//compuba quq no se ingrese activos reetidos a la tabla
                        p++;

                    }
                }
            }


            if (p == 0) {
                $.post("../activofijo/llenar.php", {libro: cap, lista: "---"}, function (mensaje) {
                    $('#listaLibros22').html(mensaje).fadeIn();

                });

            } else {
                no = no + "\n" + cap;
            }

        }//fin del for
        if (no.length > 5) {
            swal("Ooops", no + "\nya estan agregados", "warning");
        }
    }

}

function llenarTactMant(valor, lista) {

    var depto = valor;

    if (lista == "---" || lista == "reparar") {
//var numero=valor.id.substr(7)
//alert(valor.id);
        if (depto != "") {
            $.post("../activofijo/llenar_mantenimiento.php", {libro: depto, lista: lista}, function (mensaje) {
                $('#listaLibros22').html(mensaje).fadeIn();

            });

        }
    } else {
        lista = lista.split('/');
        var tipo = lista[0];

        lista = lista[1];
        lista = lista.split(','); //primero separo por " , "+
        var numero = [];
        var lista2 = [];
        var lista3 = [];
        var cap = ""; // codigo activo prestamo
        numero[0] = "---";
        lista2[0] = "";
        //var noDisponible = "";
        for (var i = 0; i < lista.length; i++) {
            if (lista[i].length > 2) {
                lista2.push(lista[i]);
            } else {
                numero.push("" + lista[i]);
            }
        }
        for (var i = 1; i < lista2.length; i++) {
            lista3 = lista2[i].split('-');

            for (var j = lista3[0]; j <= lista3[1]; j++) {
                numero[numero.length] = "" + j;
            }
        }
        var cosd = document.mant.elements["codsActsMant[]"];//se obtiene los elementos;
        var p = 0;
        var no = "";
        for (var i = 1; i < numero.length; i++) {
            p = 0;
            if (numero[i].length == 1) {
                cap = tipo + "-000" + numero[i];
            }

            if (numero[i].length == 2) {
                cap = tipo + "-00" + numero[i];
            }

            if (numero[i].length == 3) {
                cap = tipo + "-0" + numero[i];
            }

            if (numero[i].length == 4) {
                cap = tipo + "-" + numero[i];
            }

            if ($('#tabla_activo_mantenimiento >tbody >tr').length != 0) {
                for (var j = 0; j < cosd.length; j++) {

                    if (cosd[j].value == cap) {//verifica que no se agregue el mismo activo
                        p++;

                    }
                }
            }


            if (p == 0) {
                $.post("../activofijo/llenar_mantenimiento.php", {libro: cap, lista: "---"}, function (mensaje) {
                    $('#listaLibros22').html(mensaje).fadeIn();
                });
            } else {
                no = no + "\n" + cap;
            }

        }
        if (no.length > 5) {
            swal("Ooops", no + "\nya estan agregados", "warning");
        }
    }


}

function validarTablas() {
    var ok = true;

    var sel = document.mant.elements["accion_select_mantenimiento[]"];//se obtiene los elementos

    if ($('#tabla_activo_mantenimiento >tbody >tr').length == 0) {
        ok = false;
        swal("Ooops", "Tabla de activos vacia", "warning");
    } else {
        if ($('#datos_encargado2 >tbody >tr').length == 0) {
            ok = false;
            swal("Ooops", "Tabla de encargados vacia", "warning");
        } else {
            // codigo para verificar cuantos activos fueron a manteniemieto y siguen daniados


            var cont = 0;
            for (var i = 0; i < sel.length; i++) {

                if (sel[i].value == "3") {//verifica si hay activos con codigo de estado 3 que es el de danado
                    cont++;
                    ok = false;
                }
            }
            if (cont > 0) {//si hay activos con codido 3 
                swal({
                    title: "Desea continuar?",
                    text: "Hay activos que fueron a mantenimiento y siguen dañados!",
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonText: "Cancelar",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Si, continuar!",
                    closeOnConfirm: false
                },
                        function () {
                            cont = 0;
                            document.mant.submit();
                        });
            }
        }
    }
    return ok;
}

function agrEnca() {
    var depto = $("#listaeman option[value='" + $('#codigo_encargado').val() + "']").attr('label');//alert(depto);
    buscarEncargado(depto);

}

function  activarMant() {//para activar boton de agregar, se llama en getuser y get activo

    if (document.getElementById("codMantAct").value != "---") {
        document.getElementById("agrActMant").disabled = false;
    }
}
//para eliminar de las tablas
// fuente https://es.stackoverflow.com/questions/9141/eliminar-fila-de-tabla-html-con-jquery-o-js
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});

$(document).on('click', '.borrar_activo', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});


function agregarMant() {
    llenarTactMant("---", document.getElementById("selectCatMant").value + "/" + document.getElementById("correlativoMant").value);

    return false;
}


function recargarCombos2() {// actualiza el selec de cateoria cuando se registra una nueva
    $.ajax({
        url: 'select_categoria.php',
        type: 'POST',
        data: ''
    }).done(function (resp) {
        $('select').material_select('destroy');
        $('select.selectCat').html(resp).fadeIn();
        $('select').material_select();
    });
}
function recargarCombos3() {// actualiza el selec de proveedor cuando se registra uno nuevo
    $.ajax({
        url: 'select_proveedor.php',
        type: 'POST',
        data: ''
    }).done(function (resp) {
        $('select').material_select('destroy');
        $('select.selectPro').html(resp).fadeIn();
        $('select').material_select();
    });
}
function  guardar_mante() {//ver cod de funcion en js/libros.js
    if (validarTablas()) {
        document.mant.submit();
    }
}

function agregar() {

    llenarTact("---", document.getElementById("selectCatpres").value + "/" + document.getElementById("correlativo").value);

    return false;
}

//para eliminar de las tablas
// fuente https://es.stackoverflow.com/questions/9141/eliminar-fila-de-tabla-html-con-jquery-o-js
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});

$(document).on('click', '.borrar_activo_tabla_prestamo', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});

function  actualizar() {
    document.getElementById("opcion").value = 2;
    document.actualizar_prestamo_activo.submit();
}
function  finalizar() {
    if (validarTablas_dev()) {
        document.getElementById("opcion").value = 1;
        document.actualizar_prestamo_activo.submit();
    }
}

function validarTablas_dev() {

    var okk = true;
    // codigo para verificar no finalizar con activos en prestamo
    var sel2 = document.actualizar_prestamo_activo.elements["accion_select1[]"];//se obtiene los elementos
    if ($('#listActivoAct >tbody >tr').length == 1) {
       var op=  document.getElementsByName("accion_select1[]")[0].value; 
       if(op==1){
            return true;
       }else{
           cont1=10;
       }
    } else {
        var cont1 = 0;
        for (var i = 0; i < sel2.length; i++) {
            if (sel2[i].value == "2") {//verifica si hay activos con codigo de estado 2, que es el de en prestamo
                cont1++;
                okk = false;
            }
        }
    }

    if (cont1 > 0) {//si hay activos con codido 3 
        swal("Ooops", "No puede finalizar el prestamo con activos pendientes de devolver", "warning");

    }


    return okk;
}

//    function  valiD() {
//
//        var p1 = document.getElementById('idVal').value;
//        var p = document.getElementById('Secreto').value;
//        var m = document.getElementById('idMotivoE').value;
//
//        if (p1 == p) {
//            if (m.length > 3) {
//                document.eliminarAct.submit();
//            } else {
//                swal("Oops", "ingrese  Motivo Valido", "error");
//            }
//
//        } else {
//            swal("Oops", "Contraseña Incorrecta", "error");
//        }
//
//    }

