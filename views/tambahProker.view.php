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
                    <div class="card-header d-sm-flex align-items-center justify-content-between mb-2">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data Program Kerja</h6>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Program Kerja</label>
                                <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama program kerja">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Nama Bidang</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama bidang">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tempat Program Kerja</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan tempat program kerja">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tanggal Program Kerja</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukkan tanggal program kerja">
                            </div>

                            <a href="dashboardAdmin.php" class=" d-sm-inline-block btn btn-primary shadow-sm ">
                                <i class="fas fa-sm text-white-50"></i>Save
                            </a>
                            <a href="dashboardAdmin.php" class=" d-sm-inline-block btn btn-danger shadow-sm ml-2">
                                <i class="fas fa-sm text-white-50"></i>Cancel
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

</body>

