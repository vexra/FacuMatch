<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FacuMatch</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1 class="logo">FacuMatch</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('recommendation') }}">Rekomendasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Karosel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://febis.upnjatim.ac.id/media/k2/items/cache/e2acd849d365015ef08ef5b696dc9e31_XL.jpg" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://assets-a1.kompasiana.com/items/album/2016/02/04/3000-56b32b2491fdfda70a28e1eb.jpg" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://fk.unair.ac.id/wp-content/uploads/2022/12/kunjungan-mahasiswa-ISMP-1.jpeg" class="d-block w-100" alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="https://beritakalteng.com/wp-content/uploads/2021/02/IMG-20210219-WA0019.jpg" class="d-block w-100" alt="Slide 4">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-5">
        <main>
            <h2 class="text-center">Selamat Datang di FacuMatch!</h2>
            <p class="text-center">
                FacuMatch adalah aplikasi inovatif yang dirancang khusus untuk membantu siswa dalam menentukan pilihan fakultas terbaik 
                yang sesuai dengan minat, bakat, dan kepribadian mereka. Aplikasi ini menggunakan teknologi terkini, seperti algoritma 
                pembelajaran mesin, untuk memberikan rekomendasi yang akurat dan dipersonalisasi. Dengan FacuMatch, Anda dapat menjelajahi 
                berbagai pilihan fakultas, memahami lebih baik bidang studi yang relevan, dan mendapatkan gambaran yang jelas tentang 
                prospek karir di masa depan. Kami berkomitmen untuk menjadi mitra dalam perjalanan pendidikan Anda dan membantu Anda 
                mengambil keputusan terbaik demi masa depan yang gemilang.
            </p>
        </main>
    </div>

    <!-- Informasi Fakultas -->
    <div class="container my-5">
        <h3 class="text-center">Daftar Fakultas</h3>
        <div class="row my-4 align-items-center">
            <div class="col-md-6">
                <img src="https://fk.unair.ac.id/wp-content/uploads/2022/12/kunjungan-mahasiswa-ISMP-1.jpeg" class="img-fluid" alt="Fakultas Kedokteran">
            </div>
            <div class="col-md-6">
                <h4>Fakultas Kedokteran</h4>
                <p>Fakultas yang mempersiapkan Anda untuk menjadi profesional di bidang kesehatan dengan pengetahuan dan keterampilan medis yang mendalam.</p>
            </div>
        </div>
        <div class="row my-4 align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://beritakalteng.com/wp-content/uploads/2021/02/IMG-20210219-WA0019.jpg" class="img-fluid" alt="Fakultas Teknik">
            </div>
            <div class="col-md-6 order-md-1">
                <h4>Fakultas Teknik</h4>
                <p>Fakultas yang menawarkan berbagai program teknik untuk membekali Anda dengan keterampilan dalam desain, analisis, dan pengembangan teknologi.</p>
            </div>
        </div>
        <div class="row my-4 align-items-center">
            <div class="col-md-6">
                <img src="https://febis.upnjatim.ac.id/media/k2/items/cache/e2acd849d365015ef08ef5b696dc9e31_XL.jpg" class="img-fluid" alt="Fakultas Ekonomi">
            </div>
            <div class="col-md-6">
                <h4>Fakultas Ekonomi</h4>
                <p>Fakultas yang menyediakan pendidikan di bidang ekonomi dan bisnis untuk menghasilkan profesional yang kompeten dalam manajemen, akuntansi, dan kewirausahaan.</p>
            </div>
        </div>
        <div class="row my-4 align-items-center">
            <div class="col-md-6 order-md-2">
                <img src="https://assets-a1.kompasiana.com/items/album/2016/02/04/3000-56b32b2491fdfda70a28e1eb.jpg" class="img-fluid" alt="Fakultas Hukum">
            </div>
            <div class="col-md-6 order-md-1">
                <h4>Fakultas Hukum</h4>
                <p>Fakultas yang membekali Anda dengan pengetahuan hukum dan keterampilan analitis untuk berkarir di bidang hukum dan keadilan.</p>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            © 2024 FacuMatch. All rights reserved.
            <br>
            <a href="#" class="text-dark">Kebijakan Privasi</a> | <a href="#" class="text-dark">Syarat dan Ketentuan</a>
        </div>
    </footer>

    <!-- Bootstrap JS dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
