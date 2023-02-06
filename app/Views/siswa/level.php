<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container d-flex text-center justify-content-center align-items-center" style="height: 90vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header my-2 mx-5">
      <a href="/siswa/kategori" class="m-3">
        <img src="<?= base_url(); ?>/img/back.png" class="me-auto" style="width: 60px;">
      </a>
      <h5 class="modal-title fs-1 fw-bold mx-auto" id="settings"><?= $level; ?></h5>
      <a href="/siswa" class="m-3">
        <img src="<?= base_url(); ?>/img/home.png" class="me-auto" style="width: 60px;">
      </a>
    </div>
    <div class="modal-body mx-auto border border-2 border-dark level d-flex justify-content-center align-items-center">
      <img src="<?= base_url(); ?>/img/materi/<?= strtolower($level); ?>/<?= strtolower($level); ?>1.png" alt="<?= strtolower($level); ?>1" id="materi">
    </div>
    <div class="modal-footer mt-4">
      <button class="btn" id="prev"><img src="<?= base_url(); ?>/img/prev.png" alt="Prev" class="img-next"></button>
      <a href="<?= base_url(); ?>/soal/<?= $level; ?>" class="btn btn-abu border-navy mx-3">Skip To Statement</a>
      <button class="btn" id="next"><img src="<?= base_url(); ?>/img/next.png" alt="Next" class="img-next"></button>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    var level = "<?= strtolower($level); ?>";
    var currentIndex = 1;
    var maxIndex;

    function setMaxIndex() {
      if (level === "beginner") {
        maxIndex = 12;
      } else if (level === "intermediate") {
        maxIndex = 9;
      } else if (level === "advanced") {
        maxIndex = 6;
      }
    }

    $("#next").click(function() {
      currentIndex++;
      if (currentIndex > maxIndex) {
        currentIndex = maxIndex;
      }

      if (currentIndex == maxIndex) {
        $("#next").hide();
      }
      $("#prev").show();

      $("#materi").attr("src", "<?= base_url(); ?>/img/materi/" + level + "/" + level + currentIndex + ".png");
      $("#materi").attr("alt", level + currentIndex);
    });

    $("#prev").click(function() {
      currentIndex--;
      if (currentIndex < 1) {
        currentIndex = 1;
      }

      if (currentIndex == 1) {
        $("#prev").hide();
      }
      $("#next").show();

      $("#materi").attr("src", "<?= base_url(); ?>/img/materi/" + level + "/" + level + currentIndex + ".png");
      $("#materi").attr("alt", level + currentIndex);
    });

    setMaxIndex();
    if (currentIndex == 1) {
      $("#prev").hide();
    }
  });
</script>
<?= $this->endSection(); ?>