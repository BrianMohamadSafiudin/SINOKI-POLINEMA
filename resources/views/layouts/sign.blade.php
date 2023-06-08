<!DOCTYPE html>
<html>
  <body>
    <div class="sign-up-page">
      <img alt="" src="{{ asset('assets') }}/bg.svg"
      position= absolute;
      top= "0"
      left= "0"
      width= "100%"
      height= "100%"
      marging= "0 auto"/>
      <div class="sign-up-page-child"></div>
      <div class="right-side">
        <div class="right-side-child"></div>
        <b class="buat-akun">Buat Akun</b>
        <div class="daftarkan-dirimu-untuk">
          Daftarkan dirimu untuk mendapatkan informasi dari OKI yang anda ikuti
        </div>

        <form role="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                <div class="email">
                    <div class="field-email">
                        <div class=""> $email=<input class="no-border{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Masukkan email anda') }}" type="email" name="email" value="{{ old('email') }}" minlength="{8}" required autofocus></input></div>
                    </div>
                    <div class="password">Email</div>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                <div class="username">
                    <div class="field-email">
                        <div class=""><input class="no-border{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Masukkan nama lengkap anda') }}" type="text" name="name" value="{{ old('name') }}" required autofocus></input></div>
                    </div>
                    <div class="password">Nama Lengkap</div>
                </div>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="password1">
                    <div class="field-email">
                        <div class=""><input class="no-border{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Masukkan password anda') }}" type="password" name="password" minlength="{8}" required></input></div>
                    </div>
                    <div class="password">Password ( minimal 8 huruf / angka )</div>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="username1">
                    <div class="field-email">
                        <div class=""><input class="no-border" placeholder="{{ __('Ulangi password anda') }}" type="password" name="password_confirmation" minlength="{8}" required></input></div>
                    </div>
                    <div class="password">Confirm Password</div>
                </div>
            </div>

            <div class="dropdown-oki">
                <select id="option" name="namaOki" class="dropdown-oki-child">
                  <option value="" disabled selected>Pilih OKI yang diikuti</option>
                  @php
                      $dataOki = App\Models\Oki::all();
                  @endphp
                  @foreach ($dataOki as $Oki)
                  <option>{{ $Oki -> nama }}</option>
                  @endforeach
                </select>
            </div>

            <div class="sign-up-button">
                <div class="sign-up-button-child"></div>
                <div class="sign-up">SIGN UP</div>
                <button type="submit" class="none">{{ __('Create account') }}</button>
            </div>

      </div>
      <div class="left-side">
        <div class="left-side-child"></div>
        <div class="content">
          <b class="selamat-datang-kembali">Selamat Datang Kembali!</b>
          <div class="untuk-tetap-mendapatkan">
            Untuk tetap mendapatkan informasi mengenai OKI yang anda ikuti,
            silahkan masuk dengan akun anda
          </div>
          <div class="sign-in-button">
            <div class="sign-in-button-child"></div>
            <div class="sign-in">SIGN IN</div>
            <button class="none"><a href="login" class="sign-in-button-child"></a></button>
          </div>

          <img src="{{ asset('assets') }}/logo-politeknik-negeri-malang-1@2x.png"
            alt=""
            position="absolute"
            top="0"
            left="93px"
            width="200px"
            height="201.47px"
            object-fit="cover"
          />

        </div>
      </div>
    </form>
    </div>
  </body>
</html>
