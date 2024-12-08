<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Jadwal Lengkap Timnas Indonesia</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style national1.css') }}">
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
                <h2>Jadwal lengkap timnas Indonesia melawan Bahrain malam ini<br><br></h2>
                <p>Timnas Indonesia akan melanjutkan perjalanannya di putaran ketiga kualifikasi 
                    Piala Dunia 2026 zona Asia Grup C pada malam ini ketika mereka tandang melawan tim peringkat 76 dunia, Bahrain.<br><br>

                    Laga malam nanti akan dihelat pukul 23.00 WIB di Stadion Nasional Bahrain, Riffa. Stadion itu adalah stadion 
                    yang pernah mempermalukan Indonesia pada 12 tahun lalu dengan kekalahan 0-10.<br><br>

                    Dari tiga pertemuan terakhir, Bahrain mendominasi dengan dua kemenangan, 
                    dua-duanya adalah kemenangan yang dipetik di kualifikasi Piala Dunia 2014.<br><br>

                    Sementara itu, Merah Putih mendulang satu kemenangan yang tercipta pada 17 tahun lalu, 
                    tepatnya pada ajang Piala Asia 2007 ketika menjadi tuan rumah.<br><br>

                    Saat itu, Indonesia menang dengan skor 2-1 dari Bahrain melalui gol Budi Sudarsono dan Bambang Pamungkas 
                    yang hanya dibalas satu gol lewat kaki Sayed Mahmood Jalal.<br><br>

                    Shin Tae-yong mengatakan laga nanti malam adalah laga penting untuk kedua tim. 
                    Pasalnya, tim Garuda akan menjadikan laga itu sebagai kemenangan pertamanya dalam sejarah di putaran ketiga, 
                    sedangkan Dilmun's Warriors bertekad memperbaiki catatan kandangnya setelah pada laga terakhir takuluk 0-5 dari Jepang.<br><br>

                    Indonesia saat ini menghuni peringkat keempat di klasemen sementara Grup C dengan koleksi dua poin, sedangkan Bahrain 
                    berada di posisi ketiga dengan tiga poin. Hanya dua tim teratas di klasemen grup yang lolos otomatis ke putaran final Piala Dunia 2026. 
                    Tim-tim peringkat ketiga dan keempat akan mengikuti putaran keempat, sedangkan tim-tim peringkat kelima dan keenam akan tersingkir.<br><br>

                    Berikut jadwal lengkap timnas Indonesia melawan Bahrain malam ini:<br><br>
                    Kamis (10/10)<br>
                    Bahrain vs Indonesia di Stadion Nasional Bahrain, pukul 23.00 WIB.</p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/koalisi dpr.jpg" alt="National 2" width="50" height="50">
                <a href="/national2">Koalisi Paripurna dan Masa Depan Demokrasi Indonesia</a>
            </div>
            <div class="related-item">
                <img src="images/10 okt.jpeg" alt="National 3" width="50" height="50">
                <a href="/national3">Tanggal 10 Oktober Memperingati Apa? Ada Hari Kesehatan Mental Sedunia</a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>
</html>