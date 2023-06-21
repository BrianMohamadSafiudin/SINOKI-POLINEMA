<body id="page-top">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Card -->
                <div class="card shadow mb-4">
                    <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                        <h6 class="m-0 font-weight-bold text-primary">Profile Anggota</h6>
                    </div>
                    <div class="card-body">
                        <div class="container-xl px-4 ">
                            <div class="row">
                                <div class="col-xl-4">
                                    <!-- Profile picture card-->
                                    <div class="card mb-4 mb-xl-0">
                                        <div class="card-header">Profile Picture</div>
                                        <div class="card-body text-center">
                                            <!-- Profile picture image-->
                                            @if (auth()->user()->image_url)
                                                <img class="img-account-profile rounded-circle mb-2" src="{{ auth()->user()->image_url }}" style="max-width: 128px" alt="" />
                                            @else
                                                <img class="img-account-profile rounded-circle mb-2" src="{{ asset('admin') }}/img/user.svg" style="max-width: 128px" alt="" />
                                                <div class="small font-italic text-muted mb-2">Silahkan Upload Foto Profil</div>
                                            @endif
                                            <!-- Profile picture upload button-->
                                            @php
                                                $iduser = auth()->user()->id
                                            @endphp
                                            @foreach ($dataAnggota as $d)
                                                @if ($d->id == $iduser)
                                                    <form method="post" action="{{ route('profileUserImage', $d->id) }}" enctype="multipart/form-data" autocomplete="off" >
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <div class="small font-italic text-muted mb-2">JPG or PNG no larger than 2 MB</div>
                                                            <input type="file" name="image" id="formFileSm" class="form-control form-control-sm" onchange="checkFileSelected(this)">
                                                            <small id="fileSizeWarning" class="text-danger mt-1" style="display: none;">Ukuran file tidak boleh melebihi 2 MB</small>
                                                        </div>
                                                        @if ($d->image == null)
                                                <div class="d-flex justify-content-center">
                                                        <button type="submit" id="ubahFotoButton" class="btn btn-primary text-md-center mr-1" disabled>{{ __('Tambah Foto Profil') }}</button>
                                                    @else
                                                    <div class="d-flex justify-content-center">
                                                        <button type="submit" id="ubahFotoButton" class="btn btn-primary text-md-center mr-1" disabled>{{ __('Ubah Foto Profil') }}</button>
                                                    <form id="deleteForm_{{ $d->id }}" method="post" action="{{ route('profile.deleteImage', $d->id) }}" onsubmit="return deleteConfirmation('{{ $d->id }}')">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="button" class="btn btn-danger text-md-center ml-1" onclick="deleteConfirmation('{{ $d->id }}')">Delete File</button>
                                                    </form>
                                                    @endif
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                                    </form>
                                    </div>


                                </div>
                                <div class="col-xl-8">
                                    <!-- Account details card-->
                                    <div class="card mb-4">
                                        <div class="card-header">Account Details</div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('profileUserUpdate') }}" enctype="multipart/form-data" autocomplete="off">
                                                @csrf
                                                @if (session('status'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('status') }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @endif

                                                <div class="mb-3 form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                                    <label class="small mb-1 form-control-label" for="input-name">{{ __('Nama Lengkap') }}</label>
                                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Masukkan Nama Lengkap Anda" value="{{ auth()->user()->name }}" autofocus/>
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="mb-3 form-group{{ $errors->has('nim') ? ' has-danger' : '' }}">
                                                    <label class="small mb-1 form-control-label" for="input-nim">{{ __('NIM') }}</label>
                                                    <input type="number" name="nim" id="input-nim" class="form-control form-control-alternative{{ $errors->has('nim') ? ' is-invalid' : '' }}" placeholder="Masukkan NIM Anda, ex: 2141720133" value="{{ auth()->user()->nim }}" />
                                                    @if ($errors->has('nim'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('nim') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <div class="mb-3 form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                                    <label class="small mb-1 form-control-label" for="input-email">Email</label>
                                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Masukkan email" value="{{ auth()->user()->email }}" />
                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>

                                                <!-- Form Row-->
                                                <div class="row gx-3 mb-3">

                                                    <div class="col-md-6 form-group{{ $errors->has('prodi') ? ' has-danger' : '' }}">
                                                        <label class="small mb-1 form-control-label" for="input-prodi">Prodi</label>
                                                        <input type="text" name="prodi" id="input-prodi" class="form-control form-control-alternative{{ $errors->has('prodi') ? ' is-invalid' : '' }}" placeholder="Masukkan Prodi, ex: DIV Teknik Informatika" value="{{ auth()->user()->prodi }}" />
                                                        @if ($errors->has('prodi'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('prodi') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                    <div class="col-md-6 form-group{{ $errors->has('jurusan') ? ' has-danger' : '' }}">
                                                        <label class="small mb-1 form-control-label" for="input-jurusan">Jurusan</label>
                                                        <input type="text" name="jurusan" id="input-jurusan" class="form-control form-control-alternative{{ $errors->has('jurusan') ? ' is-invalid' : '' }}" placeholder="Masukkan Jurusan, ex: Teknologi Informasi" value="{{ auth()->user()->jurusan }}" />
                                                        @if ($errors->has('jurusan'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('jurusan') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>

                                                </div>

                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1 form-control-label" for="inputPassword">{{ __('Password Baru? (Abaikan Jika Tidak)') }}</label>
                                                    <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan Password Baru" value="{{ null !== (old('password')) ? old('password') : '' }}" />
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1 form-control-label" for="inputConfirmPassword">{{ __('Confirm Password Baru (Abaikan Jika Tidak)') }}</label>
                                                    <input type="password" name="password" id="input-confirm-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan kembali password" value="{{ null !== (old('password')) ? old('password') : '' }}" />
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <div class="d-sm-inline-block btn btn-primary shadow-sm mt-2 mb-4">
                                                <button type="submit" style="
                                                    background-color: transparent;
                                                    border: none;
                                                    color: inherit;
                                                    cursor: pointer;">{{ __('Simpan Perubahan') }}</button>
                                            </div>
                                            <a href="{{ route('home') }}" class=" d-sm-inline-block btn btn-danger shadow-sm ml-2 mt-2 mb-4">
                                                <i class="fas fa-sm text-white-50"></i>Back
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


    <!-- /.container-fluid -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function checkFileSelected(input) {
        const button = document.getElementById('ubahFotoButton');
        const fileSizeWarning = document.getElementById('fileSizeWarning');
        if (input.files && input.files[0]) {
            const fileSize = input.files[0].size;
            const maxSize = 2 * 1024 * 1024; // 2 MB
            if (fileSize > maxSize) {
                button.disabled = true;
                fileSizeWarning.style.display = 'block';
                Swal.fire(
                    'File Terlalu Besar',
                    'Ukuran file tidak boleh melebihi 2 MB',
                    'error'
                );
            } else {
                button.disabled = false;
                fileSizeWarning.style.display = 'none';
            }
        } else {
            button.disabled = true;
            fileSizeWarning.style.display = 'none';
        }
    }
    function deleteConfirmation(id) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus foto profil ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm_' + id).submit();
            }
        });
    }

</script>

                </div>
            </div>
