

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
        <th>Nama Anggota</th>
        <th>SIE</th>
        <th>Aksi</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @php
            $data = request()->query('data');
            $int = 1
        @endphp
        @foreach ($dataAnggota as $d)
        @if ($d->role === 'user')
        <tr>
            <td>{{ $int++ }}</td>
            <td>{{ $d->name }}</td>
            <td>{{ $d->sie }}</td>
            <td>
                <a href="{{ route('editDataSie', ['int' => $int, 'data' => $data]) }}" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Edit Data SIE</a>
            </td>
            <td>
                <form method="post" action="{{ route('datasie.destroy', $d->id) }}" enctype="multipart/form-data" autocomplete="off" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <input type="text" name="sie" id="input-sie" style="display: none;" value="" />
                    <button type="submit" class="btn btn-danger text-md-center">Delete Data SIE</button>
                </form>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>

