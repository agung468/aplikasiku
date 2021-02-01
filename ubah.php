<?php
 include 'koneksi.php';

 $id=$_GET['id'];
 $nama=$_GET['nama'];
 $kelas=$_GET['kelas'];
 $jurusan=$_GET['jurusan'];

mysqli_query($koneksi, "UPDATE `tbl_data` SET `nama` = '$nama', `kelas` = '$kelas', `jurusan` = '$jurusan' WHERE `tbl_data`.`id` = $id;");
header('location:index.php');

 ?>