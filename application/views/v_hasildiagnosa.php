<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Perhitungan Metode Dempster Shafer</h1>
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
  <p>Densitas awal untuk gejala-gejala yang dipilih adalah :</p>
  <div class="table-responsive">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
      <thead>
        <tr>
          <th rowspan="2">No</th>
          <th rowspan="2">Kode Gejala</th>
          <th rowspan="2">Kode Penyakit</th>
          <th rowspan="2">Nama Gejala</th>
          <th colspan ="2">Densitas (m)</th>
        </tr>
        <tr>
          <th>Bel</th>
          <th>Pls</th>
        </tr> 
      </thead>
  
        <tbody>
          <?php 
              $no = 0;
              foreach ($densitasAwal as $key => $value) { $no++;?>
                    <tr class="success">
                      <td><?= $no ?></td>
                      <td><?= $value['kode_gejala'] ?></td>
                      <td><?= $value['kode_penyakit'] ?></td>
                      <td><?= $value['nama_gejala'] ?></td>
                      <td><?= $value['bel'] ?></td>
                      <td><?= $value['pls'] ?></td>
                    </tr>
              <?php
              }
          ?>
        </tbody>
  </table>
</div>  
<p>Menentukan Nilai Densitas (m) Baru :</p>
<p>
  Berdasarkan Tabel Densitas Awal dapat dihitung nilai densitas (m) baru dengan membuat tabel aturan kombinasi terlebih dahulu
</p>

<?php 
  $mcountx  = 2;
  $mcounty  = 1;
  $densitas_baru=array();
  // simulasi variabel $evidence
  // Array ( [0] => P08 [1] => 0.61 ) [1] => Array ( [0] => P08 [1] => 0.90 )

  while(!empty($evidence)){

      // menghapus element pertama dari array dan mengmbalikan value yang elemen yang terhapus tsb
      $densitas1[0]=array_shift($evidence); 
      // nilai pls
      $densitas1[1]=array($environment[0]["environment"],1-$densitas1[0][1]);

      $densitas2=array();
      if(empty($densitas_baru)){
        $densitas2[0]=array_shift($evidence);
      }else{
          foreach($densitas_baru as $k=>$r){
              if($k!="&theta;"){
                  $densitas2[]=array($k,$r);
              }
          }
      }

      // nilai pls
      $theta=1;
      foreach($densitas2 as $d) $theta-=$d[1];
      $densitas2[]=array($environment[0]["environment"],$theta);

    // simulasi variable $densitas1
    // Array ( [0] => Array ( [0] => P08 [1] => 0.61 ) [1] => Array ( [0] => P01,P02,P03,P04,P05,P06,P07,P08 [1] => 0.39 ) ) 

    // simulasi variable $densitas2
    // Array ( [0] => Array ( [0] => P08 [1] => 0.90 ) [1] => Array ( [0] => P01,P02,P03,P04,P05,P06,P07,P08 [1] => 0.1 ) ) 

      // Menampilkan nilai
      echo "m".$mcounty."{".$densitas2[0][0]."} = ".$densitas2[0][1]."<br/>";
      echo "m".$mcounty."{ø} = 1 - ". $densitas2[0][1]. " = ". $densitas2[1][1]."<br/>";

      $m=count($densitas2);

      // set $densitas_baru menjadi kosong lagi untuk menampung perhitungan densitas baru
      $densitas_baru=array();
      
      ?>
        <br>
        <p>Aturan kombinasi untuk m<?=""?></p>
        <div class="table-responsive">
          <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
              <tr>
                <th rowspan="2">m1</th>
                <th colspan="2">m2</th>
              </tr>
              <tr>
                <th><?= "m".$mcountx ."{".$densitas1[0][0]  ."} = ".$densitas1[0][1]?></th>
                <th><?= "m".$mcountx ."{ø}"  ." = ".$densitas1[1][1]?></th>
              </tr> 
            </thead>
        
            <tbody>
<?php 
  $no = 0;

  // perhitungan Aturan kombinasi utk mencari densitas baru
  // densitas2 = y
  $v = ""; $w = ""; $vw = "";
  for($y=0;$y<$m;$y++){
    ?>
    <tr class="success">
      <td>
        <?= 
        ($densitas2[$y][0] == "P01,P02,P03,P04,P05,P06,P07,P08") ? 
        "m".$mcounty ."{ø} = ".$densitas2[$y][1] : 
        "m".$mcounty ."{".$densitas2[$y][0]. "} = ".$densitas2[$y][1]?>
      </td>
    <?php
      for($x=0;$x<2;$x++){
        // !($y==$m-1 && $x==1) berfungsi supaya perkalian antara PLS pada $densitas1 dan $densitas2 tidak dilakukan
          if(!($y==$m-1 && $x==1)){ 
              // $v mewakili id_penyakit x dan v mewakili id_penyakit y
              $v=explode(',',$densitas1[$x][0]);
              $w=explode(',',$densitas2[$y][0]);
              sort($v); 
              sort($w);
              // array_intersect($v,$w) ini berfungsi untuk melakukan irisan terhadap variable $v dan $w
              $vw=array_intersect($v,$w);

              if(empty($vw)){
                // jika hasil irisan kosong maka dia adalah theta
                $k="&theta;";
              }else{
                // jika hasil irisan ada maka tampung di variable $k
                  $k=implode(',',$vw);
              }

              if(!isset($densitas_baru[$k])){
                // jika densitas_baru kosong maka
                  $densitas_baru[$k]=$densitas1[$x][1]*$densitas2[$y][1];
                  ?>
                    <td><?= "{".$k ."} = ".$densitas1[$x][1]*$densitas2[$x][1] ?></td>
                  <?php

              }else{
                // jika densitas_baru tidak kosong maka
                  $densitas_baru[$k]+=$densitas1[$x][1]*$densitas2[$y][1];
                  ?>
                    <td><?= "{".$k ."} = ".$densitas1[$x][1]*$densitas2[$y][1]  ?></td>
                  <?php
              }
          } else
          {
            ?>
              <td><?= "{ø} = ".$densitas1[$x][1]*$densitas2[$y][1] ?></td>
            <?php
          }
      }
                  

      ?>
        </tr>
      <?php
  }

  foreach($densitas_baru as $k=>$d){
      if($k!="&theta;"){
          $densitas_baru[$k]=$d/(1-(isset($densitas_baru["&theta;"])?$densitas_baru["&theta;"]:0));
      }
  }
  $mcounty = $mcounty + 2;
?>
          </tbody>
        </table>
      </div>  
      <?php
      // echo "m".$mcounty."{ø} = 1 - ". $densitas2[0][1]. " = ". $densitas2[1][1]."<br/>";
      echo "m".$mcountx."{".$densitas1[0][0]."} = ".$densitas1[0][1]."<br/>";
      echo "m".$mcountx."{ø} = 1 - ". $densitas1[0][1] ." = ". $densitas1[1][1]."<br/>";
  }

  echo "<br/><br/>";
    //--- perangkingan
    echo "== PERANGKINGAN ==\n";
    echo "<br/>";
    unset($densitas_baru["&theta;"]);
    arsort($densitas_baru);
    print_r($densitas_baru);
    
    echo "<br/><br/>";
    //--- menampilkan hasil akhir
    echo "== HASIL AKHIR ==\n";
    echo "<br/>";
    $codes        =array_keys($densitas_baru); 
    $final_codes  =explode(',',$codes[0]);
 
?>



</div>