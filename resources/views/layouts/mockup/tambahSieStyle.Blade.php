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
        .tambah-data-sie-child {
  position: absolute;
  top: 0;
  left: 0;
  background-color: var(--color-whitesmoke);
  width: 1440px;
  height: 1024px;
}
.tambah-data-sie-item {
  position: absolute;
  top: 0;
  left: 0;
  background: linear-gradient(185.58deg, #371d88, #4e31aa);
  width: 265px;
  height: 1024px;
}
.tambah-data-sie-inner {
  position: absolute;
  top: 0;
  left: 265px;
  background-color: var(--color-white);
  box-shadow: 0 2px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1175px;
  height: 90px;
}
.sinoki5 {
  position: absolute;
  top: 2px;
  left: 49px;
  line-height: 100%;
  display: flex;
  align-items: center;
  width: 119px;
  height: 25px;
}
.logo-politeknik-negeri-malang-icon5 {
  position: absolute;
  top: -1px;
  left: -2px;
  width: 41px;
  height: 41.3px;
  object-fit: cover;
}
.sistem-informasi-oki5 {
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
.logo5 {
  position: absolute;
  top: 42px;
  left: 32px;
  width: 202px;
  height: 42px;
  font-size: var(--font-size-13xl);
  font-family: var(--font-montserrat);
}
.program-kerja-rispol4 {
  position: absolute;
  top: 30px;
  left: 308px;
  font-size: var(--font-size-6xl);
  line-height: 115%;
  color: var(--color-black);
}
.bintangsholu5 {
  position: absolute;
  top: 6px;
  left: 37px;
  line-height: 100%;
  font-weight: 600;
}
.profil-child2,
.profil5 {
  position: absolute;
  top: 11.25px;
  left: 183.25px;
  width: 17.9px;
  height: 9.5px;
}
.profil5 {
  top: 30px;
  left: 1170px;
  width: 200.4px;
  height: 30px;
  font-size: var(--font-size-lg);
  color: var(--color-black);
  font-family: var(--font-montserrat);
}
.mask-group-icon5 {
  position: absolute;
  top: 29px;
  left: 1165px;
  width: 35px;
  height: 35px;
  object-fit: cover;
}
.rispol5 {
  top: 18px;
  left: 0;
  line-height: 115%;
  font-weight: 600;
  display: flex;
  align-items: center;
  width: 61px;
  height: 13px;
}
.oki10,
.oki11,
.rispol5 {
  position: absolute;
}
.oki11 {
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
.oki10 {
  top: 210px;
  left: 29px;
  width: 61px;
  height: 31px;
  font-size: var(--font-size-lg);
}
.muhammad-bintang-sholu5,
.nama-lengkap13 {
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
.nama-lengkap13 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 94px;
  height: 9px;
}
.nama-lengkap12 {
  position: absolute;
  top: 135px;
  left: 29px;
  width: 196px;
  height: 47px;
}
.admin-oki4,
.jabatan11 {
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
.jabatan11 {
  top: 0;
  font-size: var(--font-size-3xs);
  font-weight: 500;
  color: var(--color-lightgray-100);
  width: 60px;
  height: 9px;
}
.jabatan10 {
  position: absolute;
  top: 269px;
  left: 28px;
  width: 61px;
  height: 28px;
  font-size: var(--font-size-lg);
}
.data-anggota11 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
}
.material-symbolsperson-icon5 {
  position: absolute;
  top: 0;
  left: 0;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.data-anggota10 {
  position: absolute;
  top: 389px;
  left: 30px;
  width: 157px;
  height: 24px;
}
.data-program-kerja5 {
  position: absolute;
  top: 2px;
  left: 30px;
  line-height: 115%;
  font-weight: 800;
}
.material-symbolsinsert-chart-parent3 {
  position: absolute;
  top: 348px;
  left: 30px;
  width: 196px;
  height: 24px;
}
.tambah-data-sie-child1 {
  position: absolute;
  top: 111px;
  left: 291px;
  border-radius: var(--br-mini);
  background-color: var(--color-white);
  box-shadow: -4px 4px 7px -1px rgba(0, 0, 0, 0.25);
  width: 1123px;
  height: 890px;
}
.bidang-syiar2,
.safari-dakwah2 {
  position: absolute;
  top: 224px;
  left: 329px;
  font-size: var(--font-size-16xl);
  line-height: 115%;
  color: var(--color-black);
}
.bidang-syiar2 {
  top: 272px;
  font-size: var(--font-size-5xl);
}
.mdimap-marker-outline-icon2 {
  position: absolute;
  top: 0;
  left: -4px;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.kelurahan-jatimulyo2 {
  position: absolute;
  top: 4px;
  left: 30px;
  line-height: 100%;
  font-weight: 500;
  display: flex;
  align-items: center;
  width: 199px;
}
.location-proker-12 {
  position: relative;
  width: 218px;
  height: 24px;
  flex-shrink: 0;
}
.div17 {
  position: absolute;
  top: 2px;
  left: 33px;
  line-height: 100%;
  font-weight: 500;
  display: flex;
  align-items: center;
  width: 199px;
}
.material-symbolscalendar-mont-icon2 {
  position: absolute;
  top: 0;
  left: 0.5px;
  width: 21px;
  height: 21px;
  overflow: hidden;
}
.date-proker-12 {
  position: relative;
  width: 224px;
  height: 21px;
  flex-shrink: 0;
}
.location-proker-1-container {
  position: absolute;
  top: 236px;
  left: 1172px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
  gap: var(--gap-3xs);
  color: var(--color-black);
}
.button-back-child2 {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-5xs);
  background-color: var(--color-steelblue-100);
  width: 88px;
  height: 40px;
}
.back4 {
  position: absolute;
  top: 12px;
  left: 17px;
  line-height: 100%;
  font-weight: 600;
}
.button-back4,
.frame-child3 {
  position: absolute;
  top: 146px;
  left: 329px;
  width: 88px;
  height: 40px;
}
.frame-child3 {
  top: 0;
  left: 0;
  border-radius: var(--br-8xs);
  background-color: var(--color-mediumseagreen);
  width: 135px;
  height: 35px;
}
.tambah-anggota2 {
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
.rectangle-parent18 {
  position: absolute;
  top: 929px;
  left: 333px;
  width: 135px;
  height: 35px;
  text-align: center;
  font-size: var(--font-size-smi);
  font-family: var(--font-inter);
}
.tambah-data-user {
  position: absolute;
  top: 360px;
  left: 329px;
  font-size: var(--font-size-7xl);
  font-weight: 600;
  color: var(--color-black);
}
.tambah-data-sie-child2 {
  position: absolute;
  top: 338px;
  left: 291px;
  background-color: var(--color-gainsboro-200);
  width: 1123px;
  height: 2px;
}
.material-symbolscheck-box-out-icon,
.material-symbolscheck-box-rou-icon {
  position: absolute;
  top: 171px;
  left: 977px;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.material-symbolscheck-box-rou-icon {
  top: 90px;
}
.material-symbolscheck-box-rou-icon1,
.material-symbolscheck-box-rou-icon2 {
  position: absolute;
  top: 254px;
  left: 977px;
  width: 24px;
  height: 24px;
  overflow: hidden;
}
.material-symbolscheck-box-rou-icon2 {
  top: 334px;
  left: 974px;
}
.thead-item {
  position: absolute;
  top: 0;
  left: 0;
  border-radius: var(--br-8xs) var(--br-8xs) 0 0;
  border: 0.5px solid var(--color-gray-100);
  box-sizing: border-box;
  width: 1047px;
  height: 33px;
}
.nama-anggota1,
.no1 {
  position: absolute;
  top: 9px;
  left: 19px;
  letter-spacing: 0.05em;
  display: inline-block;
  text-align: left;
  width: 23px;
  height: 15px;
}
.nama-anggota1 {
  left: 72px;
  width: 126px;
}
.nim3 {
  top: 7px;
  left: 274px;
  width: 126px;
}
.foto-diri2,
.nim3,
.notelp1,
.pilih,
.prodijurusan3 {
  position: absolute;
  letter-spacing: 0.05em;
  display: inline-block;
  height: 15px;
}
.prodijurusan3 {
  top: 8px;
  left: 499px;
  width: 104px;
}
.foto-diri2,
.notelp1,
.pilih {
  top: 9px;
  width: 96px;
}
.notelp1 {
  left: 702px;
  text-align: left;
}
.foto-diri2,
.pilih {
  left: 834px;
}
.pilih {
  top: 8px;
  left: 941px;
}
.sort-down-icon1,
.thead1,
.up-down1 {
  position: absolute;
  width: 16.77px;
  height: 10.32px;
}
.sort-down-icon1 {
  top: 0;
  left: 0;
  object-fit: cover;
}
.thead1,
.up-down1 {
  top: 13.13px;
  left: 257.48px;
}
.thead1 {
  top: 33px;
  left: 0;
  width: 1047px;
  height: 33px;
  color: var(--color-gray-200);
}
.entries1,
.show2 {
  position: absolute;
  top: 0;
  left: 0;
  letter-spacing: 0.05em;
  font-weight: 500;
  display: inline-block;
  width: 40.93px;
  height: 19.99px;
}
.entries1 {
  left: 131.77px;
  font-size: var(--font-size-xs);
  width: 45.92px;
  height: 17.13px;
}
.div18,
.group-child16 {
  position: absolute;
  top: 0;
  height: 19.04px;
}
.group-child16 {
  left: 0;
  border-radius: var(--br-10xs);
  background-color: var(--color-white);
  border: 1px solid var(--color-gray-200);
  box-sizing: border-box;
  width: 69.88px;
}
.div18 {
  left: 17.97px;
  letter-spacing: 0.05em;
  font-weight: 500;
  display: inline-block;
  width: 16.97px;
}
.keyboard-arrow-down1 {
  position: absolute;
  top: 2.86px;
  left: 36.94px;
  width: 14.97px;
  height: 14.28px;
  overflow: hidden;
}
.rectangle-parent19,
.show-count1 {
  position: absolute;
  top: 0;
  left: 53.91px;
  width: 69.88px;
  height: 19.04px;
  font-size: var(--font-size-smi);
}
.show-count1 {
  left: 0;
  width: 177.7px;
  height: 19.99px;
  text-align: left;
  font-size: var(--font-size-sm);
  color: var(--color-gray-200);
}
.search-item {
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
.row-1-item,
.search1 {
  position: absolute;
  top: 0;
}
.search1 {
  left: 814px;
  width: 232.6px;
  height: 19.99px;
  text-align: left;
  font-size: var(--font-size-sm);
  color: var(--color-gray-200);
}
.row-1-item {
  left: 0;
  border-right: 0.5px solid var(--color-gray-100);
  border-bottom: 0.5px solid var(--color-gray-100);
  border-left: 0.5px solid var(--color-gray-100);
  box-sizing: border-box;
  width: 1047px;
  height: 80px;
}
.upload-file4 {
  position: absolute;
  top: 10px;
  left: 712px;
  width: 75px;
  height: 20px;
}
.row-11,
.row-2-item {
  position: absolute;
  top: 66px;
  left: 0;
  width: 1047px;
  height: 80px;
}
.row-2-item {
  top: 7px;
  border-right: 0.5px solid var(--color-gray-100);
  border-bottom: 0.5px solid var(--color-gray-100);
  border-left: 0.5px solid var(--color-gray-100);
  box-sizing: border-box;
}
.div19,
.div20,
.fadlila-afida1 {
  position: absolute;
  display: flex;
  align-items: center;
}
.div19 {
  top: 31px;
  left: 228px;
  text-align: center;
  justify-content: center;
  width: 218px;
  height: 32px;
}
.div20,
.fadlila-afida1 {
  top: 36px;
  left: 24px;
  letter-spacing: 0.05em;
  width: 12px;
  height: 22px;
}
.fadlila-afida1 {
  top: 15px;
  left: 74px;
  width: 218px;
  height: 64px;
}
.row-21,
.upload-file5 {
  position: absolute;
  top: 0;
  left: 712px;
  width: 75px;
  height: 40px;
}
.row-21 {
  top: 136px;
  left: 0;
  width: 1047px;
  height: 87px;
  text-align: left;
}
.upload-file6 {
  position: absolute;
  top: 95px;
  left: 712px;
  width: 75px;
  height: 23px;
}
.brian-safiudin1,
.div21,
.div22 {
  position: absolute;
  display: flex;
  align-items: center;
}
.div21 {
  top: 24px;
  left: 228px;
  text-align: center;
  justify-content: center;
  width: 218px;
  height: 32px;
}
.brian-safiudin1,
.div22 {
  top: 33px;
  left: 24px;
  letter-spacing: 0.05em;
  width: 12px;
  height: 14.67px;
}
.brian-safiudin1 {
  top: 19px;
  left: 72px;
  width: 218px;
  height: 42.67px;
}
.row-31 {
  position: absolute;
  top: 226px;
  left: 0;
  width: 1047px;
  height: 80px;
  text-align: left;
}
.div23,
.div24 {
  position: absolute;
  display: flex;
  align-items: center;
}
.div23 {
  top: 18px;
  left: 204px;
  text-align: center;
  justify-content: center;
  width: 218px;
  height: 32px;
}
.div24 {
  top: 21px;
  left: 0;
  letter-spacing: 0.05em;
  width: 12px;
  height: 22px;
}
.febryan-riski1,
.group {
  position: absolute;
  height: 64px;
}
.febryan-riski1 {
  top: 0;
  left: 48px;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  width: 218px;
}
.group {
  top: 8px;
  left: 24px;
  width: 422px;
}
.div25,
.row-41,
.upload-file7 {
  position: absolute;
  top: 15px;
  left: 712px;
  width: 75px;
  height: 36.8px;
}
.div25,
.row-41 {
  top: 306px;
  left: 0;
  width: 1047px;
  height: 80px;
  text-align: left;
}
.div25 {
  top: 100px;
  left: 24px;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  width: 9px;
  height: 11px;
}
.div26,
.div27,
.div28,
.div29,
.div30,
.tri-jagad-ariyani2 {
  position: absolute;
  top: 90px;
  display: flex;
  align-items: center;
  width: 218px;
  height: 32px;
}
.tri-jagad-ariyani2 {
  left: 72px;
  letter-spacing: 0.05em;
  text-align: left;
}
.div26,
.div27,
.div28,
.div29,
.div30 {
  left: 228px;
  justify-content: center;
}
.div27,
.div28,
.div29,
.div30 {
  left: 626px;
}
.div28,
.div29,
.div30 {
  top: 167px;
}
.div29,
.div30 {
  top: 250px;
}
.div30 {
  top: 332px;
}
.div-teknik-informatikateknolo4,
.div-teknik-informatikateknolo5,
.div-teknik-informatikateknolo6,
.div-teknik-informatikateknolo7 {
  position: absolute;
  top: 98px;
  left: 453px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 196px;
  height: 16px;
}
.div-teknik-informatikateknolo5,
.div-teknik-informatikateknolo6,
.div-teknik-informatikateknolo7 {
  top: 175px;
}
.div-teknik-informatikateknolo6,
.div-teknik-informatikateknolo7 {
  top: 258px;
}
.div-teknik-informatikateknolo7 {
  top: 340px;
}
.sholu3-wjqud-2-icon1,
.sholu3-wjqud-3-icon1,
.sholu3-wjqud-4-icon1,
.sholu3-wjqud-5-icon1 {
  position: absolute;
  top: 153px;
  left: 855px;
  width: 54px;
  height: 66px;
  object-fit: cover;
}
.sholu3-wjqud-3-icon1,
.sholu3-wjqud-4-icon1,
.sholu3-wjqud-5-icon1 {
  top: 73px;
}
.sholu3-wjqud-3-icon1,
.sholu3-wjqud-4-icon1 {
  top: 233px;
}
.sholu3-wjqud-4-icon1 {
  top: 313px;
}
.tabel1 {
  position: absolute;
  top: 445px;
  left: 324px;
  width: 1047px;
  height: 452px;
  text-align: center;
  font-size: var(--font-size-xs);
  color: var(--color-black);
}
.tambah-data-sie {
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
