<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<a href="<?= base_url('siswa'); ?>" class="px-4 pt-4 pb-0">
  <img src="<?= base_url(); ?>/img/back.png" style="width: 60px;">
</a>
<div class="container d-flex justify-content-center align-items-center text-center" style="height: 90vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header mb-3 mx-5">
      <h5 class="modal-title fs-1 fw-bold mx-auto" id="settings">Kategori Materi</h5>
    </div>
    <div class="modal-body mx-5">
      <div class="my-5 row justify-content-center">
        <img src="<?= base_url(); ?>/img/levelkategori/pilihlvl.png" alt="pilihlvl" style="width: 300px;">
      </div>
      <div class="row d-flex align-items-end">
        <a href="<?= base_url(); ?>/siswa/beginner">
          <img src="<?= base_url(); ?>/img/levelkategori/beginner.png" alt="beginner" class="kategori">
        </a>
      </div>
      <div class="row d-flex align-items-center">
        <a href="<?= base_url(); ?>/siswa/intermediate">
          <img src="<?= base_url(); ?>/img/levelkategori/intermediate.png" alt="intermediate" class="kategori">
        </a>
      </div>
      <div class="row d-flex align-items-start">
        <a href="<?= base_url(); ?>/siswa/advanced">
          <img src="<?= base_url(); ?>/img/levelkategori/advanced.png" alt="advanced" class="kategori">
        </a>
      </div>
    </div>

  </div>
</div>
<?= $this->endSection(); ?>