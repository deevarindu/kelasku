<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-4 px-2">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">
          <span><i class="bi bi-grid m-2"></i> Dashboard</span>
        </a>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Data Administrator</span>
    </h6>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('siswas') ? 'active' : '' }}" href="/siswas">
          <span><i class="bi bi-people m-2"></i> Data Siswa</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('mapels') ? 'active' : '' }}" href="/mapels">
        <span><i class="bi bi-journal m-2"></i> Mata Pelajaran</span>
        </a>
      </li>
    </ul>
  </div>
</nav>
