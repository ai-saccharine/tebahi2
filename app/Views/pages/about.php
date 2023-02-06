<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container d-flex text-center justify-content-center align-items-center" style="height: 90vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header my-4 mx-5">
      <div class="col-sm-1">
        <a href="<?= base_url(); ?><?= $_SESSION['role'] == 'siswa' ? "/siswa" : "/admin"; ?>">
          <img src="<?= base_url(); ?>/img/back.png" class="me-auto" style="width: 60px;">
        </a>
      </div>
    </div>
    <div class="modal-body mx-5 about border border-4 border-dark">
      <img src="<?= base_url(); ?>/img/about.png" alt="About" id="about">
    </div>
  </div>
</div>
<?= $this->endSection(); ?>