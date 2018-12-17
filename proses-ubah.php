<?php 
	//koneksi db-nya
    $db = mysqli_connect('localhost','root','','mahasiswa');
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $foto = $_POST['foto'];
    
    // echo $id;

    //querynya
    $result = mysqli_query($db, "UPDATE mhs SET 
        nim='$nim',
        nama='$nama',
        email='$email',
        foto='$foto'
        WHERE id=$id"
    );
    header("location:index.php");
    

    
?>