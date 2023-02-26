<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KM-Panel || Tambah Data Kategori Produk</title>
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
				<a href="dashboard.php">Dashboard</a>
  				<a href="profil.php">Admin Profil</a>
				<a href="master-halaman.php">Master Halaman</a>  
				<a href="master-produk.php">Master Produk</a>

</div>
<!--end sidebarnav-->
	<!-- content -->
<div class="content">
	<div class="section">
		<div class="container">
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
											null,
											'".$nama."') ");
						if($insert){
							echo '<script>alert("Tambah data berhasil")</script>';
							echo '<script>window.location="master-produk.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
			</div>
		</div>
	</div>
<!-- end content -->
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Kontomulyo.</small>
		</div>
	</footer>
</body>
</html>