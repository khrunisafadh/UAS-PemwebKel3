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
                    <div>Digital Jessie</div>
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

        <div class="content flex justify-center flex-col items-center w-full">
            <div class="header">
                <h1>Edit Berita</h1>
            </div>
            <div class="form-container">
                <form action="/berita/{{ $berita->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Judul Berita:</label>
                        <input type="text" id="title" name="title" class="form-control"
                            value="{{ $berita->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Isi Berita:</label>
                        <textarea id="content" name="content" rows="5" class="form-control" required>{{ $berita->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Kategori:</label>
                        <select id="category" name="category_id" class="form-control" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $berita->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group flex justify-between">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="/dashboard" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        © 2014-2020 Portal Berita Pro | Portal Media Online International. All rights reserved.
    </div>
</body>

</html>
