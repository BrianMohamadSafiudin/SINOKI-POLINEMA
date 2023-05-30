<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" style="background-color:#371D88 !important;" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0">
            <img src="{{ asset('assets') }}/logo-politeknik-negeri-malang-1@2x.png" class="navbar-brand-img" alt="...">
        </a>
        <a class="navbar-brand pt-0 text-white">
            <i class="text-white font-weight-bold" style="font-size: 2rem;">SINOKI</i><br>
            <i class="text-primary text-white mb-0 font-weight-bold" style="font-size: 0.8rem;">Sistem Informasi OKI</i>
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">

                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('home_admin') }}">
                        <i class="ni ni-tv-2 text-primary text-white"></i> {{ __('Dashboard') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('profile.edit_admin') }}">
                        <i class="fab fa-laravel text-white" style="color: #f4645f;"></i> {{ __('User profile') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('dataProkerAdmin') }}">
                        <i class="ni ni-planet text-blue text-white"></i> {{ __('Program Kerja Admin') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('tambahDataSie') }}">
                      <i class="ni ni-bullet-list-67 text-default text-white"></i>
                      <span class="nav-link-text">Data Anggota</span>
                    </a>
                </li>

            </ul>
            <!-- Divider -->
            <hr class="my-3 bg-white">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted text-white">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://github.com/BrianMohamadSafiudin/SINOKI-POLINEMA" target="_blank">
                        <i class="ni ni-spaceship text-white"></i> Github SINOKI
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
