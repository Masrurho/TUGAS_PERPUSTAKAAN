<?php
if ($_POST) {
	$nama_jurusan=$_POST['nama_jurusan'];

	if (empty($nama_jurusan)) {
		echo "<script>alert('nama jurusan tidak boleh kosong');location.href='tambah_jurusan.php';</script>";
	 
	} else {
		include "koneksi.php";
		$insert = mysqli_query($koneksi, "insert into jurusan (nama_jurusan) value('".$nama_jurusan."')") or die(mysqli_error($koneksi));
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data');location.href='datajurusan.php';</script>";
		} else {
			"<script>alert('Gagal menambahkan data');location.href='tambah_jurusan.php';</script>";
		}
	}
}
?>