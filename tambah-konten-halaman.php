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
	<title>KM-CPanel || Tambah Konten Halaman</title>
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
<a class="active"href="master-halaman.php">Master Page</a>  
				<a  href="master-produk.php">Master Produk</a>

</div>
<!--end sidebarnav-->
	<!-- content -->
<div class="content">
	<div class="section">
		<div class="container">
			<h3>Tambah Data Konten</h3>
			<div class="box">
			<form action="" method="POST" enctype="multipart/form-data">
							<select class="input-control" name="namahalaman" required>
								<option value="">--Pilih Halaman--</option>
												<?php 
													$namahalaman = mysqli_query($conn, "SELECT * FROM tb_page_category ORDER BY page_id DESC");
													while($k = mysqli_fetch_array($namahalaman)){
												?>
								<option value="<?php echo $k['page_id'] ?>"><?php echo $k['page_name'] ?></option>
								<?php } ?>
							</select>
							
							<textarea class="input-control" name="konten" placeholder="masukan isi konten"></textarea><br>
					<input type="submit" name="submit" value="Tambah" class="btn_tambah_data">
				<?php 
					if(isset($_POST['submit'])){

						$namahalaman 			= $_POST['namahalaman'];
						$k 						= $_POST['konten'];

						$insert = mysqli_query($conn, "INSERT INTO tb_page_content VALUES (
							null,
							'".$namahalaman."',
							'".$k."',
							null
								) ");
						if($insert){
							echo '<script>alert("Berhasil Menambahkan Data Konten")</script>';
							echo '<script>window.location="master-halaman.php"</script>';
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