@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('/css/style header.css') }}">
<style>

</style>
<header>
    <div class="container">
        <!-- Logo -->
        <a href="/" class="logo">
            <img src="{{ asset('/images/cakra.png') }}" alt="Cakra News" />
        </a>

        <!-- Navigation -->
        <nav class="lg:flex items-center hidden">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/category/national">Nasional</a></li>
                <li><a href="/category/international">Internasional</a></li>
                <li class="dropdown">
                    <span> Kategori</span>
                    <ul class="dropdown-menu">
                        <li><a href="/category/sport">Olahraga</a></li>
                        <li><a href="/category/politic">Politik</a></li>
                        <li><a href="/category/lifestyle">Gaya Hidup</a></li>
                        <li><a href="/category/technology">Teknologi</a></li>
                        <li><a href="/category/art">Seni</a></li>
                        <li><a href="/category/entertainment">Hiburan</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Hubungi Kami</a></li>
                <li><a href="/about">Tentang kami</a></li>
            </ul>
        </nav>
        {{-- 
        <div class="profile-dropdown">
            <button class="profile-btn">
                <img class="profile-icon" src="/images/icon.png" alt="Profile Icon">
            </button>
            <ul class="dropdown-menu">
                <li><a href="/register">Daftar</a></li>
                <li><a href="/login">Masuk</a></li>
            </ul>
        </div> --}}
    </div>
</header>
