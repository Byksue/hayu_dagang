<?php  
	include '../Connection.php';
	$id_produk = $_GET['id_produk'];
	$id_lapak = $_GET['id_lapak'];
	if (isset($_POST["kirim"])) {
		$jumlah = count($_FILES['gambar']['name']);
		if ($jumlah > 0) {
			for ($i=0; $i < $jumlah; $i++) {
				$file_name = $_FILES['gambar']['name'][$i];
				$tmp_name = $_FILES['gambar']['tmp_name'][$i];
				$folder = "../img/produk/";
				move_uploaded_file($tmp_name, $folder. $file_name);
				$foto = $folder.$file_name;
				$query_foto = mysqli_query($con,"INSERT INTO foto_produk (id_produk,foto) VALUES ('$id_produk','$foto')");
			}
			if ($query_foto) {
				echo "<script>
						alert('Foto berhasil di Upload!');
					  </script>";
			}else{
				echo "<script>
						alert('Foto Gagal di Upload!');
					  </script>";
			}
		}
		else{
			echo "Gambar tidak ada";
		}
	}
	$query_user = mysqli_query($con,"SELECT * FROM lapak WHERE id_lapak='$id_lapak'");
	$row = mysqli_fetch_assoc($query_user);
	$id_user = $row['id_user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Foto</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
	<div style="padding-top: 100px;text-align: center;width: 600px;border: 1px solid #999;padding-bottom: 100px;">
		<h1>Anda berhasil menambahkan produk anda.</h1><br>
		<h3>Click button di bawah ini untuk meng-upload foto untuk produk anda!</h3><br>
		<form method="post" enctype="multipart/form-data">
			<div class="from-group">
				<input type="file" name="gambar[]" multiple class="btn">
				<input type="submit" name="kirim" value="Upload" class="btn btn-success">
			</div>
		</form>
		<button class="btn btn-primary"><a href="<?= "tampil_lapak.php?id_user=".$id_user; ?>"><font color="white">Halaman Toko</font></a></button>
	</div>
</body>
</html>