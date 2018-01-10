function addLibro() {
    var imagenes = document.getElementsByName('libros').length + 1;
    var id = "borrar" + imagenes;
    var script = document.createElement("div");
    script.setAttribute("id", id)
    script.innerHTML = '<div class="panel panel-default" name="libros" id="libros1"><div class="panel-heading p_libro"><div class="row"><div class="col-md-10"><div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Libro</label><input type="text" id="codigol' + imagenes + '" name="codigol' + imagenes + '" onkeyup="buscarLibro2(this,event)" list="listaLibros"></div></div><div class="col-md-1"><a data-toggle="collapse" data-parent="#accordion" href="#libro' + imagenes + '"><i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i></a></div><div class="col-md-1"><button type="button" onclick="eliminar(' + imagenes + ')"><i class="fa fa-minus" id="restar' + imagenes + '" aria-hidden="true"></i></button></div></div></div><div id="libro' + imagenes + '" class="panel-collapse collapse in"><div class="panel-body"><div class="row"><div class="col-md-3"><img src="../imagenes/if_book_285636.png" id="fotLib' + imagenes + '" class="presentacionXZ"></div><div class="col-md-9"><table class="table table-striped table-bordered"><tr><td width="60%"><b>Titulo:</b></td><td width="40%"><div id="titulo' + imagenes + '"></div></td></tr><tr><td><b>Autor:</b></td><td><div id="autor' + imagenes + '"></div></td></tr><tr><td><b>Fecha de Publicacion:</b></td><td><div id="fecha_pub' + imagenes + '"></div></td></tr></table></div></div></div></div></div>';
    var fila = document.getElementById("accordion2");
    fila.appendChild(script);
}
function buscarLibro(event) {
    if (event.keyCode === 13) {
        document.getElementById('titulo').value = "Iliada";
        document.getElementById('autor').value = "Homero";
        document.getElementById('genero').value = "Epopeya";
        document.getElementById('fecha_pub').value = "762 A.C";
        document.getElementById('titulo').disabled = false;
        document.getElementById('autor').disabled = false;
        document.getElementById('genero').disabled = false;
        document.getElementById('fecha_pub').disabled = false;
        $('#titulo').prop('readonly', true);
        $('#autor').prop('readonly', true);
        $('#genero').prop('readonly', true);
        $('#fecha_pub').prop('readonly', true);
        //$("#collapse1").removeClass("out");
        //$("#collapse1").removeClass("in");
        $("#collapse1").addClass("in");
        $("#collapse1").attr('aria-expanded', true)

        // $("#despliegue").removeClass("fa-sort-desc");
        // $("#despliegue").addClass("fa-sort-asc");

    }


}
function buscarLibro2(valor, event) {
    var depto = valor.value;
    var numero = valor.id.substr(7)
//alert(valor.id);
    if (event.keyCode === 13) {
        if (depto != "") {
            $.post("getLibro.php", {libro: depto, numero: numero}, function (mensaje) {
                $('#listaLibros2').html(mensaje).fadeIn();


            });
        }
    }
}
function buscarUser(valor) {

    var depto = valor.value;
//var numero=valor.id.substr(7)
//alert(valor.id);
    if (depto != "") {
        $.post("getUser.php", {libro: depto}, function (mensaje) {
            $('#listaLibros2').html(mensaje).fadeIn();


        });
    }
    /*document.getElementById('carnet').innerHTML = 'TM17000';
     document.getElementById('nombreUser').innerHTML = 'Carlos Antonio Torres Martinez';
     document.getElementById('edad').innerHTML = '10';
     document.getElementById('sexo').innerHTML = "Masculino";
     document.getElementById('fot').setAttribute("src", "../imagenes/tipo.jpg")*/

}

function buscarUser2(valor) {


    var depto = valor.value;
//var numero=valor.id.substr(7)
//alert(valor.id);
    if (depto != "") {
        $.post("../activofijo/getUser.php", {libro: depto}, function (mensaje) {
            $('#listaLibros22').html(mensaje).fadeIn();


        });
    }

}


function eliminar(numero) {
    if (window.event.keyCode != 13) {
        var id = 'borrar' + numero;
        var top = document.getElementById('accordion2');
        var bottom = document.getElementById(id);
        //alert(bottom)
        if (bottom.parentNode) {
            bottom.parentNode.removeChild(bottom);
        }
        ;
    }
}
function buscarActivo(valor) {
//alert("paso");
    var depto = valor.value;

    if (depto.length == 16) {
        llenarTact(depto, "---");
    }
//    var numero = depto.substr(12)
//    document.getElementById('correlativo').value = numero + " - "

//var numero=valor.id.substr(7)
//alert(valor.id);
//    if (depto != "") {
//        $.post("../activofijo/getAct.php", {libro: depto}, function (mensaje) {
//            $('#listaLibros22').html(mensaje).fadeIn();
//
//
//        });
//        document.getElementById("agrAct").disabled = false;
//        //llenarTact(depto, "---");
//    }

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
            $.post("../activofijo/llenar.php", {libro: depto, lista: depto2}, function (mensaje) {
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


            if ($('#tabla_activo_prestamo >tbody >tr').length != 0) {
                for (var j = 0; j < cosd.length; j++) {

                    if (cosd[j].value == cap) {//verifica si hay activos con codigo de estado 3 que es el de danado
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

        }
        if (no.length > 5) {
            swal("Ooops", no + "\nya estan agregados", "warning");
        }
    }

}

function llenarTactMant(valor, lista) {

    var depto = valor;
   
    if (lista == "---" || lista=="reparar") {
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


            if (p == 0) {alert("paso");
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

