<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Data Penyakit</h1>
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

<div class="col-md-">
  <ul class="justify-content-end">
    <br>
       <a class="btn btn-outline-primary" href="<?php echo base_url(),"index.php/c_penyakit/tambah"?>">Tambah Data Penyakit</a>
    <br>
  </ul>
</div>

<div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatables" > 
        <thead>
          <tr>
            <th><center>Kode</center></th>
            <th><center>Penyakit</center></th>
            <th><center>Deskripsi</center></th>
            <th><center>Penanganan</center></th>
            <th><center>Aksi</center></th>
          </tr>
        </thead>
    
          <tbody>
            <?php  
                foreach ($data as $key) 
                { ?>
                  <tr>
                    <td><center><?php echo $key['id_penyakit'];?></center></td>
                    <td><center><?php echo $key['nama_penyakit'];?></center></td>
                    <td><justify-content-end><?php echo $key['deskripsi'];?></justify-content-end></td>
                    <td><justify-content-end><?php echo $key['penanganan'];?></justify-content-end></td>
                    <td class="center">
                      <center>
                        <a class="btn btn-info" href="<?php echo base_url()."index.php/c_penyakit/mengubahPenyakit/".$key['id_penyakit']; ?>">
                          <i class="fa fa-edit"></i>                    
                        </a>
                        <a class="btn btn-danger" href="<?php echo base_url()."index.php/c_penyakit/menghapusPenyakit/".$key['id_penyakit']; ?>">
                          <i class="fa fa-trash-o"></i> 
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