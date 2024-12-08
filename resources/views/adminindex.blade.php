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
    <div class="sidebar h-full fixed z-50 left-0 -translate-x-[500px] transition-all" id="sideBar">
        <h2>ADMINISTRATOR</h2>
        <div class="user-info">
            <img src="https://storage.googleapis.com/a1aa/image/0UrnHIec5uXMLSqyHUQEsUiPSk0Q3TC20YHtlq4Fl6cLMD8JA.jpg"
                alt="User profile picture" height="40" width="40">
            <div>
                <div>Digital Jessie</div>
                <div class="status">Online</div>
            </div>
        </div>
        <ul class="menu">
            <li><a class="active" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
            <li><a href="/adminpanel"><i class="fas fa-newspaper"></i> Tambah Berita</a></li>
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
                <h2>Semua Berita</h2>
                <table id="table-kategori" class="display" style="width:100%">
                    <thead>
                        <th>No</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Kategori</th>
                        {{-- <th>Action</th> --}}
                    </thead>
                    <tbody>
                        @foreach ($data as $new)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $new->title }}</td>
                                <td>{{ Str::limit($new->content, 100) }}</td>
                                <td>{{ $new->category->name }}</td>
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
