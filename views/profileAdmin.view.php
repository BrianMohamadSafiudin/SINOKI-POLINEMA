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
                    <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="m-0 font-weight-bold text-primary">Profile Admin</h6>
                    </div>
                    <div class="card-body">

                        <div class="tab-pane" id="settings">

                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <div class="text-center mb-3 ">
                                        <img class="profile-user-img img-fluid " src="img/sholu.jpg" alt="User profile picture" style="max-width: 100px;">
                                    </div>
                                    <label for="inputName" class="col-sm-2 col-form-label">Foto Profil</label>
                                    <div class="col-sm-10">
                                        <div class="input-group">

                                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name" value="Bintang Sholu">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="admin@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName2" placeholder="Name" value="********">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputName2" placeholder="Name" value="********">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-sm-10">
                                        <button type="submit" class="btn btn-success text-light">
                                            <a href="dashboardAdmin.php" class="text-decoration-none text-light">Submit</a>
                                        </button>
                                    </div>
                                </div>
                            </form>
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

</body>


