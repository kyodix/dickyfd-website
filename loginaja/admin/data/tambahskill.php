<?php 
// koneksi database
include '../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];
$persen = $_POST['persen'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into myskill values('','$gambar','$nama','$persen')");
 
// mengalihkan halaman kembali ke index.php
header("location:myskill.php");
 
?>