<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
    background-color: #777;
    color: white;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #555;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}
</style>

<div id="heading-breadcrumbs">
    <div class="container">
       <div class="row d-flex align-items-center flex-wrap">
          <div class="col-md-7">
            <h1 class="h2">Info Penyakit</h1>
          </div>
         <div class="col-md-5">
           <ul class="breadcrumb d-flex justify-content-end">
              <li class="breadcrumb-item"><a href="<?php echo base_url(),"index.php/c_berandapasien"?>">Beranda</a></li>
              <li class="breadcrumb-item">Info Penyakit</li>
           </ul>
          </div>
      </div>
   </div>
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}
</script>

<div class="card-body" action="<?php echo base_url('index.php/c_penyakit/infopenyakit')?>">
    <?php  
                foreach ($data as $key) 
                { ?>
                   <button class="collapsible" name="id_penyakit" value="<?php echo $key['id_penyakit']?>"><h3><?php echo $key['nama_penyakit'];?></h3></button>

                   <div class="content" style="display: none;">
                     <p value="<?php echo $key['id_penyakit'] ?>">
                                <h4><b>Deskripsi</b></h4>
                                 &emsp; &emsp; <?php echo $key['deskripsi']; ?> 
                                 </br>
                                 </br>
                                 <h4><b>Penanganan</b></h4>
                                 <?php echo $key['penanganan']; ?> 
                                 </p>
                                 
                   </div>
              <?php } ?>
               
</div>


