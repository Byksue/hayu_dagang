<?php  
	include '../Connection.php';
	$id = $_GET['id_user'];


	$lapak = mysqli_query($con, "SELECT * FROM lapak WHERE id_user = '$id'");
	$data = mysqli_fetch_assoc($lapak);
	$id_lapak = $data['id_lapak'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tampil Lapak</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
	<div>
		<div style="margin-left: 0px;padding-top: 10px;">
			<img src="https://source.unsplash.com/random/200x200" class="rounded mx-auto d-block" alt="..."><br>
		</div>
		<div>
			<h1 align="center">Profil Toko</h1><br>
			<table class="table-bordered" align="center">
				<tr>
					<td>Nama Toko</td>
					<td><?= $data['nama_lapak'] ?></td>
				</tr>
				<tr>
					<td>Deskripsi Toko</td>
					<td><?= $data['deskripsi_lapak'] ?></td>
				</tr>
				<tr>
					<td>Alamat Toko</td>
					<td><?= $data['alamat_lapak'] ?></td>
				</tr>
			</table><br>
			<hr style="background: black;size: 200px;height: 10px;" width="80%"><br>
			<h1 align="center">Produk Toko</h1>
			<?php  
				$query2 = mysqli_query($con, "SELECT * from produk where id_lapak = '$id_lapak	' ");
				// $produk = mysqli_fetch_assoc($query2);
				if (mysqli_num_rows($query2) == 0) {
				 	?>
				 	<div style="padding: 100px;text-align: center;border: 1px solid #999;margin: 100px;">
						<h3>Anda Belum Mempunyai Produk!</h3>
						<button class="btn btn-primary"><a href="<?php echo"tambah_produk.php?id_lapak=".$id_lapak; ?>"><font color="white">Tambah Produk</font></a></button>
					</div>
				 <?php 	
				  }else{
				 	
				  ?>
			<table class="table-bordered" align="center">
				<tr>
					<td>Nama Produk</td>
					<td>Harga Produk</td>
					<td>Kategori Produk</td>
					<td colspan="2" align="center">Alat</td>
				</tr>
				<?php  
					while ($produk2 = mysqli_fetch_assoc($query2)) {
						$id_produk = $produk2['id_produk'];
				?>
				<tr>
					<td><?=$produk2['nama_produk']?></td>
					<td><?= 'Rp. ' . number_format($produk2['harga_produk'],0,',','.'). ' ,-' ?></td>
					<td><?=$produk2['kategori']?></td>
					<td><a href="<?= "delete.php?id_produk=". $produk2['id_produk']."&id_user=".$id; ?>"><button class="btn btn-danger"><font color="white">Delete</font></button></a></td>
					<td><a href="<?= "edit_produk.php?id_produk=".$id_produk; ?>"><button class="btn btn-success"><font color="white">Edit</font></button></a></td>
				</tr>

			<?php } ?>
			</table><br>
			<p align="center"><button class="btn btn-primary"><a href="<?php echo"tambah_produk.php?id_lapak=".$id_lapak; ?>"><font color="white">Tambah Produk</font></a></button></p>
			<?php } ?>
		</div>
		
	</div>
<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:3
		        }
		    }
		})
		</script>
	</body>
</html>