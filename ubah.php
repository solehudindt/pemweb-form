<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sources/bootstrap.css">
    <title>Ubah data</title>
</head>
<body>
<?php 
	//koneksi db-nya
    $db = mysqli_connect('localhost','root','','mahasiswa');
    //menangkap id
    $id = $_GET['idubah'];
    //querynya
    $mhs = mysqli_query($db,"select * from mhs where id = $id");
    //mengambil data sesuai id
    $hasil = mysqli_fetch_assoc($mhs);
    
?>
<div class="p-3 mb-1 bg-dark text-white text-center">
    <h2>Ubah data</h2>
</div>
<div class="container">
    
    <form method="POST" action="proses-ubah.php">
      <div class="form-group">
        <input type="hidden" name="id" value="<?= $hasil["id"]?>">
        <label for="nim">Nim</label>
        <input class="form-control" type="text" name="nim" id="nim" placeholder="nim" value="<?= $hasil["nim"]?>">

        <label for="nama">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="nama" value="<?= $hasil["nama"]?>">

        <label for="exampleInputEmail1">Email address</label>
        <input type="email"  class="form-control" name="email"id="exampleInputEmail1" placeholder="masukan email" value="<?= $hasil["email"]?>">
        
        <label for="foto">Foto</label>
        <input class="form-control" type="text" name="foto" id="foto" placeholder="foto" value="<?= $hasil["foto"]?>">
      </div>

      <button type="submit" class="btn btn-primary" onclick="return alert('Data berhasil diubah')">Ubah Data</button>
    </form>
</div>

    <script src="sources/bootstrap.js"></script>
	<script src="sources/jquery.js"></script>
	<script src="sources/popper.js"></script>
</body>
</html>