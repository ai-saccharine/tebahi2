<?= $this->extend("auth/template"); ?>
<?= $this->section("content"); ?>
<div class="container d-flex align-items-center justify-content-center" style="height: 90vh;">
  <div class="card bg-abu rounded-1">
    <div class="card-body text-center">
      <h5 class="card-title pt-3">Data Berhasil</h5>
      <h5 class="card-title pb-5">Disimpan!</h5>
      <a href="<?= base_url(); ?>/auth/login" type="button" class="btn btn-lg btn-outline-dark mb-3" data-dismiss="modal">OK</a>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>