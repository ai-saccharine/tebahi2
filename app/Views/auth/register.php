<?= $this->extend("auth/template"); ?>
<?= $this->section("content"); ?>
<div class="container-fluid">
  <a href="<?= base_url(); ?>/login" class="m-3">
    <img src="<?= base_url(); ?>/img/back.png" alt="back" class="img-back">
  </a>
</div>
<div class="container d-flex text-center justify-content-center">
  <div class="modal-content register rounded-4 bg-krem">
    <div class="modal-header justify-content-center my-2">
      <h5 class="modal-title text-uppercase" id="loginModalLabel">register now!</h5>
    </div>
    <form action="<?= base_url() ?>/auth/saveRegister" method="post">
      <?= csrf_field(); ?>
      <div class="modal-body">
        <div class="mb-3 row text-end">
          <label for="nama" class="col-sm-3 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError("nama")) ? "is-invalid" : ""; ?> register" id="nama" name="nama" value="<?= old("nama"); ?>">
            <div id="nama" class="invalid-feedback">
              <?= $validation->getError("nama"); ?>
            </div>
          </div>
        </div>
        <div class="mb-3 d-flex <?= ($validation->hasError("jenisKelamin")) ? "is-invalid" : ""; ?> text-end">
          <label for="jenis_kelamin" class="col-sm-3 col-form-label me-1">Jenis Kelamin</label>
          <div class="d-flex align-items-center col-sm-3 ms-2 text-start">
            <input type="radio" id="perempuan" name="jenisKelamin" value="p" <?= old("jenisKelamin") === 'p' ? "checked" : ""; ?>>
            <label class="ps-1 jk" for="perempuan">Perempuan</label>
          </div>
          <div class="d-flex align-items-center col-sm-3 ms-2 text-start">
            <input type="radio" id="laki-laki" name="jenisKelamin" value="l" <?= old("jenisKelamin") === 'l' ? "checked" : ""; ?>>
            <label class="ps-1 jk" for="laki-laki">Laki-Laki</label>
          </div>
          <div id="jenisKelamin" class="invalid-feedback">
            <?= $validation->getError("jenisKelamin"); ?>
          </div>
        </div>
        <div class="mb-3 row text-end">
          <label for="umur" class="col-sm-3 col-form-label">Umur</label>
          <div class="col-sm-8">
            <input type="number" class="form-control <?= ($validation->hasError("umur")) ? "is-invalid" : ""; ?> register" id="umur" name="umur" value="<?= old("umur"); ?>">
            <div id="umur" class="invalid-feedback">
              <?= $validation->getError("umur"); ?>
            </div>
          </div>
        </div>
        <div class="mb-3 row text-end">
          <label for="noTelp" class="col-sm-3 col-form-label">Nomor Telepon</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?= ($validation->hasError("noTelp")) ? "is-invalid" : ""; ?> register" id="noTelp" name="noTelp" value="<?= old("noTelp"); ?>">
            <div id="noTelp" class="invalid-feedback">
              <?= $validation->getError("noTelp"); ?>
            </div>
          </div>
        </div>
        <div class="mb-3 row text-end">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control <?= ($validation->hasError("email")) ? "is-invalid" : ""; ?> register" id="email" name="email" value="<?= old("email"); ?>">
            <div id="email" class="invalid-feedback">
              <?= $validation->getError("email"); ?>
            </div>
          </div>
        </div>
        <div class="mb-3 row text-end">
          <label for="password" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-8 d-flex">
            <input type="password" class="form-control <?= ($validation->hasError("password")) ? "is-invalid" : ""; ?> register" id="password" name="password" value="<?= old("password"); ?>">
            <button class="btn btn-outline-dark btn-navy" type="button" id="btn-show-password">
              <i class="bi bi-eye-slash-fill"></i>
            </button>
            <div id="password" class="invalid-feedback">
              <?= $validation->getError("password"); ?>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-lg btn-navy mb-3 text-center">Register</button>
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>