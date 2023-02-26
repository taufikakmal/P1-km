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
		<style type="text/css">.visit{margin: auto; width: 100%;}h3{text-align: center}td{text-align: center;}p{font-weight: bold; color: orangered}.table1{margin-bottom: 10px;}
	
	</style>
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
<!--visitor counter end-->
<?php

 include "counter.php"; 
?>

<div class="content">
<div class="section">
<div class="container">
<div class="box">
<div class="visit">

<div style="overflow:auto; width:100%px; height:400px; padding:10px; border:1px solid white">
	<header>
		<h3>Data Pengunjung</h3>
	</header>
	<article>
<table border="1" cellspacing="0" class="table1">
	<tr>
		<th>Browser</th>
		<th>Ip Pengunjung</th>
		<th>Pegunjung Hari ini</th>
		<th>Pengunjung Kemarin</th>
		<th>Total pengunjung</th>
	</tr>

	<tr>
		<td>
			<?php 
			 switch($browser){
			 case "Firefox" : echo "".$browser.""; break;
			 case "Chrome/Opera" : echo "".$browser.""; break;
			 case "IE" : echo "".$browser.""; break;
			 } ?>
		</td>
		<td><?php echo "".$_SERVER['REMOTE_ADDR']."";?></td>
		<td><p><?php echo "".$hari_ini['hari_ini'].""; ?></p></td>
		<td><p><?php echo "".$kemarin['kemarin'].""; ?></p></td>
		<td><p><?php echo "".$sql['total']."";?></p></td>
	</tr>
</table>

<table border ="1" class="table2" cellspacing="0">
	<tr>
		<th>No</th>
		<th>id</th>
		<th>tanggal</th>
		<th>Browser</th>
		<th>Jml Pegunjung</th>
		
	</tr>

	<?php $no=0; ?>
	<?php $sql="SELECT * FROM counterdb";
		  $sqli=mysqli_query($conn,$sql);

		  $total = mysqli_fetch_array(mysqli_query($conn,'SELECT sum(counter) as jumlah FROM counterdb'));
	 ?>
	 <?php while ($tampil=mysqli_fetch_array($sqli)) {  ?>
	 <?php $no++;?>
	<tr>
		<td><?php echo "$no"; ?></td>
		<td><?php echo "$tampil[id]";?></td>
		<td><?php echo "$tampil[tanggal]";?></td>
		<td><?php echo "$tampil[browser]";?></td>
		<td><?php echo "$tampil[counter]";?></td>
		<?php }?>
	</tr>
	<td colspan="4"> Total</td>
	<td>
			<p><?php echo "".$total['jumlah']."";?></p>
		</td>
</table>
	</article>
</div>
	 </div>
	 </div>
	 </div>
	 <!-- visitor counter end -->
		
	 <!-- footer -->
	<footer>
		<div class="container">
			<small>&copy; 2021 - Kontomulyo.</small>
		</div>
	</footer>



</body>
</html>
</body>
</html>

