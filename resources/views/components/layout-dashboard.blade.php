<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakra News - Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/dataTable.css') }}">
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/dataTable.js') }}"></script>

    <!-- Tambahkan stylesheet Quill -->
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">
    <!-- Tambahkan script Quill -->
    <script src="https://cdn.quilljs.com/1.3.7/quill.min.js"></script>
    <style>
        #konten-container {
            height: 200px;
            /* Tinggi editor */
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <main class=" min-h-svh">
        <x-nav-bar-dashboard />

        <section class="lg:ml-72 transition-all p-5">

            <header class="mb-4">
                <nav
                    class=" px-5 py-2 lg:py-[0.85rem] flex justify-between items-center border-b border-gray-200 w-full bg-gray-50 z-50">
                    <section>
                        <h1 class="text-3xl font-sourGummy">Dashboard</h1>
                    </section>
                    <section class="lg:hidden">
                        <button class="flex items-center hover:bg-gray-100 p-2 rounded-lg" id="menu"
                            onclick="toggleSideBar()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32px" height="32px" viewBox="0 0 20 20"
                                fill="none">
                                <path fill="#000000" fill-rule="evenodd"
                                    d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z" />
                            </svg>
                        </button>
                    </section>
                </nav>
            </header>
            {{ $slot }}
        </section>
    </main>
</body>
