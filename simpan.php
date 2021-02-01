<?php 

include 'koneksi.php';

$nama=$_GET['nama'];
$kelas=$_GET['kelas'];
$jurusan=$_GET['jurusan'];

$simpan=mysqli_query($koneksi, "INSERT INTO tbl_data VALUES('','$nama','$kelas','$jurusan')");

header('location:index.php');

 ?>