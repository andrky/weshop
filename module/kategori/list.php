<div class="form">
  <div class="mb-3">
    <a class="btn btn-all" href="<?php echo BASE_URL . "index.php?page=my_profile&module=kategori&action=form"; ?>">+ Tambah Kategori</a>
  </div>


<?php
$queryKategori = mysqli_query($conn, "SELECT * FROM kategori");

if (mysqli_num_rows($queryKategori) == 0) {
  echo "<div class='row justify-content-center'><div class='col-md-12'><p class='notif'>Saat ini belum ada data di dalam kategori!</p></div></div>";
} else {
  echo
  "<table id='example' class='hover row-border order-column'>
      <thead>
        <tr>
          <th>No</th>
          <th>Kategori</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>";
  $no = 1;
  while ($row = mysqli_fetch_assoc($queryKategori)) {
    echo
    "<tbody>
          <tr>
            <td>$no</td>
            <td>$row[kategori]</td>
            <td>$row[status]</td>
            <td><a class='" . BASE_URL . "index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</td>
          </tr>
        </tbody>";
  }
  $no++;
  echo "</table>";
}
?>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>
</div>