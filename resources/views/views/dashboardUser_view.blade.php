<!DOCTYPE html>
<html lang="en">

<body id="page-top">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                @if ( (auth()->user()->nim) == null || (auth()->user()->image) == null)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Silahkan lengkapi data anda di halaman profile user!</strong>
                    <button type="button" class="close" data-bs-dismiss="alert" >X</button>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.alert .close').on('click', function() {
                            $(this).closest('.alert').alert('close');
                        });
                    });
                </script>

                @endif
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
                    @php $hasData = false; @endphp

                @foreach ($dataProker as $p)
                    @if ($p->namaOki == auth()->user()->namaOki && $p->id != 0)
                        @php $data = $p->id @endphp
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="{{ route('halamanProkerUser', ['data' => $data]) }}" style="text-decoration: none">
                                                <div class="text-l font-weight-bold text-gray-800 text-uppercase mb-1">{{ $p->namaproker }}</div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="col-auto">
                                                            <div class="fas fa-fw text-gray-800 fa-map-location-dot mb-3"></div>
                                                            <span class="text-gray-800">{{ $p->tempat }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $hasData = true; @endphp
                    @endif
                @endforeach

                @if (!$hasData)
                <div class="card-body">
                    <div class="text-center">
                        <h5 class="font-weight-bold text-dark">Belum ada proker, silahkan ditunggu...</h5>
                    </div>


                </div>
                @endif

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->



</body>

</html>
