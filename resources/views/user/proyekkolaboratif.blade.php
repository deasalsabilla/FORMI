<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyek Kolaboratif</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
    @include('partials.navbar')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <h3>Proyek Kolaboratif</h3>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="changeContent('Pengabdian Masyarakat')">Pengabdian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="changeContent('Lomba')">Lomba</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="changeContent('Individu')">Individu</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Konten Utama -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" id="mainTitle">Proyek Kolaboratif</h1>
                </div>

                <!-- Isi Konten Proyek Kolaboratif -->
                <div class="container" id="mainContent">
                    <!-- Konten akan diubah secara dinamis oleh JavaScript -->
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Fungsi untuk menampilkan konten awal
        function loadDefaultContent() {
            document.getElementById('mainTitle').innerHTML = 'Proyek Kolaboratif';

            const content = document.getElementById('mainContent');
            content.innerHTML = '';

            // Ganti dengan konten awal sesuai kebutuhan, contoh card
            const card1 = createCard('Judul Card 1', 'Isi konten card 1');
            const card2 = createCard('Judul Card 2', 'Isi konten card 2');
            const card3 = createCard('Judul Card 3', 'Isi konten card 3');

            content.appendChild(card1);
            content.appendChild(card2);
            content.appendChild(card3);
        }

        // Fungsi untuk membuat elemen card
        function createCard(title, content) {
            const card = document.createElement('div');
            card.className = 'card';
            card.innerHTML = `
            <div class="card-body">
                <h5 class="card-title">${title}</h5>
                <p class="card-text">${content}</p>
            </div>
        `;
            return card;
        }

        // Fungsi untuk mengubah konten sesuai dengan menu yang dipilih
        function changeContent(title) {
            document.getElementById('mainTitle').innerHTML = title;

            const content = document.getElementById('mainContent');
            content.innerHTML = '';

            // Ganti dengan konten sesuai kebutuhan, contoh card
            const card1 = createCard('Judul Card 1', 'Isi konten card 1');
            const card2 = createCard('Judul Card 2', 'Isi konten card 2');
            const card3 = createCard('Judul Card 3', 'Isi konten card 3');

            content.appendChild(card1);
            content.appendChild(card2);
            content.appendChild(card3);
        }

        // Memanggil fungsi untuk menampilkan konten awal saat halaman dimuat
        window.onload = loadDefaultContent;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>