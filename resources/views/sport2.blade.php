<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Emas Olimpiade</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style sport2.css') }}">
</head>
<body>
    <x-nav-bar />

    <section class="card">
        <div class="hero"></div>
    </section>

    <main class="news-layout">
        <!-- Konten berita utama -->
        <section class="main-article">
            <article>
                <h2>Yenny Wahid: Emas Olimpiade Dongkrak Animo Panjat Tebing</h2>
                <p>
                    Ketua Umum Federasi Panjat Tebing Indonesia (FPTI) Yenny Wahid mengatakan keberhasilan Veddriq Leonardo raih medali emas Olimpiade Paris 2024 turut meningkatkan animo panjat tebing di Tanah Air.
                    <br><br>
                    Tim Panjat Tebing Indonesia mampu membawa pulang medali emas dari Olimpiade Paris 2024 lewat Veddriq Leonardo.
                    <br><br>
                    "Perkembangan cabor panjat tebing sangat luar biasa dimotivasi oleh kemenangan Veddriq di Olimpiade Paris kemarin dan kemudian juga yang kita sangat bergembira, bersyukur adalah dari kalangan masyarakat umum ada animo yang meningkat luas," kata Yenny usai pembukaan turnamen panjat tebing Panglima TNI Cup di Gelora Bung Karno, Jakarta, Rabu (9/10).
                    <br><br>
                    Ia mengatakan, saat ini banyak orangtua yang mendaftarkan anak untuk bergabung dengan klub panjat tebing. Selain itu, kejuaraan kelompok umur juga banyak digelar.
                    <br><br>
                    "Orang-orang tua juga banyak mendaftarkan anak-anaknya untuk ikut klub. Kita melihat banyak sekali kejuaraan-kejuaraan kelompok umur, Youth Championship itu ramai sekali di banyak klub. Banyak klub-klub berdiri di Indonesia," ujarnya.
                    <br><br>
                    Yenny menjelaskan dalam beberapa tahun ke depan, banyak turnamen internasional yang digelar.
                    <br><br>
                    Ia mengatakan FPTI bakal mempertimbangkan untuk membawa atlet yang berprestasi dalam turnamen Panglima TNI yang digelar hari ini.
                    <br><br>
                    "Tahun depan ada SEA Games, kalau ada dari prajurit TNI yang bagus dari sini, bisa kita pertimbangkan untuk difasilitasi, kemudian di Bali World Cup tahun 2025 bulan Mei nanti," katanya.
                    <br><br>
                    Adapun turnamen Sport Climbing Open Championship Indonesian Armed Forces Panglima TNI Cup 2024 ini bakal digelar sejak 9 Oktober hingga 12 Oktober mendatang. Turnamen dibuka untuk TNI-Polri dan kategori umum.
                    <br><br>
                    Pada kesempatan yang sama, Koordinator Staf Ahli Panglima TNI Mayor Jenderal Maryono mengatakan pihaknya mendukung aktif personel yang berprestasi di bidang olahraga untuk menjadi atlet nasional maupun internasional.
                    <br><br>
                    "Mudahan-mudahan dengan kegiatan ini juga atau kegiatan bidang olahraga lain bisa mencari bibit-bibit atlet muda yang berprestasi, yang bisa kita bina, kemudian nantinya bisa membawa nama bangsa Indonesia di kancah dunia," ujarnya.
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
                <img src="images/sports3.png" alt="Sports 3" width="50" height="50">
                <a href="/sport3">Danny Green Pensiun di Usia 37 Tahun</a>
            </div>
            <div class="related-item">
                <img src="images/sports4.png" alt="Sports 4" width="50" height="50">
                <a href="/sport4">Netizen Indonesia Mengadu ke FIFA soal Wasit Bahrain vs Indonesia</a>
            </div>
            <div class="related-item">
                <img src="images/sports5.png" alt="Sports 5" width="50" height="50">
                <a href="/sport5">Park Hang-seo Merapat ke Timnas Malaysia?</a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>

</html>