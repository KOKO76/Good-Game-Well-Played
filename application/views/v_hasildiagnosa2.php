<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2" style="text-transform: uppercase;">hasil konsultasi</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandapasien"?>">Beranda</a></li>
              <li class="breadcrumb-item">Hasil Konsultasi</a></li>
           </ul>
          </div>
      </div>
   </div>
</div>

<div class="card-body">
  <h2 style="text-transform: uppercase; text-align: center;">
    hasil konsultasi
  </h2>
  <div class="table-responsive">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead style="text-align: center;">
        <tr>
          <th>No</th>
          <th>Gejala</th>
        </tr>
      </thead>
  
        <tbody>
          <?php 
              $no = 0;
              foreach ($dataGejala as $key => $value) { $no++;?>
                    <tr class="success">
                      <td><?= $no ?></td>
                      <td><?= $value['nama_gejala'] ?></td>
                    </tr>
              <?php
              }
          ?>
        </tbody>
    </table>
  </div>  
  <p style="text-align: center;"> 
    Berdasarkan pada Gejala yang dipilih, <br>
    Pasien kemungkinan <strong>tidak</strong> menderita gangguan mental 
  </p>
</div>