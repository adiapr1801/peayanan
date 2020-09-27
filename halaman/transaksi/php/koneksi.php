<?php
$koneksi=mysqli_connect("localhost","root","","pelayanan");

if (mysqli_connect_errno()){
	echo"Koneksi ke database gagal".mysqli_connect_error();
	}
?>