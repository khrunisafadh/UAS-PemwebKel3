@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="{{ asset('/css/style header.css') }}">

<aside
    class="fixed flex lg:hidden -translate-x-[9999px] lg:translate-x-0 justify-center min-h-svh border-r border-gray-200 bg-dashboard-sideBar z-20 w-full transition-all "
    id="sidebar">
    <section class="flex flex-col h-svh w-full p-5">
        <div class="flex items-center mb-3 justify-between px-2">
            <div>
                <h1 class="text-2xl font-semibold">Cakra News</h1>
                <p>Kel 3 B</p>
            </div>
            <section class="lg:hidden">
                <button class="flex items-center p-2 rounded-lg" id="menu" onclick="toggleSideBar()">
                    <svg fill="#000000" height="25px" width="25px" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 460.775 460.775" xml:space="preserve">
                        <path
                            d="M285.08,230.397L456.218,59.27c6.076-6.077,6.076-15.911,0-21.986L423.511,4.565c-2.913-2.911-6.866-4.55-10.992-4.55  c-4.127,0-8.08,1.639-10.993,4.55l-171.138,171.14L59.25,4.565c-2.913-2.911-6.866-4.55-10.993-4.55  c-4.126,0-8.08,1.639-10.992,4.55L4.558,37.284c-6.077,6.075-6.077,15.909,0,21.986l171.138,171.128L4.575,401.505  c-6.074,6.077-6.074,15.911,0,21.986l32.709,32.719c2.911,2.911,6.865,4.55,10.992,4.55c4.127,0,8.08-1.639,10.994-4.55  l171.117-171.12l171.118,171.12c2.913,2.911,6.866,4.55,10.993,4.55c4.128,0,8.081-1.639,10.992-4.55l32.709-32.719  c6.074-6.075,6.074-15.909,0-21.986L285.08,230.397z" />
                    </svg>
                </button>
            </section>
        </div>
        <ul class="font-semibold font-sourGummy text-lg w-full">
            <li class=" text-gray-800 mb-2 hover:text-gray-900">
                <a href="/" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100"
                    style="gap: 0.5rem;">
                    Beranda
                </a>
            </li>
            <li class=" text-gray-800 mb-2 hover:text-gray-900">
                <a href="/category/Nasional" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100"
                    style="gap: 0.5rem;">
                    Nasional
                </a>
            </li>
            <li class=" text-gray-800 mb-2 hover:text-gray-900">
                <a href="/category/Internasional" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100"
                    style="gap: 0.5rem;">
                    Internasional
                </a>
            </li>

            <li class=" text-gray-800 mb-2 hover:text-gray-900 ">
                <button class="flex justify-between w-full items-center rounded-lg p-2 hover:bg-gray-100"
                    aria-controls="menu" aria-expanded="false" onclick="toggleMenu(1)">
                    <div class="flex " style="gap: 0.5rem;">
                        <h5>Kategori</h5>
                    </div>
                    <svg sidebar-toggle-item="" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="sideBarMenu1" hidden>
                    <li>
                        <a href="/category/Olahraga"
                            class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                            <h5>Olahraga</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/category/Gaya%20Hidup"
                            class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                            <h5>Gaya Hidup</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/category/Hiburan"
                            class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                            <h5>Hiburan</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/category/Teknologi"
                            class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                            <h5>Teknologi</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/category/Seni"
                            class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                            <h5>Seni</h5>
                        </a>
                    </li>
                    <li>
                        <a href="/category/Politik"
                            class="flex justify-between w-full items-center p-2 pl-[2.6rem] rounded-lg hover:bg-gray-100">
                            <h5>Politik</h5>
                        </a>
                    </li>
                </ul>
            </li>


            <li class=" text-gray-800 mb-2 hover:text-gray-900">
                <a href="/contact" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100"
                    style="gap: 0.5rem;">
                    Hubungi Kami
                </a>
            </li>

            <li class=" text-gray-800 mb-2 hover:text-gray-900">
                <a href="/about" class="flex w-full items-center p-2 rounded-lg hover:bg-gray-100"
                    style="gap: 0.5rem;">
                    Tentang Kami
                </a>
            </li>
        </ul>
    </section>
</aside>


<header class="z-50">
    <div class="container">
        <!-- Logo -->
        <a href="/" class="logo">
            <img src="{{ asset('/images/cakra.png') }}" alt="Cakra News" />
        </a>

        <!-- Navigation -->
        <nav class="lg:flex items-center hidden">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/category/Nasional">Nasional</a></li>
                <li><a href="/category/Internasional">Internasional</a></li>
                <li class="dropdown">
                    <span> Kategori</span>
                    <ul class="dropdown-menu">
                        <li><a href="/category/Olahraga">Olahraga</a></li>
                        <li><a href="/category/Politik">Politik</a></li>
                        <li><a href="/category/Gaya%20Hidup">Gaya Hidup</a></li>
                        <li><a href="/category/Teknologi">Teknologi</a></li>
                        <li><a href="/category/Seni">Seni</a></li>
                        <li><a href="/category/Hiburan">Hiburan</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Hubungi Kami</a></li>
                <li><a href="/about">Tentang kami</a></li>
            </ul>
        </nav>

        <section class="lg:hidden">
            <button class="flex items-center p-2 rounded-lg" id="menu" onclick="toggleSideBar()">
                <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 20 20"
                    fill="none">
                    <path fill="#000000" fill-rule="evenodd"
                        d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z" />
                </svg>
            </button>
        </section>
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

<script>
    function toggleSideBar() {
        const sideBar = document.getElementById('sidebar')
        const menu = document.getElementById('menu')

        if (sideBar.classList.contains('translate-x-0')) {
            sideBar.classList.remove('translate-x-0')
            sideBar.classList.add('-translate-x-[9999px]')

        } else {
            sideBar.classList.remove('-translate-x-[9999px]')
            sideBar.classList.add('translate-x-0')
        }
    }

    function toggleMenu(id) {
        const menu = document.getElementById(`sideBarMenu${id}`);
        const button = document.querySelector('button[aria-controls="menu"]');

        // Toggle visibility of the menu
        if (menu.hasAttribute("hidden")) {
            menu.removeAttribute("hidden");
            button.setAttribute("aria-expanded", "true");
        } else {
            menu.setAttribute("hidden", "");
            button.setAttribute("aria-expanded", "false");
        }
    }
</script>
