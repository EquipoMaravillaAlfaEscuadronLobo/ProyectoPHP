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
    var numero = valor.id.substr(7);
    //alert(numero+" "+depto);
    var bandera=true;
    
    for(var i=1;i<=document.getElementsByName('libros').length;i++){
               if(i==numero){
                   continue;
               }
                if(document.getElementById('codigol'+i).value===depto){
                    bandera=false;
                    
                }
                }
            
        
//alert(valor.id);
    if(bandera===false){
        swal("Atencion","Libro ya esta en la lista para prestar","error");
        document.getElementById('codigol'+numero).value="";
    }else{
    if (event.keyCode === 13) {
        if (depto != "") {
            $.post("getLibro.php", {libro: depto, numero: numero}, function (mensaje) {
                $('#listaLibros2').html(mensaje).fadeIn();


            });
        }
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










