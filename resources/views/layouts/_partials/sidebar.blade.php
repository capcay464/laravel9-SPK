    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="{{ route('home') }}">   
        <div class="sidebar-brand-text mx-3">SPK Penerima Bantuan</div>   
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA PERHITUNGAN
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->Is('kriteria*') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('kriteria.index') }}">
            <i class="fas fa-fw fa-code"></i>
            <span>Data Kriteria</span></a>
    </li>

    <li class="nav-item {{ request()->Is('alternatif*') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('alternatif.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Warga / Alternatif</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        METODE SAW
    </div>

    <li class="nav-item {{ request()->Is('penilaian*') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('penilaian.index') }}">
            <i class="fas fa-fw fa-bell"></i>
            <span>Penilaian</span></a>
    </li>

    <li class="nav-item {{ request()->Is('perhitungan*') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('perhitungan.index') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Perhitungan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->Is('user*') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('user.index')}}">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Data Pengguna</span></a>
    </li>

    <li class="nav-item {{ request()->Is('laporan*') ? 'active':'' }}">
        <a class="nav-link" href="{{ route('laporan')}}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>