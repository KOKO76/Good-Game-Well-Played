<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SISTEM PAKAR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css');?>">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Roboto:300,400,700');?>">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap-select/css/bootstrap-select.min.css');?>">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.css');?>">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.default.css" id="theme-stylesheet');?>">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico" type="image/x-icon');?>">
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-touch-icon.png');?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('assets/img/apple-touch-icon-57x57.png');?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('assets/img/apple-touch-icon-72x72.png');?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-touch-icon-76x76.png');?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('assets/img/apple-touch-icon-114x114.png');?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('assets/img/apple-touch-icon-120x120.png');?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('assets/img/apple-touch-icon-144x144.png');?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('assets/img/apple-touch-icon-152x152.png');?>">
    
  </head>
  <body>

    <div id="all">
      <!-- Top bar-->
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on (0370) 672140</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <div class="login">
                  <a href="<?php echo base_url(),"index.php/c_validasi/logout"?>" class="exit-btn"><span class="d-none d-md-inline-block"><b>Log out </b><i class="fa fa-sign-out"></i></span></a></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home"><img src="<?php echo base_url("assets/img/")?>logoberanda.png" class="d-none d-md-inline-block"><img src="<?php echo base_url("assets/img/")?>logoberanda.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li><a href="<?php echo base_url(),"index.php/c_berandaadmin"?>"> <i class="caret"></i>Beranda</a></li>
                <li><a href="<?php echo base_url(),"index.php/c_penyakit/daftar"?>"> <i class="caret"></i>Penyakit</a></li>
                <li><a href="<?php echo base_url(),"index.php/c_gejala/daftar"?>"> <i class="caret"></i>Gejala</a></li>
                <li><a href="<?php echo base_url(),"index.php/c_relasi/daftar"?>"> <i class="caret"></i>Relasi</a></li>
                <li><a href="<?php echo base_url(),"index.php/c_riwayat/daftar"?>"> <i class="caret"></i>Riwayat Pasien</a></li>
                <li><a href="<?php echo base_url(),"index.php/c_pasien/daftar"?>"> <i class="caret"></i>Data Pasien</a></li>
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>