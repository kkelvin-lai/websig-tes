<?php
$host = "localhost";
$user = "id11091704_register";
$pass = "kelvinl@1";
$name = "id11091704_dbregister";

//$koneksi = mysqli_connect($host, $user, $pass, $name);
$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, $name) or die("Tidak ada database yang dipilih!");
?>