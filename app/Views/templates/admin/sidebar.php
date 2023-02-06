<!-- Sidebar -->
<ul class="navbar-nav admin-nav sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>/admin">
    <div class="sidebar-brand-icon border border-5 rotate-n-15 rounded rounded-circle">
      <img src="<?= base_url(); ?>/img/tebahi.png" class="rounded rounded-circle" alt="TBI" style="width: 50px;">
    </div>
    <div class="sidebar-brand-text mx-3">TEBAHI</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" />

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="/admin">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Nav Item - Materi -->
  <li class="nav-item">
    <a class="nav-link" href="/admin/materi">
      <i class="fa fa-book-open ms-auto"></i>
      <span>Materi</span></a>
  </li>

  <!-- Nav Item - Soal -->
  <li class="nav-item">
    <a class="nav-link" href="/admin/soal">
      <i class="fas fa-pencil-alt ms-auto"></i>
      <span>Soal</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->