<?php 
include 'koneksi.php';

$id=$_GET['id'];

$data=mysqli_query($koneksi, "SELECT * FROM tbl_data WHERE id='$id' ");
$d=mysqli_fetch_array($data);

 ?>


<body>
	<h1 align="center">MENGEDIT DATA</h1>
	<div align="center">
		<form action="ubah.php" method="GET">
			<input hidden="true" type="text" name="id" value="<?php echo $id; ?>">
			<p>MASUKAN NAMA</p>
			<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
			<p>MASUKAN KELAS</p>
			<input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
			<p>MASUKAN JURUSAN</p>
			<input type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>"><br><br>
			<input type="submit" name="simpan"><br>
			
		</form>
	</div>