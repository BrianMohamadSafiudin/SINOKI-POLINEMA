<!DOCTYPE html>
<html>
  <body>
    <div class="login-page">
      <img alt="" src="{{ asset('assets') }}/bg1.svg"
        position= absolute;
        top= "0"
        left= "0"
        width= "100%"
        height= "100%"
        marging= "0 auto"/>
      <div class="login-page-child"></div>
      <div class="right-side1">
        <div class="right-side-item"></div>
        <b class="login">LOGIN</b>
        <div class="masuk-dengan-akun">
          Masuk dengan akun anda untuk mendapatkan informasi mengenai OKI yang
          anda ikuti
        </div>
        <div class="dropdown-oki1">
          <select id="option" name="option" class="dropdown-oki-inner">
            <option value="" disabled selected>Pilih OKI yang diikuti</option>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
          </select>
        </div>

        <form role="form" method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                <div class="username3">
                    <div class="field-username2">
                        <div class=""> $email=<input class="no-border{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Masukkan email anda') }}" type="email" name="email" value="{{ old('email') }}" minlength="{8}" required autofocus></input></div>
                    </div>
                    <div class="username4">Email</div>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                <div class="password2">
                    <div class="field-username2">
                        <div class=""> $password=<input class="no-border{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Masukkan password anda') }}" type="password" value="" minlength="{8}" required></input></div>
                    </div>
                    <div class="username4">Password</div>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

              <div class="sign-up-button1">
                <div class="sign-up-button-item"></div>
                <div class="sign-in1">SIGN IN</div>
                <button type="submit" class="btn-info"></button>
              </div>
              <div class="lupa-kata-sandi"><a href="https://wa.me/+6282114903130?text=Username%20anda%20:%20? %0A(Kirim%20bukti%20selfie%20dengan%20ktm%20anda)" target="_blank">Lupa sandi? Call Admin</a></div>
            </div>

            <div class="left-side1">
              <div class="left-side-item"></div>
              <div class="content1">
                <b class="halo-teman-teman">Halo Teman-Teman!</b>
                <div class="daftarkan-diri-anda">
                  Daftarkan diri anda untuk mendapatkan informasi mengenai OKI
                  POLINEMA yang anda ikuti
                </div>
                <div class="sign-in-button1">
                  <div class="sign-in-button-item"></div>
                  <div class="sign-up1">SIGN UP</div>
                  <button class="none"><a href="register" class="sign-in-button-item"></a></button>
                </div>

                <img src="{{ asset('assets') }}/logo-politeknik-negeri-malang-1@2x.png"
                  alt=""
                  position="absolute"
                  top="0"
                  left="117px"
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
