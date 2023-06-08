

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
        <td>{{ $tugas -> tenggatwaktu }}</td>
        <td>{{ $tugas -> status }}</td>

        <td>
            @if ($tugas -> status == 'Belum Selesai')
            <p>Belum ada</p>
            @else
            <p>File uploaded</p><hr>
            <a href="{{ route('tugasproker.download', $tugas -> file) }}" class="btn btn-success text-md-center">Lihat File</a>
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
            <p>Hapus</p><hr>
            <form method="post" action="{{ route('tugasproker.destroy', $tugas->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger text-md-center" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>

    </tr>
    @endif
    @endforeach
    </tbody>
</table>


