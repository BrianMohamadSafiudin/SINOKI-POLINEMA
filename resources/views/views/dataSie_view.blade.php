<!DOCTYPE html>
<html lang="en">
<body id="page-top">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-body pl-4">
                        <a href="{{ route('halamanProker') }}" class="btn btn-danger btn-icon-split btn-sm mb-2">
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

                        <h5 class=" mb-3 text-gray-900 font-weight-bolder">Daftar Anggota Program Kerja</h5>
                        <div class="btn-tambah-tugas mb-5 mt-3">
                            <a href="{{ route('tambahDataSie') }}" class=" d-sm-inline-block btn btn-success shadow-sm  btn-sm">
                                <i class="fas text-white-50 "></i>Tambah Anggota
                            </a>
                        </div>
                        @include('views.partials.tableDaftarAnggotaProker')
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