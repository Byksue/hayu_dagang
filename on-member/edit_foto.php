<?php  
	include '../Connection.php';
	$id_produk = $_GET['id_produk'];
	echo $id_produk;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Foto</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
</head>
<body>
	<div style="padding-top: 100px;text-align: center;width: 600px;border: 1px solid #999;padding-bottom: 100px;margin: 0 auto;">
		<h1>Anda berhasil mengupdate produk anda.</h1><br>
		<h3>Click button di bawah ini untuk meng-update foto untuk produk anda!</h3><br>
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