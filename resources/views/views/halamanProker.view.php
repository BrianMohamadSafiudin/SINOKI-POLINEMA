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

<!-- <<<<<<< frontend-febryan -->
                    <div class="btn-kembali mb-4">
                            <a href="dashboard.php" class=" d-sm-inline-block btn btn-danger shadow-sm">
                                <i class="fas fa-sm text-white-50"></i>Kembali
                            </a>
                        </div>
                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4"><?= $judulProker?></h1>

<!-- <<<<<<< frontend-fadlila -->
                        <!-- <a href="dashboardAdmin.php" class="btn btn-danger btn-icon-split btn-sm mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left "></i>
                            </span>
                            <span class="text">Back</span>
                        </a> -->
<!-- >>>>>>> frontend -->

<!-- >>>>>>> frontend -->

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

<!-- <<<<<<< frontend-febryan/fadlila -->
                        <a href="editProker.php" class="btn btn-warning btn-icon-split btn-sm shadow-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-pen-to-square "></i>
                            </span>
                            <span class="text">Edit Program Kerja</span>
                        </a>

                        <br>
                        <hr class="content-divider mt-4">
                        <h5 class="text-gray-900 font-weight-bolder">Daftar Tugas Program Kerja</h5>

                            <a href="tambahTugas.php" class=" d-sm-inline-block btn btn-success btn-sm shadow-sm mt-2 mb-4 ">
                                <i class="fas fa-sm text-white-50"></i>Tambah Tugas
                            </a>
                            <a href="halamanDataSie.php" class=" d-sm-inline-block btn btn-primary btn-sm shadow-sm ml-2 mt-2 mb-4">
                                <i class="fas fa-sm text-white-50"></i>Data SIE
                            </a>
<!-- >>>>>>> frontend -->

                        <?php require 'partials/tableDaftarTugas.php'; ?>
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
