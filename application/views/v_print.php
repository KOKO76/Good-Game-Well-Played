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
	
	
	
		
		
		
</head>
<body class="cetak">
	<center>		
		<div style="width:900px">
			<div style="padding: 5%">
				<div class="row-fluid">
				<br>
					<div style="background:#fff" class="span9">
						<p style="text-align:center">
							<h3 style="text-align:center">SISTEM PAKAR</h3>
							<h3 style="text-align:center">DIAGNOSA GANGGUAN MENTAL PADA ANAK</h3>
						</p>
					</div>
									
				</div>
				<HR WIDTH="900px" SIZE="8" NOSHADE>

					<br>
						<p style="text-align:right">
							<h4 style='text-align:right;'>Tanggal Konsultasi: <?php echo $tanggal;?></h4>
						</p>



						<div class="box-title" style='text-align:left;'>
								<h3 style='text-align:left;'>Identitas Pasien</h3>
						</div>
						<div class="box-content" style='text-align:left;'>
								<table class="table" style='text-align:left;'>
									<tr>
										<td style='text-align:left;'>Id Riwayat</td><td style='text-align:left;'>:</td><td style='text-align:left;'><?php echo $id_riwayat;?></td>
									</tr>
									<tr>
										<td style='text-align:left;'>Nama Pasien</td><td style='text-align:left;'>:</td><td style='text-align:left;'><?php echo $nama_pasien; ?></td>
									</tr>
									<tr>
										<td style='text-align:left;'>Umur</td><td style='text-align:left;'>:</td><td style='text-align:left;'><?php echo $umur;?> Tahun</td>
									</tr>
								</table>	
						</div>

						<HR WIDTH="900px" SIZE="3" NOSHADE>
						<div class="box-title">
								<h3>HASIL KONSULTASI</h3>
						</div>
						<div class="box-content">
								<table class="table">
									<tr>
										<td>Nama Gejala</td><td>:</td><td><?php echo $nama_gejala;?></td>
									</tr>
									<tr>
										<td>Penyakit</td><td>:</td><td><?php echo $nama_penyakit; ?></td>
									</tr>
									<tr>
										<td>Presentase</td><td>:</td><td><?php echo $presentase; ?></td>
									</tr>
									<tr>
										<td>Deskripsi</td><td>:</td><td><?php echo $deskripsi; ?></td>
									</tr>
									<tr>
										<td>Penanganan</td><td>:</td><td><?php echo $penanganan; ?></td>
									</tr>
								</table>	
						</div>
			</div>
		</div>
			
	</center>
</body>
</html>
<script>
window.print();
</script>