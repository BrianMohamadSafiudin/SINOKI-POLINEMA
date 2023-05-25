<!DOCTYPE html>
<html lang="en">

<body id="page-top">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Card -->
            <div class="card shadow mb-4">
                <div class="card-header d-sm-flex align-items-center justify-content-between mb-4">
                    <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>

                </div>

                <div class="card-body">
                    @include('views.partials.tableDataAnggota')
                </div>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</body>

</html>
