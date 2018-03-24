<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Ubah Data Relasi</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_relasi/daftar"?>">Relasi</a></li>
              <li class="breadcrumb-item">Ubah Data Relasi</a></li>
           </ul>
          </div>
      </div>
   </div>
</div>


<br>
<section   class="forms">
  <div class="container-fluid">

   
<div class="col-md-8 mx-auto">
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_relasi/ubahRelasi')?>" method="POST">    
                    

                      <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Kode</b></label>
                      <div class="col-sm-10">
                       

                        <input type="text" name="id_relasi" value="<?php echo $id_relasi; ?>" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Penyakit</b></label>
                        <div class="col-sm-10">
                           <select name="id_penyakit" class="form-control">
                                <?php foreach ($nama_penyakit as $pe) { ?>
                                 <option value="<?php echo $pe['id_penyakit'] ?>" 
                                    <?php if($pe['id_penyakit']==$id_penyakit) echo 'selected';  ?>>
                                    <?php echo $pe['nama_penyakit']; ?></option>
                                <?php } ?>
                           </select>
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Gejala</b></label>
                        <div class="col-sm-10">
                           <select name="id_gejala" class="form-control">
                                <?php foreach ($nama_gejala as $pe) { ?>
                                 <option value="<?php echo $pe['id_gejala'] ?>"
                                 <?php if($pe['id_gejala']==$id_gejala) echo 'selected';  ?>>
                                 <?php echo $pe['nama_gejala']; ?></option>
                                 <?php } ?>
                           </select>
                      </div>
                    </div>

                   <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Bobot</b></label>
                      <div class="col-sm-10">
                        <input type="text" name="bobot" value="<?php echo $bobot; ?>"  class="form-control">
                      </div>
                    </div>

                     <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="submit" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
                </section>