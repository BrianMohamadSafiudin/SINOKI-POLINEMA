

<div class="table-responsive">
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
                        @if ($d->image_url)
                            <img class="img-profile rounded-circle" src="{{ $d->image_url }}" style="width: 50px; height: 50px; object-fit: cover;" alt="">
                        @else
                            <img class="img-profile rounded-circle" src="{{ asset('admin') }}/img/user.svg" style="width: 50px; height: 50px; object-fit: cover;" alt="">
                        @endif
                    </td>
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
</div>


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


