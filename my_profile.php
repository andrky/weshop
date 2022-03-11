<div class="row mx-0">
  <div class="col-md-3 px-0">
    <nav id="sidebar">
      <ul id="w-resp">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=list"; ?>">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=list"; ?>">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=kota&action=list"; ?>">Kota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=user&action=list"; ?>">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=banner&action=list"; ?>">Banner</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL . "index.php?page=my_profile&module=pesanan&action=list"; ?>">Pesanan</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="col-md-9" id="isi">
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab inventore, veniam, maiores asperiores magni quod quas sit nesciunt tempore commodi consectetur, autem incidunt quo. Nulla iure reiciendis assumenda eius nesciunt!l</p>
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