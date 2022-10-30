<?php
if ($_POST) {
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$jurusan=$_POST['jurusan'];
	$username=$_POST['username']; 
	$password=$_POST['password'];

	if (empty($nama)) {
		echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} elseif (empty($nim)) {
		echo "<script>alert('nim tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} elseif (empty($jurusan)) {
		echo "<script>alert('jurusan tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} elseif (empty($username)) {
		echo "<script>alert('username tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} elseif (empty($password)) {
		echo "<script>alert('password tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>"; 
	} else {
		include "koneksi.php";
		$insert = mysqli_query($koneksi, "insert into mahasiswa (nama, nim, jurusan, username, password) value('".$nama."','".$nim."','".$jurusan."','".$username."','".$password."')") or die(mysqli_error($koneksi));
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='datamahasiswa.php';</script>";
		} else {
			"<script>alert('Gagal menambahkan data mahasiswa');location.href='tambah_mahasiswa.php';</script>";
		}
	}
}
?>