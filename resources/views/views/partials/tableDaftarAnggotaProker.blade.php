

<table id="example" class="table table-striped" style="width:100%">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Anggota</th>
        <th>SIE</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @php
            $int = 1
        @endphp
        @foreach ($dataAnggota as $d)
        @if ($d->role === 'user')
        <tr>
            <td>{{ $int++ }}</td>
            <td>{{ $d->name }}</td>
            <td>Sie Acara</td>
            <td>
                <a href="{{ route('editDataSie') }}" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Edit Data</a>
                <a href="#" class="btn btn-danger text-md-center"><i class="fas text-white-50 "></i>Delete Data</a>
            </td>
        </tr>
        @endif
        @endforeach
    <tr>
        <td>1.</td>
        <td>Tri Jagad Ariyani</td>
        <td>Sie Acara</td>
        <td>
            <a href="{{ route('editDataSie') }}" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Edit Data</a>
            <a href="#" class="btn btn-danger text-md-center"><i class="fas text-white-50 "></i>Delete Data</a>
        </td>
    </tr>

    <tr>
        <td>2.</td>
        <td>Fadlila Afida</td>
        <td>Sie Kesektariatan</td>
        <td>
            <a href="editDataSie.php" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Edit Data</a>
            <a href="#" class="btn btn-danger text-md-center"><i class="fas text-white-50 "></i>Delete Data</a>
        </td>
    </tr>

    <tr>
        <td>3.</td>
        <td>Febryan Firmansyah</td>
        <td>Sie PDD</td>
        <td>
            <a href="editDataSie.php" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Edit Data</a>
            <a href="#" class="btn btn-danger text-md-center"><i class="fas text-white-50 "></i>Delete Data</a>
        </td>
    </tr>

    <tr>
        <td>4.</td>
        <td>Brian Safiudin</td>
        <td>Sie PDD</td>
        <td>
            <a href="editDataSie.php" class="btn btn-info text-md-center"><i class="fas text-white-50 "></i>Edit Data</a>
            <a href="#" class="btn btn-danger text-md-center"><i class="fas text-white-50 "></i>Delete Data</a>
        </td>
    </tr>

    </tbody>
</table>

