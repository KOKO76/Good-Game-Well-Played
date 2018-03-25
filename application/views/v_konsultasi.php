<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Konsultasi</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandapasien"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Konsultasi</li>
           </ul>
          </div>
          <div class="col-md-7">
            <form method="POST" action="<?php echo site_url('c_konsultasi/diagnosa'); ?>">
              <?php foreach ($gejala->result() as $row): ?>
                <!-- 
                name="gejala[]" gejala[] ini bertipe array
                jadi checbox yang di centang akan di simpan datanya ke dalam 
                variable array gejala.
                 -->
                <input type="checkbox" name="gejala[]" value="<?= $row->id_gejala; ?>"> <?= $row->nama_gejala; ?>
                <br>
              <?php endforeach ?>

              <button type="submit"> Diagnosa</button>
            </form> 
          </div>
      </div>
   </div>
</div>