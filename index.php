<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PemWeb</title>
	<link rel="stylesheet" href="sources/bootstrap.css">
	<style>
		img {
			height: 100px;
		}
	</style>
	</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">Daftar MHS</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-1 my-sl-0" method="POST" >
      <input class="form-control mr-sm-1" type="search" autocomplete="no" placeholder="Cari..." name="keyword">
      <button class="btn btn-outline-info my-2 my-sm-1" type="submit" name="cari">Cari</button>
    </form>
  </div>
</nav>

<div class="container">
	<table width=100%>
	<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nim</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">foto</th>
			<th scope="col">fungsi</th>
		</tr>
	</thead>
<?php 
	//koneksi db-nya
	$db = mysqli_connect('localhost','root','','mahasiswa');
	//querynya
	if(isset($_POST['keyword'])){
		$cari = $_POST['keyword'];
		$hasil = mysqli_query($db,"select * from mhs 
				where 
				nama like '%$cari%' or
				nim like '%$cari%' or
				email like '%$cari%' ");
	} else {			
		$hasil = mysqli_query($db,"select * from mhs");
	}
	//mengambil data per baris berdasarkan array assosiative
	while($baris = mysqli_fetch_assoc($hasil)){
?>  
		<tr>
			<td><?= $baris["id"]?></td>
			<td><?= $baris["nim"]?></td>
			<td><?= $baris["nama"]?></td>
			<td><?= $baris["email"]?></td>
			<td><img src="images/<?= $baris["foto"]?>"></td>
			<td>
				<a href="ubah.php?idubah=<?= $baris['id']?>"><button type="button" class="btn btn-success btn-sm">
					Edit Data
				</button></a>
				<a href="hapus.php?idhapus=<?= $baris['id']?>"onclick="return confirm('yakin menghapus data ini?')">
				<button type="button" class="btn btn-danger btn-sm">
					Hapus Data
				</button></a>
			</td>
		</tr>
<?php
	}
?>
	</tbody>
</table>
	<script src="sources/bootstrap.js"></script>
	<script src="sources/jquery.js"></script>
	<script src="sources/popper.js"></script>

	<a href="tambah-data.php"><button type="button" class="btn btn-primary mx-auto">Tambah Data</button></a>
</div>

</body>
</html>