<?php
  include_once("function/koneksi.php");

  $nama_lengkap = $_POST['nama_lengkap'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $alamat = $_POST['alamat'];
  $password = md5($_POST['password']);
  $re_password = $_POST['re_password'];
  $level = "customer";
  $status = "on";

  mysqli_query($conn, "INSERT INTO user(level, nama, email, alamat, phone, password, status)
                                  VALUES('$level', '$nama_lengkap', '$email', '$phone', '$alamat', '$password', '$status')");

?>