<?php 
// koneksi database
include '../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$platform = $_POST['platform'];
$gambar = $_POST['gambar'];
$software = $_POST['software'];
$date = $_POST['date'];
$kategori = $_POST['kategori'];
$link = $_POST['link'];
 
// update data ke database
mysqli_query($koneksi,"update application set namaapplication='$nama', platformapplication='$platform', gambarapplication='$gambar',softapplication='$software', dateapplication='$date', kategoriapplication='$kategori',linkapplication='$link' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>