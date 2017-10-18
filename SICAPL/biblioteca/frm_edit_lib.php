
</script>
<div class="panel">
    <div class="panel-heading">
        Modificar Libro
    </div>

    <div class="panel-body"><form action="" name="frmEditLib" id="frmEditLib">
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-list-ol prefix" aria-hidden="true"></i>
                        <label for="codigo" class="active">Codigo</label>
                        <input type="text" id="codigol_edit" class="form-control" readonly="true" placeholder=" ">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-bookmark prefix" aria-hidden="true"></i>
                        <label for="titulo_edit" class="active">Titulo</label>
                        <input type="text" id="titulo_edit" class="form-control" placeholder=" ">
                    </div>
                </div>
            </div>
            <div class="row">
                

                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-sort prefix" aria-hidden="true"></i>
                        <label for="cantidad" class="active">Cantidad</label>
                        <input type="number" id="cantidad_edit" class="form-control" placeholder=" ">
                    </div>
                </div>


            <div class="col-md-6">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span><i class="fa fa-camera" aria-hidden="true"></i>Foto</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input type="text" id="file_foto" class="form-control file-path validate">
                        </div>
                    </div>
                </div>  
            </div>

            
            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <i class="fa fa-calendar prefix" aria-hidden="true"></i>
                        <label for="fecha_pub" class="active">Fecha de Publicacion</label>
                        <input type="date" id="fecha_pub_edit" class="form-control datepicker" placeholder=" ">
                    </div>
                </div>
                


                <div class="col-md-6">
                    <img src="" id="fotoLibro" width="30%">
                </div>
            </div>
        </form>
    </div>


</div>