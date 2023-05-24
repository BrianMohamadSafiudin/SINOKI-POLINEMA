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
                
                        <hr class="content-divider">

                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Edit Program Kerja</h5>

                        <form>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Program Kerja</label>
                                <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Program Kerja" value="Safari Dakwah">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Nama Bidang</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan SIE" value="Syari">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tempat Program Kerja</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tenggat waktu" value="Kelurahan Jatimulyo">
                            </div>
                            <div class="form-group mb-4">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tanggal Program Kerja</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Tenggat waktu" value="22-03-2023">
                            </div>
                            <a href="tambahTugas.php" class=" d-sm-inline-block btn btn-success shadow-sm px-2 text-xs">
                                <i class="fas text-white-50 "></i>Simpan Perubahan
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

