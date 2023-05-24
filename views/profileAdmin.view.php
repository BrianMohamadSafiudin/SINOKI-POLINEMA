<?php
require 'partials/head.php'; ?>
<body id="page-top">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="m-0 font-weight-bold text-primary">Profile Admin</h6>
                    </div>
                    <div class="card-body">
                        <div class="container-xl px-4 ">
                            <div class="row">
                                <div class="col-xl-4">
                                    <!-- Profile picture card-->
                                    <div class="card mb-4 mb-xl-0">
                                        <div class="card-header">Profile Picture</div>
                                        <div class="card-body text-center">
                                            <!-- Profile picture image-->
                                            <img class="img-account-profile rounded-circle mb-2" src="img/sholu.jpg" style="max-width: 128px" alt="" />
                                            <!-- Profile picture upload button-->
                                            <div class="mb-3">
                                                <div class="small font-italic text-muted mb-2">JPG or PNG no larger than 5 MB</div>
                                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <!-- Account details card-->
                                    <div class="card mb-4">
                                        <div class="card-header">Account Details</div>
                                        <div class="card-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputNamaLengkap">Nama Lengkap</label>
                                                    <input class="form-control" id="inputNamaLengkap" type="text" placeholder="Masukkan Nama Lengkap" value="Muhammad Bintang Sholu Firmansyah" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputUsername">Username</label>
                                                    <input class="form-control" id="inputUsername" type="text" placeholder="Masukkan username" value="Bintang Sholu" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputNim">NIM</label>
                                                    <input class="form-control" id="inputNim" type="text" placeholder="Masukkan NIM" value="2141720101" />
                                                </div>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputEmail">Email</label>
                                                    <input class="form-control" id="inputEmail" type="email" placeholder="Masukkan email" value="sholu@gmail.com" />
                                                </div>
                                                <!-- Form Row-->
                                                <div class="row gx-3 mb-3">
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputProdi">Prodi</label>
                                                        <input class="form-control" id="inputProdi" type="text" placeholder="Masukkan Prodi" value="DIV Teknik Informatika" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputJurusan">Jurusan</label>
                                                        <input class="form-control" id="inputJurusan" type="text" placeholder="Masukkan Jurusan" value="Teknologi Informasi" />
                                                    </div>
                                                </div>

                                                <!-- Form Row-->
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Masukkan Password" value="sholu" />
                                                    </div>
                                                    <!-- Form Group (last name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control" id="inputConfirmPassword" type="password" placeholder="Masukkan Confirm password" value="sholu" />
                                                    </div>
                                                </div>

                                                <!-- Save changes button-->
                                                <a href="dashboardAdmin.php" class=" d-sm-inline-block btn btn-primary shadow-sm mt-2 mb-4 ">
                                                    <i class="fas fa-sm text-white-50"></i>Save Changes
                                                </a>
                                                <a href="dahsboardAdmin.php" class=" d-sm-inline-block btn btn-danger shadow-sm ml-2 mt-2 mb-4">
                                                    <i class="fas fa-sm text-white-50"></i>Cancel
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


