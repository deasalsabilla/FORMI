<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

<body>
    <div class="container mt-5">
        <!-- Tombol Back -->
        <div class="col-12">
            <a href="/" class="btn btn-outline-primary" onclick="history.back()">Back</a>
        </div>
        <div class="row">
            <!-- Bagian Tengah (Judul) -->
            <div class="col-md-12 text-center mb-4">
                <h2>Profil Mahasiswa</h2>
            </div>

            <!-- Bagian Kiri (Foto dan Tombol Edit) -->
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="img/profil.jpg" class="img-fluid rounded-circle mb-3" alt="Foto Mahasiswa" style="max-width: 300px;">
                    <button class="btn btn-primary" id="editProfilBtn">Edit Profil</button>
                    <button class="btn btn-secondary" id="editFotoBtn" data-bs-toggle="modal" data-bs-target="#uploadModal">Edit Foto</button>
                </div>
            </div>

            <!-- Bagian Kanan (Biodata Mahasiswa) -->
            <div class="col-lg-8">
                <form id="biodataForm">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" placeholder="NIM Mahasiswa" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="Jurusan Mahasiswa" readonly>
                    </div>

                    <!-- Tombol Simpan (Hanya muncul saat tombol Edit Profil diklik) -->
                    <button type="submit" class="btn btn-primary" id="simpanBtn" style="display: none;">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Foto -->
    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadModalLabel">Edit Foto Mahasiswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Upload Foto -->
                    <form>
                        <div class="mb-3">
                            <label for="uploadFoto" class="form-label">Pilih Foto</label>
                            <input type="file" class="form-control" id="uploadFoto">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Menggunakan JavaScript untuk mengelola interaksi tombol
        document.getElementById('editProfilBtn').addEventListener('click', function() {
            document.getElementById('nama').readOnly = false;
            document.getElementById('nim').readOnly = false;
            document.getElementById('jurusan').readOnly = false;
            document.getElementById('simpanBtn').style.display = 'block';
        });

        // Implementasi Edit Foto belum ditambahkan pada contoh ini
    </script>
</body>

</html>