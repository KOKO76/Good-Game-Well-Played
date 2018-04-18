<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Data Riwayat</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandapasien"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Riwayat</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatables">
        <thead>
          <tr>
            <th><center>No</center></th>
            <th><center>Nama</center></th>
            <th><center>Umur</center></th>
            <th><center>Gejala</center></th>
            <th><center>Penyakit</center></th>
            <th><center>Tanggal</center></th>
            <th><center>Aksi</center></th>
          </tr>
        </thead>
    
          <tbody>
            <?php 
            foreach ($pasien->result() as $row) 
               {?>
                  <tr>
                    <td><center><?php echo $row->id_riwayat;?></center></td>
                    <td><justify-content-end><?php echo $row->nama_pasien;?></justify-content-end></td>
                    <td><center><?php echo $row->umur;?></center></td>
                    <td><justify-content-end><?php echo $row->id_gejala;?></justify-content-end></td>
                    <td><justify-content-end><?php echo $row->nama_penyakit;?></justify-content-end></td>
                    <td><center><?php echo $row->tanggal;?></center></td>
                    <td class="center">
                      <center>          
                        <a target="blank" class="btn btn-success" href="<?php echo base_url()."index.php/c_riwayat/tes/".$row->id_riwayat; ?>">
                          <i class="fa fa-print"></i>
                        </a>
                      </center>
                    </td>
                  </tr>
                   <?php  
                } ?>
              </tbody>
    </table>
  </div>
</div>