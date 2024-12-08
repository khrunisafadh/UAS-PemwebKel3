<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Pengusaha Beri 2 Rekomendasi</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style technology1.css') }}">
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
                <h2>{{ $data->title }}<br><br></h2>
                <p>
                    {{ $data->content }}
                </p>
            </article>
        </section>

        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            @foreach ($sameNews as $new)
                <div class="related-item">
                    <img src="images/technology3.png" alt="Technology {{ $loop->iteration }}" width="50"
                        height="50">
                    <a href="/technology/{{ $new->slug }}">{{ $new->title }}</a>
                </div>
            @endforeach
        </aside>
    </main>

    <x-footer />

    <script src="js/animasi.js"></script>
</body>

</html>
