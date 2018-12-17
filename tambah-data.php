<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sources/bootstrap.css">
    <title>Tambah data</title>
</head>
<body>
<div class="p-3 mb-1 bg-dark text-white text-center">
  <h2>Tambah data</h2>
</div>
<div class="container">

  <form method="POST" action="proses-tambah.php">
    <div class="form-group">
      <label for="nim">Nim</label>
      <input class="form-control" type="text" name="nim" id="nim" placeholder="nim">

      <label for="nama">Nama</label>
      <input class="form-control" type="text" name="nama" id="nama" placeholder="nama">

      <label for="exampleInputEmail1">Email address</label>
      <input type="email"  class="form-control" name="email"id="exampleInputEmail1" placeholder="nama@email.com">
       
      <label for="foto">Foto</label>
      <input class="form-control" type="text" name="foto" id="foto" placeholder="foto">
    </div>

      <button type="submit" class="btn btn-primary" onclick="return alert('Data berhasil ditambahkan')">Submit</button>
  </form>
</div>

  <script src="sources/bootstrap.js"></script>
	<script src="sources/jquery.js"></script>
	<script src="sources/popper.js"></script>
</body>
</html>