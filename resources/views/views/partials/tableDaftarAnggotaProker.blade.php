

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
        <th>Nama Anggota</th>
        <th>SIE</th>
        <th>Aksi</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        @php
            $data = request()->query('data');
            $no = 1;
        @endphp
        @foreach ($anggotaProker as $d)
        @if ($d->idProker == $data)
        @php
            $int = $d->id;
        @endphp
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->sie }}</td>
            <td class="d-flex">
                <a href="{{ route('editDataSie', ['int' => $int, 'data' => $data]) }}" class="btn btn-info text-md-center mr-2">
                    <i class="fas text-white-50 "></i>Edit Data SIE
                </a>
                <form id="deleteForm_{{ $d->id }}" method="post" action="{{ route('datasie.destroy', $d->id) }}" enctype="multipart/form-data" autocomplete="off" onsubmit="event.preventDefault(); deleteConfirmation('{{ $d->id }}')">
                    @csrf
                    @method('DELETE')
                    <input type="text" name="sie" id="input-sie" style="display: none;" value="" />
                    <button type="submit" class="btn btn-danger text-md-center">Delete Data SIE</button>
                </form>
            </td>
{{--            <td>--}}
{{--                <form id="deleteForm_{{ $d->id }}" method="post" action="{{ route('datasie.destroy', $d->id) }}" enctype="multipart/form-data" autocomplete="off" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                    <input type="text" name="sie" id="input-sie" style="display: none;" value="" />--}}
{{--                    <button type="submit" class="btn btn-danger text-md-center">Delete Data SIE</button>--}}
{{--                </form>--}}
{{--            </td>--}}

            <td>

            </td>

        </tr>
        @endif
        @endforeach
    </tbody>
</table>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function deleteConfirmation(id) {
        swal({
            title: "Konfirmasi",
            text: "Apakah Anda yakin ingin menghapus data ini?",
            icon: "warning",
            buttons: {
                cancel: {
                    text: "Batal",
                    value: null,
                    visible: true,
                    className: "btn-secondary",
                    closeModal: true,
                },
                confirm: {
                    text: "Hapus",
                    value: true,
                    visible: true,
                    className: "btn-danger",
                    closeModal: false,
                }
            },
            dangerMode: true,
        }).then(function (isConfirm) {
            if (isConfirm) {
                document.getElementById("deleteForm_" + id).submit();
            } else {
                swal({
                    title: "Batal",
                    text: "Data tidak jadi dihapus.",
                    icon: "info",
                    button: "OK",
                }).then(function () {
                    document.getElementById("deleteForm_" + id).reset();
                });
            }
        });
    }
</script>









