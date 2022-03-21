<div class="form">
  <div class="mt-3 mb-3">
    <a class="btn btn-all" href="<?php echo BASE_URL . "index.php?page=my_profile&module=barang&action=form"; ?>">+ Tambah Barang</a>
  </div>
  <?php
  $queryBarang = mysqli_query($conn, "SELECT * FROM barang");

  if (mysqli_num_rows($queryBarang) == 0) {
    echo "<div class='row justify-content-center'><div class='col-md-12'><p class='notifmargin'>Saat ini belum ada data di dalam menu barang!</p></div></div>";
  } else {
    echo
    "<table id='example' class='display'>
        <thead>
          <tr>
            <th>No</th>
            <th>Barang</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>";
    $no = 1;
    while ($row = mysqli_fetch_assoc($queryBarang)) {
      echo
      "<tbody>
            <tr>
              <td>$no</td>
              <td>$row[nama_barang]</td>
              <td>$row[harga]</td>
              <td>$row[status]</td>
              <td>
                <a href='" . BASE_URL . "index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]' class='btn btn-all crud'>Edit
                <a href='" . BASE_URL . "index.php?page=my_profile&module=barang&action=form&barang_id=$row[barang_id]' class='btn btn-all crud'>Hapus
  
              </td>
            </tr>
          </tbody>";
      $no++;
    }
    echo "</table>";
  }
  ?>
</div>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>