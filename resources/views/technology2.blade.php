<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Jangan Belanja Online</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style technology2.css') }}">
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
                <h2>Jangan Belanja Online di Situs-situs Ini, Rekening Bisa Bobol<br><br></h2>
                <p>Pakar mengungkap ancaman serangan siber baru yang menargetkan jutaan pengguna internet jelang musim belanja saat musim liburan tiba. Simak penjelasannya.
                    Para pakar mengatakan ancaman ini akan meningkat selama Black Friday dan Cyber Monday dengan tujuan mencuri data pribadi dan keuangan pengguna.
                    <br><br>
                    Menurut tim riset EclecticIQ, para penjahat dunia maya memanfaatkan lonjakan aktivitas belanja online di bulan November, puncak musim diskon Black Friday. Mereka mencuri data kartu kredit, informasi otentikasi, dan data pribadi pengguna dengan menyamar sebagai situs berbelanja.
                    <br><br>
                    Kelompok ancaman yang dikenal sebagai SilkSpecter bahkan menggunakan penyedia layanan pembayaran resmi untuk meningkatkan kredibilitas situs mereka.
                    <br><br>
                    Tim peneliti telah mengidentifikasi beberapa domain berbahaya. Berikut contohnya:
                    <br><br>
                    northfaceblackfriday[.]shop<br>
                    lidl-blackfriday-eu[.]shop<br>
                    Blackfriday-shoe[.]top<br><br>
                    Namun terdapat lebih dari 4,000 domain berbahaya lainnya. Pengguna harus tetap waspada terhadap URL yang mengandung kata kunci seperti "discount" atau "Black Friday" serta pola seperti "/homeapi/collect" atau "trusttollsvg".
                    <br><br>
                    Bahkan FBI juga mengingatkan bahwa diskon besar dari situs tak dikenal sering kali merupakan jebakan. Pengguna dapat kehilangan uang, data pribadi, dan identitas mereka jika tidak berhati-hati.
                    <br><br>
                    "Hindari situs-situs yang tidak dikenal yang menawarkan diskon besar-besaran pada barang bermerek. Para penipu sering memanfaatkan pemburu diskon Black Friday dan Cyber Monday dengan mengiklankan promosi 'Hanya Sehari' dari merek-merek terkenal. Tanpa sikap skeptis, konsumen bisa saja membayar untuk barang yang tidak pernah diterima, memberikan informasi pribadi, dan akhirnya hanya mendapatkan identitas yang disalahgunakan," tulis FBI dalam website resminya, melansir Forbes, Senin (18/11).
                    <br><br>
                    Para penipu menggunakan berbagai cara untuk menarik perhatian korban, melansir Forbes, berikut beberapa trik yang digunakan penipu:
                    <br><br>
                    Diskon besar seperti "80% off" sebagai umpan.<br>
                    Domain seperti .top, .shop, .store, dan .vip yang menyerupai e-commerce asli.<br>
                    Google Translate untuk menyesuaikan bahasa situs berdasarkan lokasi IP pengguna, sehingga terlihat lebih meyakinkan.<br>
                    "Meningkatkan kredibilitas situs phishing dengan menggunakan Google Translate untuk menyesuaikan bahasa situs web secara dinamis berdasarkan lokasi IP setiap korban, sehingga situs tersebut tampak lebih meyakinkan bagi khalayak internasional." tulis tim EclecticIQ.
                    <br><br>
                    Selain diskon palsu, penipu menggunakan teknologi pelacakan web seperti OpenReplay, TikTok Pixel, dan Meta Pixel yang serupa seperti situs e-commerce sah untuk memantau perilaku korban.
                    <br><br>
                    Situs palsu ini juga mengumpulkan data berharga seperti nomor telepon yang dapat mereka gunakan untuk vishing (phishing lewat telepon) dan smishing (phising lewat SMS).
                    <br><br>
                    Namun jangan khawatir, jika Anda berhati-hati dan memperhatikan tanda-tanda situs belanja palsu maka Anda akan aman. Menurut Trend Micro, berikut tanda-tanda situs palsu yang perlu diwaspadai:
                    <br><br>
                    1. Penawaran yang terlalu menggiurkan.<br>
                    2. Desain website buruk, banyak typo, dan metode pembayaran tidak aman.<br>
                    3. Informasi kontak yang tidak jelas atau mencurigakan.<br>
                    4. Tidak ada opsi pembayaran aman seperti kartu kredit.<br>
                    5. Kebijakan pengembalian atau pengiriman yang tidak transparan.
                </p>
            </article>
        </section>
    
        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            <div class="related-item">
                <img src="images/technology1.png" alt="Technology 1" width="50" height="50">
                <a href="/technology1">Pengusaha Beri 2 Rekomendasi Soal Perlindungan Data Pribadi</a>
            </div>
            <div class="related-item">
                <img src="images/technology3.png" alt="Technology 3" width="50" height="50">
                <a href="/technology3">Mengintip Pabrik Senjata Korsel untuk Bantu Ukraina Lawan Rusia</a>
            </div>
            <div class="related-item">
                <img src="images/technology4.png" alt="Technology 4" width="50" height="50">
                <a href="/technology4">Bos Facebook Mark Zuckerberg Bertemu Donald Trump, Apa yang Dibahas?</a>
            </div>
            <div class="related-item">
                <img src="images/technology5.png" alt="Technology 5" width="50" height="50">
                <a href="/technology5">Huawei Bawa Lagi Hp Flagship ke Indonesia, Intip Spek dan Harganya</a>
            </div>
        </aside>
    </main>
    
    <x-footer />
    
    <script src="js/animasi.js"></script>
</body>
</html>