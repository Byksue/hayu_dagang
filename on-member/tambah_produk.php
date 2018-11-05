<?php
	include ("../Connection.php");
	$id_lapak = $_GET['id_lapak'];
	
	if (isset($_POST["kirim"])) {
		$jumlah = count($_FILES['gambar']['name']);
		$nama_produk = $_POST['nama_produk'];
		$kategori = $_POST['kategori'];
		$harga_produk = $_POST['harga_produk'];
		$deskripsi_produk = $_POST['deskripsi_produk'];

		$query_produk = mysqli_query($con,"INSERT INTO produk (id_lapak,nama_produk,harga_produk,kategori,deskripsi_produk) VALUES ('$id_lapak','$nama_produk','$harga_produk','$kategori','$deskripsi_produk')");
		if ($query_produk) {
			$query2 = mysqli_query($con,"SELECT id_produk from produk where id_lapak='$id_lapak' AND nama_produk = '$nama_produk'");
			$produk = mysqli_fetch_assoc($query2);
			$id_produk = $produk['id_produk'];
			echo "<script>
					alert('Data Berhasil Di Upload.');
					document.location.href='upload_foto.php?id_produk=$id_produk&id_lapak=$id_lapak';
				  </script>";
		}else{
			echo "<script>
					alert('Data Gagal Di Upload.');
					document.location.href='multiple.php?id_lapak=$id_lapak';
				  </script>";
		}
	}
?>


<html>
	<head>
		<title>Tambah Produk</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	</head>
	<body>
		<h1 align="center">Tambah Produk</h1>
		
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="from-group">
					<label>Nama Produk</label><br>
					<input type="text" name="nama_produk" class="form-control" required=""><br>
				</div>
				<div class="from-group">
					<label>Kategori Produk</label>
					<select class="form-control" name="kategori" required="">
						<option>-- Pilih Kategori --</option>
						<option value="Hewani">Hewani</option>
						<option value="Nabati">Nabati</option>
					</select><br>
				</div>
				<div class="from-group">
					<label>Harga Produk</label><br>
					<input type="number" name="harga_produk" class="form-control"><br>
				</div>
				<div class="from-group">
					<label>Deskripsi Produk</label><br>
					<textarea class="form-control" name="deskripsi_produk">
						
					</textarea>
				</div>
				<div class="from-group">
					<input type="submit" name="kirim" value="kirim">
				</div>
			</form>
	</body>
</html>