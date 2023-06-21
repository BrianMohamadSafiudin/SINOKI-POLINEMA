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
        .sign-up-page {
            display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        margin: 0 auto;
        }
    }

    /* Flexbox */
    @media screen and (min-width: 1024px) {
    .sign-up-page-child {
        width: 60%;
        margin: 0 auto;
    }
    .right-side-item {
        width: 40%;
    }
    .sign-up-page {
        display: flex;
        justify-content: center;
    }
    }

    /* Stacked layout for small screens */
    @media screen and (max-width: 768px) {
    .sign-up-page-child,
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

    .bg-icon {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
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
        top: 735px;
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
