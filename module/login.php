<?php
$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
if ($notif == "require") {
  echo "<p id='notif'>
                Maaf, e-mail dan password anda tidak cocok!
              </p>";
} 
?>

<div id="form">
  <form action="<?php echo BASE_URL . "proses_login.php"; ?>" method="POST">
      <label for="E-mail" class="form-label">E-mail</label>
      <input type="text" class="form-control" id="E-mail" name="email" value="<?php echo $email ?>">
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" class="form-control" id="Password" name="password">
    </div>
    <div class="col-12">
      <button type="submit" class="btn" id="btn-login">Login</button>
    </div>
  </form>
</div>