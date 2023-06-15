<!DOCTYPE html>
<html lang="en">

<body id="page-top">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    
                    @php
                        $data = request()->query('data');
                    @endphp   
                    <div class="card-body pl-4">
                        <a href="{{ route('halamanDataSie', ['data' => $data]) }}" class="btn btn-danger btn-icon-split btn-sm mb-4">
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

                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Tambah Data User</h5>

                        <form method="post" action="{{ route('tambahdatasie.store', ['data' => $data]) }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                            @elseif (session('errors'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                             @endif
                            <div class="mb-4 form-group{{ $errors->has('nama') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama User</label>
                                <select class="form-select form-control" aria-label="Default select example" name="nama" onchange="removeSelectedOption(this)">
                                    <option value="" selected disabled>Silahkan Pilih Nama User</option>
                                    @foreach ($dataUser as $d)
                                    @php $optionAdded = false; @endphp
                                    @foreach ($dataProker as $proker)
                                    @if ($data == $proker->id)
                                        @if ($d->role == 'user' && $d->namaOki == $proker->namaOki && !$optionAdded)
                                            <option>{{ $d->name }}</option>
                                            @php $optionAdded = true; @endphp
                                        @endif
                                    @endif
                                    @endforeach
                                    @endforeach
                                </select>
                                @if ($errors->has('nama'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4 form-group{{ $errors->has('sie') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">SIE</label>
                                <input type="text" name="sie" class="form-control form-control-alternative{{ $errors->has('sie') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama SIE" value="" required>
                                @if ($errors->has('sie'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sie') }}</strong>
                                    </span>
                                @endif
                            </div>
                                @php
                                    $data = request()->query('data');
                                @endphp
                                <div class="mb-4 form-group{{ $errors->has('idProker') ? ' has-danger' : '' }}">
                                    <input type="hidden" name="idProker" class="form-control form-control-alternative{{ $errors->has('idProker') ? ' is-invalid' : '' }}" placeholder="Masukkan Tenggat Waktu" value="{{ $data }}" id="input-tenggatwaktu" required/>
                                </div>
                                <div class="mb-4 form-group{{ $errors->has('data') ? ' has-danger' : '' }}">
                                    <input type="hidden" name="data" class="form-control form-control-alternative{{ $errors->has('data') ? ' is-invalid' : '' }}" value="{{ $data }}" id="input-tenggatwaktu" required/>
                                </div>

                            <button type="submit" class=" d-sm-inline-block btn btn-primary shadow-sm ml-2 mt-2 mb-4">
                                <i class="fas fa-sm text-white-50"></i>Submit
                            </button>

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

