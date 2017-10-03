function addLibro() {
var imagenes = document.getElementsByName('libros').length + 1;
        var script = document.createElement("div");
        script.innerHTML = '<div class="panel panel-default" name="libros"><div class="panel panel-default" name="libros"><div class="panel-heading p_libro"><div class="row"><div class="col-md-10"><div class="input-field"><i class="fa fa-search prefix" aria-hidden="true"></i><label for="">Buscar Libro</label><input type="text" id="codigo" autofocus onkeypress="buscarLibro2(event)"></div></div><div class="col-md-2"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-sort-desc" id="despliegue" aria-hidden="true"></i></a></div></div></div><div id="collapse1" class="panel-collapse collapse"><div class="panel-body"><table class="table table-striped table-bordered"><tr><td><b>Titulo:</b></td><td><div id="titulo"></div></td></tr><tr><td><b>Autor:</b></td><td><div id="autor"></div></td></tr><tr><td><b>Genero:</b></td><td><div id="genero"></div></td></tr><tr><td><b>Fecha de Publicacion:</b></td><td><div id="fecha_pub"></div></td></tr></table></div></div></div></div></div>';
        var fila = document.getElementById("accordion");
        fila.appendChild(script);
}
function buscarLibro(event) {
if (event.keyCode == 13) {
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
function buscarLibro2(){
document.getElementById('titulo').innerHTML = 'Iliada';
        document.getElementById('autor').innerHTML = 'Homero';
        document.getElementById('genero').innerHTML = 'Epopeya';
        document.getElementById('fecha_pub').innerHTML = "762 A.C";
        $("#libro1").attr('aria-expanded', true)
        $("#libro1").addClass("in");
        $("#despliegue").removeClass("fa-sort-desc");
        $("#despliegue").addClass("fa-sort-asc");
}
function buscarUser(){
document.getElementById('carnet').innerHTML = 'TM17000';
        document.getElementById('nombreUser').innerHTML = 'Carlos Antonio Torres Martinez';
        document.getElementById('edad').innerHTML = '10';
        document.getElementById('sexo').innerHTML = "Masculino";
        document.getElementById('fot').setAttribute("src", "../imagenes/tipo.jpg")

}
function buscarActivo(){
document.getElementById('codigoActivo').innerHTML = '1995-25-05';
        document.getElementById('tipoActivo').innerHTML = 'Silla';
        document.getElementById('encargado').innerHTML = 'Boris Ricardo Miranda Ayala';
        document.getElementById('estado').innerHTML = "Disponible";
}