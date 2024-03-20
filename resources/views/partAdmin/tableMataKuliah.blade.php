<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container mt-4">

        <!-- Form Toggle Button -->
        <div class="row g-2 mb-3">
            <div class="col-12">
                <div class="d-block bg-white rounded shadow p-3">
                    <h2>Tambah Mata Kuliah</h2>
                    <button type="button" class="btn btn-block btn-primary" onclick="toggleForm()">Tambah</button>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Tambah Berita Form -->
        <div id="tambahBeritaForm" style="display: none;">
            <div class="card card-primary mb-3">
                <div class="card-header">
                    <h3 class="card-title">Tambah Mata Kuliah</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <!-- form start -->


                <form action="{{ route('mata-kuliah.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Mata Kuliah">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-select" id="semester" name="semester" aria-label="Default select example">
                                <option value="">-- Pilih Semester --</option>
                                @foreach($opt as $item)
                                <option value="{{ $item->kode }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" id="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data?')">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>



        <!-- DataTable with Card Shadow -->
        <div class="card shadow">
            <div class="card-body">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Semester</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($data)
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $item->kode }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>
                                <!-- Tombol edit -->
                                <a href="{{ route('mata-kuliah.edit', $item->kode) }}" class="btn btn-warning">Edit</a>

                                <!-- Form hapus -->
                                <form action="{{ route('mata-kuliah.destroy', $item->kode) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endisset
                    </tbody>
                    <!-- ... (bagian-bagian lain dari tabel) ... -->

                </table>

            </div>
        </div>

    </div>

    <!-- Bootstrap JS (optional, if you want to use Bootstrap JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <!-- Custom Script -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

        function toggleForm() {
            var form = document.getElementById("tambahBeritaForm");
            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>
    <!-- Bootstrap JS (optional, if you want to use Bootstrap JavaScript features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>