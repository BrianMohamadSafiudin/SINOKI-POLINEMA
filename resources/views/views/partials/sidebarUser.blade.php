<?php

?>
<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #4E31AA">

    <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('admin') }}/img/logo.ico" alt="logo-polinema" style="max-width: 40px">
        </div>
        <div class="sidebar-brand-text mx-3">SINOKI POLINEMA</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->


    <li class="nav-item mb-3 ">
        <div class="sidebar-heading text-gray-500">
            Nama Lengkap
        </div>
        <div class="nav-link text-light font-weight-bolder py-2">
            <span style="font-size: 1rem">{{ auth()->user()->name }}</span>
        </div>
    </li>

    <li class="nav-item mb-3 ">
        <div class="sidebar-heading text-gray-500">
            OKI
        </div>
        <div class="nav-link text-light font-weight-bolder py-2">
            <span style="font-size: 1rem">{{ auth()->user()->namaOki }}</span>
        </div>
    </li>

    <li class="nav-item mb-3 ">
        <div class="sidebar-heading text-gray-500">
            Jabatan
        </div>
        <div class="nav-link text-light font-weight-bolder py-2">
            <span style="font-size: 1rem">Anggota</span>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->
