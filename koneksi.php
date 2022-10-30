<?php
$koneksi=mysqli_connect('localhost','root','','perpustakaan');
/* check connection */
if (mysqli_connect_error()) {
	printf("Connect failed:", mysqli_connect_error());
	exit();
}
?>