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
.program-kerja-admin-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-whitesmoke);
  width: 1440px;
  height: 1024px;
}
.program-kerja-admin-item {
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(185.58deg, #371d88, #4e31aa);
  width: 265px;
  height: 1024px;
}
.program-kerja-admin-inner {
  position: absolute;
  top: 0;
  left: 265px;
  background-color: var(--color-white);
  box-shadow: 0 2px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1175px;
  height: 90px;
}
.sinoki7 {
  position: absolute;
  top: 2px;
  left: 49px;
  line-height: 100%;
  display: flex;
  align-items: center;
  width: 119px;
  height: 25px;
}
.logo-politeknik-negeri-malang-icon7 {
  position: absolute;
  top: -1px;
  left: -2px;
  width: 41px;
  height: 41.3px;
  object-fit: cover;
}
.sistem-informasi-oki7 {
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
.logo7 {
  position: absolute;
  top: 42px;
  left: 32px;
  width: 202px;
  height: 42px;
  font-size: var(--font-size-13xl);
  font-family: var(--font-montserrat);
}
.program-kerja-rispol6 {
  position: absolute;
  top: 30px;
  left: 308px;
  font-size: var(--font-size-6xl);
  line-height: 115%;
  color: var(--color-black);
}
.bintangsholu7 {
  position: absolute;
  top: 6px;
  left: 37px;
  line-height: 100%;
  font-weight: 600;
}
.profil-child4,
.profil7 {
  position: absolute;
  top: 11.25px;
  left: 183.25px;
  width: 17.9px;
  height: 9.5px;
}
.profil7 {
  top: 30px;
  left: 1170px;
  width: 200.4px;
  height: 30px;
  font-size: var(--font-size-lg);
  color: var(--color-black);
  font-family: var(--font-montserrat);
}
.mask-group-icon7 {
  position: absolute;
  top: 29px;
  left: 1165px;
  width: 35px;
  height: 35px;
  object-fit: cover;
}
.rispol7 {
  top: 18px;
  left: 0;
  line-height: 115%;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 61px;
  height: 13px;
}
.oki14,
.oki15,
.rispol7 {
  position: absolute;
}
.oki15 {
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
.oki14 {
  top: 210px;
  left: 29px;
  width: 61px;
  height: 31px;
  font-size: var(--font-size-lg);
}
.muhammad-bintang-sholu7,
.nama-lengkap17 {
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
.nama-lengkap17 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 94px;
  height: 9px;
}
.nama-lengkap16 {
  position: absolute;
  top: 135px;
  left: 29px;
  width: 196px;
  height: 47px;
}
.admin-oki6,
.jabatan15 {
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
.jabatan15 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 60px;
  height: 9px;
}
.jabatan14 {
  position: absolute;
  top: 269px;
  left: 28px;
  width: 61px;
  height: 28px;
  font-size: var(--font-size-lg);
}
.data-anggota15 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
}
.material-symbolsperson-icon7 {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.data-anggota14 {
  position: absolute;
  top: 389px;
  left: 30px;
  width: 157px;
  height: 24px;
}
.data-program-kerja8 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
  font-weight: 800;
}
.content-child,
.data-program-kerja7 {
  position: absolute;
  top: 348px;
  left: 30px;
  width: 196px;
  height: 24px;
}
.content-child {
  top: 0;
  left: 0;
  border-radius: var(--br-mini);
  background-color: var(--color-white);
  box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1123px;
  height: 890px;
}
.bidang-syiar4,
.safari-dakwah4 {
  position: absolute;
  top: 35px;
  left: 38px;
  font-size: var(--font-size-16xl);
  line-height: 115%;
}
.bidang-syiar4 {
  top: 83px;
  font-size: var(--font-size-5xl);
}
.mdimap-marker-outline-icon4 {
  position: absolute;
  top: 0;
  left: -4px;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.kelurahan-jatimulyo4 {
  position: absolute;
  top: 4px;
  left: 30px;
  line-height: 100%;
  font-weight: 500;
  display: flex;
  align-items: center;
  width: 199px;
}
.location-proker-14 {
  position: relative;
  width: 218px;
  height: 24px;
  flex-shrink: 0;
}
.div42 {
  position: absolute;
  top: 2px;
  left: 33px;
  line-height: 100%;
  font-weight: 500;
  display: flex;
  align-items: center;
  width: 199px;
}
.material-symbolscalendar-mont-icon4 {
  position: absolute;
  top: 0;
  left: 0.5px;
  width: 21px;
  height: 21px;
  overflow: hidden;
}
.date-proker-14 {
  position: relative;
  width: 224px;
  height: 21px;
  flex-shrink: 0;
}
.location-proker-1-parent2 {
  position: absolute;
  top: 39px;
  left: 876px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: var(--gap-3xs);
}
.button-sie-child {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-5xs);
  background-color: var(--color-steelblue-100);
  width: 130px;
  height: 40px;
}
.data-sie {
  position: absolute;
  top: 12px;
  left: 32px;
  line-height: 100%;
  font-weight: 600;
}
.button-sie {
  position: absolute;
  top: 131px;
  left: 38px;
  width: 130px;
  height: 40px;
  color: var(--color-white);
}
.thead-child2 {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-8xs) var(--br-8xs) 0 0;
  border: 0.5px solid var(--color-gray-100);
  box-sizing: border-box;
  width: 1047px;
  height: 33px;
}
.nama-tugas1,
.no4,
.tenggat-waktu {
  position: absolute;
  top: 9px;
  letter-spacing: 0.05em;
  display: inline-block;
  height: 15px;
}
.no4 {
  left: 19px;
  text-align: left;
  width: 23px;
}
.nama-tugas1,
.tenggat-waktu {
  width: 126px;
}
.nama-tugas1 {
  left: 58px;
  text-align: left;
}
.tenggat-waktu {
  left: 466px;
}
.sie2 {
  left: 303px;
  width: 126px;
}
.evaluasi,
.pengumpulan,
.sie2,
.status {
  position: absolute;
  top: 9px;
  letter-spacing: 0.05em;
  display: inline-block;
  height: 15px;
}
.status {
  left: 643px;
  width: 52px;
}
.evaluasi,
.pengumpulan {
  width: 96px;
}
.pengumpulan {
  left: 738px;
  text-align: left;
}
.evaluasi {
  left: 896px;
}
.sort-down-icon4,
.thead4,
.up-down4 {
  position: absolute;
  width: 16.77px;
  height: 10.32px;
}
.sort-down-icon4 {
  top: 0;
  left: 0;
  object-fit: cover;
}
.thead4,
.up-down4 {
  top: 13.13px;
  left: 257.48px;
}
.thead4 {
  top: 33px;
  left: 0;
  width: 1047px;
  height: 33px;
  text-align: center;
  color: var(--color-gray-200);
}
.entries4,
.show8 {
  position: absolute;
  top: 0;
  left: 0;
  letter-spacing: 0.05em;
  font-weight: 500;
  display: inline-block;
  width: 40.93px;
  height: 19.99px;
}
.entries4 {
  left: 131.77px;
  font-size: var(--font-size-xs);
  width: 45.92px;
  height: 17.13px;
}
.div43,
.group-child19 {
  position: absolute;
  top: 0;
  height: 19.04px;
}
.group-child19 {
  left: 0;
  border-radius: var(--br-10xs);
  background-color: var(--color-white);
  border: 1px solid var(--color-gray-200);
  box-sizing: border-box;
  width: 69.88px;
}
.div43 {
  left: 17.97px;
  letter-spacing: 0.05em;
  font-weight: 500;
  display: inline-block;
  width: 16.97px;
}
.keyboard-arrow-down4 {
  position: absolute;
  top: 2.86px;
  left: 36.94px;
  width: 14.97px;
  height: 14.28px;
  overflow: hidden;
}
.rectangle-parent24,
.show-count4 {
  position: absolute;
  top: 0;
  left: 53.91px;
  width: 69.88px;
  height: 19.04px;
  font-size: var(--font-size-smi);
}
.show-count4 {
  left: 0;
  width: 177.7px;
  height: 19.99px;
  font-size: var(--font-size-sm);
  color: var(--color-gray-200);
}
.search-child2 {
  position: absolute;
  top: 0.95px;
  left: 52.91px;
  border-radius: var(--br-10xs);
  background-color: var(--color-white);
  border: 1px solid var(--color-gray-200);
  box-sizing: border-box;
  width: 179.69px;
  height: 19.04px;
}
.search4 {
  position: absolute;
  top: 0;
  left: 814px;
  width: 232.6px;
  height: 19.99px;
  font-size: var(--font-size-sm);
  color: var(--color-gray-200);
}
.frame-child7,
.row-1-child2 {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
}
.row-1-child2 {
  border-right: 0.5px solid var(--color-gray-100);
  border-bottom: 0.5px solid var(--color-gray-100);
  border-left: 0.5px solid var(--color-gray-100);
  width: 1047px;
  height: 50px;
}
.frame-child7 {
  border: 0.5px solid var(--color-gray-300);
  width: 195px;
  height: 35px;
}
.kerja-bagus {
  position: absolute;
  top: 2px;
  left: 13px;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  width: 175px;
  height: 32px;
}
.rectangle-parent25 {
  position: absolute;
  top: 6px;
  left: 846px;
  width: 195px;
  height: 35px;
  font-size: var(--font-size-3xs);
}
.tambahkan-evaluasi {
  position: absolute;
  top: 2px;
  left: 13px;
  letter-spacing: 0.05em;
  font-weight: 300;
  display: flex;
  align-items: center;
  width: 175px;
  height: 32px;
}
.rectangle-parent26 {
  position: absolute;
  top: 57px;
  left: 846px;
  width: 195px;
  height: 35px;
  font-size: var(--font-size-3xs);
  color: var(--color-darkgray);
}
.div44 {
  position: absolute;
  top: 18px;
  left: 24px;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  width: 9px;
  height: 11px;
}
.march-2023-1200,
.membuat-materi-dakwah,
.selesai,
.sie-acara2 {
  position: absolute;
  top: 8px;
  display: flex;
  align-items: center;
  width: 218px;
  height: 32px;
}
.membuat-materi-dakwah {
  left: 58px;
  letter-spacing: 0.05em;
}
.march-2023-1200,
.selesai,
.sie-acara2 {
  left: 420px;
  text-align: center;
  justify-content: center;
}
.selesai,
.sie-acara2 {
  left: 257px;
}
.selesai {
  top: 16px;
  left: 634px;
  font-weight: 500;
  width: 69px;
  height: 16px;
}
.upload-file22 {
  position: absolute;
  top: 10px;
  left: 712px;
  width: 75px;
  height: 20px;
}
.frame-child9,
.row-14 {
  position: absolute;
  top: 66px;
  left: 0;
  width: 1047px;
  height: 92px;
}
.frame-child9 {
  top: 0;
  border: 0.5px solid var(--color-gray-300);
  box-sizing: border-box;
  width: 195px;
  height: 45px;
}
.tambahkan-evaluasi1 {
  position: absolute;
  top: 7px;
  left: 13px;
  letter-spacing: 0.05em;
  font-weight: 300;
  display: flex;
  align-items: center;
  width: 175px;
  height: 32px;
}
.rectangle-parent27,
.rectangle-parent28 {
  position: absolute;
  width: 195px;
  font-size: var(--font-size-3xs);
}
.rectangle-parent27 {
  top: 178px;
  left: 846px;
  height: 45px;
  color: var(--color-darkgray);
}
.rectangle-parent28 {
  top: 243px;
  left: 843px;
  height: 35px;
}
.div45 {
  position: absolute;
  top: 17.5px;
  left: 24px;
  letter-spacing: 0.05em;
  text-align: left;
  display: flex;
  align-items: center;
  width: 12px;
  height: 13.75px;
}
.april-2023-0930,
.sie-pdd1 {
  top: 5px;
  justify-content: center;
  width: 218px;
  height: 40px;
}
.april-2023-0930 {
  position: absolute;
  left: 420px;
  display: flex;
  align-items: center;
}
.sie-pdd1 {
  left: 257px;
}
.belum-selesai,
.membuat-surat-undangan,
.sie-pdd1 {
  position: absolute;
  display: flex;
  align-items: center;
}
.membuat-surat-undangan {
  top: 5px;
  left: 58px;
  letter-spacing: 0.05em;
  text-align: left;
  width: 218px;
  height: 40px;
}
.belum-selesai {
  top: 15px;
  left: 621px;
  font-weight: 500;
  justify-content: center;
  width: 95px;
  height: 20px;
}
.row-24 {
  position: absolute;
  top: 116px;
  left: 0;
  width: 1047px;
  height: 50px;
  text-align: center;
}
.upload-file-child8 {
  position: absolute;
  top: -1.5px;
  left: 0;
  border-radius: var(--br-8xs);
  background-color: #cfcfcf;
  width: 75px;
  height: 24px;
}
.lihat-file {
  position: absolute;
  top: 4.5px;
  left: 16px;
  font-weight: 500;
}
.upload-file23 {
  position: absolute;
  top: 132px;
  left: 749px;
  width: 75px;
  height: 23px;
  font-size: var(--font-size-3xs);
  color: var(--color-white);
  font-family: var(--font-inter);
}
.upload-file-child9 {
  position: absolute;
  top: -1.5px;
  left: 0;
  border-radius: var(--br-8xs);
  background-color: var(--color-cornflowerblue);
  width: 75px;
  height: 24px;
}
.upload-file24 {
  position: absolute;
  top: 80px;
  left: 749px;
  width: 75px;
  height: 23px;
  font-size: var(--font-size-3xs);
  color: var(--color-white);
  font-family: var(--font-inter);
}
.row-3-child2 {
  position: absolute;
  top: 0;
  left: 0;
  border-right: 0.5px solid var(--color-gray-100);
  border-bottom: 0.5px solid var(--color-gray-100);
  border-left: 0.5px solid var(--color-gray-100);
  box-sizing: border-box;
  width: 1047px;
  height: 70px;
}
.div46 {
  position: absolute;
  top: 28px;
  left: 24px;
  letter-spacing: 0.05em;
  text-align: left;
  display: flex;
  align-items: center;
  width: 12px;
  height: 12.83px;
}
.march-2023-1100,
.membuat-rundown-acara {
  position: absolute;
  top: 16.33px;
  width: 218px;
  height: 37.33px;
}
.membuat-rundown-acara {
  left: 58px;
  letter-spacing: 0.05em;
  text-align: left;
  display: flex;
  align-items: center;
}
.march-2023-1100 {
  left: 420px;
}
.march-2023-1100,
.selesai1,
.sie-acara3 {
  display: flex;
  align-items: center;
  justify-content: center;
}
.sie-acara3 {
  position: absolute;
  top: 16.33px;
  left: 257px;
  width: 218px;
  height: 37.33px;
}
.selesai1 {
  top: 25.67px;
  left: 634px;
  font-weight: 500;
  width: 69px;
  height: 18.67px;
}
.div47,
.row-34,
.selesai1 {
  position: absolute;
}
.row-34 {
  top: 166px;
  left: 0;
  width: 1047px;
  height: 70px;
  text-align: center;
}
.div47 {
  top: 17.5px;
  left: 24px;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  width: 12px;
  height: 13.75px;
}
.march-2023-1000,
.membuat-pamflet-dakwah,
.selesai2,
.sie-pdd2 {
  position: absolute;
  top: 5px;
  display: flex;
  align-items: center;
  width: 218px;
  height: 40px;
}
.membuat-pamflet-dakwah {
  left: 58px;
  letter-spacing: 0.05em;
}
.march-2023-1000,
.selesai2,
.sie-pdd2 {
  left: 420px;
  text-align: center;
  justify-content: center;
}
.selesai2,
.sie-pdd2 {
  left: 257px;
}
.selesai2 {
  top: 15px;
  left: 634px;
  font-weight: 500;
  width: 69px;
  height: 20px;
}
.upload-file25 {
  position: absolute;
  top: 16px;
  left: 749px;
  width: 75px;
  height: 23px;
  font-size: var(--font-size-3xs);
  color: var(--color-white);
  font-family: var(--font-inter);
}
.row-44,
.upload-file26 {
  position: absolute;
  top: 236px;
  left: 0;
  width: 1047px;
  height: 50px;
}
.upload-file26 {
  top: 190px;
  left: 749px;
  width: 75px;
  height: 23px;
  font-size: var(--font-size-3xs);
  color: var(--color-white);
  font-family: var(--font-inter);
}
.tabel4 {
  position: absolute;
  top: 371px;
  left: 38px;
  width: 1047px;
  height: 452px;
  font-size: var(--font-size-xs);
}
.tambah-tugas-child {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-8xs);
  background-color: var(--color-mediumseagreen);
  width: 115px;
  height: 35px;
}
.tambah-tugas3 {
  position: absolute;
  top: 11px;
  left: 12px;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 92px;
  height: 14px;
}
.tambah-tugas2 {
  position: absolute;
  top: 304px;
  left: 38px;
  width: 115px;
  height: 35px;
  font-size: var(--font-size-smi);
  color: var(--color-white);
  font-family: var(--font-inter);
}
.daftar-tugas-program {
  position: absolute;
  top: 249px;
  left: 38px;
  font-size: var(--font-size-7xl);
  font-weight: 600;
}
.content,
.content-item {
  position: absolute;
  width: 1123px;
}
.content-item {
  top: 227px;
  left: 0;
  background-color: var(--color-gainsboro-200);
  height: 2px;
}
.content {
  top: 108px;
  left: 296px;
  height: 890px;
  color: var(--color-black);
}
.program-kerja-admin {
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
