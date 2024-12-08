<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Jokowi Naikkan Tunjangan PNS</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style home3.css') }}">
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
                <h2>Jokowi Naikkan Tunjangan PNS Kementerian ESDM 10 Hari Jelang Lengser<br><br></h2>
                <p>Presiden Joko Widodo (Jokowi) merestui kenaikan tunjangan kinerja (tukin) 
                    PNS Kementerian Energi dan Sumber Daya Mineral (ESDM).
                    Di depan para PNS Kementerian ESDM, Jokowi mengatakan alasan menaikkan tukin PNS Kementerian ESDM karena Penerimaan Negara Bukan Pajak (PNBP) 
                    sektor energi dan sumber daya mineral sangat besar ke negara setiap tahunnya. 
                    Adapun sejak 2014 hingga 2024, PNBP dari sektor ESDM sudah lebih dari Rp1.800 triliun.<br><br>

                    Ia mengaku Menteri ESDM Bahlil Lahadalia sudah seringkali memintanya untuk segera menandatangani kenaikan tukin tersebut. 
                    Namun, Jokowi menyebut rancangan soal tukin itu belum ada juga di meja kerjanya.<br><br>

                    “Pak Menteri (Bahlil) ini bulak-balik mendorong saya, menanyakan ke saya. Enggak sekali dua kali. Saya akan tanda tangan kalau barang itu sampai di meja saya. 
                    Sampai malam ini belum,” ujar dia dalam acara Malam Penganugerahan Penghargaan Subroto 2024 di Kempinski Grand Ballroom, Jakarta Pusat, Kamis (10/10).<br><br>

                    “Belum sampai di meja saya, tetapi memang sudah sedikit lagi. Jadi begitu sampai di meja saya, 
                    akan saya tanda tangan ini yang namanya tunjangan tadi,” imbuh Jokowi lebih lanjut.<br><br>

                    Ia kembali memuji upaya Bahlil yang terus mendesaknya 
                    agar kenaikan tukin disetujui dan ditandatangani sebelum ia lengser.
                    “Memang Pak Menteri ESDM ini sangat lincah sekali. Selalu menanyakan kepada saya. ‘Sudah, pak?’. 
                    Ya, saya belum tanda tangan, saya jawab belum. Tadi siang ketemu, ‘Sudah, pak?’. Kalau saya jawab, bohong namanya,” kata dia.<br><br>

                    Jokowi memastikan akan menginformasikan lebih lanjut terkait kenaikan tukin jika dokumennya telah resmi ditandatangani.
                    “Begitu saya tanda tangan, saya infokan ke Menteri ESDM secepatnya,” imbuhnya.

                </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/home1.png" alt="Berita 1" width="50" height="50">
                <a href="/home1">Korban Tewas Serangan Israel di Gaza Tembus 42.126 Orang</a>
            </div>
            <div class="related-item">
                <img src="images/home2.png" alt="Berita 2" width="50" height="50">
                <a href="/home2">Ranking FIFA Indonesia Usai 'Dirampok' Wasit, Posisi Bahrain Nyungsep</a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>
</html>