

<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>NIM</th>
        <th>Prodi/Jurusan</th>
        <th>SIE</th>
        <th>Email</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @php
            $int = 1;
        @endphp

        @foreach ($dataAnggota as $d)
        @if ($d->role === 'user')
        <tr>
            <td>{{ $int++ }}</td>
            <td>{{ $d->name }}</td>
            <td>{{ $d->nim }}</td>
            <td>{{ $d->prodi }}/{{ $d->jurusan }}</td>
            <td>{{ $d->sie }}</td>
            <td>{{ $d->email }}</td>
            <td>
                <img class="img-profile rounded-circle" src="{{ $d->image_url }}" style="max-width: 50px" alt="">
            </td>
            <td>
                <form method="post" action="{{ route('dataAnggota.destroy', $d->id) }}">
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



