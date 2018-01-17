<div class="container">
    <div class="panel-group" id="accordion">
        <div class="panel">
            <div class="panel-heading">
               <div class="row">
                    <div class="col-md-11">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-mlibros">Listado de Libros</a>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-info" id="ayuda" onclick="abrirAyuda(4)"><i class="fa fa-info-circle"></i></button>
                    </div>
                </div>
            </div>
            <div id="collapse-mlibros" class="panel-collapse collapse">
                <div class="panel-body">
                <?php 
                include("listad_lib.php");
                ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-11">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-mautores">Listado de Autores</a>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-info" id="ayuda" onclick="abrirAyuda(5)"><i class="fa fa-info-circle"></i></button>
                    </div>
                </div>
            </div>
            <div id="collapse-mautores" class="panel-collapse collapse">
                 <div class="panel-body">
                 <?php
                    include("listad_autor.php");
                 ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-11">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse-meditoriales">Listado de Editoriales</a>
                    </div>
                    <div class="col-md-1">
                        <button type="button" class="btn btn-info" id="ayuda" onclick="abrirAyuda(6)"><i class="fa fa-info-circle"></i></button>
                    </div>
                </div>
            </div>
            <div id="collapse-meditoriales" class="panel-collapse collapse">
                 <div class="panel-body">
                 <?php
                    include("listad_edit.php");
                 ?>
                </div>
            </div>
        </div>
    </div>
</div>