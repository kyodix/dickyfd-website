<?php 
// koneksi database
include '../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$platform = $_POST['platform'];
$gambar = $_POST['gambar'];
$software = $_POST['software'];
$date = $_POST['date'];
$kategori = $_POST['kategori'];
$link = $_POST['link'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into video values('','$nama','$platform','$gambar','$software','$date','$kategori','$link')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>