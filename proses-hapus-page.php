<?php 
	
	include 'db.php';
//Proses Hapus Kontent//
	if(isset($_GET['idk'])){
		$delete = mysqli_query($conn, "DELETE FROM tb_page WHERE page_id = '".$_GET['idk']."' ");
		echo '<script>window.location="page.php"</script>';
	}

?>