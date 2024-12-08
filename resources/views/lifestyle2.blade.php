<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Cara Bikin Kue Rambutan</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style lifestyle2.css') }}">
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
                <h2>Cara Bikin Kue Rambutan, Kue Natal yang Ramai di Medsos<br><br></h2>
                <p>Pernahkah Anda mendengar soal kue rambutan? Kue berbentuk bulat yang dikelilingi cokelat meses ini sering jadi incaran anak-anak saat Hari Raya Natal.
                    Kue rambutan kini tengah jadi perbincangan di platform X. Alasannya, karena tren 'war takjil' kini muncul kembali, namun dengan objek yang berbeda.
                    <br><br>
                    Kini, justru umat Muslim yang ingin berburu kue rambutan.
                    <br><br>
                    Kue rambutan merupakan salah satu kue kering yang bentuknya mirip rambutan. Kue ini berbentuk bulat, dibalut dengan meses warna-warni atau cokelat.
                    <br><br>
                    Kue ini sering muncul di perayaan Natal sebagai salah satu kudapan. Tak sedikit orang yang menggunakan kue rambutan sebagai bahan hantaran ke teman atau keluarga.
                    <br><br>
                    <b>Resep dan cara membuat kue rambutan</b><br><br>
                    
                    Kue rambutan tergolong jenis kue kering yang mudah diolah. Tak perlu repot membuat kue rambutan. Berikut caranya.
                    <br><br>
                    <b>Bahan:</b><br>
                    
                    - biskuit Regal 10 batang<br>
                    - susu kental manis secukupnya<br>
                    - meses warna-warni atau cokelat<br>
                    - air secukupnya<br><br>
                    
                   <b> Cara membuat:</b><br>
                    
                    1. Hancurkan biskuit sampai benar-benar halus.<br>
                    2. Campurkan biskuit yang telah dihaluskan dengan susu kental manis dan sedikit air sampai menjadi seperti adonan.<br>
                    3. Buat bentukan bulat kecil dari adonan.<br>
                    4. Tabur masing-masing adonan yang telah dibentuk dengan meses dan simpan di kulkas.<br>
                    5. Tunggu hingga kue membeku setelah disimpan di dalam kulkas untuk kemudian disantap.<br>
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
                <img src="images/lifestyle3.png" alt="Lifestyles 3" width="50" height="50">
                <a href="/lifestyle3">5 Penyebab Nasi Cepat Kuning di Rice Cooker</a>
            </div>
            <div class="related-item">
                <img src="images/lifestyle4.png" alt="Lifestyles 4" width="50" height="50">
                <a href="/lifestyle4">10 Kota Wisata di Dunia dengan Internet Paling Kencang</a>
            </div>
            <div class="related-item">
                <img src="images/lifestyle5.png" alt="Lifestyles 5" width="50" height="50">
                <a href="/lifestyle5">Australia Bikin Larangan, Ini Dampak jika Anak-Anak Gunakan Medsos</a>
            </div>
        </aside>
    </main>
    
    <x-footer />
    
    <script src="js/animasi.js"></script>
</body>
</html>