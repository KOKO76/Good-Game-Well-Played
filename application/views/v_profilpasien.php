<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Profil Pasien</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
               <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandapasien"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Profil Pasien</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<div class="col-md-8 mx-auto">
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_pasien/mengubahPasien')?>" method="POST">    
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Username</b></label>
                      <!-- <div class="col-sm-10">
                        <input type="text" id="username_p" name="username_p" class="form-control">
                      </div> -->
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Password</b></label>
                      <!-- <div class="col-sm-10">

                        <input type="text" id="password" name="password" class="form-control">

                      </div> -->
                    </div>

                     <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Nama</b></label>
                      <!-- <div class="col-sm-10">
                        <input type="text" id="nama_pasien" name="nama_pasien" class="form-control">
                      </div> -->
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"><b>Jenis Kelamin</b></label>
                      <!-- <div class="col-sm-10 mb-3">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                          <option>--Pilih Salah Satu--</option>
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select>
                      </div> -->
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"><b>Umur</b></label>
                      <!-- <div class="col-sm-10 mb-3">
                        <select id="umur" name="umur" class="form-control">
                            <option>--Pilih Salah Satu--</option>
                            <option value="4">4 tahun</option>
                            <option value="5">5 tahun</option>
                            <option value="6">6 tahun</option>
                            <option value="7">7 tahun</option>
                            <option value="8">8 tahun</option>
                            <option value="9">9 tahun</option>
                            <option value="10">10 tahun</option>
                            <option value="11">11 tahun</option>
                            <option value="12">12 tahun</option>
                            <option value="13">13 tahun</option>
                            <option value="14">14 tahun</option>
                            <option value="15">15 tahun</option>
                            <option value="16">16 tahun</option>
                            <option value="17">17 tahun</option>
                        </select>
                      </div> -->
                    </div>

                      <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>No. Telepon</b></label>
                      <!-- <div class="col-sm-10">
                        <input type="text" id="no_tlp" name="no_tlp" class="form-control">
                      </div> -->
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Alamat</b></label>
                      <!-- <div class="col-sm-10">
                        <textarea type="text" id="alamat" name="alamat" class="form-control"></textarea>
                      </div> -->
                    </div>

                     <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="reset" class="btn btn-secondary">Edit</button>
                      </div>
                    </div>
                  </form>
                </div>
