<?php  
	include '../Connection.php';
	$id = $_GET['id_user'];

	if (isset($_POST['kirim'])) {
		$nama = $_POST['nama_lapak'];
		$deksripsi = $_POST['deskripsi_lapak'];
		$kecamatan = $_POST['kecamatan_lapak'];
		$alamat = $_POST['alamat_lapak'];
		$query = mysqli_query($con, "INSERT INTO lapak (id_user, nama_lapak, deskripsi_lapak,kecamatan,alamat_lapak) values ('$id', '$nama', '$deksripsi','$kecamatan', '$alamat')");
		if ($query) {
			header("location:tampil_lapak.php?id_user=$id");
		}else{
			echo "<script>";
			echo "alert('Toko anata gagal dibuat!')";
			echo "</script>";
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buat Lapak</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-md-4 offset-md-4" style="border: 10px black;border-radius: 10px;">
			<div style="padding-top: 100px;width: 500px;">
				<form method="post">
					<div class="from-grup">
						<label>Nama Lapak :</label><br>
						<input type="text" name="nama_lapak" class="form-control" required=""><br>
					</div>
					<div class="from-grup">
						<label>Deskripsi Lapak :</label><br>
						<textarea name="deskripsi_lapak" class="form-control" required=""></textarea><br>
					</div>
					<div class="from-grup">
						<label>Kecamatan</label><br>
						<select class="form-control" name="kecamatan_lapak" required="">
							<option>-- Pilih Kecamatan --</option>
							<option value="Buahdua">Buahdua</option>
							<option value="Conggeang">Conggeang</option>
							<option value="Pamulihan">Pamulihan</option>
							<option value="Sumedang Utara">Sumedang Utara</option>
							<option value="Ujung Jaya">Ujung Jaya</option>
							<option value="Cibugel">Cibugel</option>
							<option value="Darmaraja">Darmaraja</option>
							<option value="Paseh">Paseh</option>
							<option value="Surian">Surian</option>
							<option value="Wado">Wado</option>
							<option value="Cimalaka">Cimalaka</option>
							<option value="Ganeas">Ganeas</option>
							<option value="Rancakalong">Rancakalong</option>
							<option value="Tanjungkerta">Tanjungkerta</option>
							<option value="Cimanggung">Cimanggung</option>
							<option value="Jatigede">Jatigede</option>
							<option value="Situraja">Situraja</option>
							<option value="Tanjungmedar">Tanjungmedar</option>
							<option value="Cisarua">Cisarua</option>
							<option value="Jatinangor">Jatinangor</option>
							<option value="Sukasari">Sukasari</option>
							<option value="Tanjungsari">Tanjungsari</option>
							<option value="Cisitu">Cisitu</option>
							<option value="Jatinunggal">Jatinunggal</option>
							<option value="Sumedang Selatan">Sumedang Selatan</option>
							<option value="Tomo">Tomo</option>
						</select><br>
					</div>
					<div class="from-grup">
						<label>Alamat Lapak :</label><br>
						<textarea name="alamat_lapak" class="form-control" required=""></textarea><br>
					</div>
					<div class="from-grup">
						<p align="center"><input type="submit" name="kirim" class="btn btn-primary" value="Buat" align="center"></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>