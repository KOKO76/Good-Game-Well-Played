
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<br>
<!-- warna hijau di photo -->
<div class="home-carousel">
   <div class="dark-mask mask-primary"></div>
</div>    

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
      <img src="<?php echo base_url("assets/img/")?>1.jpg" style="width:100%">
        <!-- <div class="text">Caption Text</div> -->
    </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
    <img src="<?php echo base_url("assets/img/")?>2.jpg" style="width:100%">
    <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
    <img src="<?php echo base_url("assets/img/")?>3.jpg" style="width:100%">
    <!-- <div class="text">Caption Three</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>



<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

  <section class="bar background-pentagon no-mb text-md-center">
    <div class="heading text-center">
      <h2>Tentang Sistem</h2>
    </div>
          <p class="lead">Sistem pakar ini merupakan sebuah sistem yang dapat mendiagnosa 8 gangguan mental pada anak yaitu Autistic Spectrum Disorder (ASD), Skizofrenia, Dysthymic Disorder, Social Phobia, Manic Episode, Posttraumatic Stress Disorder, Separation Anxiety Disorder dan Generalized Anxiety Disorder. Untuk menentukan kesimpulan, sistem ini menggunakan metode Dempster Shafer dalam perhitungannya.</p>          
  </section>
</body>

         