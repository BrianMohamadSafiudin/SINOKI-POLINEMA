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
.data-program-kerja-admin-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-whitesmoke);
  width: 1440px;
  height: 1024px;
}
.data-program-kerja-admin-item {
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(185.58deg, #371d88, #4e31aa);
  width: 265px;
  height: 1024px;
}
.data-program-kerja-admin-inner {
  position: absolute;
  top: 0;
  left: 265px;
  background-color: var(--color-white);
  box-shadow: 0 2px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1175px;
  height: 90px;
}
.sinoki8 {
  position: absolute;
  top: 2px;
  left: 49px;
  line-height: 100%;
  display: flex;
  align-items: center;
  width: 119px;
  height: 25px;
}
.logo-politeknik-negeri-malang-icon8 {
  position: absolute;
  top: -1px;
  left: -2px;
  width: 41px;
  height: 41.3px;
  object-fit: cover;
}
.sistem-informasi-oki8 {
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
.logo8 {
  position: absolute;
  top: 42px;
  left: 32px;
  width: 202px;
  height: 42px;
  font-size: var(--font-size-13xl);
  font-family: var(--font-montserrat);
}
.data-program-kerja9 {
  position: absolute;
  top: 30px;
  left: 308px;
  font-size: var(--font-size-6xl);
  line-height: 115%;
  color: var(--color-black);
}
.bintangsholu8 {
  position: absolute;
  top: 6px;
  left: 37px;
  line-height: 100%;
  font-weight: 600;
}
.profil-child5,
.profil8 {
  position: absolute;
  top: 11.25px;
  left: 183.25px;
  width: 17.9px;
  height: 9.5px;
}
.profil8 {
  top: 30px;
  left: 1170px;
  width: 200.4px;
  height: 30px;
  color: var(--color-black);
  font-family: var(--font-montserrat);
}
.mask-group-icon8 {
  position: absolute;
  top: 29px;
  left: 1165px;
  width: 35px;
  height: 35px;
  object-fit: cover;
}
.rispol8 {
  top: 18px;
  left: 0;
  line-height: 115%;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 61px;
  height: 13px;
}
.oki16,
.oki17,
.rispol8 {
  position: absolute;
}
.oki17 {
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
.oki16 {
  top: 210px;
  left: 29px;
  width: 61px;
  height: 31px;
}
.muhammad-bintang-sholu8,
.nama-lengkap19 {
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
.nama-lengkap19 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 94px;
  height: 9px;
}
.nama-lengkap18 {
  position: absolute;
  top: 135px;
  left: 29px;
  width: 196px;
  height: 47px;
  font-size: var(--font-size-base);
}
.admin1,
.jabatan17 {
  position: absolute;
  top: 15px;
  left: 0;
  line-height: 115%;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 61px;
  height: 13px;
}
.jabatan17 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 60px;
  height: 9px;
}
.jabatan16 {
  position: absolute;
  top: 269px;
  left: 28px;
  width: 61px;
  height: 28px;
}
.data-anggota17 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
}
.material-symbolsperson-icon8 {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.data-anggota16 {
  position: absolute;
  top: 389px;
  left: 30px;
  width: 157px;
  height: 24px;
  font-size: var(--font-size-base);
}
.data-program-kerja11 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
  font-weight: 800;
}
.data-program-kerja10 {
  position: absolute;
  top: 348px;
  left: 30px;
  width: 196px;
  height: 24px;
  font-size: var(--font-size-base);
}
.proker-1-child {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-mini);
  background-color: var(--color-white);
  box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
  width: 312px;
  height: 190px;
}
.progress-bar-child,
.progress-bar-item {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-61xl);
  background-color: var(--color-gainsboro-100);
  width: 275px;
  height: 10px;
}
.progress-bar-item {
  background-color: var(--color-crimson);
  width: 68.75px;
}
.progress-bar {
  position: absolute;
  top: 149px;
  left: 19px;
  width: 275px;
  height: 10px;
}
.div48 {
  position: absolute;
  top: 20px;
  left: 218px;
  line-height: 100%;
  font-weight: 500;
}
.image-9-icon {
  position: absolute;
  top: 0;
  left: 0;
  width: 43px;
  height: 43px;
  object-fit: cover;
}
.judul-proker-1,
.proker-1 {
  position: absolute;
  top: 55px;
  left: 19px;
  width: 199px;
  height: 77px;
  font-size: var(--font-size-3xl);
  color: var(--color-black);
}
.proker-1 {
  top: 135px;
  left: 305px;
  width: 312px;
  height: 190px;
  font-size: var(--font-size-16xl);
  color: var(--color-crimson);
}
.progress-bar-child1 {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-61xl);
  background-color: var(--color-mediumspringgreen);
  width: 137.5px;
  height: 10px;
}
.progress-bar1 {
  position: absolute;
  top: 149px;
  left: 18px;
  width: 275px;
  height: 10px;
}
.div49,
.sholawat-rutin {
  position: absolute;
  top: 20px;
  left: 217px;
  line-height: 100%;
  font-weight: 500;
}
.sholawat-rutin {
  top: 55px;
  left: 0;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 199px;
}
.judul-proker-2,
.proker-2 {
  position: absolute;
  top: 55px;
  left: 18px;
  width: 199px;
  height: 77px;
  font-size: var(--font-size-3xl);
  color: var(--color-black);
}
.proker-2 {
  top: 135px;
  left: 658px;
  width: 312px;
  height: 190px;
  font-size: var(--font-size-16xl);
  color: var(--color-mediumspringgreen);
}
.progress-bar-child3 {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-61xl);
  background-color: var(--color-royalblue);
  width: 206.25px;
  height: 10px;
}
.div50 {
  position: absolute;
  top: 20px;
  left: 218px;
  font-size: var(--font-size-16xl);
  line-height: 100%;
  font-weight: 500;
  font-family: var(--font-poppins);
  color: var(--color-royalblue);
  text-align: left;
}
.firma-ceria,
.judul-proker-3 {
  position: absolute;
  top: 55px;
  width: 199px;
}
.firma-ceria {
  left: 0;
  font-size: var(--font-size-3xl);
  line-height: 100%;
  font-weight: 600;
  font-family: var(--font-poppins);
  color: var(--color-black);
  text-align: left;
  display: flex;
  align-items: center;
}
.judul-proker-3 {
  left: 19px;
  height: 77px;
}
.proker-3,
.proker-4-child {
  position: absolute;
  width: 312px;
  height: 190px;
}
.proker-3 {
  cursor: pointer;
  border: 0;
  padding: 0;
  background-color: transparent;
  top: 138px;
  left: 1009px;
}
.proker-4-child {
  top: 0;
  left: 0;
  border-radius: var(--br-mini);
  background-color: #e8e7e7;
  box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
}
.div51,
.tambah-program-kerja3 {
  position: absolute;
  line-height: 100%;
  font-weight: 500;
  color: var(--color-dimgray-200);
  text-align: left;
}
.div51 {
  top: 0;
  left: 114px;
  font-size: 55px;
  font-family: var(--font-montserrat);
}
.tambah-program-kerja3 {
  top: 55px;
  left: 0;
  font-size: var(--font-size-3xl);
  font-family: var(--font-poppins);
}
.container,
.proker-4 {
  position: absolute;
  top: 56px;
  left: 26px;
  width: 260px;
  height: 77px;
}
.proker-4 {
  cursor: pointer;
  border: 0;
  padding: 0;
  background-color: transparent;
  top: 368px;
  left: 305px;
  width: 312px;
  height: 190px;
}
.data-program-kerja-admin {
  position: relative;
  background-color: var(--color-white);
  width: 100%;
  height: 1024px;
  overflow: hidden;
  text-align: left;
  font-size: var(--font-size-lg);
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
