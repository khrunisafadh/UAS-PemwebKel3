<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Sambut Putusan MK</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style politic3.css') }}">
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
                <h2>Sambut Putusan MK, KPK Ungkap Sulit Usut Korupsi Libatkan Anggota TNI<br><br></h2>
                <p>Komisi Pemberantasan Korupsi (KPK) mengapresiasi putusan Mahkamah Konstitusi (MK) yang menegaskan wewenang lembaga antirasuah mengusut kasus korupsi yang melibatkan militer atau TNI.
                    Wakil Ketua KPK Nurul Ghufron mengatakan selama ini KPK menemui kendala apabila mengusut kasus korupsi yang melibatkan militer.
                    <br><br>
                    "KPK mengapresiasi putusan MK atas permohonan uji materi Pasal 42 UU KPK tersebut," ujar Ghufron melalui keterangan tertulis, Jumat (29/11).
                    <br><br>
                    Dalam uji materi tersebut, KPK bertindak dan menjadi pihak terkait yang memberikan fakta berupa kendala dalam melakukan penegakan hukum terhadap kasus korupsi dengan subjek hukum sipil bersama anggota TNI.
                    <br><br>
                    "Yang selama ini walaupun telah ada Pasal 42 UU KPK tersebut tetapi dalam pelaksanaan jika subjek hukum terdiri dari sipil dan TNI perkaranya displit, yang sipil ditangani oleh KPK yang TNI disidang dalam peradilan militer. Kondisi ini mengakibatkan potensi disparitas bisa terjadi. Juga peradilan tidak efektif dan efisien," ucap Ghufron.
                    <br><br>
                    Pimpinan KPK berlatar belakang akademisi ini menyatakan putusan MK tersebut menguatkan dan menegaskan kewenangan untuk melakukan proses penegakan hukum terhadap perkara koneksitas yang dari awal pengungkapannya dilakukan oleh KPK.
                    <br><br>
                    "KPK dengan adanya putusan MK akan melakukan koordinasi dengan Menhan juga Panglima TNI untuk menindaklanjuti secara lebih teknis pengaturan pelaksanaannya," ucap dia.
                    <br><br>
                    MK mengabulkan sebagian tuntutan uji materi Pasal 42 UU KPK sebagaimana telah teregister dengan nomor perkara: 87/PUU-XXI/2023.
                    <br><br>
                    Pasal 42 UU KPK berbunyi, "KPK berwenang mengoordinasikan dan mengendalikan penyelidikan, penyidikan dan penuntutan tindak pidana korupsi yang dilakukan bersama-sama oleh orang yang tunduk pada peradilan militer dan peradilan umum."
                    <br><br>
                    MK menyatakan Pasal tersebut bertentangan dengan UUD 1945 selama tidak ditambahkan frasa di akhir Pasal.
                    <br><br>
                    Tambahan frasa tersebut berbunyi, "Sepanjang perkara dimaksud proses penegakan hukumnya ditangani sejak awal atau dimulai/ditemukan oleh KPK."
                    <br><br>
                    MK memberi penekanan sepanjang tindak pidana korupsi yang dilakukan oleh unsur sipil dan militer penanganannya sejak awal dilakukan oleh KPK, maka perkara tersebut akan ditangani oleh KPK. Kewenangan itu berlanjut hingga ada putusan pengadilan yang mempunyai kekuatan hukum tetap.
                    <br><br>
                    "Sebaliknya, terhadap perkara tindak pidana korupsi yang dilakukan oleh orang yang tunduk pada peradilan militer yang ditemukan dan dimulai penanganannya oleh lembaga penegak hukum selain KPK, maka tidak ada kewajiban bagi lembaga hukum lain tersebut untuk melimpahkannya kepada KPK," bunyi pertimbangan MK.
                    <br><br>
                    Pada periode pimpinan saat ini, KPK sempat bersinggungan dengan TNI saat memproses hukum Kabasarnas RI periode 2021-2023 Henri Alfiandi dan Anggota TNI AU sekaligus Koordinator Administrasi (Koorsmin) Kabasarnas Letkol Adm Afri Budi Cahyanto. Situasi saat itu sempat memanas.
                    <br><br>
                    Akhirnya, Henri dan Afri Budi diproses hukum oleh peradilan militer.
                </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/politic1.jpeg" alt="Politic 1" width="50" height="50">
                <a href="/politic1">Komisi III DPR Akan Panggil Kapolres Semarang soal Penembakan Siswa</a>
            </div>
            <div class="related-item">
                <img src="images/politic2.jpeg" alt="Politic 2" width="50" height="50">
                <a href="/politic2">Prabowo soal Pilkada: Menang Jangan Euforia, Kalah Dukung yang Menang</a>
            </div>
            <div class="related-item">
                <img src="images/politic4.jpeg" alt="Politic 4" width="50" height="50">
                <a href="/politic4">Petinggi Militer China Diskors dari Jabatan Buntut Skandal Serius</a>
            </div>
            <div class="related-item">
                <img src="images/politic5.jpeg" alt="Politic 5" width="50" height="50">
                <a href="/politic5">Iran Tambah 6.000 Sentrifus Baru di Pabrik Pengayaan Uranium Nuklir</a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>
</html>