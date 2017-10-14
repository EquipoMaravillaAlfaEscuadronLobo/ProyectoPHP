$.validator.setDefaults({
    submitHandler: function () {
       
        document.getElementById('banderaEliminacion').value="ok";    
        document.eliminar_formulario.submit();
        
        }
});
///////////////////////////////////////////////////////////este es para los formularios de ingresozz
$(document).ready(function () {
     $("#eliminar_formulario").validate({
        rules: {
            nameMotivoEliminacion: {
                required: true,
                minlength: 10
            },
            nameSelectedAdministrador: {
                required: true
            },
            nameDireccionE: {
                required: true,
                minlength: 10
            },
            nameValidacionX:{
                  required: true,
                  equalTo: "#idSecretoEL"
            }
            
        },
        messages: {
            nameMotivoEliminacion: {
                required: "Por favor ingrese el motivo de la eliminacion de este administrador",
                minlength: "ingrese por lo menos 10 caracteres"
            },
            nameSelectedAdministrador: {
                required: "Seleccione un nuevo administrador"
               
            },
            nameDireccionE: {
                required: "Por favor ingrese la direccion",
                minlength: "ingrese una direccion real"
            },
            namePass1E: {
            
                minlength: "La contraseña debe de tener por lo menos 5 caracteres"
            },
            namePass2E: {
                
                equalTo: "Por favor ingrese la misma contraseña"
            },
            nameFotoE: {
               // requiredE: "favor ingrese una foto"
            },
            nameSexo: {
                requiredE: "Seleccione un campo"
            },
            nameEmailE: {
                required: "Por favor ingrese un correo"
            },
            nameDuiE: {
                minlength: "ingrese un dui valido",
                required: "ingrese un dui valido"
            },
            nameUserE : {
                required: "ingrese un nombre de usuario ",
                minlength: "debe de poseer por lo menos 4 caracteres "
            },
            nameTelefonoE:{
               required: "favor ingrese su teléfono",
                minlength: "ingrese un numero telefónico valido"
            },
            NameNivelE :{
                required: "Seleccione un Nivel"
            },
            nameValidacionX:{
              required: "debe proporcionar su actual contraseña para modificar",
              equalTo: "debe proporcionar su actual contraseña para modificar"
            }
                        
        },
        errorElement: "em",
        errorPlacement: function (error, element) {
            // Add the `help-block` class to the error element
            error.addClass("help-block");

            // Add `has-feedback` class to the parent div.form-group
            // in order to add icons to inputs
            element.parents(".col-sm-5").addClass("has-feedback");

            if (element.prop("type") === "checkbox") {
                error.insertAfter(element.parent("label"));
            } else {
                error.insertAfter(element);
            }

            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!element.next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
            }
        },
        success: function (label, element) {
            // Add the span element, if doesn't exists, and apply the icon classes to it.
            if (!$(element).next("span")[ 0 ]) {
                $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
            }
        },
        highlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
            $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
            $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
        }
    });
});


