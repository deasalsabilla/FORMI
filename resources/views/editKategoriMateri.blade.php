<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kategori Materi | Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partAdmin.navbarAdmin')
    <div class="container mt-4">
        <!-- Edit Kategori Materi Form -->
        <div id="editKategoriMateriForm">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Kategori Materi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('kategori-materi.update', $data->kode) }}" method="POST" enctype="multipart/form-data">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Kategori" value="{{ $data->nama }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- Bootstrap JavaScript with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>