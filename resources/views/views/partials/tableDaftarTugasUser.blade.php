

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
                            <form id="uploadForm_{{ $tugas->id }}" method="post"
                                  action="{{ route('tugasproker.upload', $tugas->id) }}" enctype="multipart/form-data"
                                  autocomplete="off" onsubmit="return uploadConfirmation('{{ $tugas->id }}')">
                                @csrf
                                @method('PUT')
                                <div class="small font-italic text-muted mb-2">DOCS / PDF / PPT / EXCEL no larger than 3
                                    MB</div>
                                <input type="file" name="file" id="formFileSm_{{ $tugas->id }}"
                                       class="none" onchange="checkFileSize(this)"><hr>
                                <button type="submit" class="btn btn-info text-md-center"
                                        id="uploadButton_{{ $tugas->id }}" disabled><i class="fas text-white-50"></i>Upload
                                    Tugas</button>
                            </form>
                        @else
                            <p>Tugas sudah diupload,</p><hr>
                            <a href="{{ route('tugasproker.download', $tugas->file) }}"
                               class="btn btn-success text-md-center" target="_blank">Lihat File</a>
                        @endif
                    </td>
                    <td>
                        <textarea type="text" name="evaluasi" class="form-control form-control-alternative text-gray-900" id="validationTextarea" placeholder="Tidak ada evaluasi" readonly>{{ $tugas -> evaluasi }}</textarea>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>



<script>
    function checkFileSize(input) {
        const fileSize = input.files[0].size;
        const maxSize = 3 * 1024 * 1024; // 3MB
        const tugasId = input.id.split("_")[1];

        if (fileSize > maxSize) {
            Swal.fire('Peringatan', 'File yang Anda upload melebihi 3 MB', 'warning');
            input.value = null; // Menghapus file yang dipilih
            document.getElementById('uploadButton_' + tugasId).disabled = true;
        } else {
            document.getElementById('uploadButton_' + tugasId).disabled = false;
        }
    }

    function uploadConfirmation(id) {

        Swal.fire(
            'Berhasil', 'File berhasil diunggah', 'success'
        );
    }
</script>

