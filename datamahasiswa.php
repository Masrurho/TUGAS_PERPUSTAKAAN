<?php
	include 'navbar.php';  
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title> DATA MAHASISWA</title>
</head>
<body>
<h3>Data Mahasiswa</h3>
			<a href="tambah_mahasiswa.php" class = "btn btn-success">Tambah Data</a> | 
<table class="table table-hover table-striped">
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>JURUSAN</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>AKSI</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($koneksi,"select * from mahasiswa");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa)) {
			$no++;?>
			<tr>
			<td><?=$no?></td>
			<td><?=$data_mahasiswa['nama']?></td>
			<td><?=$data_mahasiswa['nim']?></td>
			<td><?=$data_mahasiswa['jurusan']?></td>
			<td><?=$data_mahasiswa['username']?></td>
			<td><?=$data_mahasiswa['password']?></td>

			<td><a href="edit_mhs.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" class = "btn btn-success">Edit</a> | 
				<a href="hapus.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
			
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>