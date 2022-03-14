<?php
session_start();
include_once("function/helper.php");
include_once("function/koneksi.php");
$page = isset($_GET['page']) ? $_GET['page'] : false;

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
$nama = isset($_SESSION['nama']) ? $_SESSION['nama'] : false;
$level  = isset($_SESSION['level']) ? $_SESSION['level'] : false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo BASE_URL . "assets/css/bootstrap.min.css"; ?> ">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL . "assets/css/style.css"; ?>">
  <!-- JS -->
  <script src="<?php echo BASE_URL . "assets/js/jquery-3.6.0.min.js"; ?>"></script>
  <script src="<?php echo BASE_URL . "assets/js/popper.min.js"; ?>"></script>
  <script src="<?php echo BASE_URL . "assets/js/bootstrap.min.js"; ?>"></script>
  <!-- Data Tables -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <title>Weshop | Toko Barang Elektronik</title>
</head>

<body>
  <div class="container-fluid">
    <!-- Header -->
    <div id="header">
      <nav class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo BASE_URL . "index.php"; ?>">
            <img src="<?php echo BASE_URL . "assets/images/logo.png"; ?>" alt="Gambar Weshop" class="d-inline-block align-text-top">
          </a>
        </div>
      </nav>
    </div>

    <!-- Navbar -->
    <div id="navbar">
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav" id="nav1">
              <?php
              if ($user_id) {
                echo "<li class='nav-item'>
                        <a class='nav-link btn' aria-current='page'>Hi $nama</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link btn' aria-current='page' href='" . BASE_URL . "index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
                      </li>
                      <li class='nav-item'>
                        <a class='nav-link btn' aria-current='page' href='" . BASE_URL . "logout.php'>Logout</a>
                      </li>";
              } else {
                echo "
                <li class='nav-item'>
                  <a class='nav-link btn' aria-current='page' href='" . BASE_URL . "index.php?page=login'>Login</a>
                </li>
                <li class='nav-item'>
                  <a class='nav-link btn' aria-current='page' href='" . BASE_URL . "index.php?page=register'>Register</a>
                </li>";
              }
              ?>
            </ul>

            <ul class="navbar-nav ml-auto" id="nav2">
              <li class="nav-item">
                <a class="nav-link btn" href="<?php echo BASE_URL . "index.php?page=keranjang"; ?>">
                  <img src="<?php echo BASE_URL . "assets/images/cart.png"; ?>" alt="Gambar Keranjang">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- Content -->
    <div class="container-fluid px-0">
      <!-- Content -->
      <div class="row mx-0">
        <div class="col-md-12 px-0">
          <?php
          $filename = "$page.php";
          if (file_exists($filename)) {
          ?>
          <?php
            include_once($filename);
          } else {
          ?>
            <p class="ml-3 pt-3 pb-3">
              Maaf, file tidak ada dalam sistem!
            </p>
          <?php
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid px-0">
      <div id="footer">
        <div class="row mx-0">
          <div class="col-md-12 text-center px-0">
            <p>Copyrigt | M. Ananda Rizky Audriansyah</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>