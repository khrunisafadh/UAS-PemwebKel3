<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Hiburan</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style entertainment.css') }}">
</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <h2>Berita Hiburan</h2>
        <p>Berita terbaru tentang hiburan, kabar selebriti, dan sorotan dari seluruh dunia.</p>
    </section>

    <section class="main-content container2">
    <div class="grid-3">
        <div class="card animate">
            <img src="images/entertainment1.jpeg" alt="Entertainment 1">
            <h3>Eks Drummer My Chemical Romance Ditemukan Tewas Membusuk di Rumahnya</h3>
            <div class="meta-info">
                <p>Muhammad Rafi Zaydan | 2 Desember 2024</p>
            </div>
            <p>Pada hari Sabtu (30/11), dilaporkan Bob Bryar, mantan drummer My Chemical Romance, meninggal dunia di usia 44 tahun. Musisi tersebut ditemukan meninggal dunia di rumahnya di Tennessee, Amerika Serikat (AS).</p>
            <a href="/entertainment1" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/entertainment2.jpeg" alt="Entertainment 2">
            <h3>Viral Transformasi Dramatis Bintang 'Euphoria', Dulu Plus-size Kini Ramping</h3>
            <div class="meta-info">
                <p>Tim Redaksi | 2 Desember 2024</p>
            </div>
            <p>Bintang 'Euphoria' Barbie Ferreira jadi perbincangan karena perubahan drastis tubuhnya. Sempat dikenal dengan julukan 'sahabat gemuk', kini dia tampil ramping.</p>
            <a href="/entertainment2" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/entertainment3.jpeg" alt="Entertainment 3">
            <h3>Viral Tren We Listen We Don't Judge di TikTok, Apa Artinya?</h3>
            <div class="meta-info">
                <p>Tim Redaksi | 1 Desember 2024</p>
            </div>
            <p>Sebuah tren viral di TikTok dengan tagline 'We Listen We Don't Judge' telah menarik perhatian banyak pengguna, terutama di kalangan remaja dan dewasa. Tren ini berfokus pada pentingnya mendengarkan orang lain tanpa memberikan penilaian atau kritik.</p>
            <a href="/entertainment3" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/entertainment4.jpeg" alt="Entertainment 4">
            <h3>Karakter Gong Yoo di Drakor The Trunk Bikin Iba, Ini Pesan dari Sutradara</h3>
            <div class="meta-info">
                <p>Rindah Agustina | 1 Desember 2024</p>
            </div>
            <p>Drama Korea The Trunk yang dibintangi Gong Yoo dan Seo Hyun Jin tayang eksklusif hari ini, Jumat (29/11/2024) di Netflix. Berbeda dengan karakter yang dia perankan sebelumnya, Gong Yoo bergulat dengan rasa kesedihan dan kesepian. Sampai-sampai ketergantungan obat tidur.</p>
            <a href="/entertainment4" class="btn">Selengkapnya</a>
        </div>
        <div class="card animate">
            <img src="images/entertainment5.jpeg" alt="Entertainment 5">
            <h3>7 Drakor Terbaru Tayang Desember 2024, Ada Who Is She dan Squid Game 2</h3>
            <div class="meta-info">
                <p>Khoirunnisa Fadilah | 1 Desember 2024</p>
            </div>
            <p>Memasuki penghujung tahun 2024, ada sejumlah drama Korea terbaru bergenre komedi romantis, thriller, misteri, dan horor. Salah satu yang paling dinantikan tentu saja Squid Game 2. Setelah penantian selama tiga tahun, penggemar akan melihat upaya balas dendam Lee Jung Jae dalam permainan bertahan hidup yang mematikan.</p>
            <a href="/entertainment5" class="btn">Selengkapnya</a>
        </div>
    </div>
</section>


    <x-footer />
    <script src="js/animasi.js"></script>
</body>
</html>