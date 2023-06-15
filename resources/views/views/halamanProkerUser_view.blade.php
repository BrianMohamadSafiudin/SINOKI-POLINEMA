<!DOCTYPE html>
<html lang="en">
<body id="page-top">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-body pl-4">
                        <a href="{{ route('home') }}" class="btn btn-danger btn-icon-split btn-sm mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left "></i>
                            </span>
                            <span class="text">Back</span>
                        </a>
                        @php
                            $data = request()->query('data');
                        @endphp
                        @foreach ($dataProker as $p)
                        @if ( $p->id == $data )

                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder">{{ $p -> namaproker }}</h1>
                        <p class="mb-3 text-gray-600 font-weight-700 text-lg">Bidang {{ $p -> bidang }}</p>
                        @foreach ($dataSie as $sie)
                        @if ($sie -> nama == auth()->user()->name AND $data == $sie -> idProker)
                        <p class="mb-3 text-gray-600 font-weight-700 text-lg">{{ $sie -> sie }}</p>
                        @endif
                        @endforeach
                        <ul style="list-style: none" class="pl-0">
                            <li>
                                <i class='fas fa-fw fa-map-location-dot mb-3'></i>
                                <span>{{ $p -> tempat }}</span>
                            </li>
                            <li>
                                <i class='fas fa-fw fa-calendar-days mb-2'></i>
                                <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $p->tanggalproker)->format('d-m-Y') }}</span>
                            </li>
                        </ul>
                        @endif
                        @endforeach

                        <hr class="content-divider mt-4">
                        <h5 class="text-gray-900 font-weight-bolder">Daftar Tugas Program Kerja</h5>

                        @include('views.partials.tableDaftarTugasUser')
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
