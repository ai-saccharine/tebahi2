<?= $this->extend("templates/admin/index"); ?>
<?= $this->section("content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 75vh;">
  <div class="row">
    <h3 class="text-center text-dark mb-3">Ubah Materi</h3>
    <div class="col">
      <form class="ubah-materi" action="/admin/ubahMateri/<?= $materi['id']; ?>" method="post">
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="kategori-materi">Kategori Materi</span>
          <select class="form-select admin-form" aria-label="Kategori Materi" name="kategori-materi" id="kategori-materi">
            <option <?= ($materi['kategori-materi'] == "Beginner") ? "selected" : ""; ?> value="Beginner">Beginner</option>
            <option <?= ($materi['kategori-materi'] == "Intermediate") ? "selected" : ""; ?> value="Intermediate">Intermediate</option>
            <option <?= ($materi['kategori-materi'] == "Advanced") ? "selected" : ""; ?> value="Advanced">Advanced</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="materi">Materi</span>
          <input type="text" class="form-control admin-form" placeholder="..." aria-label="Materi" name="materi" aria-describedby="materi" value="<?= $materi['materi']; ?>">
        </div>
        <div class="input-group">
          <a href="/admin/materi" type="submit" class="btn btn-danger mx-auto">Batal</a>
          <button type="reset" class="btn btn-dark mx-auto">Reset</button>
          <button type="submit" class="btn btn-success mx-auto">Ubah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>