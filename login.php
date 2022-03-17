<?php
  if ($user_id) {
    header("location:" . BASE_URL);
  }

  $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
  if ($notif == "true") {
    echo "<div class='row justify-content-center'><div class='col-md-4'><p class='notif'>
                    Maaf, e-mail dan password anda tidak cocok!
                  </p></div></div>";
  }

  $notif = isset($_GET['notif']) ? $_GET['notif'] : false;
  if ($notif == "galog") {
    echo "<div class='row justify-content-center'><div class='col-md-4'><p class='notif'>
                      Maaf, anda harus login terlebih dahulu!
                    </p></div></div>";
  }
?>

<div class="form">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <form action="<?php echo BASE_URL . "proses_login.php"; ?>" method="POST">
        <div class="mb-3">
          <label for="E-mail" class="form-label">E-mail</label>
          <input type="text" class="form-control" id="E-mail" name="email">
        </div>
        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="password" class="form-control" id="Password" name="password">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-all">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>