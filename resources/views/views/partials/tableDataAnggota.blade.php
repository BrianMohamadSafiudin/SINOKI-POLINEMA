

<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>NIM</th>
        <th>Prodi/Jurusan</th>
        <th>OKI</th>
        <th>Email</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @php
            $int = 1;
        @endphp
    <form action="{{ route('search') }}" method="GET" class="d-flex" role="search">
        <div class="input-group justify-content-end mb-3">
            <input type="search" name="query" class="rounded align-content-end mx-2" placeholder="  Search...." aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-primary" style="border-width: 2px; font-weight: 800"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </form>
        @foreach ($dataAnggota as $d)
        @if ($d->role === 'user')
        <tr>
            <td>{{ $int++ }}</td>
            <td>{{ $d->name }}</td>
            <td>{{ $d->nim }}</td>
            <td>{{ $d->prodi }}/{{ $d->jurusan }}</td>
            <td>{{ $d->namaOki }}</td>
            <td>{{ $d->email }}</td>
            <td>
                <img class="img-profile rounded-circle" src="{{ $d->image_url }}" style="max-width: 50px" alt="">
            </td>
{{--            <td>--}}
{{--                <form method="post" action="{{ route('dataAnggota.destroy', $d->id) }}">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <button type="submit" class="btn btn-danger text-md-center" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>--}}
{{--                </form>--}}
{{--            </td>--}}
            <td>
                <form id="deleteForm_{{ $d->id }}" method="post" action="{{ route('dataAnggota.destroy', $d->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger text-md-center" onclick="deleteConfirmation('{{ $d->id }}')">Delete</button>
                </form>
            </td>

        </tr>
        @endif
        @endforeach
    </tbody>
</table>

<script>
    function deleteConfirmation(formId) {
        Swal.fire({
            title: 'Apakah Anda yakin ingin menghapus anggota ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Lanjutkan dengan penghapusan data
                document.getElementById('deleteForm_' + formId).submit();
            }
        });
    }
</script>



