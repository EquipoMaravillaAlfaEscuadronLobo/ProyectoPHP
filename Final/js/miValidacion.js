$.validator.setDefaults({
    submitHandler: function () {
        alert("submitted!");
    }
});

$(document).ready(function () {


    $("#FORMULARIO").validate({
        rules: {
            nameNombre: {
                required: true,
                minlength: 3
            },
            nameApellido: {
                required: true,
                minlength: 3
            },
            nameDireccion: {
                required: true,
                minlength: 10
            },
            original_pasword: {
                required: true,
                minlength: 5
            },
            confirm_password1: {
                required: true,
                minlength: 5,
                equalTo: "#original_pasword"
            },
            nameFoto: {
                required: true
            },
            nameEmail: {
                required: true,
                email: true
            },
            nameSexo: {
                required: true
            },
            nameDui: {
              rangelength: [2, 11]
            }
        },
        messages: {
            nameNombre: {
                required: "Por favor ingrese su Nombre",
                minlength: "El nombre debe de tener por lo menos 3 caracteres"
            },
            nameApellido: {
                required: "Por favor ingrese su Apellido",
                minlength: "El apellido debe de tener por lo menos 3 caracteres"
            },
            nameDireccion: {
                required: "Por favor ingrese la direccion",
                minlength: "ingrese una direccion real"
            },
            password1: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password1: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            nameFoto: {
                required: "favor ingrese una foto"
            },
            nameSexo: {
                required: "Seleccione un campo"
            },
            nameEmail: {
                required: "Por favor ingrese un correo"
            },
             nameDui: {
                rangelength: "ingrese un dui validoZ"
                
                
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