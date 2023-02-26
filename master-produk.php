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
	<title>KM-Panel || Master Produk</title>
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
<a  class="active" href="master-produk.php">Master Produk</a>


</div>
<!--end sidebarnav-->

	<!-- ktegori produk -->
	<div class="content">
	<div class="section">
		<div class="container">
			<h3>Data Kategori</h3>
			<div class="box">
			<div style="overflow:auto; width:100%px; height:auto; padding:10px; border:1px solid white">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							if(mysqli_num_rows($kategori) > 0){
							while($row = mysqli_fetch_array($kategori)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td>
							<a href ="edit-kategori.php?id=<?php echo $row['category_id']?>"><input type="submit" name ="submit" value="Ubah  " class="btn_edit_data"></a>  <a href ="
                            proses-hapus.php?idk=<?php echo $row['category_id'] ?>" onclick ="return confirm ('Yakin ingin hapus ?'
                                )"><input type="submit" name ="submit" value="Hapus" class="btn_hapus_data"></a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="3">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<a href="tambah-kategori.php"><input type="submit" name ="submit" value="Tambah Data" class="btn_tambah_data"></a> 
		</div>
	</div>
	</div>
	<!-- end kategori produk -->
<!-- form product -->
		<div class="container">
			<h3>Data Produk</h3>
			<div class="box">
			<div style="overflow:auto; width:100%px; height:400px; padding:10px; border:1px solid white">
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){
							while($row = mysqli_fetch_array($produk)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price']) ?></td>
							<td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"> <img src="produk/<?php echo $row['product_image'] ?>" width="50px"> </a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
							<td>
							<a href ="edit-produk.php?id=<?php echo $row['product_id']?>"><input type="submit" name ="submit" value="Ubah  " class="btn_edit_data"></a>  <a href ="
                            proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick ="return confirm ('Yakin ingin hapus ?'
                                )"><input type="submit" name ="submit" value="Hapus" class="btn_hapus_data"></a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>   
                <a href="tambah-produk.php"><input type="submit" name ="submit" value="Tambah Data" class="btn_tambah_data"></a> 
			</div>
		</div>
	</div>
</div>
<!--end form product -->
	<!-- footer -->
	<footer>
		<div class="container">
			<center><small>Copyright &copy; 2021 - Kontomulyo.</small></center>
		</div>
	</footer>
</body>
</html>