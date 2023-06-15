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
                        @foreach ($dataProker as $p)
                        @if ($p->id == $data )
                        <a href="{{ route('halamanProker', ['data' => $data]) }}" class="btn btn-danger btn-icon-split btn-sm mb-2">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left "></i>
                        </span>
                        <span class="text">Back</span>
                        </a>
                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4">{{ $p -> namaproker }}</h1>
                        <p class="mb-3 text-gray-600 font-weight-700 text-lg">{{ $p -> bidang }}</p>
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

                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Tambah Tugas Program Kerja</h5>

                        <div class="card-body">
                            <form method="post" action="{{ route('tugasprokers', ['data' => $data]) }}" enctype="multipart/form-data" autocomplete="off">
                                @csrf

                                    @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                <div class="mb-4 form-group{{ $errors->has('namatugas') ? ' has-danger' : '' }}">
                                    <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Tugas</label>
                                    <input type="text" name="namatugas" class="form-control form-control-alternative{{ $errors->has('namatugas') ? ' is-invalid' : '' }}" placeholder="Masukkan Nama Tugas" value="" id="input-namatugas" required/>
                                    @if ($errors->has('namatugas'))
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('namatugas') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-4 form-group{{ $errors->has('sie') ? ' has-danger' : '' }}">
                                    <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">SIE</label>
                                    <input type="text" name="sie" class="form-control form-control-alternative{{ $errors->has('sie') ? ' is-invalid' : '' }}" placeholder="Masukkan Nama Sie" value="" id="input-sie" required/>
                                    @if ($errors->has('sie'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sie') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-4 form-group{{ $errors->has('tenggatwaktu') ? ' has-danger' : '' }}">
                                    <label class="text-gray-900 font-weight-bold" for="tanggal">Tenggat Waktu</label>
                                    <input type="date" name="tenggatwaktu" class="form-control form-control-alternative{{ $errors->has('tenggatwaktu') ? ' is-invalid' : '' }}" placeholder="Masukkan Tenggat Waktu" value="" id="input-tenggatwaktu" required/>
                                    @if ($errors->has('tenggatwaktu'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tenggatwaktu') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                @php
                                    $data = request()->query('data');
                                @endphp
                                <div class="mb-4 form-group{{ $errors->has('idProker') ? ' has-danger' : '' }}">
                                    <input type="hidden" name="idProker" class="form-control form-control-alternative{{ $errors->has('idProker') ? ' is-invalid' : '' }}" placeholder="Masukkan Tenggat Waktu" value="{{ $data }}" id="input-tenggatwaktu" required/>
                                </div>

                                <div class="d-sm-inline-block btn btn-primary shadow-sm mt-2 mb-4">
                                    <button type="submit" style="
                                        background-color: transparent;
                                        border: none;
                                        color: inherit;
                                        cursor: pointer;">{{ __('Simpan Perubahan') }}</button>
                                </div>
                                {{-- <a href="halamanProker.php" class=" d-sm-inline-block btn btn-success shadow-sm ">
                                    <i class="fas fa-sm text-white-50"></i>Simpan Perubahan
                                </a> --}}

                            </form>
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
{{-- <div class="mb-3 form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
    <label class="small mb-1 form-control-label" for="input-name">{{ __('Nama Lengkap') }}</label>
    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder={{ __('Masukkan Nama Lengkap') }} value="{{ auth()->user()->name }}" required autofocus/>
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div> --}}
