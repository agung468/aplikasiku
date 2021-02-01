<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>dataku</title>
</head>
<body>
	<h1 align="center">MASUKAN DATA</h1>
	<div align="center">
		<form action="simpan.php" method="GET">
			<p>MASUKAN NAMA</p>
			<input type="text" name="nama">
			<p>MASUKAN KELAS</p>
			<input type="text" name="kelas">
			<p>MASUKAN JURUSAN</p>
			<input type="text" name="jurusan"><br><br>
			<input type="submit" name="simpan"><br>
			<hr>
		</form>
	</div>
<div align="center">
	<h1>MENAMPILKAN DATA</h1>
<table border="1">
	<tr>
		<td>NO</td>
		<td>NAMA</td>
		<td>KELAS</td>
		<td>JURUSAN</td>
		<td>OPSI</td>	
	</tr>

<?php 

include 'koneksi.php';

$no=1;
$data=mysqli_query($koneksi, "SELECT * FROM tbl_data");
while ($d=mysqli_fetch_array($data)) { ?>
	<tr>
		<td> <?php echo $no++; ?> </td>
		<td> <?php echo $d['nama']; ?> </td>
		<td> <?php echo $d['kelas']; ?> </td>
		<td> <?php echo $d['jurusan']; ?> </td>
		<td>
			<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a> |
			<a href="#">HAPUS</a>
		</td>
	</tr>


<?php  } ?>  
 </div>
</body>
</html>