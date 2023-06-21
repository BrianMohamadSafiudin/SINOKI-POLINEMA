<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN SINOKI</title>


    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('admin') }}/img/logo.ico">

    <!-- Custom styles for this template-->
    <style>
        body {
            background-image: url({{asset('assets')}}/bg2.svg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .btn-signup:hover{
            color: white;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
<div class="container my-3">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 ">
                    <!-- Nested Row within Card Body -->
                    <div class="row" >
                        <div class="col-lg-6 d-none d-lg-block" style="background-color: whitesmoke;">
                            <div class="p-5 my-5">
                                <div class="text-center " >
                                    <img class="mb-3 mt-4" src="{{asset('assets')}}/logo-politeknik-negeri-malang-1@2x.png" alt="" width="150px" >
                                    <h1 class="h3 font-weight-bolder text-gray-900 my-3">Halo Teman-Teman!</h1>
                                    <h2 class="h6 text-gray-900 mb-4">Daftarkan diri anda untuk mendapatkan informasi mengenai OKI POLINEMA yang anda ikuti</h2>
                                    <a href="register" class=" d-sm-inline-block btn btn-outline-primary shadow-sm btn-lg" style="border-radius: 50px; font-size: 18pt; font-weight: 600; border-width: 2pt ; padding: 10px 25px;">
                                        Sign Up
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6"  style="background-color: white; ">
                            <div class="p-5">
                                <div class="text-center mt-3">
                                    <div class="text-center">
                                        <h1 class="h3 font-weight-bolder text-gray-900 mb-2">LOGIN</h1>
                                        <h2 class="h6 font-weight-normal text-gray-900 mb-4">Masuk dengan akun anda untuk mendapatkan informasi mengenai OKI yanganda ikuti</h2>
                                    </div>
                                </div>
                                <form class="user mt-5" role="form" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-5 mb-5">
                                        <label class="form-label font-weight-bold ">Email</label>
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-lg"> $email=<input  class="no-border{{ $errors->has('email') ? ' is-invalid' : '' }} form-control"  aria-describedby="inputGroup-sizing-lg" placeholder="{{ __('Masukkan email anda') }}" type="email" name="email" value="{{ old('email') }}" minlength="{8}" required autofocus></input></div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="mt-4" style="margin-top: 20px;">
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong >Email dan Password yang anda masukkan salah!</strong>
                                            </span>
                                            </div>
                                        @endif

                                    </div>


                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-2 mb-5">
                                        <label class="form-label font-weight-bold ">Password</label>
                                        <div class="input-group input-group-lg">
                                            <div class="input-group-lg"> $password=<input class="no-border{{ $errors->has('password') ? ' is-invalid' : '' }} form-control" aria-describedby="inputGroup-sizing-lg" name="password" placeholder="{{ __('Masukkan password anda') }}" type="password" value="" minlength="{8}" required></input></div>
                                        </div>
                                        <div class="mt-4">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>Password yang anda masukkan salah!</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" href="" class=" d-sm-inline-block btn btn-lg btn-primary shadow-sm btn-lg mt-2" style="border-radius: 50px; font-size: 18pt; font-weight: 600; border-width: 2pt ; padding: 10px 28px; margin: auto;">
                                            Sign In
                                        </button>
                                        <div class="text-center mt-3">
                                            <a class="text-decoration-none text-md " href="https://wa.me/+6282114903130?text=Username%20anda%20:%20? %0A(Kirim%20bukti%20selfie%20dengan%20ktm%20anda)" target="_blank">Lupa sandi? Call Admin</a>
                                        </div>
                                    </div>

                                </form>
                                <div class="text-center mt-3 d-block d-sm-none">
                                    <hr>
                                    <a href="register" class=" d-sm-inline-block btn btn-outline-primary shadow-sm btn-lg" style="border-radius: 50px; font-size: 18pt; font-weight: 600; border-width: 2pt ; padding: 10px 25px;">
                                        Sign Up
                                    </a>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

@stack('js')

<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>
</html>

