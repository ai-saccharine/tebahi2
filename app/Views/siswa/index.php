<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container">
  <h1 class="text-center teks-beranda">Selamat datang di TEBAHI di sini kalian bisa mempelajari bahasa Inggris yang menyenangkan.</h1>
  <div class="d-flex justify-content-center">
    <a href="<?= base_url(); ?>/siswa/kategori" class="btn btn-lg btn-orange fw-bold">Kategori Materi</a>
  </div>
</div>
<nav class="navbar fixed-bottom">
  <div class="container-fluid">
    <a class="btn btn-sm btn-krem fw-bold" href="<?= base_url(); ?>/about">Tentang Aplikasi</a>
  </div>
</nav>
<?= $this->endSection(); ?>