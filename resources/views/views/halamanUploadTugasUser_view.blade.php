<!DOCTYPE html>
<html lang="en">

<body id="page-top">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="m-0 font-weight-bold text-primary">Data Program Kerja</h6>
                    </div>
                    <div class="card-body">
                    <div class="card shadow mb-4">
                    <div class="card-body pl-4">
                        <a href="{{ route('halamanProkerUser') }}" class="btn btn-danger btn-icon-split btn-sm mb-4">
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


                        <hr class="content-divider mt-4">
                        <h5 class="text-gray-900 font-weight-bolder">Membuat Materi Dakwah</h5>
                        <p class="mb-3 text-gray-900 font-weight-700 text-lg">23 Mei 2023</p>
                        <p class="mb-3 text-gray-900 font-weight-700 text-lg">Upload Tugas</p>

                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose File</label>
                        </div>
                        </div>
                        <a href="#" class=" d-sm-inline-block btn btn-primary shadow-sm ">
                                <i class="fas fa-sm text-white-50"></i>Submit
                            </a>
                            <a href="#" class=" d-sm-inline-block btn btn-danger shadow-sm ml-2">
                                <i class="fas fa-sm text-white-50"></i>Cancel
                            </a>
                            <h5 class="text-gray-900 font-weight-bolder mt-3">Hasil Evaluasi</h5>
                            <textarea class="form-control mt-3" id="validationTextarea" placeholder="Kerja Bagus" disabled></textarea>




                            
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
