<div class="form">
  <form action="<?php echo BASE_URL . "module/kategori/action.php"; ?>" method="POST">
    <div class="mb-3">
      <label for="E-mail" class="form-label">Kategori</label>
      <input type="text" class="form-control" id="Kategori" name="kategori">
    </div>

    <div class="mb-3">
      <label for="E-mail" class="form-label">Status</label>
      <br>
      <span>
        <input type="radio" name="status" value="on" class="rb">On
        <input type="radio" name="status" value="off" class="rb">Off
      </span>
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-all" name="tambah">Add</button>
    </div>
  </form>
</div>