<?php
  $server = "localhost";
  $username = "root";
  $passwprd = "";
  $database = "weshop";

  $conn = mysqli_connect($server, $username, $passwprd, $database) or die("Koneksi ke database gagal!");
?>