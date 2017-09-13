<!--<script crossorigin="anonymous" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" src="../js/jquery.min.js"></script>-->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/foto.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/data-tables-script.js"></script>
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