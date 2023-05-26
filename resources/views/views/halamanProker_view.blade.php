<!DOCTYPE html>
<html lang="en">
<body id="page-top">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-body pl-4">
                        <a href="{{route('home_admin')}}" class="btn btn-danger btn-icon-split btn-sm mb-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left "></i>
                            </span>
                            <span class="text">Back</span>
                        </a>
                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4">{{$judulPlaceholder}}</h1>

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
                        <a href="{{ route('halamanEditProker') }}" class="btn btn-warning btn-icon-split btn-sm shadow-sm">
                            <span class="icon text-white-50">
                                <i class="fas fa-pen-to-square "></i>
                            </span>
                            <span class="text">Edit Program Kerja</span>
                        </a>

                        <br>
                        <hr class="content-divider mt-4">
                        <h5 class="text-gray-900 font-weight-bolder">Daftar Tugas Program Kerja</h5>

                        <a href="{{ route('tambahTugas') }}" class=" d-sm-inline-block btn btn-success btn-sm shadow-sm mt-2 mb-4 ">
                            <i class="fas fa-sm text-white-50"></i>Tambah Tugas
                        </a>
                        <a href="{{ route('halamanDataSie') }}" class=" d-sm-inline-block btn btn-primary btn-sm shadow-sm ml-2 mt-2 mb-4">
                            <i class="fas fa-sm text-white-50"></i>Data SIE
                        </a>
                        @include('views.partials.tableDaftarTugas')

                    </div>
                </div>

            </div>



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

