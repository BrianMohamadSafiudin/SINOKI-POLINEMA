<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #4E31AA">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home_admin') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin') }}/img/logo.ico" alt="logo-polinema" style="max-width: 40px">
        </div>
        <div class="sidebar-brand-text mx-3">SINOKI POLINEMA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <li class='nav-item  {{ Request::is('home_admin') ? 'active' : '' }}'>
        <a class='nav-link' href='{{ route('home_admin') }}' >
            <i class='fas fa-fw fa-folder'></i>
            <span>Data Program Kerja</span>
        </a>
    </li>

    <li class='nav-item {{ Request::is('dataAnggota') ? 'active' : '' }}'>
        <a class='nav-link' href='{{ route('dataAnggota') }}' >
            <i class='fas fa-fw fa-chart-area'></i>
            <span>Data Anggota</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->

