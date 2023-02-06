<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <p class="navbar-brand my-auto">TEBAHI</p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/panduan">
            <img src="<?= base_url(); ?>/img/navbar/panduan.png" alt="Panduan" class="img-nav">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>/settings">
            <img src="<?= base_url(); ?>/img/navbar/pengaturan.png" alt="Pengaturan" class="img-nav">
          </a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['status']) == true && $_SESSION['status'] == 'logged_in') : ?>
            <button type="button" class="btn bg-transparent" data-bs-toggle="modal" data-bs-target="#logoutModal">
              <img src="<?= base_url(); ?>/img/navbar/logout.png" alt="Logout" class="img-nav">
            </button>
          <?php else : ?>
            <a class="nav-link" href="<?= base_url('login'); ?>">
              <img src="<?= base_url(); ?>/img/navbar/login.png" alt="Login" class="img-nav">
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content w-75 m-auto">
      <div class="modal-header justify-content-center">
        <h1 class="modal-title fs-5" id="logoutModalLabel">Peringatan!</h1>
      </div>
      <div class="modal-body text-center">
        Yakin logout?
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
        <a href="<?= base_url('logout'); ?>" class="btn btn-outline-success">Ya</a>
      </div>
    </div>
  </div>
</div>