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
                        <a href="{{ route('halamanProker', ['data' => $data]) }}" class="btn btn-danger btn-icon-split btn-sm mb-4">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left "></i>
                            </span>
                            <span class="text">Back</span>
                        </a>
                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Edit Program Kerja</h5>

                        @foreach ($programkerja as $d)
                        @if ($d->id == $data )
                        <hr class="content-divider">
                        <form method="post" action="{{ route('programkerja.update', [$d -> id = $data, 'data' => $data] ) }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <div class="mb-4 form-group{{ $errors->has('namaproker') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Program Kerja</label>
                                <input type="text" name="namaproker" class="form-control form-control-alternative{{ $errors->has('namaproker') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama program kerja" value="{{ $d -> namaproker }}" required>
                                @if ($errors->has('namaproker'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('namaproker') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4 form-group{{ $errors->has('bidang') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Nama Bidang</label>
                                <input type="text" name="bidang" class="form-control form-control-alternative{{ $errors->has('bidang') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan nama bidang" value="{{ $d -> bidang }}" required>
                                @if ($errors->has('bidang'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('bidang') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="mb-4 form-group{{ $errors->has('tempat') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tempat Program Kerja</label>
                                <input type="text" name="tempat" class="form-control form-control-alternative{{ $errors->has('tempat') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan tempat program kerja" value="{{ $d -> tempat }}" required>
                                @if ($errors->has('tempat'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tempat') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="mb-4 form-group{{ $errors->has('tanggalproker') ? ' has-danger' : '' }}">
                                <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">Tanggal Program Kerja</label>
                                <input type="date" name="tanggalproker" class="form-control form-control-alternative{{ $errors->has('tanggalproker') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Masukkan tanggal program kerja" value="{{ $d -> tanggalproker }}">
                                @if ($errors->has('tanggalproker'))
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('tanggalproker') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class=" d-sm-inline-block btn btn-success shadow-sm px-2 text-xs">
                                <i class="fas text-white-50 "></i>Simpan Perubahan
                            </button>

                        </form>
                        @endif
                        @endforeach
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
