<!DOCTYPE html>
<html lang="en">
<body id="page-top">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-body pl-4">
                        @php
                            $data = request()->query('data');
                        @endphp
                        <a href="{{ route('halamanProker', ['data' => $data]) }}" class="btn btn-danger btn-icon-split btn-sm mb-2">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left "></i>
                            </span>
                            <span class="text">Back</span>
                        </a>
                        @foreach ($dataProker as $p)
                        @if ( $p->id == $data )
                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4">{{ $p -> namaproker }}</h1>
                        <p class="mb-3 text-gray-600 font-weight-700 text-lg">Bidang {{ $p -> bidang }}</p>
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
                        <hr class="content-divider">

                        <h5 class=" mb-3 text-gray-900 font-weight-bolder">Daftar Anggota Program Kerja</h5>
                        <div class="btn-tambah-tugas mb-5 mt-3">
                            <a href="{{ route('tambahDataSie', ['data' => $data]) }}" class=" d-sm-inline-block btn btn-success shadow-sm  btn-sm">
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

</body>
</html>
