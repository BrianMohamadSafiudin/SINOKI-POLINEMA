//halaman Tambah Data Anggota
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
        .tambah-data-anggota-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-whitesmoke);
  width: 1440px;
  height: 1024px;
}
.tambah-data-anggota-item {
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(185.58deg, #371d88, #4e31aa);
  width: 265px;
  height: 1024px;
}
.tambah-data-anggota-inner {
  position: absolute;
  top: 0;
  left: 265px;
  background-color: var(--color-white);
  box-shadow: 0 2px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1175px;
  height: 90px;
}
.sinoki1 {
  position: absolute;
  top: 2px;
  left: 49px;
  line-height: 100%;
  display: flex;
  align-items: center;
  width: 119px;
  height: 25px;
}
.logo-politeknik-negeri-malang-icon1 {
  position: absolute;
  top: -1px;
  left: -2px;
  width: 41px;
  height: 41.3px;
  object-fit: cover;
}
.sistem-informasi-oki1 {
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
.logo1 {
  position: absolute;
  top: 42px;
  left: 32px;
  width: 202px;
  height: 42px;
  font-size: var(--font-size-13xl);
  font-family: var(--font-montserrat);
}
.program-kerja-rispol1 {
  position: absolute;
  top: 30px;
  left: 308px;
  font-size: var(--font-size-6xl);
  line-height: 115%;
  color: var(--color-black);
}
.bintangsholu1 {
  position: absolute;
  top: 6px;
  left: 37px;
  line-height: 100%;
  font-weight: 600;
}
.profil-item,
.profil1 {
  position: absolute;
  top: 12px;
  left: 184px;
  width: 16.4px;
  height: 8px;
}
.profil1 {
  top: 30px;
  left: 1170px;
  width: 200.4px;
  height: 30px;
  font-size: var(--font-size-lg);
  color: var(--color-black);
  font-family: var(--font-montserrat);
}
.mask-group-icon1 {
  position: absolute;
  top: 29px;
  left: 1165px;
  width: 35px;
  height: 35px;
  object-fit: cover;
}
.rispol1 {
  top: 18px;
  left: 0;
  line-height: 115%;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 61px;
  height: 13px;
}
.oki2,
.oki3,
.rispol1 {
  position: absolute;
}
.oki3 {
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
.oki2 {
  top: 210px;
  left: 29px;
  width: 61px;
  height: 31px;
  font-size: var(--font-size-lg);
}
.muhammad-bintang-sholu1,
.nama-lengkap4 {
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
.nama-lengkap4 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 94px;
  height: 9px;
}
.nama-lengkap3 {
  position: absolute;
  top: 135px;
  left: 29px;
  width: 196px;
  height: 47px;
  font-size: var(--font-size-base);
}
.admin-oki1,
.jabatan3 {
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
.jabatan3 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 60px;
  height: 9px;
}
.jabatan2 {
  position: absolute;
  top: 269px;
  left: 28px;
  width: 61px;
  height: 28px;
  font-size: var(--font-size-lg);
}
.data-anggota3 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
  font-weight: 800;
}
.material-symbolsperson-icon1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.data-anggota2 {
  position: absolute;
  top: 398px;
  left: 32px;
  width: 157px;
  height: 24px;
  font-size: var(--font-size-base);
}
.data-program-kerja1 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
}
.material-symbolsinsert-chart-group {
  position: absolute;
  top: 348px;
  left: 30px;
  width: 196px;
  height: 24px;
  font-size: var(--font-size-base);
}
.tambah-data-anggota-child1 {
  position: absolute;
  top: 111px;
  left: 291px;
  border-radius: var(--br-mini);
  background-color: var(--color-white);
  box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1123px;
  height: 890px;
}
.button-back-item {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-5xs);
  background-color: var(--color-steelblue-100);
  width: 88px;
  height: 40px;
}
.back1 {
  position: absolute;
  top: 12px;
  left: 17px;
  line-height: 100%;
  font-weight: 600;
}
.button-back1 {
  position: absolute;
  top: 146px;
  left: 329px;
  width: 88px;
  height: 40px;
  font-size: var(--font-size-base);
}
.frame-item {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-8xs);
  background-color: var(--color-mediumseagreen);
  width: 135px;
  height: 35px;
}
.tambah-anggota {
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
.frame-div {
  position: absolute;
  top: 789px;
  left: 333px;
  width: 135px;
  height: 35px;
  text-align: center;
  font-size: var(--font-size-smi);
  font-family: var(--font-inter);
}
.tambah-data-anggota1 {
  position: absolute;
  top: 220px;
  left: 329px;
  font-size: var(--font-size-7xl);
  color: var(--color-black);
}
.group-child2 {
  position: absolute;
  top: 27px;
  left: 0;
  border-radius: var(--br-5xs);
  border: 0.5px solid var(--color-gray-300);
  box-sizing: border-box;
  width: 1000px;
  height: 40px;
}
.nama-lengkap5 {
  position: absolute;
  top: 0;
  left: 2px;
  font-weight: 600;
}
.rectangle-parent3 {
  position: absolute;
  top: 280px;
  left: 329px;
  width: 1000px;
  height: 67px;
  text-align: center;
  color: var(--color-black);
  font-family: var(--font-inter);
}
.nim1 {
  position: absolute;
  top: 0;
  left: 7px;
  font-weight: 600;
}
.rectangle-parent4 {
  position: absolute;
  top: 0;
  left: 0;
  width: 1000px;
  height: 67px;
}
.tambah-data-anggota-inner1,
.tambah-data-anggota-inner2 {
  position: absolute;
  top: 375px;
  left: 329px;
  width: 1000px;
  height: 67px;
  text-align: center;
  color: var(--color-black);
  font-family: var(--font-inter);
}
.tambah-data-anggota-inner2 {
  top: 470px;
  left: 331px;
}
.no-telp1 {
  position: absolute;
  top: 0;
  left: 11px;
  font-weight: 600;
}
.tambah-data-anggota-inner3 {
  position: absolute;
  top: 572px;
  left: 329px;
  width: 1000px;
  height: 67px;
  text-align: center;
  color: var(--color-black);
  font-family: var(--font-inter);
}
.choose-file,
.foto-diri {
  position: absolute;
  top: 0;
  left: 12px;
  font-weight: 600;
}
.choose-file {
  top: 37px;
  left: 28px;
  font-size: var(--font-size-sm);
  font-family: var(--font-poppins);
  text-align: left;
}
.group-child6,
.group-child7 {
  position: absolute;
  top: 27px;
  left: 0;
  border-radius: var(--br-5xs) 0 0 var(--br-5xs);
  border: 2px solid var(--color-gray-400);
  box-sizing: border-box;
  width: 137px;
  height: 40px;
}
.group-child7 {
  border-radius: var(--br-5xs);
  width: 1003px;
}
.field-password-inner,
.foto-diri-parent {
  position: absolute;
  top: 0;
  left: 0;
  width: 1003px;
  height: 67px;
}
.field-password-inner {
  top: -38px;
}
.jpgjpegpngwebp {
  position: absolute;
  top: 1px;
  left: 159px;
  font-weight: 600;
  color: var(--color-gray-300);
}
.field-password,
.password {
  position: absolute;
  top: 0;
  left: 0;
  width: 1003px;
  height: 40px;
}
.password {
  top: 714px;
  left: 331px;
  text-align: center;
  color: var(--color-black);
  font-family: var(--font-inter);
}
.tambah-data-anggota {
  position: relative;
  background-color: var(--color-white);
  width: 100%;
  height: 1024px;
  overflow: hidden;
  display: none;
  text-align: left;
  font-size: var(--font-size-mini);
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
