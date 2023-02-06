<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container-fluid d-flex justify-content-end mb-0">
  <a href="/siswa" class="m-3 text-end">
    <img src="<?= base_url(); ?>/img/home.png" class="ms-auto" style="width: 60px;">
  </a>
</div>
<div class="container d-flex text-center justify-content-center align-items-center" style="height: 70vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header mb-2 mx-5">
      <h5 class="modal-title fs-1 fw-bold mx-auto" id="settings">Your Score</h5>
    </div>
    <div class="modal-body mx-5 d-flex justify-content-center align-items-center">
      <img src="<?= base_url(); ?>/img/score.png" alt="Score" style="width: 300px;">
      <div class="nilai"><?= $nilai; ?></div>
    </div>
    <div class="modal-footer d-flex justify-content-center mt-4">
      <a href="/grammar" class="btn btn-abu fs-2 fw-bold">Check Grammar</a>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>