$.validator.setDefaults({
    submitHandler: function () {
       
        document.getElementById('banderaEdicion').value="ok";    
        document.editar_formulario.submit();
        
        }
});
///////////////////////////////////////////////////////////este es para los formularios de ingresozz
$(document).ready(function () {
     $("#editar_formulario").validate({
        rules: {
            nameNombreE: {
                required: true,
                minlength: 3
            },
            nameApellidoE: {
                required: true,
                minlength: 3
            },
            nameDireccionE: {
                required: true,
                minlength: 10
            },
            namePass1E: {
                
                minlength: 6
            },
            namePass2E: {
                
                equalTo: "#idPass1E"
            },
            nameFotoE: {
               minlength: 1
            },
            nameEmailE: {
                required: true,
                email: true
            },
            nameSexoE: {
                required: true
            },
            nameDuiE: {
                required: true,
                minlength: 10
            },
            nameUserE: {
                required: true,
                minlength: 3,
                maxlength: 14
            },
            nameTelefonoE: {
                required: true,
                minlength: 8
            },
            nameNivelE: {
                  required: true
            },
            nameValidacionX:{
                  required: true,
                  equalTo: "#idSecreto"
            }
            
        },
        messages: {
            nameNombreE: {
                required: "Por favor ingrese su Nombre",
                minlength: "El nombre debe de tener por lo menos 3 caracteres"
            },
            nameApellidoE: {
                required: "Por favor ingrese su Apellido",
                minlength: "El apellido debe de tener por lo menos 3 caracteres"
            },
            nameDireccionE: {
                required: "Por favor ingrese la direccion",
                minlength: "ingrese una direccion real"
            },
            namePass1E: {
            
                minlength: "La contraseña debe de tener por lo menos 6 caracteres"
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


