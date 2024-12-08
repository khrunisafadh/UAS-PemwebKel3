<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Australia Bikin Larangan</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style lifestyle5.css') }}">
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
                <h2>Australia Bikin Larangan, Ini Dampak jika Anak-Anak Gunakan Medsos<br><br></h2>
                <p>Australia belum lama ini memberlakukan aturan anak di bawah 16 tahun menggunakan media sosial (medsos). Psikolog anak dan keluarga Mira Amir berpendapat hal ini juga perlu diberlakukan di Indonesia.
                    Australia 'ketok palu' untuk Undang-Undang Keamanan Daring atau Online Safety Amendment Social Media Minimum Age Bill 2024. Dengan undang-undang ini, Parlemen Australia resmi melarang anak-anak usia di bawah 16 tahun bermain media sosial seperti Facebook, Instagram, X dan TikTok.
                    <br><br>
                    Psikolog Mira Amir menuturkan sebaiknya aturan serupa juga diberlakukan di Indonesia.
                    <br><br>
                    "Saya setuju banget aturan ini juga diberlakukan di Indonesia. Dari pengamatan saya, orang tua Indonesia terlalu longgar [dalam hal parenting]. Australia saya lihat kesadaran parenting-nya bisa diandalkan," kata Mira pada CNNIndonesia.com, Jumat (29/11).
                    <br><br>
                    Menurut Mira, sebenarnya aturan seperti Australia ini bukan hal aneh terlebih di negara Barat. Dia bercerita sang klien yang tinggal di Swiss juga memiliki aturan kurang lebih serupa. Di sana, sekolah melarang penggunaan WhatsApp sampai usia 16 tahun.
                    <br><br>
                    Lantas, apa dampaknya saat anak mengakses media sosial di usia kurang dari 16 tahun?
                    <br><br>
                    Salah satu klien Mira berusia SD kelas 1 memiliki dua gawai dan lebih banyak menghabiskan waktu untuk scrolling TikTok. Sulit dibayangkan apa yang dikonsumsi anak terlebih anak belum bisa menentukan konten apa yang bermanfaat buatnya. Belum lagi yang usia remaja di mana kepribadiannya belum matang.
                    <br><br>
                    "Kepribadian belum matang, media sosial masuk, dia makin goyah. Sampai mana anak bisa melihat bahwa apa yang ada di media sosial itu tidak semuanya riil?" katanya.
                    <br><br>
                    Sementara itu, saat anak mengakses media sosial di usia 16 ke atas, usia ini dianggap lebih dewasa. Mira berkata kemampuan kognitif anak sudah lebih matang.
                    <br><br>
                    Anak pun memiliki kepribadian yang lebih 'ajeg', lebih solid dan memiliki kemampuan berpikir kritis.
                    <br><br>
                    "Kalau umur kurang dari itu ya kepribadian belum matang. Ikut ini ditanya buat apa, ya ikut aja," imbuh Mira.                
                </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/lifestyle1.png" alt="Lifestyles 1" width="50" height="50">
                <a href="/lifestyle1">Kulit Kepala Berminyak Rambut Kering? Ini Tips Perawatan yang Tepat</a>
            </div>
            <div class="related-item">
                <img src="images/lifestyle2.png" alt="Lifestyles 2" width="50" height="50">
                <a href="/lifestyle2">Cara Bikin Kue Rambutan, Kue Natal yang Ramai di Medsos</a>
            </div>
            <div class="related-item">
                <img src="images/lifestyle3.png" alt="Lifestyles 3" width="50" height="50">
                <a href="/lifestyle3">5 Penyebab Nasi Cepat Kuning di Rice Cooker</a>
            </div>
            <div class="related-item">
                <img src="images/lifestyle4.png" alt="Lifestyles 4" width="50" height="50">
                <a href="/lifestyle4">10 Kota Wisata di Dunia dengan Internet Paling Kencang</a>
            </div>
        </aside>
    </main>
    
    <x-footer />
    
    <script src="js/animasi.js"></script>
</body>
</html>