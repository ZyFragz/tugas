<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_mahasiswa values('$nama','$id','$jurusan')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>