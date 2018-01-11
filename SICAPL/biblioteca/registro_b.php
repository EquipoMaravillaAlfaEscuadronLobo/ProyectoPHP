<?php
include_once '../app/Conexion.php';
include_once '../repositorios/repositorio_autores.inc.php';
include_once '../repositorios/repositorio_editorial.php';
Conexion::abrir_conexion();
$ultimoAutor = repositorio_autores::ObtenerUltimo(Conexion::obtener_conexion());
$ultimaEditorial = repositorio_editorial::ObtenerUltimo(Conexion::obtener_conexion());
?>

<div class="container">
    <div class="panel-group" id="accordion">
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-libros">Registro de Libros</a></div>
            <div id="collapse-libros" class="panel-collapse collapse">
                <div class="panel-body">
                    <form action="newLibro.php" id="frmLibro" name="frmLibro" enctype="multipart/form-data" autocomplete="off" method="POST" class="librof">
                        <input type="hidden" id="registrarL">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                                    <label for="codigo">Codigo</label>
                                    <input type="text" required id="codigol" name="codigo" class="form-control validate" value="CEJ-002-" readonly="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-bookmark prefix" aria-hidden="true"></i>
                                    <label for="Titulo">Titulo</label>
                                    <input type="text" id="titulo" required name="titulo" class="form-control validate" onkeyup="llenarCodigo()">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                                    <label for="clasificacion">Clasificacion</label>
                                    <input onkeyup="llenarCodigo()" required onchange="llenarCodigo()" onclick="llenarCodigo()" type="text" id="clasificacion" name="clasificacion" list="clasificacionlist" class="form-control validate" >
                                </div>
                            </div>
                            <datalist id="clasificacionlist" onchange="llenarCodigo()">
                                <?php
                                include 'clasificacion.php';
                                //getOptions();
                                ?>
                            </datalist>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-pencil prefix" aria-hidden="true"></i>
                                    <select name="autores[]" required multiple id="autores" class="autores validate">
                                        <?php
                                        include 'opcionesAutores.php';
                                        ?>
                                    </select>
                                    <label>Autores</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-sort prefix" aria-hidden="true"></i>
                                    <label for="cantidad">Cantidad</label>
                                    <input type="number" min="1" required max="500" id="cantidad" name="cantidad" class="form-control validate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-bookmark-o prefix" aria-hidden="true"></i>
                                    <select name="editorial" id="editorial" required class="editorial validate" onchange="llenarCodigo()">
                                        <?php
                                        include 'opcionesEditorial.php';
                                        ?>
                                    </select>
                                    <label>Editorial</label>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                    <label for="fecha_pub" class="active">Fecha de Publicacion</label>
                                    <input type="date" class="datepicker datepicker2 " required name="fecha_pub" id="fecha_pub">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span><i class="glyphicon glyphicon-picture" aria-hidden="true"></i>Foto</span>
                                        <input type="file" id="foto" required name="foto" accept="image/*">
                                    </div>


                                    <div class="file-path-wrapper">
                                        <input type="text" accept="image/*" required class="form-control file-path validate">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="panel-footer text-center">
                    <button type="submit" class="btn btn-success" >Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-autores">Registro de Autores</a></div>
            <div id="collapse-autores" class="panel-collapse collapse">
                <div class="panel-body">
                    <form action="newAutor.php" class="autorf" name="frmAutor" method="post" id="frmAutor" enctype="multipart/form-data">
                        <input type="hidden" id="registrarA">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                                    <label for="codigo">Codigo</label>
                                    <input type="text" id="codigoa" required class="form-control validate" disabled value="<?php echo $ultimoAutor ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" required name="nombre" class="form-control validate">
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                                    <label for="apellido">Apellido</label>
                                    <input type="text" id="apellido" required name="apellido" class="form-control validate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                                    <label for="fecha_nac" class="active">Fecha de Nacimiento</label>
                                    <input type="text" id="fecha_nac"  required name="fecha_nac" class="form-control datepicker datepicker2 validate">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="file-field input-field">


                                    <div class="btn">
                                        <span><i class="fa fa-address-book" aria-hidden="true"></i>Biografia</span>
                                        <input type="file" accept=".pdf" required name="bio1">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input type="text" id="bio" name="bio" class="form-control file-path validate">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="panel-footer text-center">
                    <button type="submit" class="btn btn-success" form="frmAutor">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-editoriales">Registro de Editoriales</a></div>
            <div id="collapse-editoriales" class="panel-collapse collapse">
                <div class="panel-body">
                    <form action="newEditorial.php" class="editorialf" name="frmEditoriales" id="frmEditoriales" method="post">
                        <input type="hidden" id="registrarE">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                                    <label for="codigo">Codigo</label>
                                    <input type="text" id="codigoe" required class="form-control validate" disabled value="<?php echo $ultimaEditorial ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                                    <label for="nombre">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" required class="form-control validate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-phone prefix" aria-hidden="true"></i>
                                    <label for="telefono">Telefono</label>
                                    <input type="text" id="idTelefono" required name="telefono" class="form-control validate">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="input-field">
                                    <i class="fa fa-envelope-o prefix" aria-hidden="true"></i>
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                    <input type="email" id="email" name="email" required class="form-control validate" >
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="input-field">
                                    <i class="fa fa-map-marker prefix" aria-hidden="true"></i>
                                    <label for="fecha_nac" class="active">Direccion</label>
                                    <textarea id="direccion" name="direccion" required class="materialize-textarea validate"></textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="panel-footer text-center">
                    <button id="btn_enviar" class="btn btn-success">Guardar</button><button type="reset" class="btn btn-danger">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function llenarCodigo() {
        var clas = ""
        var nombre = ""
        var editorial = ""

        document.getElementById('codigol').value = "";
        var texto = "CEJ-002-";
        clas = document.getElementById('clasificacion').value.slice(0, 3);
        nombre = (document.getElementById('titulo').value.slice(0, 2)).toUpperCase();
        editorial = pad(document.getElementById('editorial').value, 4, '0');
        texto = texto + clas + "-" + nombre + "-" + editorial;
        document.getElementById('codigol').value = texto;
        //alert(pad(1.5, 0, 4));

    }

    function pad(input, length, padding) {
        var str = input + "";
        return (length <= str.length) ? str : pad(padding + str, length, padding);
    }
</script>
