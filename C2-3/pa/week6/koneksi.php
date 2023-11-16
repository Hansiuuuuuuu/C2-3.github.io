<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_tiketing_pesawat";
$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
  die("Gagal terhubung ke database" . mysqli_connect_error());
}
