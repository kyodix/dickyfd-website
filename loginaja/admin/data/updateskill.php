<?php 
// koneksi database
include '../../../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];
$persen = $_POST['persen'];
 
// update data ke database
mysqli_query($koneksi,"update myskill set gambarskill='$gambar', namaskill='$nama', persenskill='$persen' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:myskill.php");
 
?>