	<!DOCTYPE html>
<html>
<head>
	<title>Data-Produk|Hayu Dagang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<h1 align="center">Data-Produk</h1>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Id Produk</th>
				<th scope="col">Id Lapak</th>
				<th scope="col">Nama Produk</th>
				<th scope="col">Kategori Produk</th>
				<th scope="col">Alat</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$halaman = 5;
				$page = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
				$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				$result = mysqli_query($con,"SELECT * FROM produk ORDER BY id_produk asc");
				$total = mysqli_num_rows($result);
				$pages = ceil($total/$halaman);
				$query = mysqli_query($con,"SELECT * FROM produk ORDER BY id_produk LIMIT $mulai, $halaman");
				$no=$mulai;
				if ($query) {
					while ($data = mysqli_fetch_assoc($query)) {
					$no++;
				
				
				
			?>
			<tr>
				<td align="center"><?= $no; ?></td>
				<td align="center"><?= $data['id_produk']; ?></td>
				<td align="center"><?=  $data['id_lapak']; ?></td>
				<td align="center"><?=  $data['nama_produk']; ?></td>
				<td align="center"><?=  $data['kategori']; ?></td>
				<td align="center"><button class="btn btn-danger">Delete</button></td>
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
	<nav aria-label="Page navigation example">
  <ul class="pagination" style="text-align: center;">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <?php for ($i=1; $i<=$pages; $i++) { ?>
    <li class="page-item"><a class="page-link" href="p=data_produk?halaman=<?= $i; ?>"><?= $i; ?></a></li>
    <?php } ?>
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>