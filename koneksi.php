<?php
// simpan credentials di variabel
$host = "localhost";
$user = "root";
$pass = "";
$database = "nim";

// mengkoneksikan
$db = mysqli_connect($host, $user, $pass, $database) or die("Koneksi ke database gagal!");
?>
