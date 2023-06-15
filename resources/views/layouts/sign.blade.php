<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>REGISTER SINOKI</title>


    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('admin') }}/img/logo.ico">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

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
<div class="container my-2">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 ">
                    <!-- Nested Row within Card Body -->
                    <div class="row" >
                        <div class="col-lg-6 d-none d-lg-block" style="background-color: whitesmoke;">
                            <div class="p-5 d-flex justify-content-md-center align-items-center vh-100 ">
                                <div class="text-center " >
                                    <img class="mb-3 mt-4" src="{{asset('assets')}}/logo-politeknik-negeri-malang-1@2x.png" alt="" width="150px" >
                                    <h1 class="h3 font-weight-bolder text-gray-900 my-3">Selamat Datang Kembali!</h1>
                                    <h2 class="h6 text-gray-900 mb-4">Untuk tetap mendapatkan informasi mengenai OKI yang anda ikuti, silahkan masuk dengan akun anda</h2>
                                    <a href="login" class=" d-sm-inline-block btn btn-outline-primary shadow-sm btn-lg" style="border-radius: 50px; font-size: 18pt; font-weight: 600; border-width: 2pt ; padding: 10px 25px;">
                                        Sign In
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6"  style="background-color: white; ">
                            <div class="p-5">
                                <div class="text-center mt-3">
                                    <div class="text-center">
                                        <h1 class="h3 font-weight-bolder text-gray-900 mb-2">BUAT AKUN</h1>
                                        <h2 class="h6 font-weight-normal text-gray-900 mb-4">Daftarkan dirimu untuk mendapatkan informasi dari OKI yang anda ikuti</h2>
                                    </div>
                                </div>
                                <form role="form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} my-4">
                                        <label class="form-label font-weight-bold ">Email</label>
                                        <div class="input-group">
                                            <div class="mb-3"> $email=<input class="no-border{{ $errors->has('email') ? ' is-invalid' : '' }} form-control"  aria-describedby="inputGroup-sizing-lg" placeholder="{{ __('Masukkan email anda') }}" type="email" name="email" value="{{ old('email') }}" minlength="{8}" required autofocus></input></div>
                                        </div>
                                        @if ($errors->has('email'))
                                            <div class="mt-2" style="margin-top: 20px;">
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            </div>
                                        @endif
                                    </div>


                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }} my-4">
                                        <label class="form-label font-weight-bold ">Nama Lengkap</label>
                                        <div class="input-group">
                                            <div class="input-group"><input class="no-border{{ $errors->has('name') ? ' is-invalid' : '' }} form-control"  aria-describedby="inputGroup-sizing-lg" placeholder="{{ __('Masukkan nama lengkap anda') }}" type="text" name="name" value="{{ old('name') }}" required autofocus></input></div>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }} my-4">
                                        <label class="form-label font-weight-bold ">Password ( minimal 8 huruf / angka )</label>
                                        <div class="input-group">
                                            <div class="input-group"><input class="no-border{{ $errors->has('password') ? ' is-invalid' : '' }} form-control" aria-describedby="inputGroup-sizing-lg" placeholder="{{ __('Masukkan password anda') }}" type="password" name="password" minlength="{8}" required></input></div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>

                                    <div class="form-group  my-4">
                                        <label class="form-label font-weight-bold ">Confirm Password</label>
                                        <div class="input-group">
                                            <div class="input-group" ><input class="no-border form-control" aria-describedby="inputGroup-sizing-lg" placeholder="{{ __('Ulangi password anda') }}" type="password" name="password_confirmation" minlength="{8}" required></input></div>
                                        </div>
                                    </div>

{{--                                    <div class="form-group">--}}
{{--                                        <label class="form-label font-weight-bold ">Pilih OKI</label>--}}
{{--                                        <div class="input-group " >--}}
{{--                                            <select class="custom-select dropdown-oki-child selectpicker" id="option" name="namaOki" data-live-search="true" data-live-search-style="startsWith">--}}
{{--                                                @php--}}
{{--                                                    $dataOki = App\Models\Oki::all();--}}
{{--                                                @endphp--}}
{{--                                                @foreach ($dataOki as $Oki)--}}
{{--                                                    <option>{{ $Oki -> nama }}</option>--}}
{{--                                                @endforeach--}}
{{--                                            </select>--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="form-group">
                                        <label class="form-label font-weight-bold">Pilih OKI</label>
                                        <div class="input-group">
                                            <div class="custom-select-container">
                                                <select class="custom-select dropdown-oki-child selectpicker" id="option" name="namaOki">
                                                    @php
                                                        $dataOki = App\Models\Oki::all();
                                                    @endphp
                                                    @foreach ($dataOki as $Oki)
                                                        <option value="{{ $Oki->nama }}">{{ $Oki->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="text-center mt-3">
                                        <button type="submit" href="" class=" d-sm-inline-block btn btn-lg btn-primary shadow-sm btn-lg mt-2" style="border-radius: 50px; font-size: 16pt; font-weight: 600; border-width: 2pt ; padding: 8px 24px; margin: auto;">
                                            {{ __('Create account') }}
                                        </button>
                                    </div>

                                </form>


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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


@stack('js')

<script>
    $(document).ready(function() {
        $('.selectpicker').select2();
    });

</script>



<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
</body>
</html>

