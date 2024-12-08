<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Gaya Hidup</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style lifestyles.css') }}">
</head>

<body>

    <x-nav-bar />

    <section class="hero">
        <h2>Berita Gaya Hidup</h2>
        <p>Isu terbaru seputar tren gaya hidup, tips seru, dan sorotan dari berbagai penjuru dunia.</p>
    </section>

    <section class="main-content container2">
        <div class="grid-3">
            <div class="card animate">
                <img src="images/lifestyle1.png" alt="Lifestyles 1">
                <h3>Kulit Kepala Berminyak Rambut Kering? Ini Tips Perawatan yang Tepat</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>Meski aneh, tapi kulit kepala berminyak dan batang rambut sampai 
                    ujung terasa kering memang banyak terjadi. Kondisi ini memerlukan perawatan yang tepat.</p>
                <a href="/lifestyle1" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/lifestyle2.png" alt="Lifestyles 2">
                <h3>Cara Bikin Kue Rambutan, Kue Natal yang Ramai di Medsos</h3>
                <div class="meta-info">
                    <p>Muhammad Rafi Zaydan | 3 Desember 2024</p>
                </div>
                <p>Pernahkah Anda mendengar soal kue rambutan? 
                    Kue berbentuk bulat yang dikelilingi cokelat meses ini sering jadi incaran anak-anak saat Hari Raya Natal.</p>
                <a href="/lifestyle2" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/lifestyle3.png" alt="Lifestyles 3">
                <h3>5 Penyebab Nasi Cepat Kuning di Rice Cooker</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 2 Desember 2024</p>
                </div>
                <p>Menyimpan nasi di rice cooker membuatnya tetap hangat. 
                    Namun ada penyebab nasi cepat kuning di rice cooker sehingga perlu dilakukan langkah pencegahan</p>
                <a href="/lifestyle3" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/lifestyle4.png" alt="Lifestyles 4">
                <h3>10 Kota Wisata di Dunia dengan Internet Paling Kencang</h3>
                <div class="meta-info">
                    <p>Rindah Agustina | 2 Desember 2024</p>
                </div>
                <p>Pengalaman wisatawan memperoleh kecepatan internet yang kencang di sebuah destinasi wisata 
                    bisa memengaruhi kepuasan mereka selama dalam kunjungan.</p>
                <a href="/lifestyle4" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/lifestyle5.png" alt="Lifestyles 5">
                <h3>Australia Bikin Larangan, Ini Dampak jika Anak-Anak Gunakan Medsos</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 2 Desember 2024</p>
                </div>
                <p>Australia belum lama ini memberlakukan aturan anak di bawah 16 tahun menggunakan media sosial (medsos). 
                    Psikolog anak dan keluarga Mira Amir berpendapat hal ini juga perlu diberlakukan di Indonesia.</p>
                <a href="/lifestyle5" class="btn">Selengkapnya</a>
            </div>
        </div>
    </section>

    <x-footer />
    <script src="js/animasi.js"></script>
</body>
</html>