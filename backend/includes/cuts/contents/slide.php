<div class="row bottom-space">
    <div class="col-lg-12">
     <button type="button" class="btn btn-success btn-lg btn-block" id="tambah">Tambah Gambar</button>
    </div>
</div>

<div class="row tambah">
    <div class="col-lg-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                Upload Gambar
            </div>

            <div class="panel-body">

                <form action="<?=Url::base()?>backend/includes/process/slide.php" method="post" enctype="multipart/form-data" class="slide">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label for="namaGambar">Nama Gambar</label>
                    <input type="text" class="form-control" name="namaGambar" id="namaGambar" maxlength="30" placeholder="Nama Gambar">
                  </div>
                  <div class="form-group">
                    <label for="deskripsiGambar">Deskripsi Singkat</label>
                    <input type="text" class="form-control" name="deskripsiGambar" id="deskripsiGambar" maxlength="50" placeholder="Password">
                  </div>
                  </div>
                  <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fileGambar">File Gambar</label>
                    <input type="file"  name="fileGambar" id="fileGambar">
                    <p class="help-block">Extensi gambar berupa JPG, PNG</p>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
            </form>


            <div class="row">
            <div class="col-lg-12">
                    <div class="alert alert-danger" id="error-reguler"></div>
            </div>
            </div>


            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-picture fa-fw"></i> Setting Slide
            </div>

            <div class="panel-body">
                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th>Engine version</th>
                                            <th>CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>
    </div>
</div>


