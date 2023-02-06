<?= $this->extend("auth/template"); ?>
<?= $this->section("content"); ?>
<div class="container">
  <a href="<?= base_url(); ?>/" class="m-3">
    <img src="<?= base_url(); ?>/img/back.png" alt="back" class="img-back">
  </a>
</div>
<div class="container d-flex justify-content-center">
  <!-- Modal -->
  <div class="modal-content login rounded-4 bg-krem">
    <div class="container px-5">
      <div class="modal-header justify-content-center">
        <h5 class="modal-title text-uppercase" id="loginModalLabel">Login Form</h5>
      </div>
      <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger" role="alert"><?php echo session()->getFlashdata('error'); ?></div>
      <?php endif; ?>
      <form action="<?= base_url('/login'); ?>" method="post">
        <div class="modal-body">
          <div class="input-group mb-3 login">
            <span class="input-group-text login" id="basic-addon1"><img src="<?= base_url(); ?>/img/login/email.png" alt="email" class="img-email"></span>
            <input type="text" class="form-control login" name="email" id="email" placeholder="Email" value="<?= old('email') ?>" autofocus>
          </div>
          <div class="input-group mb-1 login">
            <span class="input-group-text login" id="basic-addon2"><img src="<?= base_url(); ?>/img/login/password.png" alt="Password" class="img-password"></span>
            <input type="password" name="password" id="password" class="form-control login" placeholder="Password">
          </div>
          <div class="container d-flex justify-content-between">
            <a href="<?= base_url() ?>/register">Register</a>
            <a href="<?= base_url() ?>/reset">Forgot Password?</a>
          </div>
        </div>
        <div class="modal-footer justify-content-center my-2">
          <button type="submit" class="btn btn-lg btn-navy">LOGIN</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>