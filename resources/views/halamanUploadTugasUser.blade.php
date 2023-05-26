@extends('views.partials.head')

@php
    $dashboardPlaceholder = "Halaman Upload Tugas";
    $judulProker = 'Safari Dakwah';
@endphp

@section('content')

<!-- Page Wrapper -->
<div id="wrapper">
    @auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('views.partials.sidebarUser')
    @endauth

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            @include('views.partials.topbarUser')
            @include('views.halamanUploadTugasUser_view')
            {{-- @include('layouts.footers.guest') --}}

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection
