<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('/images/logo.png') }}" type="png">
    <link rel="stylesheet" href="{{ asset('/css/style adminindex.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <link rel="stylesheet" href="{{ asset('/css/dataTable.css') }}">
    <script src="{{ asset('/js/jQuery.js') }}"></script>
    <script src="{{ asset('/js/dataTable.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="scriptsearch.js" defer></script>
</head>

<body>
    @if (session('edit-success'))
        berhasil mengedit
    @endif
    <div class="sidebar h-full fixed z-50 left-0 -translate-x-[500px] transition-all" id="sideBar">
        <h2>ADMINISTRATOR</h2>
        <div class="user-info">
            <img src="https://storage.googleapis.com/a1aa/image/0UrnHIec5uXMLSqyHUQEsUiPSk0Q3TC20YHtlq4Fl6cLMD8JA.jpg"
                alt="User profile picture" height="40" width="40">
            <div>
                <div>{{ Auth::user()->name }}</div>
                <div class="status">Online</div>
            </div>
        </div>
        <ul class="menu">
            <li><a class="active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit"><i class=""></i> Logout</button>
                </form>
            </li>
        </ul>
    </div>
    <header class="flex justify-end items-center h-20 px-5 fixed w-full z-50">
        <button id="menu" onclick="toggleSideBar()">
            <svg width="40px" height="40px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none">
                <path fill="#000000" fill-rule="evenodd"
                    d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z" />
            </svg>
        </button>
    </header>
    <div class="container mx-auto">
        <div class="content flex justify-center flex-col items-center w-full ">
            <div class="header">
                <h1>Dashboard Admin</h1>
            </div>
            <div class="table-container">

                <section class="my-6 flex justify-between items-center">
                    <h2>Semua Berita</h2>
                    <a href="/dashboard/add"
                        class="px-5 py-2 bg-gray-400 rounded-lg hover:bg-gray-500 text-white">Tambah
                        Berita</a>
                </section>
                <table id="table-kategori" class="display" style="width: 1000px">
                    <thead>
                        <th>No</th>
                        <th>Title</th>
                        <th>image</th>
                        <th>Content</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $new)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ url('images/' . $new->image) }}" alt=""></td>
                                <td>{{ $new->title }}</td>
                                <td>{!! Str::limit($new->content, 100) !!}</td>
                                <td>{{ $new->category->name }}</td>
                                <td>
                                    <section class="flex gap-5 justify-center">
                                        <a href="/dashboard/edit/{{ $new->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                                height="20" viewBox="0 0 50 50">
                                                <path
                                                    d="M 43.125 2 C 41.878906 2 40.636719 2.488281 39.6875 3.4375 L 38.875 4.25 L 45.75 11.125 C 45.746094 11.128906 46.5625 10.3125 46.5625 10.3125 C 48.464844 8.410156 48.460938 5.335938 46.5625 3.4375 C 45.609375 2.488281 44.371094 2 43.125 2 Z M 37.34375 6.03125 C 37.117188 6.0625 36.90625 6.175781 36.75 6.34375 L 4.3125 38.8125 C 4.183594 38.929688 4.085938 39.082031 4.03125 39.25 L 2.03125 46.75 C 1.941406 47.09375 2.042969 47.457031 2.292969 47.707031 C 2.542969 47.957031 2.90625 48.058594 3.25 47.96875 L 10.75 45.96875 C 10.917969 45.914063 11.070313 45.816406 11.1875 45.6875 L 43.65625 13.25 C 44.054688 12.863281 44.058594 12.226563 43.671875 11.828125 C 43.285156 11.429688 42.648438 11.425781 42.25 11.8125 L 9.96875 44.09375 L 5.90625 40.03125 L 38.1875 7.75 C 38.488281 7.460938 38.578125 7.011719 38.410156 6.628906 C 38.242188 6.246094 37.855469 6.007813 37.4375 6.03125 C 37.40625 6.03125 37.375 6.03125 37.34375 6.03125 Z">
                                                </path>
                                            </svg>
                                        </a>
                                        <form action="/dashboard/delete" method="POSt">
                                            @csrf
                                            <input type="hidden" value="{{ $new->id }}" name="id"
                                                id="id">
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20"
                                                    height="20" viewBox="0 0 50 50">
                                                    <path
                                                        d="M 21 0 C 19.355469 0 18 1.355469 18 3 L 18 5 L 10.1875 5 C 10.0625 4.976563 9.9375 4.976563 9.8125 5 L 8 5 C 7.96875 5 7.9375 5 7.90625 5 C 7.355469 5.027344 6.925781 5.496094 6.953125 6.046875 C 6.980469 6.597656 7.449219 7.027344 8 7 L 9.09375 7 L 12.6875 47.5 C 12.8125 48.898438 14.003906 50 15.40625 50 L 34.59375 50 C 35.996094 50 37.1875 48.898438 37.3125 47.5 L 40.90625 7 L 42 7 C 42.359375 7.003906 42.695313 6.816406 42.878906 6.503906 C 43.058594 6.191406 43.058594 5.808594 42.878906 5.496094 C 42.695313 5.183594 42.359375 4.996094 42 5 L 32 5 L 32 3 C 32 1.355469 30.644531 0 29 0 Z M 21 2 L 29 2 C 29.5625 2 30 2.4375 30 3 L 30 5 L 20 5 L 20 3 C 20 2.4375 20.4375 2 21 2 Z M 11.09375 7 L 38.90625 7 L 35.3125 47.34375 C 35.28125 47.691406 34.910156 48 34.59375 48 L 15.40625 48 C 15.089844 48 14.71875 47.691406 14.6875 47.34375 Z M 18.90625 9.96875 C 18.863281 9.976563 18.820313 9.988281 18.78125 10 C 18.316406 10.105469 17.988281 10.523438 18 11 L 18 44 C 17.996094 44.359375 18.183594 44.695313 18.496094 44.878906 C 18.808594 45.058594 19.191406 45.058594 19.503906 44.878906 C 19.816406 44.695313 20.003906 44.359375 20 44 L 20 11 C 20.011719 10.710938 19.894531 10.433594 19.6875 10.238281 C 19.476563 10.039063 19.191406 9.941406 18.90625 9.96875 Z M 24.90625 9.96875 C 24.863281 9.976563 24.820313 9.988281 24.78125 10 C 24.316406 10.105469 23.988281 10.523438 24 11 L 24 44 C 23.996094 44.359375 24.183594 44.695313 24.496094 44.878906 C 24.808594 45.058594 25.191406 45.058594 25.503906 44.878906 C 25.816406 44.695313 26.003906 44.359375 26 44 L 26 11 C 26.011719 10.710938 25.894531 10.433594 25.6875 10.238281 C 25.476563 10.039063 25.191406 9.941406 24.90625 9.96875 Z M 30.90625 9.96875 C 30.863281 9.976563 30.820313 9.988281 30.78125 10 C 30.316406 10.105469 29.988281 10.523438 30 11 L 30 44 C 29.996094 44.359375 30.183594 44.695313 30.496094 44.878906 C 30.808594 45.058594 31.191406 45.058594 31.503906 44.878906 C 31.816406 44.695313 32.003906 44.359375 32 44 L 32 11 C 32.011719 10.710938 31.894531 10.433594 31.6875 10.238281 C 31.476563 10.039063 31.191406 9.941406 30.90625 9.96875 Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </form>
                                    </section>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        new DataTable('#table-kategori');
    </script>
    <script>
        function toggleSideBar() {
            const sideBar = document.getElementById('sideBar')
            const menu = document.getElementById('menu')
            const main = document.getElementById('main')

            if (sideBar.classList.contains('translate-x-0')) {
                sideBar.classList.remove('translate-x-0')
                sideBar.classList.add('-translate-x-[500px]')

            } else {
                sideBar.classList.remove('-translate-x-[500px]')
                sideBar.classList.add('translate-x-0')
            }
        }
    </script>

</body>

</html>
