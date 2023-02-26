<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kontomulyo || beranda</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="index.php"><img src="img/km-logo.png" /></a></h1>
			<ul>
			<li><a href="tentang.php">Tentang</a></li>
				<li><a href="layanan.php">Layanan</a></li>
				<li><a href="mitra.php">Mitra</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>
		</div>
	</header>

	<!-- konten -->
	<div class="search">
		<div class="container">
			<div class="box">
				<div class="cont">
					<center><div class="carousel">
						<div class="carousel__face"><span>Ingat Kamu sudah tua</span></div>
						<div class="carousel__face"><span>Kapan Lulus</span></div>
						<div class="carousel__face"><span>Skripsi Tingkat stres meningkat</span></div>
						<div class="carousel__face"><span>Buruan Ajuin</span></div>
						<div class="carousel__face"><span>Rank lu Apa</span></div>
						<div class="carousel__face"><span>Ih wibu</span></div>
						<div class="carousel__face"><span>Kuliah adalah simbol ketertindasan</span></div>
						<div class="carousel__face"><span>Gensin aja dah</span></div>
						<div class="carousel__face"><span>Mending Maraton One Piece</span></div>
						</div>
					</div></center>
				</div>
			</div>
		</div>
	</div>

	<!-- konten -->
	

	
</body>
</html>