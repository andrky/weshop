<?php
  include_once("../../function/helper.php");
  include_once("../../function/koneksi.php");

  $kategori_id = $_POST['kategori_id'];
  $nama_barang = $_POST['nama_barang'];
  $spesifikasi = $_POST['spesifikasi'];
  $stok = $_POST['stok'];
  $harga = $_POST['harga'];
  $status = $_POST['status'];
  $button = $_POST['button'];

  $nama_file = $_FILES["file"]["name"];
  move_uploaded_file($_FILES["file"]["tmp_name"], "../../images/barang/".$nama_file);
  
  if($button == "Add"){
    mysqli_query($conn, "INSERT INTO barang(kategori_id, nama_barang, spesifikasi, stok, gambar, harga, status)
                                      VALUES('$kategori_id', '$nama_barang', '$spesifikasi', '$stok', '$nama_file', '$harga', '$status')");
  }
  // else if($button == "Update"){
  //   $barang_id = $_GET['barang_id'];

  //   mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang',
  //                                           spesifikasi='$spesifikasi',
  //                                           stok='$stok',                                            
  //                                           harga='$harga',
  //                                           status='$status'
  //                                           WHERE barang_id='$barang_id'");
  // }
  header("location:".BASE_URL."index.php?page=my_profile&module=barang&action=list");
