<div class="panel">
    <div class="panel-heading">Editar Autor</div>

    <div class="panel-body">
        <form action="editAutor.php"  enctype="multipart/form-data"  method="post" name="frmEditAutor" id="frmEditAutor">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-field">
                        <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                        <label for="codigo">Codigo</label>
                        <input type="text" id="codigoa_edit" name="codigoa_edit" class="form-control" readonly placeholder=" ">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombrea_edit" name="nombrea_edit" class="form-control" placeholder=" ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-user-circle prefix" aria-hidden="true"></i>
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellidoa_edit" name="apellidoa_edit" class="form-control" placeholder=" ">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        <label for="fecha_nac" class="active">Fecha de Nacimiento</label>
                        <input type="text" id="fecha_nac_edit" name="fecha_nac_edit" class="form-control datepicker datepicker2" placeholder=" ">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="file-field input-field">


                        <div class="btn">
                            <span><i class="fa fa-address-book" aria-hidden="true"></i>Biografia</span>
                            <input type="file" id="bio_edit" name="bio_edit" accept=".pdf">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" id="bio_edit1" name="bio_edit"  class="form-control file-path validate" placeholder=" ">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>