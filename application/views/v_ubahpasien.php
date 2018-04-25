<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Profil Pasien</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
               <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandapasien"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Ubah Profil Pasien</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<br>
<div class="col-md-8 mx-auto">
<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()."index.php/c_pasien/ubahPasien/"?>">
<?php foreach ($pasien->result() as $row) 
{?>
  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label" disabled><b>Username</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="username_p"  disabled name="username_p" class="form-control" value="<?= $row->username_p ?>" >
                      </div>
                    </div>

                      <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label" disabled><b>Password</b></label>
                      <div class="col-sm-10">
                        <input type="password" id="password"   name="password" class="form-control" placeholder="Isi dengan Password Baru atau Lama" required="required" oninvalid="this.setCustomValidity('Password Harus Terisi')" oninput="setCustomValidity('')" >
                      </div>
                    </div>

                    

                     <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Nama</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="nama_pasien"   name="nama_pasien" class="form-control" value="<?= $row->nama_pasien ?>">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"><b>Jenis Kelamin</b></label>
                      <div class="col-sm-10 mb-3">
                        <select name="jenis_kelamin"   id="jenis_kelamin" class="form-control">
                          <option>--Pilih Salah Satu--</option>
                          <option value="L" <?php if ($row->jenis_kelamin=='L') echo 'selected';  ?>>Laki-laki</option>
                          <option value="P" <?php if ($row->jenis_kelamin=='P') echo 'selected';  ?>>Perempuan</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"><b>Umur</b></label>
                      <div class="col-sm-10 mb-3">
                        <select id="umur"   name="umur" class="form-control">
                            <option>--Pilih Salah Satu--</option>
                            <option value="4" <?php if ($row->umur=='4') echo 'selected';  ?>>4 tahun</option>
                            <option value="5" <?php if ($row->umur=='5') echo 'selected';  ?>>5 tahun</option>
                            <option value="6" <?php if ($row->umur=='6') echo 'selected';  ?>>6 tahun</option>
                            <option value="7" <?php if ($row->umur=='7') echo 'selected';  ?>>7 tahun</option>
                            <option value="8" <?php if ($row->umur=='8') echo 'selected';  ?>>8 tahun</option>
                            <option value="9" <?php if ($row->umur=='9') echo 'selected';  ?>>9 tahun</option>
                            <option value="10" <?php if ($row->umur=='10') echo 'selected';  ?>>10 tahun</option>
                            <option value="11" <?php if ($row->umur=='11') echo 'selected';  ?>>11 tahun</option>
                            <option value="12" <?php if ($row->umur=='12') echo 'selected';  ?>>12 tahun</option>
                            <option value="13" <?php if ($row->umur=='13') echo 'selected';  ?>>13 tahun</option>
                            <option value="14" <?php if ($row->umur=='14') echo 'selected';  ?>>14 tahun</option>
                            <option value="15" <?php if ($row->umur=='15') echo 'selected';  ?>>15 tahun</option>
                            <option value="16" <?php if ($row->umur=='16') echo 'selected';  ?>>16 tahun</option>
                            <option value="17" <?php if ($row->umur=='17') echo 'selected';  ?>>17 tahun</option>
                        </select>
                      </div>
                    </div>

                      <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>No. Telepon</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="no_tlp"   name="no_tlp" class="form-control" value="<?= $row->no_tlp ?>">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Alamat</b></label>
                      <div class="col-sm-10">
                        <textarea type="text" id="alamat"   name="alamat" class="form-control"><?= $row->alamat ?></textarea>
                      </div>
                    </div>

                     <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                         <button type="submit" class="btn btn-info"> Ubah </button> 
                    </div>
                    </div>
<?php } ?>   
                    
                  </form>
                </div>