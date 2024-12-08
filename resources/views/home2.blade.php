<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Ranking FIFA Indonesia</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style home2.css') }}">
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
                <h2>Ranking FIFA Indonesia Usai 'Dirampok' Wasit, Posisi Bahrain Nyungsep<br><br></h2>
                <p>Timnas Indonesia mendapatkan tambahan hingga 4,39 poin dalam ranking FIFA 
                    setelah ditahan imbang 2-2 secara kontroversial oleh Bahrain pada Kualifikasi Piala Dunia 2026.<br><br>
                
                    Indonesia nyaris meraih kemenangan di markas Bahrain. Sempat unggul 2-1 hingga injury time berjalan delapan menit, 
                    kemenangan Timnas Indonesia buyar setelah Bahrain mencetak gol penyama kedudukan lewat Mohamed Marhoon pada menit kesembilan. 
                    Berdasarkan catatan Footy Rankings, Indonesia mendapat tambahan 4,39 poin dalam ranking FIFA. 
                    Namun, posisi Timnas Indonesia di ranking FIFA tidak berubah, tetap berada di posisi 129 dunia.<br><br>

                    Sebaliknya Bahrain mengalami penurunan ranking FIFA yang cukup signifikan, yakni dua posisi. Tim asuhan 
                    Dragan Talajic turun ke posisi 78 dunia ranking FIFA setelah kehilangan 4,39 poin.<br><br>

                    Laga Bahrain vs Indonesia berakhir dengan kontroversial. Para pemain dan ofisial 
                    Timnas Indonesia kecewa dengan keputusan wasit asal Oman, Ahmed Al Kaf, yang membiarkan laga berjalan hingga 100 menit 
                    meski memberi tambahan waktu enam menit.<br><br>

                    Kemenangan Timnas Indonesia kemudian buyar setelah Bahrain berhasil menyamakan kedudukan 2-2 lewat Mohamed Marhoon 
                    saat injury time berjalan sembilan menit. Keputusan kontroversial itu juga membuat PSSI kecewa dengan keputusan wasit. 
                    Anggota Komite Eksekutif (Exco) PSSI Arya Sinulingga bahkan memastikan PSSI akan melayangkan surat protes ke AFC.<br><br>

                    "Ya kita kirim surat protes. Kita sangat kecewa dengan kepemimpinan wasit. [Wasit diduga] seperti menambah waktu 
                    sampai Bahrain menciptakan gol," ucap Arya. Selanjutnya Timnas Indonesia akan melawan China pada lanjutan 
                    Kualifikasi Piala Dunia 2026 di Stadion Qingdao, China, Selasa (15/10).


                </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Related News</h3>
            <div class="related-item">
                <img src="images/home1.png" alt="Berita 1" width="50" height="50">
                <a href="/home1">Korban Tewas Serangan Israel di Gaza Tembus 42.126 Orang</a>
            </div>
            <div class="related-item">
                <img src="images/home3.png" alt="Berita 3" width="50" height="50">
                <a href="/home3">Jokowi Naikkan Tunjangan PNS Kementerian ESDM 10 Hari Jelang Lengser</a>
            </div>
        </aside>
    </main>
    
    <x-footer/>
    
    <script src="js/animasi.js"></script>
</body>
</html>