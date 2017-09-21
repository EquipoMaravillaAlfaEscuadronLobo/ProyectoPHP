<!--<script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/data-tables-script.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/foto.js"></script>
<script src="../js/alertaPersonalizadas.js"></script>
<script src="../js/miValidacion.js"></script>

<script>
    $(document).ready(function () {
        $('.datepicker').pickadate();
    });
</script>        

<script>
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

<script>
$(document).ready(function () {
     $('.collapse')
         .on('shown.bs.collapse', function() {
             $(this) .parent()
                 .find(".fa-sort-desc")
                 .removeClass("fa-sort-desc")
                 .addClass("fa-sort-asc");
             })
         .on('hidden.bs.collapse', function() {
             $(this)
                 .parent()
                 .find(".fa-sort-asc")
                 .removeClass("fa-sort-asc")
                 .addClass("fa-sort-desc");
             });
         });
    $(document).ready(function () {

        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal({
            dismissible: true, // Modal can be dismissed by clicking outside of the modal
            opacity: .5, // Opacity of modal background
            inDuration: 300, // Transition in duration
            outDuration: 200, // Transition out duration
            startingTop: '0%', // Starting top style attribute
            endingTop: '0%', // Ending top style attribute

        }
        );
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: false, // Creates a dropdown of 15 years to control year,
            today: 'Hoy',
            clear: 'Borrar',
            close: 'Aceptar',
            format: 'dd/mm/yyyy',
            max: new Date(),
            closeOnSelect: true // Close upon selecting a date,
        });


        $('select').material_select();

    });


    function abrirModal() {
        $('#nuevo').modal('open');
    }
    
    
    
    function abrirEdicion() {
        $('#edicion').modal('open');
    }
//  FUNCIONES QUE SE OCUPAN PARA ACTIVO FIJO
    function nuevaCat() {        
        $('#nuevaCat').modal('open');
    }

    function nuevoPretamoAct() {        
        $('#nuevoPrestamoAct').modal('open');
    }
    
        function nuevoMant() { 
        $('#nuevoMant').modal('open');
    }
      function nuevoEnc() { 
        $('#nuevoEncargado').modal('open');
    }

     

    
</script>
<script>
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
        document.getElementById('titulo').innerHTML='Iliada';
        document.getElementById('autor').innerHTML='Homero';
        document.getElementById('genero').innerHTML='Epopeya';
        document.getElementById('fecha_pub').innerHTML="762 A.C";
          $("#libro1").attr('aria-expanded', true)
          $("#libro1").addClass("in");
            $("#despliegue").removeClass("fa-sort-desc");
            $("#despliegue").addClass("fa-sort-asc");

    }

    
</script>

</body>
<footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">Derechos Reservados UES-FMP</div>

        </div>
    </div>
</footer>
</html>