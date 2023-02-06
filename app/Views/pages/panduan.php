<?= $this->extend("templates/siswa/index"); ?>
<?= $this->section("content"); ?>
<div class="container">
  <a href="/siswa" class="m-1">
    <img src="<?= base_url(); ?>/img/back.png" class="me-auto" style="width: 60px;">
  </a>
</div>
<div class="container d-flex text-center justify-content-center align-items-center" style="height: 90vh;">
  <div class="modal-content fw-bold fs-1">
    <div class="modal-header mb-2 mx-5">
      <h5 class="modal-title fs-1 fw-bold mx-auto" id="settings">Panduan</h5>
    </div>
    <div class="modal-body mx-auto border border-2 border-dark panduan d-flex justify-content-center align-items-center">
      <img src="<?= base_url(); ?>/img/panduan/panduan1.png" alt="panduan1" id="panduan">
    </div>
    <div class="modal-footer mt-4">
      <button class="btn" id="prev"><img src="<?= base_url(); ?>/img/prev.png" alt="Prev" class="img-next"></button>
      <button class="btn" id="next"><img src="<?= base_url(); ?>/img/next.png" alt="Next" class="img-next"></button>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    var currentIndex = 1;
    var maxIndex = 6;

    $("#next").click(function() {
      currentIndex++;
      if (currentIndex > maxIndex) {
        currentIndex = maxIndex;
      }

      if (currentIndex == maxIndex) {
        $("#next").hide();
      }
      $("#prev").show();

      $("#panduan").attr("src", "<?= base_url(); ?>/img/panduan/panduan" + currentIndex + ".png");
      $("#panduan").attr("alt", "panduan" + currentIndex);
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

      $("#panduan").attr("src", "<?= base_url(); ?>/img/panduan/panduan" + currentIndex + ".png");
      $("#panduan").attr("alt", "panduan" + currentIndex);
    });

    if (currentIndex == 1) {
      $("#prev").hide();
    }
  });
</script>
<?= $this->endSection(); ?>