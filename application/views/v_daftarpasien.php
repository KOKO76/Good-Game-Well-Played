<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Daftar Akun Pasien</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
               <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/berandautama"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Daftar Akun Pasien</li>
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
<div class="col-md-8 mx-auto">
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_pasien/menambahPasien')?>" method="POST">    
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Username</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="username_p" name="username_p" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Password</b></label>
                      <div class="col-sm-10">
                        <input type="password" id="password" name="password" class="form-control">
                      </div>
                    </div>

                     <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Nama</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="nama_pasien" name="nama_pasien" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"><b>Jenis Kelamin</b></label>
                      <div class="col-sm-10 mb-3">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option>--Pilih Salah Satu--</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Umur</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="umur" name="umur" class="form-control">
                      </div>
                    </div>

                      <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>No. Telepon</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Alamat</b></label>
                      <div class="col-sm-10">
                        <textarea type="text" id="alamat" name="alamat" class="form-control"></textarea>
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
                </div>
                </section>