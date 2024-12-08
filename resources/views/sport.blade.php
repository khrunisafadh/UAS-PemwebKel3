<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Olahraga</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style sports.css') }}">
</head>

<body>
    
    <x-nav-bar />

    <section class="hero">
        <h2>Berita Olahraga</h2>
        <p>Pembaruan terbaru tentang acara olahraga, skor, dan sorotan dari seluruh dunia.</p>
    </section>

    <section class="main-content container2">
        <div class="grid-3">
            <div class="card animate">
                <img src="images/sports1.png" alt="Olahraga 1">
                <h3>Hasil Arctic Open 2024: Kalahkan China, Gregoria ke Perempat Final</h3>
                <div class="meta-info">
                    <p>Khoirunnisa Fadilah | 3 Desember 2024</p>
                </div>
                <p>Gregoria Mariska Tunjung mengatasi perlawanan Zhang Yi Man pada babak 16 besar Arctic 
                    Open 2024 yang berlangsung di Vantaan Energia Arena, Vantaa, Finlandia, Kamis (10/10).</p>
                <a href="/sport1" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/sports2.png" alt="Olahraga 2">
                <h3>Yenny Wahid: Emas Olimpiade Dongkrak Animo Panjat Tebing</h3>
                <div class="meta-info">
                    <p>Rindah Agustina | 3 Desember 2024</p>
                </div>
                <p>Ketua Umum Federasi Panjat Tebing Indonesia (FPTI) Yenny Wahid mengatakan keberhasilan Veddriq 
                    Leonardo raih medali emas Olimpiade Paris 2024 turut meningkatkan animo panjat tebing di Tanah Air.</p>
                <a href="sport2.html" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/sports3.png" alt="Olahraga 3">
                <h3>Danny Green Pensiun di Usia 37 Tahun</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 2 Desember 2024</p>
                </div>
                <p>Danny Green undur diri dari dunia basket profesional. Juara NBA tiga kali 
                    itu memutuskan pensiun melalui siniarnya pada Kamis (10/10) waktu setempat.</p>
                <a href="/sport3" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/sports4.png" alt="Olahraga 4">
                <h3>Netizen Indonesia Mengadu ke FIFA soal Wasit Bahrain vs Indonesia</h3>
                <div class="meta-info">
                    <p>Muhammad Rafi Zaydan | 2 Desember 2024</p>
                </div>
                <p>Pertandingan matchday ketiga babak ketiga Grup C Kualifikasi Piala Dunia 2026 antara timnas Bahrain vs Indonesia 
                    memicu kemarahan suporter Indonesia yang mengadu ke FIFA terkait kepemimpinan wasit Ahmed Al Kaf.</p>
                <a href="/sport4" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/sports5.png" alt="Olahraga 5">
                <h3>Park Hang-seo Merapat ke Timnas Malaysia?</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 1 Desember 2024</p>
                </div>
                <p>Timnas Malaysia masih mencari pelatih baru setelah Kim Pan-gon mundur. Nama kandidat 
                    terbaru muncul, yaitu Park Hang-seo yang merupakan eks pelatih Timnas Vietnam.</p>
                <a href="/sport5" class="btn">Selengkapnya</a>
            </div>
        </div>
    </section>

    <x-footer />
    <script src="js/animasi.js"></script>
</body>

</html>
