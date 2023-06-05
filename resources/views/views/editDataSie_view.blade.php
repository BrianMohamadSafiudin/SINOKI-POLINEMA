<!DOCTYPE html>
<html lang="en">
<body id="page-top">
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                <div class="card-body pl-4">
                    <a href="{{ route('halamanDataSie') }}" class="btn btn-danger btn-icon-split btn-sm mb-2">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left "></i>
                        </span>
                        <span class="text">Back</span>
                    </a>
                        <h1 class="h3 mb-2 text-gray-900 font-weight-bolder mt-4"><?= $judulProker?></h1>
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
                        <hr class="content-divider">
                        <h5 class=" mb-2 text-gray-900 font-weight-bolder">Edit Data Sie User</h5>
                        @php
                            $int = request()->query('int');
                        @endphp
                        @foreach ($dataAnggota as $d)
                        @if ($d->id == $int )

                        <form method="post" action="{{ route('datasies.update', $d -> id = $int ) }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @method('PUT')
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif

                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label class="text-gray-900 font-weight-bold " for="exampleInputEmail1 ">Nama Anggota</label>
                                    <input type="text" name="name" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anggota" value="{{ $d -> name }}" readonly>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="text-gray-900 font-weight-bold" for="exampleInputPassword1">SIE</label>
                                    <input type="text" name="sie" class="form-control" id="exampleInputPassword1" placeholder="Masukkan nama Sie" value="{{ $d -> sie }}">
                                </div>

                                <button type="submit" href="halamanDataSie.php" class=" d-sm-inline-block btn btn-success shadow-sm ">
                                    <i class="fas fa-sm text-white-50"></i>Simpan Perubahan
                                </a>
                            </div>
                        </form>

                        @endif
                        @endforeach
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</body>
</html>

