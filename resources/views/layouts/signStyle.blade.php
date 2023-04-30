<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
    />
    <style>
    .bg-icon {
        position: absolute;
        top: 0;
        left: 0;
        width: 1845px;
        height: 2033px;
    }
    .right-side-child,
    .sign-up-page-child {
        position: absolute;
        top: 68px;
        left: 95px;
        border-radius: var(--br-mini);
        background-color: var(--color-white);
        width: 1250px;
        height: 888.89px;
    }
    .right-side-child {
        top: 0;
        left: 0;
        border-radius: 0 var(--br-mini) var(--br-mini) 0;
        width: 625px;
        height: 889px;
    }
    .buat-akun,
    .daftarkan-dirimu-untuk {
        position: absolute;
        color: var(--color-black);
        text-align: center;
        display: inline-block;
    }
    .buat-akun {
        top: 85px;
        left: 80px;
        font-size: var(--font-size-26xl);
        width: 466px;
    }
    .daftarkan-dirimu-untuk {
        top: 153px;
        left: 161px;
        width: 304px;
    }
    .pilih-oki-yang {
        position: absolute;
        top: 12px;
        left: 33px;
    }
    .dropdown-oki-child {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-5xs);
        border: 2px solid var(--color-steelblue-200);
        box-sizing: border-box;
        width: 350px;
        height: 50px;
    }
    .dropdown-oki,
    .dropdown-oki-item {
        position: absolute;
        top: 20.12px;
        left: 16px;
        width: 10.39px;
        height: 9px;
    }
    .dropdown-oki {
        top: 653px;
        left: 138px;
        width: 350px;
        height: 50px;
        font-size: var(--font-size-base);
    }
    .masukkan-email-anda {
        position: absolute;
        top: 14px;
        left: 21px;
    }
    .email,
    .field-email,
    .username {
        position: absolute;
        top: 31px;
        left: 0;
        width: 350px;
        height: 50px;
    }
    .email,
    .username {
        top: 233px;
        left: 138px;
        height: 81px;
    }
    .username {
        top: 334px;
    }
    .password {
        position: absolute;
        top: 0;
        left: 0;
        font-size: var(--font-size-lg);
        font-weight: 600;
        color: var(--color-black);
    }
    .username1 {
        position: absolute;
        top: 536px;
        left: 138px;
        width: 350px;
        height: 81px;
    }
    .masukkan-username-anda,
    .password1 {
        position: absolute;
        top: 15px;
        left: 21px;
    }
    .password1 {
        top: 435px;
        left: 138px;
        width: 350px;
        height: 81px;
    }
    .sign-up-button-child {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-31xl);
        background-color: var(--color-indigo-100);
        width: 250px;
        height: 65px;
    }
    .sign-up {
        position: absolute;
        top: 16px;
        left: 83px;
        font-weight: 600;
    }
    .sign-up-button {
        position: absolute;
        top: 739px;
        left: 188px;
        width: 250px;
        height: 65px;
        font-size: var(--font-size-3xl);
        color: var(--color-white);
    }
    .left-side-child,
    .right-side {
        position: absolute;
        top: 68px;
        left: 720px;
        width: 625px;
        height: 889px;
    }
    .left-side-child {
        top: 0;
        left: 0;
        border-radius: var(--br-mini) 0 0 var(--br-mini);
        background-color: var(--color-lavender);
    }
    .selamat-datang-kembali,
    .untuk-tetap-mendapatkan {
        position: absolute;
        top: 223px;
        left: 0;
        display: inline-block;
        width: 386px;
    }
    .untuk-tetap-mendapatkan {
        top: 361px;
        font-size: var(--font-size-xl);
    }
    .sign-in-button-child {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-31xl);
        border: 3px solid var(--color-darkslateblue-100);
        box-sizing: border-box;
        width: 250px;
        height: 70px;
    }
    .sign-in {
        position: absolute;
        top: 16px;
        left: 79px;
        font-weight: 600;
    }
    .sign-in-button {
        position: absolute;
        top: 486px;
        left: 68px;
        width: 250px;
        height: 70px;
        font-size: var(--font-size-6xl);
        color: var(--color-darkslateblue-100);
    }
    .logo-politeknik-negeri-malang-icon3 {
        position: absolute;
        top: 0;
        left: 93px;
        width: 200px;
        height: 201.47px;
        object-fit: cover;
    }
    .content,
    .left-side {
        position: absolute;
        top: 166px;
        left: 120px;
        width: 386px;
        height: 556px;
    }
    .left-side {
        top: 68px;
        left: 95px;
        width: 625px;
        height: 889px;
        text-align: center;
        font-size: var(--font-size-21xl);
        color: var(--color-black);
    }
    .sign-up-page {
        position: relative;
        background-color: var(--color-plum);
        width: 100%;
        height: 1024px;
        overflow: hidden;
        text-align: left;
        font-size: var(--font-size-sm);
        color: var(--color-dimgray-100);
        font-family: var(--font-poppins);
    }
</style>
</head>
<body class="{{ $class ?? '' }}">
  @yield('content')
  @auth()
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
  @endauth
</body>
</html>
