<div class="container-fluid">
    <div class="panel-group" id="accordion3">
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-Catlibros">Cat&aacute;logo de Libros</a>

            </div>

            <div id="collapse-Catlibros" class="panel-collapse collapse">
                <div class="panel-body" >
                    <?php include('../consultas/catalogoLibros.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-CatAutores">Cat&aacute;logo de Autores</a>

            </div>

            <div id="collapse-CatAutores" class="panel-collapse collapse">
                <div class="panel-body " >
                    <?php include('../consultas/catalogoAutores.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
        
        
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-CatEditoriales">Cat&aacute;logo de Editoriales</a>

            </div>

            <div id="collapse-CatEditoriales" class="panel-collapse collapse">
                <div class="panel-body" >
                    <?php include('../consultas/catalogoEditoriales.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
        
        <div class="panel panel-primary"><!-- Desde aqui-->
            <div class="panel-heading text-center">
                <a data-toggle="collapse" style="font-size: 20px;font-weight: bold " data-parent="#accordion3" href="#collapse-LibPres">Libros en Prestamo</a>

            </div>

            <div id="collapse-LibPres" class="panel-collapse collapse">
                <div class="panel-body" >
                    <?php include('../consultas/librosEnPrestamo.php'); ?>
                </div>
            </div>

        </div><!-- hasta aki cada consulta-->
    </div>
</div>
