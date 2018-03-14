<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Data Penyakit</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
              <li class="breadcrumb-item active">Data Penyakit</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<div class="card-body">
  <div class="table-responsive">
      <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
          <tr>
            <th><center>Kode</center></th>
            <th><center>Penyakit</center></th>
            <th><center>Deskripsi</center></th>
            <th><center>Penanganan</center></th>
            <th><center>Aksi</center><th>
          </tr>
        </thead>
    
          <tbody>
            <?php  
                $no=1;
                foreach ($data as $key) 
                { ?>
                  <tr>
                    <td class="center"><?php echo $key['id_penyakit'];?></td>
                    <td class="center"><?php echo $key['nama_penyakit'];?></td>
                    <td class="center"><?php echo $key['Deskripsi'];?></td>
                    <td class="center"><?php echo $key['penanganan'];?></td>
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
                       $no++;
                } ?>
              </tbody>
    </table>
  </div>
</div>