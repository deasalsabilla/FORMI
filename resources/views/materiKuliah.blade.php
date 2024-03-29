<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <style>
    /* Hapus simbol titik list */
    .card-body ul {
      list-style: none;
      padding: 0;
    }

    /* Gaya Sidebar seperti dokumentasi Bootstrap */
    .sidebar {
      background-color: #f8f9fa;
      padding: 20px;
      border-right: 1px solid #dfe3e8;
    }

    .sidebar h3 {
      color: #007bff;
    }

    .sidebar ul {
      padding: 0;
      margin: 0;
      list-style: none;
    }

    .sidebar li a {
      color: #495057;
      text-decoration: none;
      padding: 8px 0;
      display: block;
      padding-left: 20px;
    }

    .sidebar li a:hover {
      color: white;
      border-radius: 20px;
      background-color: grey;
    }

    /* Konten Postingan */
    .post-content {
      padding: 20px;
    }

    .card-footer {
      border-top: 1px solid #dfe3e8;
    }

    .post {
      position: fixed;
      right: 30px;
      bottom: 30px;
      display: flex;
      width: 115px;
      height: 45px;
      align-items: center;
      justify-content: center;
      transition: 0.5s;
      z-index: 99;
    }
  </style>
  <title>Forum | Materi Kuliah</title>
</head>

<body>

  @include('partials.navbar')

  <div class="container mt-5">
    <div class="row">

      @include('partials.sidebarMK')

      <div class="col-md-8">
        <!-- Postingan -->
        <div class="card post-content">
          <div class="card-body">
            <h5 class="card-title">Judul Postingan</h5>
            <p class="card-text">
              Isi postingan akan ditampilkan di sini. Anda dapat menulis
              paragraf atau informasi lainnya. Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. Cumque, repellat.
            </p>
            <a href="/post-details" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
          <div class="card-footer text-muted">
            Diposting pada: 23 Februari 2024
          </div>
        </div>
        <div class="card mt-3 post-content">
          <div class="card-body">
            <h5 class="card-title">Judul Postingan</h5>
            <p class="card-text">
              Isi postingan akan ditampilkan di sini. Anda dapat menulis
              paragraf atau informasi lainnya. Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. Cumque, repellat.
            </p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
          <div class="card-footer text-muted">
            Diposting pada: 23 Februari 2024
          </div>
        </div>
        <div class="card mt-3 post-content">
          <div class="card-body">
            <h5 class="card-title">Judul Postingan</h5>
            <p class="card-text">
              Isi postingan akan ditampilkan di sini. Anda dapat menulis
              paragraf atau informasi lainnya. Lorem ipsum dolor sit amet,
              consectetur adipisicing elit. Cumque, repellat.
            </p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
          <div class="card-footer text-muted">
            Diposting pada: 23 Februari 2024
          </div>
        </div>
      </div>
    </div>
    @include('partials.pagination')

    @include('partials.footer')

    @include('user.buatPosting')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>