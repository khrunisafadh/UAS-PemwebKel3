<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Nasional</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style national.css') }}">
</head>

<body>
    
    <x-nav-bar />

    <section class="hero">
        <h2><b>Berita Nasional</b></h2>
        <p>Jelajahi berita terbaru dan pembaruan dari seluruh Indonesia.</p>
    </section>
    
    <section class="main-content container2">
        <h1><b>Berita Terbaru</b></h1>
        <div class="grid-3">
            <div class="card animate">
                <img src="images/indo vs bahrain.jpeg" alt="World News Image">
                <h3>Jadwal lengkap timnas Indonesia melawan Bahrain malam ini</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>Pemain timnas Indonesia, Mees Hilgers (kiri) mengikuti sesi latihan hari kedua di Bahrain, Senin (7/10/2024) 
                    untuk melakoni laga ketiga putaran ketiga kualifikasi Piala Dunia 2026</p>
                <a href="/national1" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/koalisi dpr.jpg" alt="World News Image">
                <h3>Koalisi Paripurna dan Masa Depan Demokrasi Indonesia</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 2 Desember 2024</p>
                </div>
                <p>Koalisi Paripurna yang dibentuk menjelang Pemilu 2024 untuk memperkuat praktik demokrasi di Indonesia. 
                    Koalisi ini bertujuan menciptakan kesatuan di antara partai politik demi stabilitas politik dan implementasi kebijakan yang efektif.</p>
                <a href="/national2" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/10 okt.jpeg" alt="World News Image">
                <h3>Tanggal 10 Oktober Memperingati Apa? Ada Hari Kesehatan Mental Sedunia</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 2 Desember 2024</p>
                </div>
                <p>Pada tanggal 10 Oktober, diperingati sebagai Hari Kesehatan Mental Sedunia. Hari ini bertujuan untuk meningkatkan kesadaran tentang
                     pentingnya kesehatan mental serta memberikan dukungan kepada mereka yang mengalami masalah kesehatan mental. ​</p>
                <a href="/national3" class="btn">Selengkapnya</a>
            </div>
        </div>
    </section>

    <x-footer />
    
    <script src="js/animasi.js"></script>
</body>
</html>
