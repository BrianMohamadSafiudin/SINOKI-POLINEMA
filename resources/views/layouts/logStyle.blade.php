<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('admin') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('admin') }}/img/logo.ico">

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
    @media screen and (max-width: 768px) {
        .login-page {
            display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      margin: 0 auto;
        }
    }

    /* Flexbox */
    @media screen and (min-width: 1024px) {
    .login-page-child {
        width: 60%;
        margin: 0 auto;
    }
    .right-side-item {
        width: 40%;
    }
    .login-page {
        display: flex;
        justify-content: center;
    }
    }

    /* Stacked layout for small screens */
    @media screen and (max-width: 768px) {
    .login-page-child,
    .right-side-item {
        width: 100%;
    }
    }

      body {
      margin: 0 auto;
      line-height: normal;
    }

    :root {
      /* fonts */
      --font-poppins: Poppins;
      --font-montserrat: Montserrat;
      --font-inter: Inter;

      /* font sizes */
      --font-size-3xl: 22px;
      --font-size-16xl: 35px;
      --font-size-base: 16px;
      --font-size-3xs: 10px;
      --font-size-lg: 18px;
      --font-size-6xl: 25px;
      --font-size-3xs-5: 9.5px;
      --font-size-13xl: 32px;
      --font-size-xs: 12px;
      --font-size-smi: 13px;
      --font-size-sm: 14px;
      --font-size-8xs: 5px;
      --font-size-5xs: 8px;
      --font-size-4xs: 9px;
      --font-size-mini: 15px;
      --font-size-xl: 20px;
      --font-size-21xl: 40px;
      --font-size-26xl: 45px;
      --font-size-5xl: 24px;
      --font-size-7xl: 26px;

      /* Colors */
      --color-white: #fff;
      --color-dimgray-100: #6c6c6c;
      --color-dimgray-200: #5c5c5c;
      --color-dimgray-300: #5f5656;
      --color-dimgray-400: #535353;
      --color-gainsboro-100: #e5e5e5;
      --color-gainsboro-200: #d9d9d9;
      --color-gainsboro-300: rgba(217, 217, 217, 0.5);
      --color-black: #000;
      --color-royalblue-100: #4573eb;
      --color-royalblue-200: #0045ac;
      --color-mediumspringgreen-100: #45eb87;
      --color-crimson: #eb455f;
      --color-lightgray-100: #cbcbcb;
      --color-whitesmoke-100: #f5f5f5;
      --color-whitesmoke-200: #eff5f5;
      --color-whitesmoke-300: rgba(239, 245, 245, 0.5);
      --color-indigo-100: #4e31aa;
      --color-indigo-200: #3a1078;
      --color-tomato-100: #ff5b5b;
      --color-tomato-200: #f06548;
      --color-silver-100: #b7b7b7;
      --color-silver-200: #b5b5b5;
      --color-gray-100: #8b8b8b;
      --color-gray-200: #212529;
      --color-gray-300: rgba(0, 0, 0, 0.5);
      --color-gray-400: rgba(24, 26, 27, 0.5);
      --color-darkslategray: #434343;
      --color-ghostwhite: #f3f3f9;
      --color-lightslategray: #838fb9;
      --color-plum: #bface2;
      --color-darkslateblue-100: #3e54ac;
      --color-lavender: #f2ebff;
      --color-steelblue-100: #3795bd;
      --color-steelblue-200: rgba(55, 149, 189, 0.5);
      --color-mediumslateblue: #2762f9;
      --color-cornflowerblue: #5bb0ff;
      --color-darkgray-100: #9e9e9e;
      --color-darkgray-200: #9b9b9b;
      --color-mediumseagreen: #03c988;

      /* Gaps */
      --gap-3xs: 10px;

      /* border radiuses */
      --br-mini: 15px;
      --br-61xl: 80px;
      --br-3xs: 10px;
      --br-11xs: 2px;
      --br-163xl: 182px;
      --br-31xl: 50px;
      --br-5xs: 8px;
      --br-8xs: 5px;
      --br-10xs: 3px;
    }

    .bg-icon1 {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    .login-page-child,
    .right-side-item {
      position: absolute;
      top: 68px;
      left: 95px;
      border-radius: var(--br-mini);
      background-color: var(--color-white);
      width: 1250px;
      height: 888.89px;
    }
    .right-side-item {
      top: 0;
      left: 0;
      border-radius: 0 var(--br-mini) var(--br-mini) 0;
      width: 625px;
      height: 889px;
    }
    .login,
    .masuk-dengan-akun {
      position: absolute;
      color: var(--color-black);
      text-align: center;
      display: inline-block;
    }
    .login {
      top: 200px;
      left: 80px;
      font-size: var(--font-size-26xl);
      width: 466px;
    }
    .masuk-dengan-akun {
      top: 290px;
      left: 145px;
      width: 336px;
    }
    .pilih-oki-yang1 {
      position: absolute;
      top: 12px;
      left: 33px;
    }
    .dropdown-oki-inner {
      position: absolute;
      top: 0;
      left: 0;
      padding-left: 10;
      border-radius: var(--br-5xs);
      border: 2px solid var(--color-steelblue-200);
      box-sizing: border-box;
      width: 350px;
      height: 50px;
    }
    .dropdown-oki1,
    .polygon-icon {
      position: absolute;
      top: 20.12px;
      left: 16px;
      width: 10.39px;
      height: 9px;
    }
    .dropdown-oki1 {
      top: 240px;
      left: 138px;
      width: 350px;
      height: 50px;
      font-size: var(--font-size-base);
    }
    .field-username2,
    .masukkan-username-anda1 {
      position: absolute;
      top: 14px;
      left: 21px;
    }
    .field-username2 {
      top: 31px;
      left: 0;
      width: 350px;
      height: 50px;
    }
    .username4 {
      position: absolute;
      top: 0;
      left: 0;
      font-size: var(--font-size-lg);
      font-weight: 600;
      color: var(--color-black);
    }
    .username3 {
      position: absolute;
      top: 380px;
      left: 138px;
      width: 350px;
      height: 81px;
    }
    .masukkan-password-anda1,
    .password2 {
      position: absolute;
      top: 15px;
      left: 21px;
    }
    .password2 {
      top: 480px;
      left: 138px;
      width: 350px;
      height: 81px;
    }
    .sign-up-button-item {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: var(--br-31xl);
      background-color: var(--color-indigo-100);
      width: 250px;
      height: 65px;
    }
    .sign-in1 {
      position: absolute;
      top: 16px;
      left: 83px;
      font-weight: 600;
      cursor: pointer;
    }
    .sign-up-button1 {
      border: none;   position: absolute;
      top: 610px;
      left: 188px;
      width: 250px;
      height: 65px;
      font-size: var(--font-size-3xl);
      color: var(--color-white);
    }
    .lupa-kata-sandi {
      position: absolute;
      top: 680px;
      left: 227px;
      font-size: var(--font-size-mini);
      color: #2b2b2b;
    }
    .left-side-item,
    .right-side1 {
      position: absolute;
      top: 68px;
      left: 720px;
      width: 625px;
      height: 889px;
    }
    .left-side-item {
      top: 0;
      left: 0;
      border-radius: var(--br-mini) 0 0 var(--br-mini);
      background-color: var(--color-lavender);
    }
    .daftarkan-diri-anda,
    .halo-teman-teman {
      position: absolute;
      top: 223px;
      left: 0;
      display: inline-block;
      width: 434px;
    }
    .daftarkan-diri-anda {
      top: 286px;
      left: 24px;
      font-size: var(--font-size-xl);
      width: 386px;
    }
    .sign-in-button-item {
      position: absolute;
      top: 0;
      left: 0;
      border-radius: var(--br-31xl);
      border: 3px solid var(--color-darkslateblue-100);
      box-sizing: border-box;
      width: 250px;
      height: 70px;
    }
    .sign-up1 {
      position: absolute;
      top: 16px;
      left: 76px;
      font-weight: 600;
    }
    .sign-in-button1 {
      position: absolute;
      top: 428px;
      left: 92px;
      width: 250px;
      height: 70px;
      font-size: var(--font-size-6xl);
      color: var(--color-darkslateblue-100);
    }
    .logo-politeknik-negeri-malang-icon4 {
      position: absolute;
      top: 0;
      left: 117px;
      width: 200px;
      height: 201.47px;
      object-fit: cover;
    }
    .content1,
    .left-side1 {
      position: absolute;
      top: 195px;
      left: 96px;
      width: 434px;
      height: 498px;
    }
    .left-side1 {
      top: 68px;
      left: 95px;
      width: 625px;
      height: 889px;
      text-align: center;
      font-size: var(--font-size-21xl);
      color: var(--color-black);
    }
    .login-page {
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      margin: 0 auto;
      background-color: var(--color-plum);
      width: 100%;
      height: 100%;
      overflow: hidden;
      text-align: center;
      font-size: var(--font-size-sm);
      color: var(--color-dimgray-100);
      font-family: var(--font-poppins);
    }
    .no-border {
      padding: 10px;
      border: none;   position: absolute;
      top: 0;
      left: 0;
      border-radius: var(--br-5xs);
      border: 2px solid var(--color-steelblue-200);
      box-sizing: border-box;
      width: 350px;
      height: 50px;
    }
    .none {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-31xl);
        opacity: 0;
        box-sizing: border-box;
        width: 250px;
        height: 70px;
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
