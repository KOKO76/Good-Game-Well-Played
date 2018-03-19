<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Tambah Data Penyakit</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandaadmin"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Data Penyakit</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<br>
<section   class="forms">
          <div class="container-fluid">

   <?php
              if ( $pesan == 'TRUE' ) {
                echo'<div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  Data Berhasil Tersimpan!
                  </div>';
              }
            ?>           
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_penyakit/menambahPenyakit')?>" method="POST">    
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Kode</label>
                      <div class="col-sm-10">
                        <input type="text" id="id_penyakit" name="id_penyakit" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Penyakit</label>
                      <div class="col-sm-10">
                        <input type="text" id="nama_penyakit" name="nama_penyakit" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" id="deskripsi" name="deskripsi" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Penanganan</label>
                      <div class="col-sm-10">
                        <input type="text" id="penanganan" name="penanganan" class="form-control">
                      </div>
                    </div>

                     <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
                </section>>