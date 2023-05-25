<!DOCTYPE html>
<html lang="en">
<body id="page-top">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                <div class="card-body pl-4">
                        <a href="halamanProker.php" class="btn btn-danger btn-icon-split btn-sm mb-2">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left "></i>
                        </span>
                        <span class="text">Back</span>
                        </a>
                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4"><?= $judulProker?></h1>
                        <p class="mb-3 text-gray-600 font-weight-700 text-lg">Bidang Syiar</p>
                        <ul style="list-style: none" class="pl-0">
                            <li>
                                <i class='fas fa-fw fa-map-location-dot mb-3'></i>
                                <span>Kelurahan Jatimulyo</span>
                            </li>
                            <li>
                                <i class='fas fa-fw fa-calendar-days mb-2'></i>
                                <span>25-03-2023</span>
                            </li>
                        </ul>
                        <hr class="content-divider">

                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Edit Data User</h5>
                        
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-4">
                                    <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Tugas</label>
                                    <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama tugas">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">SIE</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama Sie">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="text-gray-900 font-weight-bold" for="tanggal">Tenggat Waktu</label>
                                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tenggat Waktu">
                                </div>

                                <a href="halamanProker.php" class=" d-sm-inline-block btn btn-success shadow-sm ">
                                    <i class="fas fa-sm text-white-50"></i>Simpan Perubahan
                                </a>

                            </form>
                        </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</body>
</html>
