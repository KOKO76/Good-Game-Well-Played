<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>SISTEM PAKAR DIAGNOSA GANGGUAN MENTAL PADA ANAK</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	
	<link id="base-style-responsive" href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">
	<link href='<?php echo base_url() ?>assets/http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/iain.png">
	
	
		
		
		
</head>
<body class="cetak">
	<center>		
		<div style="width:900px">
			<div style="padding: 5%">
				<div class="row-fluid">
				<br><br><br>
					<div style="background:#fff" class="span9">
						<p style="text-align:center">
							<h3 style="text-align:center">SISTEM PAKAR</h3>
							<h3 style="text-align:center">DIAGNOSA GANGGUAN MENTAL PADA ANAK</h3>
							<h5 style="text-align:center">Hasil Konsultasi Pasien</h5>
						</p>
					</div>
									
				</div>
				<HR WIDTH="900px" SIZE="8" NOSHADE>
				
				<div class="row-fluid">				
				<div class="row-fluid">
					<div style="background:#fff" class="span12">
						<div class="box">
							<!-- <table class="table">
									<tr>
										<td></td><td>:</td><td><?php echo $id_riwayat;?></td>
									</tr>
							</table> -->
							<div class="box-title">
								<h3>Identitas Pasien</h3>
							</div>
							<div class="box-content">
								<table class="table">
									<tr>
										<td>Id Riwayat</td><td>:</td><td><?php echo $id_riwayat;?></td>
									</tr>
									<tr>
										<td>Nama Pasien</td><td>:</td><td><?php echo $nama_pasien; ?></td>
									</tr>
									<tr>
										<td>Umur</td><td>:</td><td><?php echo $umur;?></td>
									</tr>
								</table>	
							</div>

							<div class="box-title">
								<h3>Hasil Konsultasi</h3>
							</div>
							<div class="box-content">
								<table class="table">
									<tr>
										<td>Id Gejala</td><td>:</td><td><?php echo $id_gejala;?></td>
									</tr>
									<tr>
										<td>Penyakit</td><td>:</td><td><?php echo $nama_penyakit; ?></td>
									</tr>

								</table>	
							</div>

						</div>
					</div>
				</div>
				
				

					<br><br><br><br><br><br><br><br><br>
									
									
				<br><br><br>
				<div style="background:#fff" class="span12">
				<p> Dina Hastari <br />Tahun 2017/2018</p>
				</div>
			</div>
		</div>
		
	</center>
</body>
</html>
<script>
window.print();
</script>