<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Tambah Data Relasi</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
               <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_relasi/daftar"?>">Data Relasi</a></li>
              <li class="breadcrumb-item active">Tambah Data Relasi</li>
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
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_relasi/menambahRelasi')?>" method="POST">    
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Kode</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="id_relasi" name="id_relasi" class="form-control">
                      </div>
                    </div>

                    <div class="form-grouprow has-success">
                      <label class="col-sm-2 form-control-label"><b>Penyakit</b></label>
                      <select name="nama_penyakit" class="form-control">
<<<<<<< HEAD
                          <?php foreach ($penyakit as $pe) { ?>
                           <option value="<?php echo $pe->nama_penyakit ?>"><?php echo $pe->nama_penyakit; ?></option>
=======
                          <?php foreach ($penyakitGejala as $pe) { ?>
                           <option value="<?php echo $pe['id_penyakit'] ?>"><?php echo $pe['nama_penyakit']; ?></option>
>>>>>>> upstream/master
                           <?php } ?>
                     </select>
                    </div>

                     <div class="form-grouprow has-success">
                      <label class="col-sm-2 form-control-label"><b>Gejala</b></label>
                      <select name="nama_gejala" class="form-control">
<<<<<<< HEAD
                           <option value="<?php echo $nama_gejala; ?>">
                           <?php $a=$nama_gejala; 
                           ?> 
                           </option>
=======
                           <?php foreach ($penyakitGejala as $pe) { ?>
                           <option value="<?php echo $pe['id_gejala'] ?>"><?php echo $pe['nama_gejala']; ?></option>
                           <?php } ?>
>>>>>>> upstream/master
                     </select>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Bobot</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="bobot" name="bobot" class="form-control">
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
                </section>>