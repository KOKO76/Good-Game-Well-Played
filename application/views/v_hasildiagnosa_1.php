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
            <p>
              Pada kasus ini Anda memasukkan <?=$jumGejala; ?> gejala yaitu : <br>
              <table class="table table-bordered" style="background-color: yellow">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Gejala</th>
                    <th>Kode Penyakit</th>
                    <th>Nama Gejala</th>
                    <th>Bel</th>
                    <th>Pls</th>
                  </tr>
                </thead>
                <tbody>
              <?php 
              $no = 0;
              foreach ($dataGejala as $key => $value) { $no++;?>
                    <tr class="success">
                      <td><?= $no ?></td>
                      <td><?= $value['kode_gejala'] ?></td>
                      <td><?= $value['kode_penyakit'] ?></td>
                      <td><?= $value['nama_gejala'] ?></td>
                      <td><?= $value['bel'] ?></td>
                      <td><?= $value['pls'] ?></td>
                    </tr>
              <?php
                
                // echo "Gejala ". $no .": ". $value[0]['id_gejala'] ." : ". $value[0]['nama_gejala'] ."<br/>";
              }
               ?>
                </tbody>
              </table>
              <br>
Maka dihitung nilai densitas baru untuk beberapa kombinasi dengan fungsi densitas m3 dapat dilihat pada Tabel 2.1.
            </p>


            <table class="table table-bordered" style="background-color: yellow">
              <thead>
                <tr>
                  <th rowspan="2">Firstname</th>
                  <th colspan="2" style="text-align: center;">m2</th>
                </tr>
              </thead>
              <tbody>
                <tr class="success">
                  <td></td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
                <tr class="danger">
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                </tr>
                <tr class="info">
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                </tr>
              </tbody>
            </table>

            <p>Sehingga dapat dihitung sebagai berikut:
  m3{P2} = (0.56+0.24)/(1-0) = 0.8
  m3{P1,P2} = 0.14/(1-0) = 0.14
  m3{θ} = 0.56/(1-0) = 0.56
  Dari perhitungan dengan metode Dempster Shafer, nilai densitas yang paling tinggi adalah 0.8 dapat disimpulkan penyakit yang menyerang anak kemungkinan adalah P2 dimana P2 merupakan kode penyakit ADHD. Anak kemungkinan terserang penyakit ADHD sebesar 80%.</p>
          </div>
      </div>
   </div>
</div>

