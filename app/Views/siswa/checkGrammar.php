<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container-fluid d-flex justify-content-between">
  <a href="<?= base_url('grammar'); ?>" class="px-4 pt-4 pb-0">
    <img src="<?= base_url(); ?>/img/back.png" style="width: 60px;">
  </a>
  <a href="/siswa" class="m-3">
    <img src="<?= base_url(); ?>/img/home.png" class="me-auto" style="width: 60px;">
  </a>
</div>
<div class="container d-flex align-items-xl-center justify-content-center" style="height: 90vh;">
  <div class="modal-content">
    <div class="modal-header justify-content-center mb-5">
      <h2 class="modal-title">Check Grammar</h2>
    </div>
    <div class="modal-body text-center">
      <div class="row row-cols-1 row-cols-md-2 g-4 justify-content-center">
        <div class="col">
          <div class="card border border-4 border-dark bg-abu h-100">
            <div class="card-body px-2 pt-0">
              <div class="row d-flex align-items-center border-bottom border-2 border-dark">
                <div class="col-2">
                  <img src="<?= base_url(); ?>/img/check.png" alt="Check" style="width: 100%;">
                </div>
                <div class="col-8">
                  <h5 class="pt-2 pb-1 px-3">Question <?= $noSoal; ?></h5>
                </div>
              </div>
              <p class="card-text my-5"><?= $soal['pertanyaan']; ?></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border border-4 border-dark bg-abu">
            <div class="card-body px-2 pt-0">
              <div class="row d-flex align-items-center border-bottom border-2 border-dark">
                <div class="col-2">
                  <img src="<?= base_url(); ?>/img/check.png" alt="Check" style="width: 100%;">
                </div>
                <div class="col-8">
                  <h5 class="pt-2 pb-1 px-4">Answer</h5>
                </div>
              </div>
              <p class="card-text my-5"><?= str_replace('___', strtolower($soal['jawaban']), $soal['pertanyaan']); ?></p>
            </div>
          </div>
        </div>
        <div class="row bg-abu border border-3 border-dark p-0 m-0 mt-5">
          <div class="col-1 p-0 m-0 d-flex align-items-center">
            <img src="<?= base_url(); ?>/img/grammar.png" alt="Grammar" style="width: 100%;">
          </div>
          <div class="col-11">
            <h5 class="pt-2 pb-1 px-auto"><?= $soal['grammar']; ?></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>