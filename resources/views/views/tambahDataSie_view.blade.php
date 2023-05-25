<!DOCTYPE html>
<html lang="en">

<body id="page-top">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    
                    <div class="card-body pl-4">
                        <a href="halamanDataSie.php" class="btn btn-danger btn-icon-split btn-sm mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left "></i>
                            </span>
                            <span class="text">Back</span>
                        </a>

                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder"><?= $judulProker?></h1>
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

                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Tambah Data User</h5>

                        <form>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Lengkap</label>
                                <input type="text" class="form-control " id="exampleInputEmail1" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">SIE</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Keterangan SIE">
                            </div>

                            <a href="halamanDataSie.php" class=" d-sm-inline-block btn btn-success shadow-sm px-2 text-xs">
                                <i class="fas text-white-50 "></i>Tambah Anggota
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

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>

</html>

