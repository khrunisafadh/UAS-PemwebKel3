<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Seni</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style arts.css') }}">
</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <h2>Berita Seni</h2>
        <p>Berita terbaru mengenai pameran seni, tren kreatif, dan sorotan dari seluruh dunia.</p>
    </section>

    <section class="main-content container2">
    <div class="grid-3">
        <div class="card animate">
            <img src="images/art1.jpg" alt="Art 1">
            <h3>Indonesia Akan Terus Dorong Pencatatan Warisan Budaya ke UNESCO</h3>
            <div class="meta-info">
                <p>Tim Redaksi | 3 Desember 2024</p>
            </div>
            <p>Menteri Kebudayaan, Fadli Zon menyebut pihaknya akan terus berkomitmen mendorong pencatatan warisan budaya UNESCO. 
                Menurutnya, itu jadi salah satu dari empat tugas lembaga yang ia pimpin dalam memajukan kebudayaan.</p>
            <a href="/art1" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/art2.jpg" alt="Art 2">
            <h3>Aneka Rupa Pesona Keris Nusantara</h3>
            <div class="meta-info">
                <p>Rindah Agustina | 3 Desember 2024</p>
            </div>
            <p>Pameran Pesona Keris Nusantara merayakan momen penetapan keris Indonesia 
                jadi warisan budaya tak benda dunia oleh UNESCO pada 25 November 2024.</p>
            <a href="/art2" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/art3.jpg" alt="Art 3">
            <h3>TransVision Luncurkan Channel Jowo, Bisa Nonton Wayang-Cerita Rakyat</h3>
            <div class="meta-info">
                <p>Tim Redaksi | 2 Desember 2024</p>
            </div>
            <p>Transvision kini hadir dengan kanal khusus bernama Channel Jowo 
                melalui teknologi digital, baik TV maupun aplikasi OTT.</p>
            <a href="/art3" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/art4.jpg" alt="Art 4">
            <h3>Daftar Lengkap Nominasi Finalis Billboard Music Awards (BBMA) 2024</h3>
            <div class="meta-info">
                <p>Tim Redaksi | 2 Desember 2024</p>
            </div>
            <p>Daftar lengkap nominasi atau finalis dari Billboard Music Awards (BBMAs) 2024 
                resmi diumumkan pada Senin (25/11) malam waktu Indonesia.</p>
            <a href="/art4" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/art5.jpg" alt="Art 5">
            <h3>Review Film: Moana 2</h3>
            <div class="meta-info">
                <p>Muhammad Rafi Zaydan | 1 Desember 2024</p>
            </div>
            <p>Moana 2 menampilkan sederet usaha Disney untuk tetap bisa membuat penontonnya 
                terpukau dengan kisah magis dan musikal.</p>
            <a href="/art5" class="btn">Selengkapnya</a>
        </div>
    </div>
</section>


    <x-footer />
    <script src="js/animasi.js"></script>
</body>
</html>