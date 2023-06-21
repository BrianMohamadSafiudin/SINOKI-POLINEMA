<!DOCTYPE html>
<html lang="en">
<body id="page-top">

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Card -->
    <div class="card shadow mb-4">
        <div class="card-body pl-4">
            <a href="{{ route('home_admin') }}" class="btn btn-danger btn-icon-split btn-sm mb-2">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Back</span>
            </a>
            @php
                $data = request()->query('data');
            @endphp
            @foreach ($dataProker as $p)

                @if ($p->id == $data)
                    <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4" style="font-size: 2rem">{{ $p->namaproker }}</h1>

                    <p class="mb-3 text-gray-600 font-weight-700 text-lg" style="font-size: 1.25rem">Bidang {{ $p->bidang }}</p>
                    <ul style="list-style: none" class="pl-0">
                        <li>
                            <i class='fas fa-fw fa-map-location-dot mb-3'></i>
                            <span>{{ $p->tempat }}</span>
                        </li>
                        <li>
                            <i class='fas fa-fw fa-calendar-days mb-2'></i>
                            <span>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $p->tanggalproker)->format('d-m-Y') }}</span>
                        </li>
                    </ul>
                @endif
            @endforeach

            <a href="{{ route('halamanEditProker', ['data' => $data]) }}"
               class="btn btn-warning btn-icon-split btn-sm shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-pen-to-square"></i>
            </span>
                <span class="text">Edit Program Kerja</span>
            </a>

            <br>
            <hr class="content-divider mt-4">
            <h5 class="text-gray-900 font-weight-bolder" style="font-size: 1.5rem">Daftar Tugas Program Kerja</h5>

            <a href="{{ route('tambahTugas', ['data' => $data]) }}"
               class="d-sm-inline-block btn btn-success btn-sm shadow-sm mt-2 mb-4">
                <i class="fas fa-sm text-white-50"></i>Tambah Tugas
            </a>
            <a href="{{ route('halamanDataSie', ['data' => $data]) }}"
               class="d-sm-inline-block btn btn-primary btn-sm shadow-sm ml-2 mt-2 mb-4">
                <i class="fas fa-sm text-white-50"></i>Data SIE
            </a>

            @include('views.partials.tableDaftarTugas')

        </div>
    </div>


</div>

</body>
</html>
