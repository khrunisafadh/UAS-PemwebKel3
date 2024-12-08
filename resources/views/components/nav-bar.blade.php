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
                <li><a href="/national">Nasional</a></li>
                <li><a href="/international">Internasional</a></li>
                <li class="dropdown">
                    <span> Kategori</span>
                    <ul class="dropdown-menu">
                        <li><a href="/sport">Olahraga</a></li>
                        <li><a href="/politic">Politik</a></li>
                        <li><a href="/lifestyle">Gaya Hidup</a></li>
                        <li><a href="/technology">Teknologi</a></li>
                        <li><a href="/art">Seni</a></li>
                        <li><a href="/entertainment">Hiburan</a></li>
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
