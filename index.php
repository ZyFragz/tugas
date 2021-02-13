<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>tugas</title>
</head>
<body id="background">

	<h2 align="center" style="font-family: Arial, Helvetica, sans-serif; letter-spacing: 2px;"><b>TUGAS CRUD</b></h2>
	<br/>
	<table border="1" style="border-collapse: collapse;">
		<th id="mahasiswa">
	<a href="tambah.php" id="mahasiswa">TAMBAH MAHASISWA</a>
</th>
</table>
	<br/>
	<br/>
	<table border="2" width="100%" style="border-color: #737373; border-collapse: collapse;">
		<tr style="background-color: #333333; border-color: #737373;" id="text">
			<th>NO</th>
			<th>id</th>
			<th>Nama</th>
			<th>jurusan</th>
			<div id="aksi">
			<th colspan="2" width="1%">Aksi</th>
		</div>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td><?php echo $d['id']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td align="center">
					<div id="edit">
					<a href="edit.php?id=<?php echo $d['id']; ?>"><b>EDIT</b></a>
				</div>
				</td>
				<td align="center">
					<div id="hapus">
					<a href="hapus.php?id=<?php echo $d['id']; ?>"><b>HAPUS</b></a>
				</div>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

<p align="center" style="padding-top: 20%; margin: auto; ">Created By Dicka Sutan Arya Wibowo<br>Copyright &copy; 2021</p>


</body>

</html>