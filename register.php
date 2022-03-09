<?php
$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
$password = isset($_GET['notif']) ? $_GET['notif'] : false;
$emailuse = isset($_GET['notif']) ? $_GET['notif'] : false;
$nama_lengkap = isset($_GET['nama_lengkap']) ? ($_GET['nama_lengkap']) : false;
$email = isset($_GET['email']) ? ($_GET['email']) : false;
$phone = isset($_GET['phone']) ? ($_GET['phone']) : false;
$alamat = isset($_GET['alamat']) ? ($_GET['alamat']) : false;
if($notif == "require"){
  echo "<p id='notif'>
                Maaf, mohon isi semua data!
              </p>";
}
else if($notif == "password"){
  echo "<p id='notif'>
                Maaf, password yang di isi harus sama!
              </p>";
} 
else if($emailuse == "emailuse") {
  echo "<p id='notif'>
                Maaf, e-mail yang Anda gunakan sudah terdaftar!
              </p>";
}
?>

<div id="form">
  <form action="<?php echo BASE_URL . "proses_register.php"; ?>" method="POST">
    <div class="mb-3">
      <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control" id="Nama Lengkap" name="nama_lengkap" value="<?php echo $nama_lengkap ?>">
    </div>
    <div class="mb-3">
      <label for="E-mail" class="form-label">E-mail</label>
      <input type="text" class="form-control" id="E-mail" name="email" value="<?php echo $email ?>">
    </div>
    <div class="mb-3">
      <label for="Nomer Telepon" class="form-label">Nomer Telepon</label>
      <input type="text" class="form-control" id="Nomer Telepon" name="phone" value="<?php echo $phone ?>">
    </div>
    <div class="mb-3">
      <label for="Alamat" class="form-label">Alamat</label>
      <textarea class="form-control" id="Alamat" rows="2" name="alamat"><?php echo $alamat ?></textarea>
    </div>
    <div class="mb-3">
      <label for="Password" class="form-label">Password</label>
      <input type="password" class="form-control" id="Password" name="password">
    </div>
    <div class="mb-3">
      <label for="Nomer Telepon" class="form-label">Re-password</label>
      <input type="password" class="form-control" id="Nomer Telepon" name="re_password">
    </div>
    <div class="col-12">
      <button type="submit" class="btn" id="btn-register">Register</button>
    </div>
  </form>
</div>

tes