    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Penerima Bantuan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kriteria.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Kriteria</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('alternatif.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Data Warga</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('penilaian.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Penilaian</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('perhitungan.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>Perhitungan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>