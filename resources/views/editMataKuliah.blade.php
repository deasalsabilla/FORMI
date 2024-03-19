<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partAdmin/navbarAdmin')

    <form action="{{ route('mata-kuliah.update', $data->kode) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Menggunakan metode PUT untuk mengirimkan data update -->
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Mata Kuliah" value="{{ $data->nama }}">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <select class="form-select" name="semester" aria-label="Default select example">
                    <option value="">-- Pilih Semester --</option>
                    @foreach($opt as $item)
                    <option value="{{ $item->kode }}" {{ $item->kode == $data->semester ? 'selected' : '' }}>{{ $item->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda Yakin Ingin Mengubah Data?')">Submit</button>
        </div>
    </form>


    <!-- Bootstrap JavaScript with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>