
</script>
<div class="panel">
    <div class="panel-heading">
        Modificar Libro
    </div>

    <div class="panel-body"><form action="editLibro.php" name="frmEditLib" id="frmEditLib" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                        <label for="codigo" class="active">Codigo</label>
                        <input type="text" id="codigol_edit" name="codigol_edit" class="form-control" readonly="true" placeholder=" ">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-bookmark prefix" aria-hidden="true"></i>
                        <label for="titulo_edit" class="active">Titulo</label>
                        <input type="text" id="titulo_edit" name="titulo_edit" class="form-control" placeholder=" ">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span><i class="fa fa-camera" aria-hidden="true"></i>Foto</span>
                            <input type="file" id="foto1" name="foto1">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" id="file_foto" name="foto1"  class="form-control file-path validate">
                        </div>
                    </div>
                </div>  
            </div>

            
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        <label for="fecha_pub" class="active">Fecha de Publicacion</label>
                        <input type="text" id="fecha_pub_edit" name="fecha_pub_edit" class="form-control datepicker datepicker2" placeholder=" ">
                    </div>
                </div>
                


                <div class="col-md-6">
                    <img src="" id="fotoLibro" width="30%">
                </div>
            </div>
        </form>
    </div>


</div>