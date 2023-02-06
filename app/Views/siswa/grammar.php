<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container-fluid d-flex justify-content-end">
  <a href="/siswa" class="m-3">
    <img src="<?= base_url(); ?>/img/home.png" class="me-auto" style="width: 60px;">
  </a>
</div>
<div class="container d-flex justify-content-center" style="height: 90vh;">
  <div class="modal-content">
    <div class="modal-header justify-content-center mb-5">
      <h2 class="modal-title">Check Grammar</h2>
    </div>
    <div class="modal-body text-center" style="height: 300px; overflow: auto;">
      <?php $i = 1; ?>
      <?php foreach ($soal as $s) : ?>
        <a href="/grammar/<?= $s; ?>/<?= $i; ?>" class="btn btn-light btn-outline-dark m-1 fs-4">Question <?= $i++; ?></a>
      <?php endforeach ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>