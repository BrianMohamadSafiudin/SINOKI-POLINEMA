

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
        <a href="{{ route('halamanUploadTugasUser') }}" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Upload Tugas</a>
        </td>
        <td>
            <textarea type="text" name="evaluasi" class="form-control form-control-alternative text-gray-900" id="validationTextarea" placeholder="Tidak ada evaluasi" readonly>{{ $tugas -> evaluasi }}</textarea>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>


