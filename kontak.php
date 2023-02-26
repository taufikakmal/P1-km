<?php 
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kontomulyo || Kontak</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
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
<!-- end header -->

<!--map-->
<div class="container">
	<div class="box">
		<script src="http://maps.googleapis.com/maps/api/js"></script>
			<script>
				// Load Peta
				function initialize() {
					var propertiPeta = {
					center:new google.maps.LatLng(-7.7019728728311, 112.21184775188998),
					zoom:9,
					mapTypeId:google.maps.MapTypeId.ROADMAP
					};	
				var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);							
				// membuat Marker
					var marker=new google.maps.Marker({
					position: new google.maps.LatLng(-7.7019728728311, 112.21184775188998),
					map: peta
				});

				}

				// event jendela di-load  
				google.maps.event.addDomListener(window, 'load', initialize);
			</script><div id="googleMap" style="width:100%;height:250px;"></div>
	</div>

		<div class="container">
		<center><a href="https://www.google.com/maps/place/Kontomulyo+Paving+Block/@-7.7021559,112.2119079,15z/data=!4m5!3m4!1s0x0:0x7da97216512d9704!8m2!3d-7.7021554!4d112.211908?hl=id"><button class="btn_gmap">Lihat dengan Google Map</button></a><large></center><br>
			</form>
		</div>

</div>
<!--end map-->

<!-- hub -->
<div class="search">
	<div class="container">
		<form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
			<?php if(!empty($notify)){ ?>
				<p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>">
				<?php echo $notify; ?></p><?php } 
			?>

				<h3>Kirim Pesan:</h3>
				<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank"><img src="img/wa.png" width="50px"></a></p><br>
				<p><a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=<?php echo $a->admin_email ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank"><img src="img/gmail-icon.png" width="48px"></a></p>
		</form>				
	</div>
</div>

<!-- hub -->
	

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