<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Tambah Data Gejala</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
               <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_gejala/daftar"?>">Data Gejala</a></li>
              <li class="breadcrumb-item active">Tambah Data Gejala</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<br>
<section   class="forms">
          <div class="container-fluid">

   <?php
              if ( $pesan == 'TRUE' ) {
                echo'<div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  Data Berhasil Tersimpan!
                  </div>';
              }
            ?>  

<div class="col-md-8 mx-auto">
<form class="form-horizontal" role="form" action="<?php echo base_url('index.php/c_gejala/menambahGejala')?>" method="POST">    
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Kode</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="id_gejala" name="id_gejala" class="form-control" required="required" oninvalid="this.setCustomValidity('Id Gejala Tidak Boleh Kosong')" oninput="setCustomValidity('')" placeholder="Awali Kode Gejala dengan Huruf 'G', Contoh: G01">
                        <div id="response" class="response"></div>
                      </div>
                    </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label"><b>Nama Gejala</b></label>
                      <div class="col-sm-10">
                        <input type="text" id="nama_gejala" name="nama_gejala" class="form-control" required="required" oninvalid="this.setCustomValidity('Nama Gejala Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                      </div>
                    </div>

                     <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
                </div>
                </section>

<script>
$(document).ready(function(){
 $('#id_gejala').blur(checkAvailability);
});

function checkAvailability(){
 var id_gejala = $('#id_gejala').val(); 
 if(id_gejala == ""){  
  $('#id_gejala').css('border', '2px red solid');  
 }else{
  $.ajax({
   type: "post",
   url: "http://localhost/pakar/index.php/c_gejala/cekPK",
   cache: false,    
   data:'id_gejala=' + $("#id_gejala").val(),
   success: function(response){ 
    try{
     if(response=='true'){
      $('#id_gejala').css('border', '2px green solid'); 
      $("#response").html("<span>Tersedia.</span>");
     }else{
      $('#id_gejala').css('border', '2px red solid'); 
      $("#response").html("<span>* Kode telah terpakai.</span>");
     }          
    }catch(e) {  
     alert('Exception while request..');
    }  
   },
   error: function(){      
    alert('Error while request..');
   }
   });
 }
} 
</script>