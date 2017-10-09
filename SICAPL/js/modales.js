$(document).ready(function () {
    $('.collapse')
            .on('shown.bs.collapse', function () {
                $(this).parent()
                        .find(".fa-sort-desc")
                        .removeClass("fa-sort-desc")
                        .addClass("fa-sort-asc");
            })
            .on('hidden.bs.collapse', function () {
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
        dismissible: false, // Modal can be dismissed by clicking outside of the modal
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
    $('#tabla-paginada2').DataTable();

    $('select').material_select();

});


function abrirModal() {
    $('#nuevo').modal('open');
}


function abrirEdicionLib() {
    $('#edicionLib').modal('open');
}
function abrirEdicionAut() {
    $('#edicionAut').modal('open');
}
function abrirEdicionEdi() {
    $('#edicionEdi').modal('open');
}
function abrirEdicion() {
    $('#edicion').modal('open');
}
//  FUNCIONES QUE SE OCUPAN PARA ACTIVO FIJO
function nuevaCat(opcion) {
    if (opcion == 1) {
        $('#nuevaCat').modal('open');
    }
    if (opcion == 2) {
        $('#nuevoProv').modal('open');
    }
    if (opcion == 3) {
        $('#nuevoEncargado').modal('open');
    }
    if (opcion == 4) {
        $('#actualizarCaracteristicas').modal('open');
    }
    if (opcion == 5) {
        $('#actPres').modal('open');
    }
    if (opcion == 6) {
        $('#editActivo').modal('open');
    }
}

function nuevoPretamoAct() {
    $('#nuevoPrestamoAct').modal('open');
}

function nuevoMant() {
    $('#nuevoMant').modal('open');
}
function nuevoEnc() {
    $('#actualizarCaracteristicas').modal('open');
}



    