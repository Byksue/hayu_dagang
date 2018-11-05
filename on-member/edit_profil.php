<?php  
	include '../Connection.php';
	$id = $_GET['id_user'];
	$query = mysqli_query($con, "SELECT * FROM user WHERE id_user='$id'");
	while ($data = mysqli_fetch_assoc($query)) {
		# code...
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profil</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<form method="post">
		<div class="from-group" style="width: 500px;margin-left: 400px;text-align: center;padding-top: 100px;">
			<label>Nama</label><br>
			<input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>">
		</div>
		<div class="from-group" style="width: 500px;margin-left: 400px;text-align: center;padding-top: 20px;">
			<label>alamat</label><br>
			<textarea class="form-control" name="alamat"><?= $data['alamat']; ?></textarea>
		</div>
		<div class="from-group" style="width: 500px;margin-left: 400px;text-align: center;padding-top: 20px;">
			<label>Nomor Telepon</label><br>
			<input type="number" name="nomor" class="form-control" value="<?= $data['no_tlp']; ?>">
		</div>
		<div class="from-group" style="width: 500px;margin-left: 400px;text-align: center;padding-top: 20px";>
			<input type="submit" name="kirim" class="btn btn-success" value="Edit">
		</div>
		<?php } ?>
	</form>
	<?php  
		if (isset($_POST['kirim'])) {
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$nomor = $_POST['nomor'];
			$query2 = mysqli_query($con, "UPDATE user SET nama='$nama', alamat='$alamat',no_tlp='$nomor' WHERE id_user='$id'");
			if ($query2) {
			 	echo "<script>";
		        echo "alert('Profil anata berhasil diupdate');";
		        echo "document.location.href='profil_member.php?id_user=$id';";
		        echo "</script>";
			 }else{
			 	echo "<script>";
		        echo "alert('Terjadi kesalahan saat mengupdate data,harap isi dengan benar!');";
		        echo "document.location.href='edit_profil.php?id_user=$id';";
		        echo "</script>";
			 }
		}
	?>
</body>
</html>