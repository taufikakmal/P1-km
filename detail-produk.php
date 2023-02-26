<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontomulyo || Detail Produk</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
		<h1><a href ="index.php"><img src="img/km-logo.png" /></a></h1>
			<ul>
			<li><a href="tentang.php">Tentang</a></li>
				<li><a href="layanan.php">Layanan</a></li>
				<li><a href="mitra.php">Mitra</a></li>
				<li><a href="portofolio.php">Portofolio</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
				<input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="col-2">
					<img src="produk/<?php echo $p->product_image ?>" width="100%">
				</div>
				<div class="col-2">
					<h3><?php echo $p->product_name ?></h3>
					<h4>Rp. <?php echo number_format($p->product_price) ?></h4>
					<p>Deskripsi :<br><?php echo $p->product_description ?></p>
						<p>Untuk infomasi dan cara pemesanan silahkan :</p>
						<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank"><img src="img/wa-contact.png" width="250px"></a></p>

				</div>
			</div>
		</div>
	</div>

		<!-- footer -->
		<div class="footer">
		<div class="container">
		<small><img src="img/lokasi.png" width="15px">&nbsp;&nbsp;Alamat : <?php echo $a->admin_address ?></small>
		 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<small><img src="img/mail.png" width="15px">&nbsp;&nbsp;&nbsp;Email : <?php echo $a->admin_email ?></small>
		 &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<small><img src="img/telp.png" width="15px">&nbsp;&nbsp;&nbsp;No. Hp : <?php echo $a->admin_telp ?></small>
<br>
			
<br>
			
			<small>&copy; 2021 - Kontomulyo.</small>
		</div>
	</div>
</body>
</html>