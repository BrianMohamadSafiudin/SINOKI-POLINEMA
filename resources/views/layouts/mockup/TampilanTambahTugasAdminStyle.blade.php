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
        .tambah-data-tugas-child {
            position: absolute;
            top: 0;
            left: 0;
            background-color: var(--color-whitesmoke);
            width: 1440px;
            height: 1024px;
        }
        .tambah-data-tugas-item {
            position: absolute;
            top: 0;
            left: 0;
            background: linear-gradient(185.58deg, #371d88, #4e31aa);
            width: 265px;
            height: 1024px;
        }
        .tambah-data-tugas-inner {
            position: absolute;
            top: 0;
            left: 265px;
            background-color: var(--color-white);
            box-shadow: 0 2px 7px -1px rgba(0, 0, 0, 0.25);
            width: 1175px;
            height: 90px;
        }
        .sinoki4 {
            position: absolute;
            top: 2px;
            left: 49px;
            line-height: 100%;
            display: flex;
            align-items: center;
            width: 119px;
            height: 25px;
        }
        .logo-politeknik-negeri-malang-icon4 {
            position: absolute;
            top: -1px;
            left: -2px;
            width: 41px;
            height: 41.3px;
            object-fit: cover;
        }
        .sistem-informasi-oki4 {
            position: absolute;
            top: 30px;
            left: 51px;
            font-size: var(--font-size-3xs-5);
            line-height: 100%;
            font-weight: 500;
            display: flex;
            align-items: center;
            width: 118px;
        }
        .logo4 {
            position: absolute;
            top: 42px;
            left: 32px;
            width: 202px;
            height: 42px;
            font-size: var(--font-size-13xl);
            color: var(--color-white);
            font-family: var(--font-montserrat);
        }
        .program-kerja-rispol3 {
            position: absolute;
            top: 30px;
            left: 308px;
            font-size: var(--font-size-6xl);
            line-height: 115%;
        }
        .bintangsholu4 {
            position: absolute;
            top: 6px;
            left: 37px;
            line-height: 100%;
            font-weight: 600;
        }
        .profil-child1,
        .profil4 {
            position: absolute;
            top: 11.25px;
            left: 183.25px;
            width: 17.9px;
            height: 9.5px;
        }
        .profil4 {
            top: 30px;
            left: 1170px;
            width: 200.4px;
            height: 30px;
            font-size: var(--font-size-lg);
            font-family: var(--font-montserrat);
        }
        .mask-group-icon4 {
            position: absolute;
            top: 29px;
            left: 1165px;
            width: 35px;
            height: 35px;
            object-fit: cover;
        }
        .rispol4 {
            top: 18px;
            left: 0;
            line-height: 115%;
            font-weight: 600;
            display: flex;
            align-items: center;
            width: 61px;
            height: 13px;
        }
        .oki8,
        .oki9,
        .rispol4 {
            position: absolute;
        }
        .oki9 {
            top: 0;
            left: 0;
            font-size: var(--font-size-3xs);
            line-height: 115%;
            font-weight: 500;
            color: var(--color-lightgray-100);
            display: flex;
            align-items: center;
            width: 21px;
            height: 9px;
        }
        .oki8 {
            top: 210px;
            left: 29px;
            width: 61px;
            height: 31px;
            font-size: var(--font-size-lg);
            color: var(--color-white);
        }
        .muhammad-bintang-sholu4,
        .nama-lengkap11 {
            position: absolute;
            top: 18px;
            left: 0;
            line-height: 115%;
            font-weight: 600;
            display: flex;
            align-items: center;
            width: 196px;
            height: 29px;
        }
        .nama-lengkap11 {
            top: 0;
            font-size: var(--font-size-3xs);
            font-weight: 500;
            color: var(--color-lightgray-100);
            width: 94px;
            height: 9px;
        }
        .nama-lengkap10 {
            position: absolute;
            top: 135px;
            left: 29px;
            width: 196px;
            height: 47px;
            color: var(--color-white);
        }
        .admin-oki3,
        .jabatan9 {
            position: absolute;
            top: 15px;
            left: 0;
            line-height: 115%;
            font-weight: 600;
            display: flex;
            align-items: center;
            width: 108px;
            height: 13px;
        }
        .jabatan9 {
            top: 0;
            font-size: var(--font-size-3xs);
            font-weight: 500;
            color: var(--color-lightgray-100);
            width: 60px;
            height: 9px;
        }
        .jabatan8 {
            position: absolute;
            top: 269px;
            left: 28px;
            width: 61px;
            height: 28px;
            font-size: var(--font-size-lg);
            color: var(--color-white);
        }
        .data-anggota9 {
            position: absolute;
            top: 2px;
            left: 30px;
            line-height: 115%;
        }
        .material-symbolsperson-icon4 {
            position: absolute;
            top: 0;
            left: 0;
            width: 24px;
            height: 24px;
            overflow: hidden;
        }
        .data-anggota8 {
            position: absolute;
            top: 389px;
            left: 30px;
            width: 157px;
            height: 24px;
            color: var(--color-white);
        }
        .data-program-kerja4 {
            position: absolute;
            top: 2px;
            left: 30px;
            line-height: 115%;
            font-weight: 800;
        }
        .material-symbolsinsert-chart-parent2 {
            position: absolute;
            top: 348px;
            left: 30px;
            width: 196px;
            height: 24px;
            color: var(--color-white);
        }
        .tambah-data-tugas-child1 {
            position: absolute;
            top: 111px;
            left: 291px;
            border-radius: var(--br-mini);
            background-color: var(--color-white);
            box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
            width: 1123px;
            height: 890px;
        }
        .bidang-syiar1,
        .safari-dakwah1 {
            position: absolute;
            top: 224px;
            left: 329px;
            font-size: var(--font-size-16xl);
            line-height: 115%;
        }
        .bidang-syiar1 {
            top: 272px;
            font-size: var(--font-size-5xl);
        }
        .mdimap-marker-outline-icon1 {
            position: absolute;
            top: 0;
            left: -4px;
            width: 24px;
            height: 24px;
            overflow: hidden;
        }
        .kelurahan-jatimulyo1 {
            position: absolute;
            top: 4px;
            left: 30px;
            line-height: 100%;
            font-weight: 500;
            display: flex;
            align-items: center;
            width: 199px;
        }
        .location-proker-11 {
            position: relative;
            width: 218px;
            height: 24px;
            flex-shrink: 0;
        }
        .div16 {
            position: absolute;
            top: 2px;
            left: 33px;
            line-height: 100%;
            font-weight: 500;
            display: flex;
            align-items: center;
            width: 199px;
        }
        .material-symbolscalendar-mont-icon1 {
            position: absolute;
            top: 0;
            left: 0.5px;
            width: 21px;
            height: 21px;
            overflow: hidden;
        }
        .date-proker-11 {
            position: relative;
            width: 224px;
            height: 21px;
            flex-shrink: 0;
        }
        .location-proker-1-group {
            position: absolute;
            top: 236px;
            left: 1172px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            gap: var(--gap-3xs);
        }
        .button-back-child1 {
            position: absolute;
            top: 0;
            left: 0;
            border-radius: var(--br-5xs);
            background-color: var(--color-steelblue-100);
            width: 88px;
            height: 40px;
        }
        .back3 {
            position: absolute;
            top: 12px;
            left: 17px;
            line-height: 100%;
            font-weight: 600;
        }
        .button-back3 {
            position: absolute;
            top: 146px;
            left: 329px;
            width: 88px;
            height: 40px;
            color: var(--color-white);
        }
        .frame-child2 {
            position: absolute;
            top: 0;
            left: 0;
            border-radius: var(--br-8xs);
            background-color: var(--color-mediumseagreen);
            width: 135px;
            height: 35px;
        }
        .tambah-tugas1 {
            position: absolute;
            top: 11px;
            left: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 116px;
            height: 14px;
        }
        .rectangle-parent14 {
            position: absolute;
            top: 705px;
            left: 331px;
            width: 135px;
            height: 35px;
            text-align: center;
            font-size: var(--font-size-smi);
            color: var(--color-white);
            font-family: var(--font-inter);
        }
        .tambah-tugas-program {
            position: absolute;
            top: 360px;
            left: 329px;
            font-size: var(--font-size-7xl);
            font-weight: 600;
        }
        .tambah-data-tugas-child2 {
            position: absolute;
            top: 338px;
            left: 291px;
            background-color: var(--color-gainsboro-200);
            width: 1123px;
            height: 2px;
        }
        .group-child13 {
            position: absolute;
            top: 27px;
            left: 0;
            border-radius: var(--br-5xs);
            border: 0.5px solid var(--color-gray-300);
            box-sizing: border-box;
            width: 1000px;
            height: 40px;
        }
        .nama-tugas {
            position: absolute;
            top: 0;
            left: 11px;
            font-weight: 600;
        }
        .rectangle-parent15 {
            position: absolute;
            top: 420px;
            left: 329px;
            width: 1000px;
            height: 67px;
            text-align: center;
            font-size: var(--font-size-mini);
            font-family: var(--font-inter);
        }
        .tenggat {
            position: absolute;
            top: 0;
            left: 8px;
            font-weight: 600;
        }
        .rectangle-parent16,
        .tambah-data-tugas-inner1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 1000px;
            height: 67px;
        }
        .tambah-data-tugas-inner1 {
            top: 515px;
            left: 329px;
            text-align: center;
            font-size: var(--font-size-mini);
            font-family: var(--font-inter);
        }
        .keterangan-sie {
            position: absolute;
            top: 0;
            left: 6px;
            font-weight: 600;
        }
        .tambah-data-tugas-inner2 {
            position: absolute;
            top: 610px;
            left: 331px;
            width: 1000px;
            height: 67px;
            text-align: center;
            font-size: var(--font-size-mini);
            font-family: var(--font-inter);
        }
        .field-password2,
        .password2 {
            position: absolute;
            top: 0;
            left: 0;
            width: 1003px;
            height: 40px;
        }
        .password2 {
            top: 854px;
            left: 331px;
        }
        .tambah-data-tugas {
            position: relative;
            background-color: var(--color-white);
            width: 100%;
            height: 1024px;
            overflow: hidden;
            text-align: left;
            font-size: var(--font-size-base);
            color: var(--color-black);
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
