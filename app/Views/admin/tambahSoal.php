<?= $this->extend("templates/admin/index"); ?>
<?= $this->section("content"); ?>
<!-- Begin Page Content -->
<div class="container-fluid d-flex align-items-center justify-content-center" style="height: 75vh;">
  <div class="row">
    <h3 class="text-center text-dark mb-3">Tambah Soal</h3>
    <div class="col">
      <form class="soal" action="/admin/simpanSoal" method="post">
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="pertanyaan">Pertanyaan</span>
          <input type="text" class="form-control admin-form" placeholder="..." aria-label="Pertanyaan" name="pertanyaan" aria-describedby="pertanyaan" autofocus>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="tingkatan">Tingkatan</span>
          <select class="form-select admin-form" aria-label="Tingkatan" name="tingkatan" id="tingkatan">
            <option selected>...Pilih Tingkatan...</option>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="pilihan">Pilihan</span>
          <textarea class="form-control admin-form" aria-label="Pilihan" id="pilihan" name="pilihan" maxlength="100" placeholder="...pisahkan setiap pilihan dengan koma (,) jangan di spasi!" aria-label="Pilihan" name="pilihan" aria-describedby="pilihan"></textarea>
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="jawaban">Jawaban</span>
          <input type="text" class="form-control admin-form" placeholder="...jawaban benar dari soal" aria-label="Jawaban" name="jawaban" aria-describedby="jawaban">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text admin-nav text-light" id="grammar">Grammar</span>
          <textarea class="form-control admin-form" aria-label="Grammar" id="grammar" name="grammar" placeholder="..." maxlength="255"></textarea>
        </div>
        <div class="input-group">
          <a href="/admin/soal" type="submit" class="btn btn-danger mx-auto">Batal</a>
          <button type="reset" class="btn btn-dark mx-auto">Reset</button>
          <button type="submit" class="btn btn-primary mx-auto">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>