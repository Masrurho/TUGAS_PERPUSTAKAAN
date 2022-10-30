<?php
	include 'navbar.php';  
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title> JURUSAN </title>
</head>
<body>
<h3>Jurusan</h3>
			<a href="tambah_jurusan.php" class = "btn btn-success">Tambah Data</a> | 
<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>ID JURUSAN</th>
			<th>NAMA JURUSAN</th>
			<th>AKSI</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
			include "koneksi.php";
			$qry_jurusan=mysqli_query($koneksi,"select * from jurusan");
			$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
			$no++;?>
			<tr>
			<td><?=$no?></td>
			<td><?=$data_jurusan['nama_jurusan']?></td>

			<td><a href="edit_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" class = "btn btn-success">Edit</a> | 
				<a href="hapus_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
			
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>