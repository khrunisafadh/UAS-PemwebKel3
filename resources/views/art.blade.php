<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Seni</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <x-logo />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('/css/style arts.css') }}">
</head>

<body>
    <x-nav-bar />

    <section class="hero">
        <h2>Berita {{ $title }}</h2>
        <p>Berita terbaru mengenai {{ $title }} dari seluruh dunia.</p>
    </section>

    <section class="main-content container2">
        {{ $data->links() }}
        <div class="grid-3 my-5">

            @foreach ($data as $new)
                <div class="card animate">
                    <img src="{{ url('images/' . $new->image) }}" alt="Art 1">
                    <h3>{{ $new->title }}</h3>
                    <div class="meta-info">
                        <p>{{ $new->author }} | {{ $new->created_at->diffForHumans() }}</p>
                    </div>
                    <p>{!! $new->content !!}</p>
                    <a href="/category/{{ $new->category->name }}/{{ $new->slug }}" class="btn">Selengkapnya</a>
                </div>
            @endforeach
        </div>
        {{ $data->links() }}

    </section>


    <x-footer />
    <script src="js/animasi.js"></script>
</body>

</html>
