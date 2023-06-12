<!DOCTYPE html>
<html lang="en">

<body id="page-top">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-header d-sm-flex align-items-center justify-content-between mb-2">
                        <h6 class="m-0 font-weight-bold text-primary">Form Data Program Kerja</h6>
                    </div>
                    <div class="card-body">

                        <form method="post" action="{{ route('programkerjas') }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="mb-4 form-group{{ $errors->has('namaproker') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Program Kerja</label>
                                <input type="text" name="namaproker" class="form-control form-control-alternative{{ $errors->has('namaproker') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama program kerja" value="" required>
                                @if ($errors->has('namaproker'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('namaproker') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4 form-group{{ $errors->has('bidang') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Nama Bidang</label>
                                <input type="text" name="bidang" class="form-control form-control-alternative{{ $errors->has('bidang') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan nama bidang" value="" required>
                                @if ($errors->has('bidang'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bidang') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4 form-group{{ $errors->has('tempat') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tempat Program Kerja</label>
                                <input type="text" name="tempat" class="form-control form-control-alternative{{ $errors->has('tempat') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan tempat program kerja" value="" required>
                                @if ($errors->has('tempat'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4 form-group{{ $errors->has('tanggalproker') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tanggal Program Kerja</label>
                                <input type="date" name="tanggalproker" class="form-control form-control-alternative{{ $errors->has('tanggalproker') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan tanggal program kerja" value="" required>
                                @if ($errors->has('tanggalproker'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tanggalproker') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="mb-4 form-group{{ $errors->has('namaOki') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">OKI</label>
                                <select class="form-select form-control" aria-label="Default select example" name="namaOki">
                                    <option value="" selected disabled>Silahkan Pilih Nama Oki</option>
                                    @foreach ($dataOki as $d)
                                    <option>{{ $d->nama }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" name="namaOki" class="form-control form-control-alternative{{ $errors->has('namaOki') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan nama OKI" value="" required>
                                @if ($errors->has('namaOki'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('namaOki') }}</strong>
                                    </span>
                                @endif --}}
                            </div>

                            <button type="submit" class=" d-sm-inline-block btn btn-primary shadow-sm ml-2 mt-2 mb-4">
                                <i class="fas fa-sm text-white-50"></i>Submit
                            </button>

                            <a href="{{ route('home_admin') }}" class=" d-sm-inline-block btn btn-danger shadow-sm ml-2 mt-2 mb-4">
                                <i class="fas fa-sm text-white-50"></i>Cancel
                            </a>

                        </form>
                    </div>
                </div>


    </div>
    <!-- /.container-fluid -->

<!-- End of Main Content -->

</body>
</html>
