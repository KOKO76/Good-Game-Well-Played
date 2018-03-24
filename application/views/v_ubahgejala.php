<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Ubah Data Gejala</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_gejala/daftar"?>">Gejala</a></li>
              <li class="breadcrumb-item">Ubah Data Gejala</a></li>
           </ul>
          </div>
      </div>
   </div>
</div>


<br>
<section   class="forms">
  <div class="container-fluid">

   
<div class="col-md-8 mx-auto">
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_gejala/ubahGejala')?>" method="POST">    
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Kode</b></label>
                      <div class="col-sm-10">
                        <input type="text" name="id_gejala" value="<?php echo $id_gejala; ?>" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Gejala</b></label>
                      <div class="col-sm-10">
                        <input type="text" name="nama_gejala" value="<?php echo $nama_gejala; ?>"  class="form-control">
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
                </section>>