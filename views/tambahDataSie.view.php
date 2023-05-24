<?php
require 'partials/head.php'; ?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <?php require 'partials/sidebar.php'; ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php require 'partials/topbar.php'; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    
                    <div class="card-body pl-4">
                        <div class="btn-data-sie mb-4">
                            <a href="halamanProker.php" class=" d-sm-inline-block btn btn-primary shadow-sm ">
                                <i class="fas fa-sm text-white-50"></i>Kembali
                            </a>
                        </div>

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
                                <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama lengkap">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">NIM</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan NIM">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">No. Telp</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan No. Telp">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Foto Diri</label>
                                <input type="file" class="form-control" id="exampleInputPassword1" placeholder=".jpg/.jpeg/.png/.webp">
                            </div>

                            <a href="tambahTugas.php" class=" d-sm-inline-block btn btn-success shadow-sm px-2 text-xs">
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

<?php
require 'partials/logout-modal.php';
require 'partials/core.php';
?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>

