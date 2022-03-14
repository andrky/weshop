<?php
  include_once("../../function/helper.php");
  include_once("../../function/koneksi.php");

  $kategori = $_POST['kategori'];
  $status = $_POST['status'];
  $tambah = $_POST['tambah'];

  mysqli_query($conn, "INSERT INTO kategori(kategori, status)
                                    VALUES('$kategori', '$status')");

  header("location:".BASE_URL."index.php?page=my_profile&module=kategori&action=list");
?>