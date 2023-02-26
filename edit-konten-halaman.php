<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$konten = mysqli_query($conn, "SELECT * FROM tb_page_content WHERE content_id = '".$_GET['id']."' ");
	if(mysqli_num_rows($konten) == 0){
		echo '<script>window.location="master-halaman.php"</script>';
	}
	$k = mysqli_fetch_object($konten);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KM-Panel || Edit Konten Halaman</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
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
<a class="active"	href="master-halaman.php">Master Page</a> 
				<a href="master-produk.php">Master Produk</a>

</div>
<!--end sidebarnav-->
	<!-- content -->
<div class="content">
	<div class="section">
		<div class="container">
			<h3>Edit Konten Halaman</h3>
			<div class="box">
			<div style="overflow:auto; width:100%px; height:400px; padding:10px; border:1px solid white">
				<form action="" method="POST">
					<input 		type="text" 	name="namahalaman" placeholder="Nama Halaman" class="input-control" value=" <?php echo $k->page_name ?>">
					<textarea class="ckeditor"  name="isikonten"   placeholder="Isi Konten">								<?php echo $k->content_name ?></textarea>
					<input type="submit" name="submit" value="Ubah" class="btn" style="float:right">
				</form>
				<?php 
					if(isset($_POST['submit'])){
							// data inputan dari form
						$namahalaman = ucwords($_POST['namahalaman']);
						$isikonten = ucwords($_POST['isikonten']);
							// query update data konten//
						$update = mysqli_query($conn, "UPDATE tb_page_content SET 
												page_name 		= '".$namahalaman."',
												content_name 	= '".$isikonten."'
												WHERE content_id = '".$k->content_id."' ");

						if($update){
							echo '<script>alert("Edit data berhasil")</script>';
							echo '<script>window.location="master-halaman.php"</script>';
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