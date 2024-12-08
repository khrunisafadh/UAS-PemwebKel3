<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Beranda</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style index.css') }}">

</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <div class="container2">
            <h2><b>Tetap Terhubung dengan Berita Terkini</b></h2>
            <p>Sumber tepercaya Anda untuk berita terbaru dari seluruh dunia.</p>
        </div>
    </section>

    <section class="main-content container2 my-5">
        @if ($data->isEmpty())
            <h1 class="text-center text-2xl font-semibold">Berita Belum Ada</h1>
        @else
            @foreach ($data as $new)
                <div class="card">
                    <a href="/category/{{ $new->category->name }}/{{ $new->slug }}" class="news-item">
                        <img src="images/home1.png" alt="berita 1" width="100" height="100">
                        <div class="news-content">
                            <h3><b>{{ $new->title }}</b></h3>
                            <p>{{ Str::limit($new->content, 100) }} </p>
                            <p>{{ $new->author }} | {{ $new->created_at->diffForHumans() }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        @endif

        {{-- <div class="card">
            <a href="/home2" class="news-item">
                <img src="images/home2.png" alt="Ukrainian port" width="100" height="100">
                <div class="news-content">
                    <h3><b>Ranking FIFA Indonesia Usai 'Dirampok' Wasit, Posisi Bahrain Nyungsep</b></h3>
                    <p>Timnas Indonesia mendapatkan tambahan hingga 4,39 poin dalam ranking FIFA setelah
                        ditahan imbang 2-2 secara kontroversial oleh Bahrain pada Kualifikasi Piala Dunia 2026.</p>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="/home3" class="news-item">
                <img src="images/home3.png" alt="Ukrainian port" width="100" height="100">
                <div class="news-content">
                    <h3><b>Jokowi Naikkan Tunjangan PNS Kementerian ESDM 10 Hari Jelang Lengser</b>

                    </h3>
                    <p>Presiden Joko Widodo (Jokowi) merestui kenaikan tunjangan kinerja (tukin)
                        PNS Kementerian Energi dan Sumber Daya Mineral (ESDM).</p>
                </div>
            </a>
        </div> --}}
    </section>

    <x-footer />
    <script src="js/animasi.js"></script>
</body>

</html>
