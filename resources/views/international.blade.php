<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News- Internasional</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style international.css') }}">
</head>

<body>

    <x-nav-bar />

    <section class="hero">
        <h2><b>Berita Internasional</b></h2>
        <p>Sumber tepercaya bagi berita terbaru dari seluruh dunia untuk Anda.</p>
    </section>

    <section class="main-content container2">
    <h1><b>Berita Terbaru</b></h1>
        <div class="grid-3">
            <div class="card animate">
                <img src="images/israel.jpg" alt="Gambar Berita Politik">
                <h3>Libanon: Peringatan Evakuasi Israel untuk Warga Sipil Menyesatkan dan Tidak Memadai</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>Peringatan ini tidak membebaskan Israel dari kewajiban hukum humaniter internasional untuk tidak pernah menargetkan warga sipil.</p>
                <a href="/international1" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/240520-statement-embed-image.jpg" alt="Gambar Berita Politik">
                <h3>Pernyataan Jaksa ICC Karim A.A. Khan KC: Permohonan Surat Penangkapan dalam Situasi di Negara Palestina</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>Jaksa ICC, Karim A.A. Khan KC, mengumumkan pengajuan permohonan surat penangkapan terkait situasi di Palestina.
                    Khan menekankan pentingnya keadilan bagi korban dan perlunya kerja sama dengan negara-negara terkait. Pernyataan ini menyoroti upaya yang 
                   sedang berlangsung untuk menegakkan hukum internasional di tengah dinamika geopolitik yang kompleks.</p>
                <a href="/international2" class="btn">Selengkapnya</a>
            </div>
            <div class="card animate">
                <img src="images/singapore.avif" alt="Gambar Berita Politik">
                <h3>Studi Bersama AS dan Singapura tentang Konektivitas Energi Dapat Pandu Kerangka Kerja Jaringan Listrik ASEAN: PM Wong</h3>
                <div class="meta-info">
                    <p>Tim Redaksi | 3 Desember 2024</p>
                </div>
                <p>Fase kedua Studi Kelayakan Bersama antara AS dan Singapura tentang Konektivitas Energi Regional akan membahas kerangka hukum, tata kelola, 
                   dan pembiayaan untuk jaringan listrik regional Asia Tenggara, kata Perdana Menteri Singapura Lawrence Wong.</p>
                <a href="/international3" class="btn">Selengkapnya</a>
            </div>
        </div>
    </section>

    <x-footer />
    
    <script src="js/animasi.js"></script>
</body>
</html>
