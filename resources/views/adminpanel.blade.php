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
                <li><a href="/dashboard/add"><i class="fas fa-newspaper"></i> Tambah Berita</a></li>
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
                <form action="{{ url('/dashboard/add') }}" method="POST" onsubmit="return handleSubmit(event)"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col mb-5">
                        <label for="title" class="font-semibold text-xl mb-2">Judul Berita</label>
                        <input type="text" name="title" id="title" class="px-4 py-2 w-full rounded-lg"
                            required>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="author" class="font-semibold text-xl mb-2">Author</label>
                        <input type="text" name="author" id="author"
                            class="px-4 py-2 w-full rounded-lg bg-none border" required>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="image" class="font-semibold text-xl mb-2">Author</label>
                        <input type="file" name="image" id="image" class="px-4 py-2 w-full rounded-lg bg-white"
                            required>
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="content" class="font-semibold text-xl mb-2">Isi berita</label>
                        {{-- <textarea name="content" id="content" cols="30" rows="10" class="resize-none rounded-lg p-3">Isi Berita</textarea> --}}
                        <!-- Elemen untuk Quill Editor -->
                        <div id="konten-container"></div>
                        <!-- Input tersembunyi untuk mengirimkan data Quill -->
                        <input type="hidden" id="konten" name="konten">
                    </div>
                    <div class="flex flex-col mb-5">
                        <label for="content" class="font-semibold text-xl mb-2">Category</label>
                        <select name="category_id" id="category_id" class="h-12 p-2 rounded-lg" required>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <button type="submit"
                            class="px-5 py-2 bg-slate-400 text-gray-50 hover:bg-slate-500 rounded-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // Inisialisasi Quill
        const quill = new Quill('#konten-container', {
            theme: 'snow', // Tema default Quill
            placeholder: 'Tulis konten Anda di sini...',
            modules: {
                toolbar: [
                    [{
                        header: [1, 2, false]
                    }],
                    ['bold', 'italic', 'underline'],
                    [{
                        list: 'ordered'
                    }, {
                        list: 'bullet'
                    }],
                    ['link']
                ]
            }
        });

        // Fungsi untuk mengirimkan data Quill ke input tersembunyi
        function handleSubmit(event) {
            // Salin isi editor Quill ke input tersembunyi
            const kontenInput = document.getElementById('konten');
            kontenInput.value = quill.root.innerHTML;

            // Kembalikan true untuk mengizinkan pengiriman formulir
            return true;
        }
    </script>

</body>

</html>
