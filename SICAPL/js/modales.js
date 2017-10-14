$(document).ready(function () {
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: true, // Creates a dropdown of 15 years to control year,
        today: 'Hoy',
        clear: 'Borrar',
        close: 'Aceptar',
        format: 'dd/mm/yyyy',
        max: new Date(),
        closeOnSelect: true // Close upon selecting a date,
    });
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
   
    


   
});

function abrir_edicion_administrador(nombre, apellido, user, dui, fecha, email, password, nivel, sexo) {
    $("#idNombreE").val(nombre);
    $("#idApellidoE").val(apellido);
    $("#idUserE").val(user);
    $("#idDuiE").val(dui);
    $("#idFechaE").val(fecha);
    $("#idEmailE").val(email);
    $("#idPass1E").val(password);
    $("#idPass2E").val(password);
    $("#idSecreto").val(password);
     $("#codigo_original").val(user);
    
    if (nivel == '0') {
        $("#idRootE").attr("checked", "checked");
    } else {
        $("#idAdministradorE").attr("checked", "checked");
    }
       
    
    if (sexo == "Masculino") {
        $('#idHombreE').attr("checked", "checked");

    } else {
        $("#idMujerE").attr("checked", "checked");
    }





    $('#edicion').modal('open');
}



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




    