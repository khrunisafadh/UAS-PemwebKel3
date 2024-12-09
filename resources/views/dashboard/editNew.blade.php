<x-layout-dashboard>

    <div class="content flex justify-start flex-col items-center w-full">
        <div class="header">
            <h1>Edit Berita</h1>
        </div>
        <div class="w-full">
            <form action="{{ url('/dashboard/edit/' . $berita->id) }}" method="POST" onsubmit="return handleSubmit(event)"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col mb-5">
                    <label for="title" class="font-semibold text-xl mb-2">Judul Berita</label>
                    <input type="text" name="title" id="title" value="{{ $berita->title }}"
                        class="px-4 py-2 w-full rounded-lg" required>
                </div>
                <div class="flex flex-col mb-5">
                    <label for="author" class="font-semibold text-xl mb-2">Author</label>
                    <input type="text" name="author" id="author" value="{{ $berita->author }}"
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
                    <div id="konten-container">{!! $berita->content !!}</div>
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

</x-layout-dashboard>