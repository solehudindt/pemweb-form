<?php
$hapus = $_GET['idhapus'];

$db = mysqli_connect('localhost','root','','mahasiswa');
//querynya
mysqli_query($db,"delete from mhs where id=$hapus");
header("location:index.php")
?>