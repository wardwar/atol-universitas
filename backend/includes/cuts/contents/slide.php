
<!-- flash modal -->
<div class="modal fade" id="flash-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
       <h4 class="modal-title" id="myModalLabel">Pesan</h4>
      </div>
      <div class="modal-body">
        Gambar Berhasil Di Update
      </div>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel">Silahkan Drag Gambar yang di Tampilkan</h4>
      </div>
      <div class="modal-body">
        <div class="wrap">
          <img src="<?=Url::base()?>/assets/slide/<?=Session::get('path')?>" alt="JQ Image Drag" style="width:1024px; height:768px;"/>
        </div>
      </div>
      <div class="modal-footer">
      <form method="post" action="<?=Url::base()?>backend/includes/process/drag-modal.php" class="drag">
        <input type="hidden" id="output" name='top' value="">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="row bottom-space">
    <div class="col-lg-12">
     <button type="button" class="btn btn-success btn-lg btn-block btn-hide" id="tambah">Tambah Gambar</button>
    </div>
</div>

<div class="row tambah <?php if(Session::exists('error')){echo 'show';}?> ">
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
                    <input type="text" class="form-control" name="deskripsiGambar" id="deskripsiGambar" maxlength="50" placeholder="Deskripsi Singkat">
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


            <?php
            $validation = new validate();
            if(Session::exists('error')):
            ?>
            <div class="row">
            <div class="col-lg-12">
                    <div class="alert alert-danger" id="error-reguler">
                    <?php

                            foreach (Session::flash('error') as $error) {

                            echo $error, '<br>';
                          }

                         ?>
                    </div>
            </div>
            </div>
            <?php
            endif;
            ?>


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
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Path</th>
                                            <th>Scale</th>
                                            <th>First</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        $img = DB::getInstance()->query("SELECT * FROM slide");

                                        foreach ($img->results() as $key) {
                                          ?>
                                            <tr>
                                              <td><?=$key->id?><?php Session::put('id',$key->id);?></td>
                                              <td><?=$key->nama?></td>
                                              <td><?=$key->deskripsi?></td>
                                              <td><?=$key->path?></td>
                                              <td><?=$key->scale?></td>
                                              <td>
                                                <?php
                                                  if($key->active == 1){
                                                    echo "<button class='btn btn-success disabled'>First</button>";
                                                  } else{
                                                    echo "<button class='btn btn-success'>First</button>";
                                                  }
                                                ?>
                                              </td>
                                              <td><button class="btn btn-danger disabled ">Delete</button><a href="edit/<?=escape(Token::generateIdToken(Session::get('id')))?>"><button class="btn btn-primary">Edit</button></a></td>
                                            </tr>
                                          <?php
                                        }
                                      ?>
                                    </tbody>
                                </table>
                            </div>
            </div>
        </div>
    </div>
</div>


