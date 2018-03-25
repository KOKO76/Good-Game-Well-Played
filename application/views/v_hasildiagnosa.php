<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2" style="text-transform: uppercase;">hasil konsultasi</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandaadmin"?>">Beranda</a></li>
              <li class="breadcrumb-item">Data Penyakit</a></li>
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
    Pasien kemungkinan <strong><?= $nilai."%"; ?></strong> menderita gangguan mental 
    <a style="font-weight: bold; text-decoration:underline;" data-toggle="modal" data-target="#myModal">
      <?= $hasil_akhir[0]['nama_penyakit']; ?>.
    </a>
  </p>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><?= $hasil_akhir[0]['nama_penyakit']; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">
          <strong>DESKRIPSI :</strong> <br>
          <?= $hasil_akhir[0]['deskripsi']; ?> <br><br>
          <strong>PENANGANAN :</strong> <br>
          <?= $hasil_akhir[0]['penanganan']; ?>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
