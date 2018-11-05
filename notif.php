<?php  
	include '../Connection.php';
	$id = $_GET['id_user'];

	$querylapak = mysqli_query($con, "SELECT * FROM lapak WHERE id_user = '$id'");
	$data = mysqli_fetch_assoc($querylapak);

	if ($data != 0) {
		header("location:tampil_lapak.php?id_user=$id");
	}else{

?>
<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div style="padding: 60px;text-align: center;border: 10px solid #999;margin-top: 100px;height: 200px;width: 400px;margin-left: 450px;border-radius: 10px;">
		<label>Anata Belum Memiliki Toko</label><br>
		<button class="btn btn-success"><a href="<?= "buat_lapak.php?id_user=".$id ?>"><font color="white">Buat Toko</font></a></button>
	</div>


<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

<?php } ?>