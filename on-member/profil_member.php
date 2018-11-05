<?php  
	include '../Connection.php';
	$id = $_GET['id_user'];
	$query = mysqli_query($con, "SELECT * FROM user where id_user='$id'");
	while ($data = mysqli_fetch_assoc($query)) {
		# code...
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Member</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="padding-top: 10px;">
		<h1 align="center">Profil Anda</h1><br>
		<div style="margin-left: 0px">
			<img src="https://source.unsplash.com/random/200x200" class="rounded mx-auto d-block" alt="..."><br>
		</div>
		<table style="margin-left: 0px;" cellspacing="0">
			<tr>
				<td align="left" width="50%"><h3>Nama :</h3></td>
				<td width="500px" align="right"><h3>
					<?php  
						if ($data['nama'] == null) {
							echo "Anda belum mengisi nama anda";
						}else{
							echo $data['nama'];
						}
					?>
				</h3></td>
			</tr>
			<br>
			<tr>
				<td align="left" width="50%"><h3>Alamat :</h3></td>
				<td width="500px" align="right"><h3>
					<?php  
						if ($data['alamat'] == null) {
							echo "Anda belum mengisi alamat anda";
						}else{
							echo $data['alamat'];
						}
					?>
				</h3></td>
			</tr>
			<tr>
				<td align="left" width="50%"><h3>Nomor Telepon :</h3></td>
				<td width="500px" align="right"><h3>
					<?php  
						if ($data['no_tlp'] == null) {
							echo "Anda belum mengisi nomor telepon anda";
						}else{
							echo $data['no_tlp'];
						}
					?>
				</h3></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button class="btn btn-primary"><a href="<?= "edit_profil.php?id_user=".$id; ?>"><font color="white">Edit Profil</font></a></button>||<button class="btn btn-success"><a href="index.php"><font color="white">Kembali</font></a></button></td>
			</tr>
			<?php } ?>
		</table>	
	</div>

<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>