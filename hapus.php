<?php
include 'koneksi.php';

$nomor=$_GET['id'];

mysqli_query($koneksi, "DELETE FROM `tbl_data` WHERE `tbl_data`.`id` = $nomor");

header('location:index.php');
 ?>