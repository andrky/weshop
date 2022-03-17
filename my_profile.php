<?php
if ($user_id) {
  $module = isset($_GET['module']) ? $_GET['module'] : false;
  $action = isset($_GET['action']) ? $_GET['action'] : false;
  $mode   = isset($_GET['mode']) ? $_GET['mode'] : false;
} else {
  header("location:" . BASE_URL . "index.php?page=login&notif=galog");
}
?>

<div class="row mx-0">
  <div class="col-md-3 px-0">
    <nav id="sidebar">
      <ul id="w-resp">
        <li class="nav-item">
          <a <?php if ($module == "kategori") {
                echo "class='active nav-link'";
              } ?>class="nav-link" aria-current="page" href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=list"; ?>">Kategori</a>
        </li>
        <li class="nav-item">
          <a <?php if ($module == "barang") {
                echo "class='active nav-link'";
              } ?>class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list"; ?>">Barang</a>
        </li>
        <li class="nav-item">
          <a <?php if ($module == "kota") {
                echo "class='active nav-link'";
              } ?>class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=kota&action=list"; ?>">Kota</a>
        </li>
        <li class="nav-item">
          <a <?php if ($module == "user") {
                echo "class='active nav-link'";
              } ?>class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=user&action=list"; ?>">User</a>
        </li>
        <li class="nav-item">
          <a <?php if ($module == "banner") {
                echo "class='active nav-link'";
              } ?>class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=banner&action=list"; ?>">Banner</a>
        </li>
        <li class="nav-item">
          <a <?php if ($module == "pesanan") {
                echo "class='active nav-link'";
              } ?>class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=pesanan&action=list"; ?>">Pesanan</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="col-md-9" id="konten">
    <?php
    $file = "module/$module/$action.php";
    if (file_exists($file)) {
      include_once($file);
    } else {
      echo "<div class='row justify-content-center'><div class='col-md-12'><p class='notif'>Maaf, halaman tersebut tidak ditemukan!</p></div></div>";
    }
    ?>
  </div>
</div>

<script>
  $(window).bind("resize", function() {
    console.log($(this).width())
    if ($(this).width() < 768) {
      $('#w-resp').addClass('d-flex')
    } else {
      $('#w-resp').removeClass('d-flex')
    }
  }).trigger('resize');
</script>