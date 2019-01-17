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
mysqli_query($koneksi,"update headline set namaheadline='$nama', platformheadline='$platform', gambarheadline='$gambar',softheadline='$software', dateheadline='$date', kategoriheadline='$kategori',linkheadline='$link' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:headline.php");
 
?>