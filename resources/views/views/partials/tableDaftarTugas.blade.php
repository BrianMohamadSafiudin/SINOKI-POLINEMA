

<table id="example" class="table table-striped" style="width:100%">
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
    @foreach ( $dataTugas as $tugas )
    <tr>
        <td>{{ $tugas -> id }}</td>
        <td>{{ $tugas -> namatugas }}</td>
        <td>{{ $tugas -> sie }}</td>
        <td>{{ $tugas -> tenggatwaktu }}</td>
        <td>{{ $tugas -> status }}</td>
        <td>
            <a href="#" class="btn btn-success text-md-center"><i class="fas text-white-50 "></i>Lihat file</a>
        </td>
        <td>
            <textarea class="form-control" id="validationTextarea" placeholder="Tulis evaluasi">{{ $tugas -> evaluasi }}</textarea>
            <a href="#" class="btn btn-info text-xs mt-2"><i class="fas text-white-50 "></i>Kirim evaluasi</a>
        </td>

    </tr>
    @endforeach
    </tbody>
</table>


