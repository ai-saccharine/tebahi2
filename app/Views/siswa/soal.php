<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container d-flex text-center justify-content-center align-items-center" style="height: 90vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header my-2 mx-5">
      <a href="/siswa/kategori" class="me-auto">
        <img src="<?= base_url(); ?>/img/back.png" class="me-auto" style="width: 60px;">
      </a>
      <h5 class="modal-title fs-1 fw-bold mx-auto" id="settings">Statement [<?= $_SESSION['level']; ?>]</h5>
      <a href="/siswa" class="ms-auto">
        <img src="<?= base_url(); ?>/img/home.png" class="me-auto" style="width: 60px;">
      </a>
    </div>
    <div class="row justify-content-center">
      <div class="col-1 border border-dark bg-abu fs-6 nomor-soal">
        1/20
      </div>
    </div>
    <form action="<?= base_url(); ?>/siswa/nilai" method="post">
      <div class="modal-body mx-5 d-flex justify-content-center align-items-center" style="height: 60vh;">
        <div class="col" id="soalContainer">
          <?php foreach ($soal as $key => $s) : ?>
            <div class="soal" style="display:none;" data-id="<?= $s['id'] ?>">
              <p class="mb-4"><?= $s['pertanyaan'] ?></p>
              <?php $pilihan = explode(',', $s['pilihan']); ?>
              <?php shuffle($pilihan) ?>
              <?php foreach ($pilihan as $key => $jawaban) : ?>
                <div class="row d-flex justify-content-center">
                  <input type="checkbox" class="btn-check" id="<?= $jawaban; ?>" name="<?= $s['id']; ?>" value="<?= $jawaban; ?>" autocomplete="off" data-id="<?= $key + 1 ?>">
                  <label class="btn fw-bold bg-abu mb-1 w-50" for="<?= $jawaban; ?>"><?= $jawaban; ?></label>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="modal-footer mt-4">
        <button type="button" class="btn" id="prev"><img src="<?= base_url(); ?>/img/prev.png" alt="Prev" class="img-next"></button>
        <button type="button" class="btn" id="next"><img src="<?= base_url(); ?>/img/next.png" alt="Next" class="img-next"></button>
        <button type="submit" class="btn btn-abu border border-dark" id="finish">Finish</button>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    var currentIndex = 0;
    var maxIndex = $(".soal").length - 1;

    // Ambil jumlah soal
    var totalSoal = $(".soal").length;

    // Ambil element nomor-soal
    var noSoal = $('.nomor-soal');

    // Set nomor-soal
    noSoal.text(`1/${totalSoal}`);

    function showCurrentSoal() {
      $(".soal").hide();
      $(".soal").eq(currentIndex).show();
      noSoal.text(`${currentIndex + 1}/${totalSoal}`);
    }

    $("#next").click(function() {
      currentIndex++;
      if (currentIndex > maxIndex) {
        currentIndex = maxIndex;
      }

      showCurrentSoal();

      if (currentIndex === 0) {
        $("#prev").hide();
      } else {
        $("#prev").show();
      }

      if (currentIndex === maxIndex) {
        $("#next").hide();
        $("#finish").show();
      } else {
        $("#next").show();
        $("#finish").hide();
      }
    });

    $("#prev").click(function() {
      currentIndex--;
      if (currentIndex < 0) {
        currentIndex = 0;
      }

      showCurrentSoal();

      if (currentIndex === 0) {
        $("#prev").hide();
      } else {
        $("#prev").show();
      }

      if (currentIndex === maxIndex) {
        $("#next").hide();
        $("#finish").show();
      } else {
        $("#next").show();
        $("#finish").hide();
      }
    });

    if (currentIndex === 0) {
      $("#prev").hide();
    } else {
      $("#prev").show();
    }

    if (currentIndex === maxIndex) {
      $("#next").hide();
      $("#finish").show();
    } else {
      $("#next").show();
      $("#finish").hide();
    }

    showCurrentSoal();

    // jawab
    var jawaban = [];
    $('.jawaban').click(function() {
      $(this).siblings().removeClass('selected');
      $(this).addClass('selected');
      var jawaban = $(this).data('id').text();
      var idSoal = $(this).closest('.soal').data('id');
      localStorage.setItem(`soal${idSoal}`, jawaban);
    });

    $('.soal').each(function() {
      var idSoal = $(this).data('id');
      var jawabanSebelumnya = localStorage.getItem(`soal${idSoal}`);
      if (jawabanSebelumnya) {
        $(this).find('.jawaban').each(function() {
          if ($(this).data('id').text() === jawabanSebelumnya) {
            $(this).addClass('selected');
          }
        });
      }
    });
  });
</script>
<?= $this->endSection(); ?>