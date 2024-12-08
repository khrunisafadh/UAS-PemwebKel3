<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Koalisi Paripurna</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style national2.css') }}">
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
                <h2>Koalisi Paripurna dan Masa Depan Demokrasi Indonesia<br><br></h2>
                <p>Dalam acara "Investor Daily Summit" pada Rabu, 9 Oktober 2024 lalu, 
                    Presiden terpilih Prabowo Subianto menilai lazim bila Indonesia memiliki kabinet atau koalisi gemuk 
                    di pemerintahan. Pasalnya, Indonesia merupakan negara besar dan pemerintah harus mewakili setiap wilayahnya. 
                    Maka, ia ingin merangkul seluruh pihak guna memperkuat persatuan pemerintahan dengan membentuk kabinet atau koalisi gemuk.<br><br>

                    Sejauh ini, tujuh dari delapan partai di parlemen akan mendukung pemerintahan Prabowo-Gibran. Empat parpol di antaranya ialah pengusung 
                    Prabowo-Gibran di Pilpres yang tergabung Koalisi Indonesia Maju, yaitu Gerindra, Golkar, PAN, dan Demokrat. <br><br>

                    Tiga lainnya dari luar koalisi Pilpres, yakni Nasdem, PKB, dan PKS. Ketiga partai ini sebelumnya tergabung di Koalisi Perubahan untuk mengusung Anies Baswedan-Muhaimin Iskandar. 
                    Hanya PDI-P yang belum memastikan akan merapat atau tidak ke koalisi pemerintahan. Namun, melihat sinyal belakangan—termasuk rencana pertemuan Ketua Umum PDI-P Megawati Soekarnoputri dan Prabowo, tampaknya partai ini akan merapat.<br><br>

                    Jika PDI-P memilih tidak menjadi oposisi, maka dukungan kekuatan partai di parlemen terhadap pemerintahan Prabowo-Gibran menjadi paripurna atau 100 persen. Upaya Prabowo untuk mengonsolidasikan kekuatan partai merupakan konsekuensi dari 
                    penerapan sistem presidensial dan multipartai.<br><br>

                    Presiden selaku kepala negara dan kepala pemerintahan membutuhkan dukungan kekuatan mayoritas partai di parlemen. Mengingat tak ada partai dominan, partai-partai di parlemen perlu berkoalisi untuk mendukung pemerintahan. 
                    Tujuannya agar roda pemerintahan berjalan dengan efektif dan stabil; tidak menghadapi kritik signifikan dari partai di luar koalisi pemerintahan.<br><br>

                    Maka dari itu, tidak heran bila komposisi koalisi partai di pemerintahan begitu masif, sementara partai di luar koalisi sangat minim. Menurut data Komisi Pemilihan Umum, komposisi kekuatan partai di parlemen sepanjang 1999 hingga 2024 
                    selalu melampaui 50 persen.<br><br>

                    Adapun di periode kedua Presiden Joko Widodo (Jokowi), yaitu dari 2019 hingga 2024, komposisi kekuatan partai mencapai 91,3 persen. Persentase ini menjadi yang tertinggi atau tergemuk sejak 1999, 
                    yang rata-rata didukung oleh 70—80 persen kekuatan partai (Litbang Kompas, Mei 2024).<br><br>

                    Perihal kabinet, Prabowo-Gibran dimungkinkan memiliki lebih dari 34 kementerian setelah Undang-Undang (UU) Kementerian Negara direvisi. Kini jumlah kementerian bisa disesuaikan dengan kebutuhan presiden. Belakangan, 
                    bergulir isu Prabowo-Gibran akan membentuk 44 kementerian. Hal ini menuai kontroversi mengingat ini akan memakan biaya tinggi dan sekadar mengakomodasi pendukung politik yang masif.
                    </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/indo vs bahrain.jpeg" alt="National 1" width="50" height="50">
                <a href="/national1">Jadwal lengkap timnas Indonesia melawan Bahrain malam ini</a>
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