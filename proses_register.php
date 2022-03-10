<?php
  include_once("function/koneksi.php");
  include_once("function/helper.php");

  $nama_lengkap = $_POST['nama_lengkap'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $alamat = $_POST['alamat'];
  $password = md5($_POST['password']);
  $re_password = md5($_POST['re_password']);
  $level = "customer";
  $status = "on";

  unset($_POST['password']);
  unset($_POST['re_password']);

  $formData = http_build_query($_POST);

  $query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");

  if(empty($nama_lengkap) || empty($email) || empty($phone) || empty($alamat)|| empty($password)){
    header("location: ".BASE_URL."index.php?page=register&notif=require&$formData");
  } 
  elseif($password != $re_password){
    header("location: " . BASE_URL . "index.php?page=register&notif=password&$formData");
  } 
  elseif (mysqli_num_rows($query) == 1) {
    header("location: " . BASE_URL . "index.php?page=register&notif=emailuse&$formData");
  }
  else{
    mysqli_query($conn, "INSERT INTO user(level, nama, email, alamat, phone, password, status)
                                  VALUES('$level', '$nama_lengkap', '$email', '$phone', '$alamat', '$password', '$status')");

    header("location: " . BASE_URL . "index.php?page=login");

  }

  

?>