<?php
$barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

$nama_barang = "";
$spesifikasi = "";
$stok = "";
$harga = "";
$status = "";
$button = "Add";

// if ($kategori_id) {
//   $queryKategori = mysqli_query($conn, "SELECT * FROM kategori WHERE kategori_id='$kategori_id'");
//   $row = mysqli_fetch_assoc($queryKategori);

//   $kategori = $row['kategori'];
//   $status = $row['status'];
//   $button = "Update";
// }
?>

<div class="form">
  <form action="<?php echo BASE_URL . "module/barang/action.php?barang_id=$barang_id"; ?>" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="E-mail" class="form-label">Kategori</label>
      <span>
        <br>
        <select name="kategori_id" class="form-control">
          <?php
          $query = mysqli_query($conn, "SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC ");
          while ($row = mysqli_fetch_assoc($query)) {
            echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
          }
          ?>
        </select>
      </span>
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Nama Barang</label>
      <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>">
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Spesifikasi</label>
      <textarea class="form-control" name="spesifikasi" value="<?php echo $spesifikasi; ?>"></textarea>
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Stok</label>
      <input type="text" class="form-control" name="stok" value="<?php echo $stok; ?>">
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Harga</label>
      <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>">
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Gambar</label>
      <input type="file" class="form-control" name="file">
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Status</label>
      <br>
      <span>
        <input type="radio" name="status" value="on" class="rb" <?php if ($status == "on") {
                                                                  echo "checked='true'";
                                                                } ?>>On
        <input type="radio" name="status" value="off" class="rb" <?php if ($status == "off") {
                                                                    echo "checked='true'";
                                                                  } ?>>Off
      </span>
    </div>

    <div class="mb-3">
      <input type="submit" id="button" class="btn btn-all" name="button" value="<?php echo $button; ?>"></input>
    </div>
  </form>
</div>