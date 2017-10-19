$(document).ready(function () {
    $('.datepicker').pickadate({
        selectMonths: false, // Creates a dropdown to control month
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
    
    $("#idListarAdmnistrador").removeClass("active");
    $("#idRegistroAdministrador").addClass("active");
    
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

 $('#edicion_administradores').modal('open');
}

function abrir_edicion_usuario(nombre,apellido,direccion,email,telefono,sexo,password,carnet) {
    $("#idSecreto").val(password);
    $("#idCarnetE").val(carnet);
    $("#idNombreE").val(nombre);
    $("#idApellidoE").val(apellido);
    $("#idDireccionE").val(direccion);
    $("#idEmailE").val(email);
    $("#idTelefonoE").val(telefono);
    if (sexo == "Masculino") {
      
        $('#idHombreE').attr("checked", "checked");
      } 
    else {
         $("#idMujerE").attr("checked", "checked");
      
    }
     
 $('#edicion_usuario').modal('open');
}
function abrir_eliminacion_usuario(nombre,apellido,carnet,password) {
    $("#idOtroCarnet").val(carnet);
    $("#idNombreEliminado").val(nombre+ " "+ apellido);
     $("#idCarnetEliminado").val(carnet);
     
     $("#idCarnetEl").val(carnet);
     $("#idSecretoEL").val(password);
 $('#eliminacion_usuario').modal('open');
}




function abrir_eliminacion_administrador(nombre, apellido,usuario) {
    $("#idNombreEl").val(nombre +" " +apellido);
    $("#idUsuarioEl").val(usuario);
    $("#codigo_eliminacion").val(usuario);
  
 $('#eliminacion_administradores').modal('open');
}

function abrirModal() {
    $('#nuevo').modal('open');
}


function abrirEdicionLib(codigo,editorial,titulo,fecha,foto, cantidad) {
   

   // alert(codigo);
    $('#codigol_edit').val(codigo);
    $('#selectEdit').val(editorial);
    $('#titulo_edit').val(titulo);
    $('#fecha_pub_edit').val(fecha);
    $('#file_foto').val(foto);
    document.getElementById("fotoLibro").src = foto;
    $('#cantidad_edit').val(cantidad);
    $('#edicionLib').modal('open');
}
function abrirEdicionAut(codigo,nombre,apellido,fecha,bio) {
    $('#codigoa_edit').val(codigo);
   
    $('#nombrea_edit').val(nombre);
    $('#apellidoa_edit').val(apellido);
    $('#fecha_nac_edit').val(fecha);
    $('#bio_edit1').val(bio);
    $('#edicionAut').modal('open');
}
function abrirEdicionEdi(codigo,nombre,direccion,correo,telefono) {
    $('#codigoe_edit').val(codigo);
   
    $('#nombree_edit').val(nombre);
    $('#telefonoe_edit').val(telefono);
    $('#email_edit').val(correo);
    $('#direccion_edit').val(direccion);
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


function abrirActivo(coda,codadm,foto,estado,codd,color,dimen,marca,memo,mode,otros,proce,ram,seri,siste) {

   $('#codActivo').val(coda);
   $('#codDetalle').val(codd);
   //$('#adminedit').val(codadm).selected;
   $("select#adminedit").val(codadm).attr('selected', 'selected');;
   // $('#adminedit > option[value="'+codadm+'"]').attr('selected', 'selected');
   $('#nserieE').val(seri);
   $('#colorE').val(color);
   $('#marcaE').val(marca);
   $('#soE').val(siste);
   $('#dimensionesE').val(dimen);
   $('#modeloE').val(mode);
   $('#proE').val(proce);
   $('#otroE').val(otros);
    $('#ramE').val(ram);
    $('#ddE').val(memo);
    $('#estadoE').val(estado);
    document.getElementById("idFotoea").src = foto;
$('#editActivo').modal('open');

   
}

    