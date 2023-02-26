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
	<title>KM-Panel || Master Halaman</title>
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
<a class="active" href="master-halaman.php">Master Halaman</a>  
				<a  href="master-produk.php">Master Produk</a>


</div>
	<!--end sidebarnav-->
<!-- isi halaman -->
<div class="content">
	<div class="section">
		<div class="container">
			<h3>Konten</h3>
			<div class="box">
			<div style="overflow:auto; width:100%px; height:auto; padding:10px; border:1px solid white">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Nama Halaman</th>
							<th>Kontent</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<option><tbody>
						<?php							
							$no = 1;
							$isi = mysqli_query($conn, "SELECT * FROM tb_page_content ORDER BY content_id DESC");
							if(mysqli_num_rows($isi) > 0){
							while($row = mysqli_fetch_array($isi)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
								<td><?php echo $row['page_name'] ?></td>
								<td><?php echo $row['content_name'] ?></td>
								<td>
										<a href 	="edit-konten-halaman.php?id=	<?php echo $row['content_id']?>">
										<input type	="submit" name ="submit" value="Ubah  " class="btn_edit_data"></a>  
										
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="3">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody></option>
				</table>
			</div>
							
		</div>
	</div>
</div>
	<!-- end isi halaman -->

	<!-- footer -->
	<footer>
		<div class="container">
			<center><small>&copy; 2021 - Kontomulyo.</small></center>
		</div>
	</footer>
</body>
</html>