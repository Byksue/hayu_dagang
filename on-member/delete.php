<?php  
	include '../Connection.php';
	$id_produk = $_GET['id_produk'];
	$id_user = $_GET['id_user'];
	$query = mysqli_query($con,"DELETE FROM produk WHERE id_produk = '$id_produk'");
	if ($query) {
		echo "<script>
			  alert('Data berhasil dihapus!');
			  document.location.href='tampil_lapak.php?id_user=$id_user';
			  </script>";
	}else{
		echo "<script>
			  alert('Data gagal dihapus!');
			  document.location.href='tampil_lapak.php?id_user=$id_user';
			  </script>";
	}
?>