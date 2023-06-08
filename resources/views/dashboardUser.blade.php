@extends('views.partials.head')

@php
    $dashboardPlaceholder = "Dashboard";
@endphp

@if (auth()->user()->nim == NULL)
    <script>$dashboardPlaceholder = "Silahkan lengkapi profile Anda terlebih dahulu";</script>
@elseif (auth()->user()->nim != null)
    <script>$dashboardPlaceholder = "Dashboard";</script>
@endif

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
            @include('views.dashboardUser_view')
            {{-- @include('layouts.footers.guest') --}}

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@endsection

