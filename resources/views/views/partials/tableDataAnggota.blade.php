

<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>NIM</th>
        <th>Prodi/Jurusan</th>
        <th>Email</th>
        <th>Foto Diri</th>
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
            <td>{{ $d->email }}</td>
            <td>{{ $d->image }}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>



