<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Data Gejala</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandaadmin"?>">Beranda</a></li>
              <li class="breadcrumb-item active">Data Gejala</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<div class="col-md-">
  <ul class="justify-content-end">
    <br>
       <a class="btn btn-outline-primary" href="<?php echo base_url(),"index.php/c_gejala/tambah"?>">Tambah Data Gejala</a>
    <br>
  </ul>
</div>

<div class="card-body">
  <div class="table-responsive">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th><center>Kode</center></th>
            <th><center>Gejala</center></th>
            <th><center>Aksi</center></th>
          </tr>
        </thead>
    
          <tbody>
            <?php  
                foreach ($data as $key) 
                { ?>
                  <tr>
                    <td><center><?php echo $key['id_gejala'];?></center></td>
                    <td><justify-content-end><?php echo $key['nama_gejala'];?></justify-content-end></td>
                    <td class="center">
                      <center>
                        <a class="btn btn-info" href="#">
                          <i class="fa fa-edit"></i>                    
                        </a>
                        <a class="btn btn-danger" href="##">
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