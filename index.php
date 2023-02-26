<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
			// Jenis Browser
			$browser = $_SERVER['HTTP_USER_AGENT'];
			$chrome = '/Chrome/';
			$firefox = '/Firefox/';
			$ie = '/IE/';
			if (preg_match($chrome, $browser))
				$data = "Chrome/Opera";
			if (preg_match($firefox, $browser))
				$data = "Firefox";
			if (preg_match($ie, $browser))
				$data = "IE";

			// untuk mengambil informasi dari pengunjung
			$ipaddress = $_SERVER['REMOTE_ADDR']."";
			$browser = $data;
			$tanggal = date('Y-m-d');
			$kunjungan = 1;
			// Daftarkan Kedalam Session Lalu Simpan Ke Database
			if (!isset($_SESSION['counterdb'])){
			$_SESSION['counterdb']=$ipaddress;
			mysqli_query($conn,"INSERT INTO counterdb (tanggal,ip_address,counter,browser) VALUES ('".$tanggal."','".$ipaddress."','".$kunjungan."','".$browser."')");
			} 
			// Hitung Jumlah Visitor
			$kemarin  = date("Y-m-d",mktime(0,0,0,date('m'),date('d')-1,date('Y')));
			$hari_ini  = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) AS hari_ini FROM counterdb WHERE tanggal="'.date("Y-m-d").'"'));
			$kemarin = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) AS kemarin FROM counterdb WHERE tanggal="'.$kemarin.'"'));
			$sql = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) as total FROM counterdb'));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontomulyo</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/pop-up.css">
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
				<li><a href="portofolio.php">Portofolio</a></li>
				<li><a href="mitra.php">Mitra</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>
		</div>
	</header>

	<!-- search -->
	<div class="search">
		<div class="container">
			<form action="produk.php">
				<input type="text" name="search" placeholder="Cari Produk">
				<input type="submit" name="cari" value="Cari Produk">
			</form>
		</div>
	</div>

	<!-- category -->
	<div class="section">
		<div class="container">
			<h3>Kategori</h3>
			<div class="box">
				<?php 
					$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
					if(mysqli_num_rows($kategori) > 0){
						while($k = mysqli_fetch_array($kategori)){
				?>
					<a href="produk.php?kat=<?php echo $k['category_id'] ?>">
						<div class="col-5">
							<img src="img/icon-kategori.png" width="50px" style="margin-bottom:5px;">
							<p><?php echo $k['category_name'] ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Kategori tidak ada</p>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end category -->

	<!--modal pop-up-->

	<!--modal pop-up end-->

	<!-- new product -->
	<div class="section">
		<div class="container">
			<h3>Produk Terbaru</h3>
			<div class="box">
				<?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
					<a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col-4">
							<img src="produk/<?php echo $p['product_image'] ?>">
							<p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
							<p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
						</div>
					</a>
				<?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
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