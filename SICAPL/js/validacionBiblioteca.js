$.validator.setDefaults({
    submitHandler: function () {

        document.getElementById('registrarL').value="ok";
        document.frmLibro.submit();


    }
});
///////////////////////////////////////////////////////////este es para los formularios de ingresozz
$(document).ready(function () {
    $("#frmLibro").validate({
        rules: {
            titulo: {
                required: true,
                minlength: 3
            },
            clasificacion: {
                required: true
            },
            autores: {
                required: true
            },
            cantidad: {
                required: true
            },
            editorial: {
                required: true
            },
            fecha_pub: {
                required: true
            }
        },
        messages: {
            titulo: {
                required: "Por favor ingrese el titulo",
                minlength: "El titulo debe de tener por lo menos 3 caracteres"
            },
            clasificacion: {
                required: "Por favor ingrese o elija una clasificacion"
            },
            autores: {
                required: "Por favor seleccione el/los autor/es"
            },
            cantidad: {
                required: "Por favor ingrese la cantidad"
            },
            editorial: {
                required: "Por favor eliga la editorial"
            },
            fecha_pub: {
                required: "Por favor ingrese la fecha de publicacion"
            },
            nameSexo: {
                required: "Seleccione un campo"
            },
            nameEmail: {
                required: "Por favor ingrese un correo"
            },
            nameDui: {
                minlength: "ingrese un dui valido",
                required: "ingrese un dui valido"
            },
            nameUser : {
                required: "ingrese un nombre de usuario ",
                minlength: "debe de poseer por lo menos 6 caracteres "
            },
            nameTelefono:{
               required: "favor ingrese su teléfono",
                minlength: "ingrese un numero telefónico valido"
            },
            NameNivel :{
                required: "Seleccione un Nivel"
            },
            NameNombreX :{
                required: "Seleccione un Nivel"
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
    
     
    ////////////////////////////////////////////////////////este es para los formularios de edicion
    
     
    
    
    
});



