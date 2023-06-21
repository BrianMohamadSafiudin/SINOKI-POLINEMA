<body id="page-top">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form method="post" action="{{ route('profileUserUpdate') }}" enctype="multipart/form-data" autocomplete="off">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header d-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Profile Admin</h6>
                </div>
                <div class="card-body">
                    <div class="container-xl px-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-2" src="{{ asset('admin') }}/img/{{auth()->user()->name}}.jpg" style="max-width: 246px" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Account Details</div>
                                    <div class="card-body">

                                        @csrf

                                        @if (session('status'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('status') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        <div class="mb-3 form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <label class="small mb-1 form-control-label" for="input-name">{{ __('Nama Lengkap') }}</label>
                                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Masukkan Nama Lengkap') }}" value="{{ auth()->user()->name }}" required autofocus>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                            @endif
                                        </div>

                                        <div class="mb-3 form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <label class="small mb-1 form-control-label" for="input-email">Email</label>
                                            <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan email" value="{{ auth()->user()->email }}" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                            @endif
                                        </div>

                                        <!-- Form Row-->
                                        <a href="{{ route('home') }}" class="btn btn-danger shadow-sm ml-2 mt-2 mb-4">
                                            <i class="fas fa-sm text-white-50"></i>Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <!-- /.container-fluid -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
