<?php 
	//koneksi db-nya
    $db = mysqli_connect('localhost','root','','mahasiswa');
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];
    
	//querynya
    $hasil = mysqli_query($db,"insert into mhs VALUES('', '$nim', '$nama', '$email', '$foto');");
    // $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
    header("location:index.php")
    
?>