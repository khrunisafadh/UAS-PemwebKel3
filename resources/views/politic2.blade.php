<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Prabowo soal Pilkada</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style politic2.css') }}">
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
                <h2>Prabowo soal Pilkada: Menang Jangan Euforia, Kalah Dukung yang Menang<br><br></h2>
                <p>Presiden Prabowo Subianto meminta seluruh kontestan Pilkada serentak 2024 agar tidak terlalu berlebihan dalam merayakan kemenangan dan tidak terlalu larut dalam kesedihan jika kalah.
                    <br><br>
                    Prabowo berharap apapun hasil Pilkada serentak 2024 dapat disikapi oleh setiap kontestan secara bijak dengan kembali bekerja sama setelah pertarungan politik rampung.
                    <br><br>
                    "Yang menang biasa-biasa saja jangan euforia, yang kalah biasa-biasa saja. Yang penting kalau menang bekerja untuk seluruhnya, kalau kalah mendukung yang menang untuk seluruhnya untuk seluruh rakyat Indonesia," kata Prabowo dalam pidatonya saat pertemuan tahunan Bank Indonesia, Jumat, (29/11) malam.
                    <br><br>
                    Prabowo menilai Pilkada serentak 2024 yang baru digelar 27 November lalu berjalan dengan damai. Ia mengatakan hal tersebut sebagai tanda masyarakat Indonesia telah lebih dewasa dalam berpolitik.
                    <br><br>
                    Ia pun mengingatkan pergantian pemimpin suatu daerah melalui pilkada adalah suatu hal yang biasa meski terkadang hasilnya tak sesuai keingingan seluruh pihak.
                    <br><br>
                    "Terjadi suatu kematangan, terjadi suatu proses pendewasaan dalam bermasyarakat, bernegara, berpolitik. Bahwa pergantian politik pergantian kepala daerah itu menjadi hal yang biasa," jelas dia.
                    <br><br>
                    Sebelumnya terdapat 37 provinsi dan 508 kabupaten/kota yang telah menggelar Pilkada serentak 2024 pada 27 November. KPU masing-masing daerah kini masih melakukan perhitungan riil dari hasil suara yang dikumpulkan.                    
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
                <img src="images/politic3.jpeg" alt="Politic 3" width="50" height="50">
                <a href="/politic3">Sambut Putusan MK, KPK Ungkap Sulit Usut Korupsi Libatkan Anggota TNI</a>
            </div>
            <div class="related-item">
                <img src="images/politic4.jpeg" alt="Politic 4" width="50" height="50">
                <a href="/politic4.">Petinggi Militer China Diskors dari Jabatan Buntut Skandal Serius</a>
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