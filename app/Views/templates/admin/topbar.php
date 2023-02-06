      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div class="bg1" id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand admin-nav pb-0 mb-0 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn text-light d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <?php if ($navbar === true) : ?>
              <?php if ($title === "Soal | TEBAHI") : ?>
                <a href="/admin/tambahSoal" class="btn btn-primary me-3">Tambah Soal</a>
              <?php else : ?>
                <a href="/admin/tambahMateri" class="btn btn-primary me-3">Tambah Materi</a>
              <?php endif; ?>
              <?php if ($title === "Soal | TEBAHI") : ?>
                <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari pertanyaan..." id="keyword" name="keyword" aria-label="keyword" aria-describedby="keyword">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit" id="submit" name="submit">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              <?php endif; ?>
            <?php endif; ?>
            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block"></div>
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <div class="btn-group">
                  <button type="button" class="btn p-0 m-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-1 text-light"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end admin-drop">
                    <li class="text-center">
                      <button type="button" class="btn p-0 m-0 text-dark" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                      </button>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
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