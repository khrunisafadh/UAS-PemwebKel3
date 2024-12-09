<x-lay-outheader>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('/css/style art1.css') }}">
</x-lay-outheader>


<x-lay-out>


    <section class="card">
        <div class="hero" style="background-image: url({{ url('images/' . $data->image) }})">
        </div>
    </section>

    <main class="news-layout">
        <!-- Konten berita utama -->
        <section class="main-article">
            <article>
                <h2>{{ $data->title }}<br><br></h2>
                <div class="article-meta">
                    <p><strong>Penulis:</strong> {{ $data->author }}</p>
                    <p><strong>Waktu Rilis:</strong> {{ $data->created_at->diffForHumans() }}</p>
                </div>
                <br>
                <p>{!! $data->content !!}</p>
            </article>
        </section>

        <!-- Daftar berita lainnya -->
        <aside class="related-articles">
            <h3>Berita Serupa</h3>
            @foreach ($news as $new)
                <div class="related-item">
                    <img src="{{ url('images/' . $new->image) }}" alt="{{ $new->id }}.jpg" width="50"
                        height="50">
                    <a href="/category/{{ $new->category->name }}/{{ $new->slug }}">{{ $new->title }}</a>
                </div>
            @endforeach
        </aside>
    </main>
</x-lay-out>

<x-footer> </x-footer>
