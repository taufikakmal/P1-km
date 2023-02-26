<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
		
	
			}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KM-Panel || Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	
</head>
<body>

	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php"><img src="img/km-logo.png" /></a></h1>
			<br><ul></li><a href="keluar.php">Keluar</a></li></ul></br>
		</div>
	</header>
<!--sidebarnav-->
<div class="sidebar">
<a class="active"href="dashboard.php">Dashboard</a>
  				<a href="profil.php">Admin Profil</a>
				<a href="master-halaman.php">Master Halaman</a>  
				<a  href="master-produk.php">Master Produk</a>

</div>
<!--end sidebarnav-->

<div class="content">
  	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>

				<div class="box-welcome"><marquee><h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di KM Admin Panel</h4></marquee></div>


						
						<!--Total Pengunjung-->			
						<div class="box_dashboard_pengunjung">
							<?php
								include 'db.php';
								// mengambil data produk
								$data_pengunjung = mysqli_query($conn,"SELECT * FROM counterdb");
								// menghitung data produk
								$jumlah_pengunjung = mysqli_num_rows($data_pengunjung);
								?>
							<p><center><a href="visitor-counter.php">Data Pengunjung : <b><?php echo $jumlah_pengunjung; ?></b></center></p>
						</div>
						<!--Total Pengunjung-->

						<!--Total Produk-->			
						<div class="box_total_produk">
							<?php
								include 'db.php';
								// mengambil data produk
								$data_product = mysqli_query($conn,"SELECT * FROM tb_product");
								// menghitung data produk
								$jumlah_product = mysqli_num_rows($data_product);
								?>
							<p><center><a href="master-produk.php">Total Produk : <b><?php echo $jumlah_product; ?></b></p></center>
						</div>
						<!--Total Produk-->	
						

		</div>
	</div>
</div>
	<!-- content -->
		<!-- footer -->
	<footer>
		<div class="container">
			<center><small>&copy; 2021 - Kontomulyo.</small></center>
		</div>
	</footer>



</body>
</html>