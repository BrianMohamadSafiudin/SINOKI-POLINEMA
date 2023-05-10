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
.tambah-program-kerja-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-whitesmoke);
  width: 1440px;
  height: 1024px;
}
.tambah-program-kerja-item {
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(185.58deg, #371d88, #4e31aa);
  width: 265px;
  height: 1024px;
}
.tambah-program-kerja-inner {
  position: absolute;
  top: 0;
  left: 265px;
  background-color: var(--color-white);
  box-shadow: 0 2px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1175px;
  height: 90px;
}
.sinoki3 {
  position: absolute;
  top: 2px;
  left: 49px;
  line-height: 100%;
  display: flex;
  align-items: center;
  width: 119px;
  height: 25px;
}
.logo-politeknik-negeri-malang-icon3 {
  position: absolute;
  top: -1px;
  left: -2px;
  width: 41px;
  height: 41.3px;
  object-fit: cover;
}
.sistem-informasi-oki3 {
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
.logo3 {
  position: absolute;
  top: 42px;
  left: 32px;
  width: 202px;
  height: 42px;
  font-size: var(--font-size-13xl);
  font-family: var(--font-montserrat);
}
.program-kerja-rispol2 {
  position: absolute;
  top: 30px;
  left: 308px;
  font-size: var(--font-size-6xl);
  line-height: 115%;
  color: var(--color-black);
}
.bintangsholu3 {
  position: absolute;
  top: 6px;
  left: 37px;
  line-height: 100%;
  font-weight: 600;
}
.profil3,
.vector-icon {
  position: absolute;
  top: 11.25px;
  left: 183.25px;
  width: 17.9px;
  height: 9.5px;
}
.profil3 {
  top: 30px;
  left: 1170px;
  width: 200.4px;
  height: 30px;
  font-size: var(--font-size-lg);
  color: var(--color-black);
  font-family: var(--font-montserrat);
}
.mask-group-icon3 {
  position: absolute;
  top: 29px;
  left: 1165px;
  width: 35px;
  height: 35px;
  object-fit: cover;
}
.rispol3 {
  top: 18px;
  left: 0;
  line-height: 115%;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 61px;
  height: 13px;
}
.oki6,
.oki7,
.rispol3 {
  position: absolute;
}
.oki7 {
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
.oki6 {
  top: 210px;
  left: 29px;
  width: 61px;
  height: 31px;
  font-size: var(--font-size-lg);
}
.muhammad-bintang-sholu3,
.nama-lengkap9 {
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
.nama-lengkap9 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 94px;
  height: 9px;
}
.nama-lengkap8 {
  position: absolute;
  top: 135px;
  left: 29px;
  width: 196px;
  height: 47px;
}
.admin-oki2,
.jabatan7 {
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
.jabatan7 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 60px;
  height: 9px;
}
.jabatan6 {
  position: absolute;
  top: 269px;
  left: 28px;
  width: 61px;
  height: 28px;
  font-size: var(--font-size-lg);
}
.data-anggota7 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
}
.material-symbolsperson-icon3 {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.data-anggota6 {
  position: absolute;
  top: 389px;
  left: 30px;
  width: 157px;
  height: 24px;
}
.data-program-kerja3 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
  font-weight: 800;
}
.material-symbolsinsert-chart-parent1 {
  position: absolute;
  top: 348px;
  left: 30px;
  width: 196px;
  height: 24px;
}
.tambah-program-kerja-child1 {
  position: absolute;
  top: 111px;
  left: 291px;
  border-radius: var(--br-mini);
  background-color: var(--color-white);
  box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1123px;
  height: 890px;
}
.tambah-program-kerja1 {
  position: absolute;
  top: 224px;
  left: 329px;
  font-size: var(--font-size-16xl);
  line-height: 115%;
  color: var(--color-black);
}
.button-back-inner {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-5xs);
  background-color: var(--color-steelblue-100);
  width: 88px;
  height: 40px;
}
.back2 {
  position: absolute;
  top: 12px;
  left: 17px;
  line-height: 100%;
  font-weight: 600;
}
.button-back2,
.frame-child1 {
  position: absolute;
  top: 146px;
  left: 329px;
  width: 88px;
  height: 40px;
}
.frame-child1 {
  top: 0;
  left: 0;
  border-radius: var(--br-8xs);
  background-color: var(--color-mediumseagreen);
  width: 161px;
  height: 35px;
}
.tambah-program-kerja2 {
  position: absolute;
  top: 11px;
  left: 5px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 151px;
  height: 14px;
}
.rectangle-parent9 {
  position: absolute;
  top: 732px;
  left: 329px;
  width: 161px;
  height: 35px;
  text-align: center;
  font-size: var(--font-size-smi);
  font-family: var(--font-inter);
}
.tambah-program-kerja-child2 {
  position: absolute;
  top: 338px;
  left: 291px;
  background-color: var(--color-gainsboro-200);
  width: 1123px;
  height: 2px;
}
.group-child9 {
  position: absolute;
  top: 27px;
  left: 0;
  border-radius: var(--br-5xs);
  border: 0.5px solid var(--color-gray-300);
  box-sizing: border-box;
  width: 1000px;
  height: 40px;
}
.nama-program-kerja {
  position: absolute;
  top: 0;
  left: 1px;
  font-weight: 600;
}
.rectangle-parent10 {
  position: absolute;
  top: 358px;
  left: 329px;
  width: 1000px;
  height: 67px;
  font-size: var(--font-size-mini);
  color: var(--color-black);
  font-family: var(--font-inter);
}
.group-child10 {
  position: absolute;
  top: 23px;
  left: 0;
  border-radius: var(--br-5xs);
  border: 0.5px solid var(--color-gray-300);
  box-sizing: border-box;
  width: 1000px;
  height: 40px;
}
.nama-bidang {
  position: absolute;
  top: 0;
  left: 0;
  font-weight: 600;
}
.rectangle-parent11,
.tambah-program-kerja-inner1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 1000px;
  height: 63px;
}
.tambah-program-kerja-inner1 {
  top: 457px;
  left: 329px;
  font-size: var(--font-size-mini);
  color: var(--color-black);
  font-family: var(--font-inter);
}
.group-child11,
.rectangle-parent12 {
  position: absolute;
  left: 0;
  width: 1000px;
}
.group-child11 {
  top: 24px;
  border-radius: var(--br-5xs);
  border: 0.5px solid var(--color-gray-300);
  box-sizing: border-box;
  height: 40px;
}
.rectangle-parent12 {
  top: 0;
  height: 64px;
}
.tambah-program-kerja-inner2,
.tambah-program-kerja-inner3 {
  position: absolute;
  top: 552px;
  left: 331px;
  width: 1000px;
  height: 64px;
  font-size: var(--font-size-mini);
  color: var(--color-black);
  font-family: var(--font-inter);
}
.tambah-program-kerja-inner3 {
  top: 634px;
  left: 329px;
}
.field-password1,
.password1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 1003px;
  height: 40px;
}
.password1 {
  top: 854px;
  left: 331px;
}
.tambah-program-kerja {
  position: relative;
  background-color: var(--color-white);
  width: 100%;
  height: 1024px;
  overflow: hidden;
  text-align: left;
  font-size: var(--font-size-base);
  color: var(--color-white);
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
