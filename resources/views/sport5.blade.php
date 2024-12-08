<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Park Hang-seo Merapat ke Timnas Malaysia</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style sport5.css') }}">
</head>
<body>
<x-nav-bar />

    <section class="card">
        <div class="hero">
        </div>
    </section>

    <main class="news-layout">
        <!-- Konten berita utama -->
        <section class="main-article">
            <article>
                <h2>Park Hang-seo Merapat ke Timnas Malaysia?<br><br></h2>
                <p>Timnas Malaysia masih mencari baru setelah Kim Pan-gon mundur. Nama kandidat terbaru muncul Park Hang-seo yang merupakan eks pelatih Timnas Vietnam.
                    Pertengahan Juli kemarin, Kim Pan-gon mundur dari kursi pelatih Timnas Malaysia. Diyakini, ada 'alasan pribadi' di balik mundurnya juru taktik asal Korea Selatan tersebut.
                    <br><br>
                    Sementara ini, kursi pelatih Timnas Malaysia diduduki Pau Marti Vicente. Pria asal Spanyol itu dikontrak sementara sampai ajang Piala AFF di akhir tahun 2024 ini.
                    <br><br>
                    Dilansir dari New Straits Times, Malaysia masih mencari calon pelatih baru. Kini muncul nama, Park Hang-Seo!
                    <br><br>
                    Park Hang-seo masih menganggur setelah berpisah dengan Timnas Vietnam pada 31 Januari 2023. Park selanjutnya menjabat sebagai Dewan Penasihat di klub Vietnam, Bac Ninh pada 18 Januari 2024 sampai 31 Januari 2029.
                    <br><br>
                    Park sudah punya nama di panggung sepakbola ASEAN. Park pernah bawa Timnas Vietnam raih titel Piala AFF dan dua kali menangi SEA Games bersama timnas U-22 dan U-23. Park turut pernah bawa Vietnam menembus ronde ketiga Kualifikasi Piala Dunia 2022.
                    <br><br>
                    Sejauh ini, Timnas India turut meminati jasa Park Hang-seo. Asosiasi sepakbola Malaysia (FAM) masih belum memberikan update terbaru dan mengklaim kalau Juli kemarin mereka sempat mengontak Park.
                    <br><br>
                    FAM disebut-sebut menawarkan gaji besar, yakni 200.000 Ringgit Malaysia atau setara Rp 729 juta rupiah per bulan buat pelatih baru. Angka itu adalah dua kali lipat dari yang diterima Kim Pan-gon.
                    <br><br>
                    Jumlah tersebut hampir sama dengan rekor gaji yang diterima Park setelah ia memperbarui kontraknya dengan Vietnam pada bulan November 2019.
                 </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/sports1.png" alt="Sports 1" width="50" height="50">
                <a href="/sport1">Hasil Arctic Open 2024: Kalahkan China, Gregoria ke Perempat Final</a>
            </div>
            <div class="related-item">
                <img src="images/sports2.png" alt="Sports 2" width="50" height="50">
                <a href="/sport2">Yenny Wahid: Emas Olimpiade Dongkrak Animo Panjat Tebing</a>
            </div>
            <div class="related-item">
                <img src="images/sports3.png" alt="Sports 3" width="50" height="50">
                <a href="/sport3">Danny Green Pensiun di Usia 37 Tahun</a>
            </div>
            <div class="related-item">
                <img src="images/sports4.png" alt="Sports 5" width="50" height="50">
                <a href="/sport4">Netizen Indonesia Mengadu ke FIFA soal Wasit Bahrain vs Indonesia </a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>
</html>