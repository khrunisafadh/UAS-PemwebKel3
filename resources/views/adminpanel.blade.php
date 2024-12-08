<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Berita</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style adminpanel.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Panel Admin Berita</h1>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Keluar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h2>Kelola Berita Anda</h2>
            <p>Buat, edit, dan hapus artikel berita dengan mudah.</p>
        </section>

        <div class="main-content">
            <form class="card" id="news-form">
                <h3>Buat Berita</h3>
                <label for="news-id">ID Berita:</label>
                <input type="text" id="news-id" name="news-id" placeholder="Masukkan ID Berita" required>

                <label for="news-image">Gambar:</label>
                <input type="file" id="news-image" name="news-image" accept="image/*" required>

                <label for="news-title">Judul:</label>
                <input type="text" id="news-title" name="news-title" placeholder="Masukkan Judul Berita" required>

                <label for="news-content">Isi Berita:</label>
                <textarea id="news-content" name="news-content" rows="4" placeholder="Masukkan Isi Berita" required></textarea>

                <label for="news-author">Penulis:</label>
                <input type="text" id="news-author" name="news-author" placeholder="Nama Penulis" required>

                <label for="news-date">Tanggal Unggah:</label>
                <input type="date" id="news-date" name="news-date" required>

                <label for="news-category">Kategori:</label>
                <select id="news-category" name="news-category" required>
                    <option value="nasional">Nasional</option>
                    <option value="internasional">Internasional</option>
                    <option value="olahraga">Olahraga</option>
                    <option value="politik">Politik</option>
                    <option value="gaya_hidup">Gaya Hidup</option>
                    <option value="teknologi">Teknologi</option>
                    <option value="seni">Seni</option>
                    <option value="hiburan">Hiburan</option>
                </select>

                <button type="submit" class="btn">Buat Berita</button>
            </form>
        </div>
    </main>
</body>
</html>
