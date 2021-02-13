<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
// update data ke database
mysqli_query($koneksi,"update tb_mahasiswa set nama='$nama', id='$id', jurusan='$jurusan' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>