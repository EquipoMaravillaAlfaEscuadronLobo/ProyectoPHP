<div class="container">
    <div class="panel-group" id="accordion">
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-mlibros">Listado de Libros</a></div>
            <div id="collapse-mlibros" class="panel-collapse collapse">
                <div class="panel-body">
                <?php 
                include("listad_lib.php");
                ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-mautores">Listado de Autores</a></div>
            <div id="collapse-mautores" class="panel-collapse collapse">
                 <div class="panel-body">
                 <?php
                    include("listad_lib.php");
                 ?>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-meditoriales">Listado de Editoriales</a></div>
            <div id="collapse-meditoriales" class="panel-collapse collapse">
                 <div class="panel-body">
                 <?php
                    include("listad_lib.php");
                 ?>
                </div>
            </div>
        </div>
    </div>
</div>