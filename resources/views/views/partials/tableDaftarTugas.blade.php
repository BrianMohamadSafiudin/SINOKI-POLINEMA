

<div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Tugas</th>
            <th>SIE</th>
            <th>Tenggat Waktu</th>
            <th>Status</th>
            <th>Pengumpulan</th>
            <th>Evaluasi</th>
            <th>Hapus Tugas</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1;
      $data = request()->query('data'); @endphp
        @foreach ( $dataTugas as $tugas)
            @if ($tugas -> idProker == $data)
                <tr>
                    <td> @php echo "$i"; $i++; @endphp </td>
                    <td>{{ $tugas -> namatugas }}</td>
                    <td>{{ $tugas -> sie }}</td>
                    <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $tugas->tenggatwaktu)->format('d-m-Y') }}</td>
                    <td>{{ $tugas -> status }}</td>
                    <td>
                        @if ($tugas->status == 'Belum Selesai')
                            <p>Belum ada</p>
                        @else
                            <p>File uploaded</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('tugasproker.download', $tugas->file) }}" class="btn btn-success text-sm-center btn-sm mr-1" style="font-size: 9pt; font-weight: 600;" target="_blank">Lihat File</a>
                                <form id="deleteForm_{{ $tugas->id }}" method="post" action="{{ route('tugasproker.deleteFile', $tugas->id) }}" onsubmit="return deleteConfirmation('{{ $tugas->id }}')">
                                    @csrf
                                    @method('PUT')
                                    <button type="button" class="btn btn-danger text-sm-center btn-sm ml-1" style="font-size: 9pt; font-weight: 600;" onclick="deleteConfirmation('{{ $tugas->id }}')">Delete File</button>
                                </form>
                            </div>
                        @endif
                    </td>
                    <td>
                        <form method="post" action="{{ route('tugasproker.update', $tugas->id) }}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            @method('PUT')
                            <textarea type="text" name="evaluasi" class="form-control form-control-alternative text-gray-900" id="validationTextarea" placeholder="Tulis evaluasi" value="">{{ $tugas -> evaluasi }}</textarea>
                            <button type="submit" class="btn btn-info text-xs mt-2">Kirim evaluasi</button>
                        </form>
                    </td>
                    <td>
                        <form id="deleteForm_{{ $tugas->id }}" method="post" action="{{ route('tugasproker.destroy', $tugas->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger text-md-center" onclick="deleteConfirmation('{{ $tugas->id }}')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>


<script>
    function deleteConfirmation(id) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus data tugas ini?',
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

    function deleteFileConfirmation(id) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus file ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lakukan penghapusan file melalui AJAX atau mengirimkan form untuk penghapusan file

                // Contoh menggunakan AJAX dengan library Axios
                axios.delete('/file/' + id)
                    .then(response => {
                        if (response.data.success) {
                            Swal.fire('Berhasil', 'File berhasil dihapus', 'success').then(() => {
                                // Jika ingin melakukan pengalihan halaman setelah penghapusan file berhasil
                                // window.location.href = 'halaman-berhasil-dihapus';

                                // Jika ingin me-refresh halaman saat penghapusan file berhasil
                                location.reload();
                            });
                        } else {
                            Swal.fire('Gagal', 'Terjadi kesalahan saat menghapus file', 'error');
                        }
                    })
                    .catch(error => {
                        Swal.fire('Gagal', 'Terjadi kesalahan saat menghapus file', 'error');
                        console.error(error);
                    });
            }
        });
    }

</script>





