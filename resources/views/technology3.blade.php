<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Mengintip Pabrik Senjata Korsel</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style technology3.css') }}">
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
                <h2>Mengintip Pabrik Senjata Korsel untuk Bantu Ukraina Lawan Rusia<br><br></h2>
                <p>Sejumlah media deras mewartakan Menteri Pertahanan Ukraina kunjungan kerja ke Korea Selatan untuk meminta bantuan senjata dalam perang Ukraina
                    <br><br>
                    Menteri Pertahanan Ukraina Rustem Umerov kunjungan kerja ke Korea Selatan pada pekan ini untuk meminta bantuan senjata yang akan digunakan Kyev dalam perang Ukraina melawan Rusia. Surat kabar DongA Ilbo pada Rabu, 27 November 2024, mewartakan Umerov sudah rapat dengan Penasehat Keamanan Nasional Korea Selatan Shin Won-sik untuk sekadar bertukar pandangan soal perang Ukraina.
                    <br><br>
                   South China Morning Post juga mewartakan pada pekan ini delegasi Ukraina akan kunjungan kerja ke Korea Selatan untuk meminta senjata. Namun pemberitaan South China Morning Post tidak menyebutkan narasumber mereka. Isu ini juga diwartakan oleh kantor berita Yonhap yang melaporkan berdasarkan sejumlah sumber yang faham dengan permasalahan ini bahwa Umerov telah dijadwalkan bertemu Presiden Korea Selatan Yoon Suk Yeol pada Rabu pagi, 27 November 2024, waktu setempat. Kantor Kepresidenan Korea Selatan enggan berkomentar perihal ini.
                   <br><br>
                   Juru bicara Kementerian Pertahanan Korea Selatan pada Selasa, 26 November 2024, juga tak mau buka suara apakah Umerov benar-benar sudah tiba di Korea Selatan atau tidak. Dalam sebuah wawancara dengan stasiun televisi dari Korea Selatan, KBS, pada Oktober 2024 lalu, Presiden Ukraina Volodymyr Zelensky mengatakan Kyev akan mengirimkan detail permintaan senjata ke Seoul sebagai bentuk dukungan. Selain senjata, Ukraina juga ingin meminta bantuan artileri dan sebuah sistem pertahanan udara. 
                   <br><br>
                   Sementara itu, media di Ukraina mengutip sebuah rekaman video yang dibagikan Kementerian Pertahanan Ukraina, mewartakan Umerov dan mitra-mitranya dari Inggris, Prancis, Jerman, Italia dan Polandia pada pekan ini sudah mengkaji kebutuhan senjata Ukraina. Laporan media di Ukraina juga menyebut Umerov menekankan perlunya sistem pertahanan udara berteknologi tinggi dalam menghadapi naiknya serangan dari Rusia terhadap infrastruktur. Kyev juga membutuhkan lebih banyak amunisi artileri.
                   <br><br>
                   Korea Selatan, yang telah berkembang menjadi negara produsen senjata, saat ini berada dalam tekanan dari beberapa negara Barat dan Kyev agar mau memberikan senjata mematikan ke Ukraina, namun sampai berita ini diturunkan, bantuan yang ditujukan tidak termasuk senjata mematikan termasuk ranjau.
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
                <img src="images/technology2.png" alt="Technology 2" width="50" height="50">
                <a href="/technology2">Jangan Belanja Online di Situs-situs Ini, Rekening Bisa Bobol</a>
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