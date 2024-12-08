<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Teknologi</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style technology.css') }}">
</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <h2>Berita Teknologi</h2>
        <p>Berita terbaru tentang kemajuan teknologi, inovasi, dan sorotan dari seluruh dunia.</p>
    </section>


    <section class="main-content container2 my-10">
    {{$data->links()}}
        <div class="grid-3 my-5">
            @foreach ($data as $tech )
            <div class="card animate">
                <img src="images/technology1.png" alt="Technology 1">
                <h3>{{ $tech->title }}</h3>
                <div class="meta-info">
                    <p>{{ $tech->author }} | {{ $tech->created_at->diffForHumans() }}</p>
                </div>
                <p>{{ $tech->content }}</p>
                <a href="/technology/{{ $tech->slug }}" class="btn">Selengkapnya</a>
            </div>
            @endforeach
        </div>
    {{$data->links()}}
    </section>

    <x-footer />
    <script src="js/animasi.js"></script>
</body>
</html>