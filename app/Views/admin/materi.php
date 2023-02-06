<?= $this->extend("templates/admin/index"); ?>
<?= $this->section("content"); ?>
<!-- Begin Page Content -->
<?php
// dd($materi);
?>
<div class="container-fluid d-flex align-items-center justify-content-center">
  <div class="row">
    <h3 class="text-center text-dark">Daftar Materi</h3>
    <?php
    if (session()->getFlashdata("pesan")) :
    ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata("pesan"); ?>
      </div>
    <?php
    endif;
    ?>
    <div class="col table-scroll">
      <table class="table table-warning table-striped text-dark table-hover">
        <thead>
          <tr>
            <th scope="col" class="text-center">No</th>
            <th scope="col">Kategori Materi</th>
            <th scope="col">Materi</th>
            <th scope="col" class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($materi as $m) : ?>
            <tr>
              <th scope="row" class="text-center"><?= $i++; ?></th>
              <td><?= $m['kategori-materi']; ?></td>
              <td><?= $m['materi']; ?></td>
              <td class="text-center">
                <a href="/admin/materi/<?= $m['id']; ?>" class="btn btn-outline-primary"><i class="bi bi-info-circle fs-5"></i></a>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#hapusModal<?= $m['id']; ?>"><i class="bi bi-trash fs-5"></i></button>
              </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="hapusModal<?= $m['id']; ?>" tabindex="-1" aria-labelledby="hapusModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content w-75 m-auto">
                  <div class="modal-header justify-content-center">
                    <h1 class="modal-title fs-5" id="hapusModalLabel">Peringatan!</h1>
                  </div>
                  <div class="modal-body text-center">
                    Yakin ingin menghapus materi?
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                    <a href="<?= base_url(); ?>/admin/hapusMateri/<?= $m['id']; ?>" class="btn btn-outline-success">Ya</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>