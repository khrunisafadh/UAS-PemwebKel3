<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Korban Tewas Serangan Israel</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style home1.css') }}">
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
                <h2>Korban Tewas Serangan Israel di Gaza Tembus 42.126 Orang<br><br></h2>
                <p>Kementerian Kesehatan mengatakan 42.126 orang tewas dalam perang antara Israel dengan militan Palestina, Hamas di Jalur Gaza, per Jumat (11/10). 
                    Dilansir dari AFP, jumlah korban tersebut termasuk 61 kematian dalam 24 jam terakhir. Sementara 98.117 orang terluka di Jalur Gaza sejak perang dimulai pada 7 Oktober 2023. 
                    Pasukan Israel masih menggempur wilayah Gaza setelah setahun agresi militer Zionis tersebut. Baru-baru ini Israel mengancam akan membunuh tenaga kesehatan (nakes) dan pasien di rumah sakit di Gaza 
                    jika mereka tidak segera meninggalkan wilayah Gaza utara.<br><br>
                
                    Salah satu relawan MER-C Indonesia yang saat ini masih berada di Gaza, Fikri Rofiul Haq melaporkan bahwa Israel hanya memberikan waktu 24 jam kepada seluruh nakes dan pasien yang ada di rumah sakit di Gaza utara, 
                    termasuk Rumah Sakit Indonesia (RSI) di sana untuk segera mengevakuasi diri. Di sisi lain, sekitar 130 tentara Israel menuntut pemerintahan Perdana Menteri Benjamin Netanyahu menyepakati gencatan senjata di Jalur Gaza Palestina 
                    melalui sebuah petisi surat.<br><br>

                    Dalam petisi itu, 130 tentara termasuk dari pasukan cadangan dan wajib militer Israel dari berbagai unit menyatakan penolakan bertugas di militer kecuali pemerintah berkomitmen untuk gencatan senjata di Jalur Gaza dan memastikan 
                    pembebasan para sandera yang ditahan Hamas.<br><br>

                    Dalam petisi itu, 130 tentara termasuk dari pasukan cadangan dan wajib militer Israel dari berbagai unit menyatakan penolakan bertugas di militer kecuali pemerintah berkomitmen untuk gencatan senjata di Jalur Gaza dan memastikan 
                    pembebasan para sandera yang ditahan Hamas.<br><br>
                    Sejauh ini, perundingan gencatan senjata dengan Hamas 
                    juga belum menemukan titik terang. Israel bahkan melancarkan agresi terbarunya 
                    ke Lebanon dan melancarkan invasi darat dengan dalih memerangi milisi Hizbullah.<br><br></p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/home2.png" alt="Berita 2" width="50" height="50">
                <a href="/home2">Ranking FIFA Indonesia Usai 'Dirampok' Wasit, Posisi Bahrain Nyungsep</a>
            </div>
            <div class="related-item">
                <img src="images/home3.png" alt="Berita 3" width="50" height="50">
                <a href="/home3">Jokowi Naikkan Tunjangan PNS Kementerian ESDM 10 Hari Jelang Lengser</a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>
</html>
