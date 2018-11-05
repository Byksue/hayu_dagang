<!DOCTYPE html>
<html>
<head>
	<title>Data-Pelapak|Hayu Dagang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Data-Lapak</h1>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Id Lapak</th>
				<th scope="col">Id Pemilik</th>
				<th scope="col">Nama Lapak</th>
				<th scope="col">Alamat Lapak</th>
				<th scope="col">Status</th>
				<th colspan="2" scope="col">Alat</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$query = mysqli_query($con,"SELECT * FROM lapak ORDER BY id_lapak asc");
				$no=0;
				if ($query) {
					while ($data = mysqli_fetch_assoc($query)) {
					$no++;
				
				
				
			?>
			<tr>
				<td align="center"><?= $no; ?></td>
				<td align="center"><?= $data['id_lapak']; ?></td>
				<td align="center"><?=  $data['id_user']; ?></td>
				<td align="center"><?=  $data['nama_lapak']; ?></td>
				<td align="center"><?=  $data['alamat_lapak']; ?></td>
				<td align="center"><span class="label label-success" style="background: #4cd137;border-radius: 10%;">Aktif</span></td>
				<td align="center"><button class="btn btn-danger">Delete</button></td>
				<td align="center"><button class="btn btn-success">Edit</button></td>
			</tr>
			<?php 
			}	
		}else{
			echo "gagal";
			var_dump($query);
		} 
			?>
		</tbody>
	</table>
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>