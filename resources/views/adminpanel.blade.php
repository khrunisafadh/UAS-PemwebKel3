<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
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
    <div class="container">
        <div class="sidebar">
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
                <li><a href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="/adminpanel"><i class="fas fa-newspaper"></i> Tambah Berita</a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit"><i class=""></i> Logout</button>
                    </form>
                </li>
            </ul>
        </div>

        <div class="content flex justify-start flex-col items-center w-full">
            <div class="header">
                <h1>Edit Berita</h1>
            </div>
            <div class="w-full">
                <form action="" method="POST">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <label for="title" class="font-semibold text-xl mb-2">Judul Berita</label>
                        <input type="text" name="title" id="title" class="px-4 py-2 w-full rounded-lg">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="author" class="font-semibold text-xl mb-2">Author</label>
                        <input type="text" name="author" id="author" class="px-4 py-2 w-full rounded-lg">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="content" class="font-semibold text-xl mb-2">Isi berita</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="resize-none rounded-lg p-3">Isi Berita</textarea>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="content" class="font-semibold text-xl mb-2">Category</label>
                        <select name="category_id" id="category_id" class="h-12 p-2 rounded-lg">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
