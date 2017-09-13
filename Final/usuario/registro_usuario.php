

<!--formulario usuario-->
<div class="container">
    <form id="FORMULARIO" method="post" class="form-horizontal" action="">
        <div class="row">
            <div class="panel" name="libros">
                <div class="panel-heading text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Registro De Usuarios</h3>
                        </div>
                    </div>
                </div>

                <div class=" text-center panel-body">
                    <div class="row">
                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="Medium material-icons prefix">account_circle</i> 
                            <input type="text" id="idNombre" name="nameNombre"  class="text-center validate" maxlength="10" minlength="3" required>
                            <label for="idNombre" class="col-sm-4 control-labe">Nombre <small> (Ej: Nombre1 Nombre2)</small></label>
                        </div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">account_circle</i> 
                            <input type="text" id="idNombre" name="nameNombre"  class="text-center">
                            <label for="idNombre">Apellido <small>(Ej: Apellido1 Apellido2)</small></label>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">local_phone</i> 
                            <input type="text" id="idTelefono" name="nameTelefono" class="text-center">
                            <label for="idTelefono">Numero Telefonico <small>(Ej: 2255-5555)</small></label>
                        </div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">mail</i> 
                            <input type="email" id="idEmail" name="nameEmail" class="text-center">
                            <label for="idEmail">Email <small>(Ej: correo@gmail.com)</small> </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m1"></div>
                        <div class="input-field col m5">
                            <i class="material-icons prefix">location_on</i> 
                            <input type="text" id="idEmail" name="nameEmail" class="text-center">
                            <label for="idEmail">Direccion <small>(Ej: Verapaz, Colonia Mercenenes)</small> </label>
                        </div>

                        <div class="input-field col m1">
                            <div class="input-field col m1">
                                <i class="material-icons prefix">location_city</i>     
                            </div>

                        </div>

                        <div class="input-field col m4">

                            <select>

                                <option value = "" disabled selected>Seleccione Institucion</option>
                                <option value = "1">Centro Escolar Presbitero Norberto Marroquín</option>
                                <option value = "2">Instituto Nacional de San José Verapaz</option>
                                <option value = "3">Instituto Nacional Dr. Sarvelio Navarrete</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m5">
                            <i class="Medium material-icons prefix">wc</i> 

                            <div class="radio-inline">
                                <span>Sexo</span>

                                <input type="radio" id="hombre"  name="sexo"  class="text-center with-gap">
                                <label for="hombre">Masculino</label>

                                <input type="radio" id="mujer" name="sexo"  class="text-center with-gap">
                                <label for="mujer">Femenino</label>

                            </div>

                            <div class="col 1"></div>
                        </div>
                        <div class="col m6">
                            <div class="col m2"></div>
                            <div class="file-field input-field col m10">
                                <div class="btn btn-primary">
                                    <span class="glyphicon glyphicon-picture" aria="hidden"></span> Foto                          
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                    <input type="file" id="files" name="files[]">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <output id="list"></output>                
                    </div>
                    <div class="row text-center">
                        <button class="btn btn-success">
                            <span class="glyphicon glyphicon-floppy-disk" aria="hidden"></span>                            
                            Guardar</button>
                        <button type="reset" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove" aria="hidden"></span>Cancelar
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
<!--fin formulario usuario-->



<script type="text/javascript">
    $.validator.setDefaults({
        submitHandler: function () {
            alert("submitted!");
        }
    });

    $(document).ready(function () {


        $("#FORMULARIO").validate({
            rules: {
                nameNombre: "required",
                lastname1: "required",
                username1: {
                    required: true,
                    minlength: 2
                },
                password1: {
                    required: true,
                    minlength: 5
                },
                confirm_password1: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password1"
                },
                email1: {
                    required: true,
                    email: true
                },
                agree1: "required"
            },
            messages: {
                nameNombre: "por favor ingrese su primer nombre",
                lastname1: "Please enter your lastname",
                username1: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
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
                email1: "Please enter a valid email address",
                agree1: "Please accept our policy"
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
</script>





