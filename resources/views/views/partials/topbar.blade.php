<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100">
        <div class="Title">
            <h1 class="h3 mb-0 text-gray-800">{{$dashboardPlaceholder}}</h1>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 d-none d-lg-inline text-gray-900 font-weight-bolder">{{ auth()->user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{ asset('admin') }}/img/{{auth()->user()->name}}.jpg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profileAdmin') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{'logout'}}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->

@include('views.partials.logout-modal')

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("accordionSidebar");
        var sidebarToggleTop = document.getElementById("sidebarToggleTop");

        if (sidebar.style.display === "none") {
            sidebar.style.display = "block";
            sidebarToggleTop.innerHTML = "<i class='fa fa-times'></i>"; // Ganti ikon toggle dengan tanda silang (close)
        } else {
            sidebar.style.display = "none";
            sidebarToggleTop.innerHTML = "<i class='fa fa-bars'></i>"; // Ganti ikon toggle dengan garis-garis (bars)
        }
    }

    var sidebarToggleTop = document.getElementById("sidebarToggleTop");
    sidebarToggleTop.addEventListener("click", toggleSidebar);

    function checkWindowSize() {
        var windowWidth = window.innerWidth;

        if (windowWidth >= 768) {
            var sidebar = document.getElementById("accordionSidebar");
            var sidebarToggleTop = document.getElementById("sidebarToggleTop");
            sidebar.style.display = "block";
            sidebarToggleTop.style.display = "none";
        } else {
            var sidebarToggleTop = document.getElementById("sidebarToggleTop");
            var sidebar = document.getElementById("accordionSidebar");
            sidebar.style.display = "none";
            sidebarToggleTop.style.display = "block";
        }
    }

    // Panggil fungsi saat halaman dimuat dan saat window diubah ukurannya
    window.addEventListener("load", checkWindowSize);
    window.addEventListener("resize", checkWindowSize);
</script>
