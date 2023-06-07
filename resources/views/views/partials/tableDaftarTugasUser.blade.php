

<table id="example" class="table table-striped" style="width:100%">
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <thead>
    @endif
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

    @php $i=1; @endphp
    @foreach ( $dataTugas as $tugas)
    <tr>
        <td> @php echo "$i"; $i++; @endphp </td>
        <td>{{ $tugas -> namatugas }}</td>
        <td>{{ $tugas -> sie }}</td>
        <td>{{ $tugas -> tenggatwaktu }}</td>
        <td>{{ $tugas -> status }}</td>
        <td>
            @if ($tugas -> status == 'Belum Selesai')
                <form method="post" action="{{ route('tugasproker.upload', $tugas -> id) }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    @method('PUT')
                        <div class="small font-italic text-muted mb-2">DOCS / PDF / PPT / EXCEL no larger than 3 MB</div>
                        <input type="file" name="file" id="formFileSm" class="none"><hr>
                        <button type="submit" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Upload Tugas </button>
                </form>
            @else
            <p>Tugas sudah diupload,</p><hr>
            <a href="{{ route('tugasproker.download', $tugas -> file) }}" class="btn btn-success text-md-center">Lihat File</a>
            @endif
        </td>
        <td>
            <textarea type="text" name="evaluasi" class="form-control form-control-alternative text-gray-900" id="validationTextarea" placeholder="Tidak ada evaluasi" readonly>{{ $tugas -> evaluasi }}</textarea>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>


