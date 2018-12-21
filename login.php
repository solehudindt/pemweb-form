<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sources/bootstrap.css">
    <title>Login</title>
</head>
<body>
<?php
$db = mysqli_connect('localhost','root','','mahasiswa'); //koneksi ke db
//Mengecek apakah username dan password di isi
if(isset($_POST['username']) || isset($_POST['password'])){
    //menangkap username dan password
    $username = $_POST['username'];
    $password = $_POST['password'];
    //mengambil query yang sesuai username dan password
    $hasil = mysqli_query($db,"select * from user where username = '$username' and password = '$password'");
    if (mysqli_num_rows($hasil)) {
        header("location:index.php");
    } else {
        echo "<script>alert('Username atau Password yang anda masukan tidak sesuai')</script>";
    }
}


?>
<div class="p-3 mb-1 bg-dark text-white text-center">
  <h2>Login Tabel Mahasiswa</h2>
</div>
<div class="container">
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="uname">Username</label>
            <input class="form-control" type="text" name="username" id="uname" placeholder="username">

            <label for="passw">Password</label>
            <input class="form-control" type="password" name="password" id="passw" placeholder="password">
        </div>
        <button type="submit" class="btn btn-primary">masuk</button>
    </form>
</div>
<script src="sources/bootstrap.js"></script>
<script src="sources/jquery.js"></script>
<script src="sources/popper.js"></script>
    
</body>
</html>