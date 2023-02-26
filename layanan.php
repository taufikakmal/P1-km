<?php 
	include 'db.php';
	$kontak = mysqli_query		($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
	$page_konten = mysqli_query ($conn, "SELECT page_name, content_name 			   FROM  tb_page_content WHERE content_id  = 2");
	$k = mysqli_fetch_object($page_konten);
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>kontomulyo || Layanan</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Zen+Kaku+Gothic+Antique&display=swap" rel="stylesheet">
	
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

	<!-- konten -->

		<div class="container">
		<div class="box">
				<center><h1><?php echo $k->page_name ?></h1></center>
				<p><?php echo $k->content_name ?></p>
				<br>
							<!-- service --> 
		<?php
		date_default_timezone_set("Asia/jakarta");
    	?>
    	<h4>Buka setiap hari</h4>
    	<p>Jam : <b><span id="jam" style="font-size:24"></span></p>
    
				<script type="text/javascript">
					window.onload = function() { jam(); }
				
					function jam() {
						var e = document.getElementById('jam'),
						d = new Date(), h, m, s;
						h = d.getHours();
						m = set(d.getMinutes());
						s = set(d.getSeconds());
						e.innerHTML = h +':'+ m +':'+ s;
						setTimeout('jam()', 1000);
					}
				
					function set(e) {
						e = e < 10 ? '0'+ e : e;
						return e;
					}
				</script>
	<h4>TUTUP : 15:00 WIB</h4>
      						<!-- end service -->
				
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