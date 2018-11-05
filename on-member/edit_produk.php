<?php  
	include '../Connection.php';
	$id_produk = $_GET['id_produk'];
	$query = mysqli_query($con,"SELECT * FROM produk where id_produk = '$id_produk'");
	$data = mysqli_fetch_assoc($query);
	if (isset($_POST['edit'])) {
		$nama_produk = $_POST['nama_produk'];
		$kategori = $_POST['kategori'];
		$harga_produk = $_POST['harga_produk'];
		$deskripsi_produk = $_POST['deskripsi_produk'];

		$query2 = mysqli_query($con,"UPDATE produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', kategori='$kategori', deskripsi_produk='$deskripsi_produk' WHERE id_produk='$id_produk'");
		if ($query2) {
			echo "<script>
				  alert('Data berhasil di update');
				  document.location.href='edit_foto.php?id_produk=$id_produk';
				  </script>";
		}else{
			echo "<script>
			      alert('Data gagal di update');
			      </script>";
		}
	}
?>
<html>
	<head>
		<title>Edit Produk</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	</head>
	<body>
		<h1 align="center">Edit Produk</h1>
		
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="from-group">
					<label>Nama Produk</label><br>
					<input type="text" name="nama_produk" class="form-control" value="<?= $data['nama_produk']; ?>" required=""><br>
				</div>
				<?php  

				?>
				<div class="from-group">
					<label>Kategori Produk</label>
					<select class="form-control" name="kategori" required="">
						<option>-- Pilih Kategori --</option>
						<option value="Hewani" <?php if ($data['kategori'] == 'Hewani') {echo "selected";
						} ?>>Hewani</option>
						<option value="Nabati" <?php if ($data['kategori'] == 'Nabati') {
							echo "selected";
						} ?>>Nabati</option>
					</select><br>
				</div>
				<div class="from-group">
					<label>Harga Produk</label><br>
					<input type="number" name="harga_produk" class="form-control" value="<?= $data['harga_produk']; ?>"><br>
				</div>
				<div class="from-group">
					<label>Deskripsi Produk</label><br>
					<textarea class="form-control" name="deskripsi_produk"><?= $data['deskripsi_produk']; ?>
					</textarea><br>
				</div>
				<div class="from-group">
					<input type="submit" class="btn" name="edit" value="Edit">||<a href=""><button class="btn btn-primary"><font color="white">Kembali</font></button></a>
				</div>
			</form>
	</body>
</html>