<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Perpustakaan</title>
</head>
<body>
<h3>Tambah Data Jurusan</h3>
<form action="proses_tambah_jurusan.php" method="post">
	Id Jurusan:
	<input type="text" name="id_jurusan" value="" class="form-control">
	Nama Jurusan :
	<input type="text" name="nama_jurusan" value="" class="form-control">
	<input type="submit" name="simpan" value="Tambah_jurusan" class="btn btn-primary">
	<a href="datajurusan.php"class = "btn btn-success">Back to Data Jurusan</a>
	
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>