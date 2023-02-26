<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id = '".$_GET['id']."' ");
	if(mysqli_num_rows($kategori) == 0){
		echo '<script>window.location="master-produk.php"</script>';
	}
	$k = mysqli_fetch_object($kategori);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KM-Panel || Edit Kategori Produk</title>
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
<!-- end header -->
<!--sidebarnav-->
<div class="sidebar">
  				<a href="dashboard.php">Dashboard</a>
  				<a href="profil.php">Admin Profil</a>
				<a href="master-halaman.php">Master Halaman</a> 
<a class="active"	href="master-produk.php">Master Produk</a>

</div>
<!--end sidebarnav-->
	<!-- content -->
<div class="content">
	<div class="section">
		<div class="container">
			<h3>Edit Data Kategori</h3>
			<div class="box">
			<div style="overflow:auto; width:100%px; height:400px; padding:10px; border:1px solid white">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->category_name ?>" required>
					<input type="submit" name="submit" value="Ubah" class="btn_edit_data">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$update = mysqli_query($conn, "UPDATE tb_category SET 
												category_name = '".$nama."'
												WHERE category_id = '".$k->category_id."' ");

						if($update){
							echo '<script>alert("Edit data berhasil")</script>';
							echo '<script>window.location="master-produk.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
			</div>
			</div>
		</div>
	</div>
</div>
	<!-- footer -->
	<footer>
		<div class="container">
			<center><small>Copyright &copy; 2021 - Kontomulyo.</small></center>
		</div>
	</footer>
</body>
</html>