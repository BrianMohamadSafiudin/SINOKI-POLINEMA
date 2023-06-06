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
                        @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    {{-- foreach --}}
                    @foreach ($dataProker as $p)
                    @php $data = $p -> id @endphp
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <a href="{{ route('halamanProkerUser', ['data' => $data]) }}" style="text-decoration: none">
                                            <div class="text-l font-weight-bold text-gray-800 text-uppercase mb-1">{{ $p -> namaproker }}</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="col-auto">
                                                        <div class="fas fa-fw text-gray-800 fa-map-location-dot mb-3"></div>
                                                        <span class="text-gray-800">{{ $p -> tempat }}</span>
                                                    </div>
                                                </div>
                                                {{-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                             style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </a>
                                        {{-- <div class="text-l font-weight-bold text-gray-800 text-uppercase mb-1">{{ $p -> namaproker }}</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="fas fa-fw text-gray-800 fa-map-location-dot mb-3"></div>
                                                    <span class="text-gray-800">{{ $p -> tempat }}</span>
                                                </div>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <a href="{{ route('halamanProker', ['data' => $data]) }}" class=" d-sm-inline-block btn btn-primary">
                                                        <i class="text-md-center shadow-sm"></i>Pilih
                                                    </a>
                                                </div>
                                                <div class="col-auto>">
                                                <form method="post" action="{{ route('programkerja.destroy', $p->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger text-md-center shadow-sm ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                                </form>
                                            </div> --}}
                                       {{-- <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                        {{-- <div class="row">
                            <!-- Card 1-->
                            <div class="col-xl-3 col-md-6 mb-4 mx-2">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <a href="{{ route('halamanProkerUser') }}" style="text-decoration: none">
                                                    <div class="text-l font-weight-bold text-gray-800 text-uppercase mb-1">Safari Dakwah</div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-info" role="progressbar"
                                                                     style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                                     aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Card 2-->
                            <div class="col-xl-3 col-md-6 mb-4 mx-2">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-l font-weight-bold text-gray-800 text-uppercase mb-1">Sholawat Rutin</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">75%</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                 style="width: 75%" aria-valuenow="50" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div> --}}


                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->



</body>

</html>
