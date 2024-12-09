<x-layout-dashboard>
    <section class="pt-5">
        <section>
            <h1 class="text-3xl font-sourGummy">Tambah Berita</h1>
        </section>
        <section class="bg-white shadow-md rounded-lg p-5 mt-5 w-full mx-auto">
            <form action="{{ url('/dashboard/add') }}" method="post" class="space-y-5" enctype="multipart/form-data"
                onsubmit="return handleSubmit(event)">
                @csrf
                <!-- Title -->
                <div>
                    <label for="title" class="block text-gray-700 font-medium">Judul</label>
                    <input type="text" id="title" name="title" rows="4" placeholder="Masukkan Judul"
                        class="resize-none w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300 focus:outline-none"
                        required>
                </div>

                <!-- Jumlah -->
                <div>
                    <label for="author" class="block text-gray-700 font-medium">Author</label>
                    <input type="text" id="author" name="author" placeholder="Masukkan Author"
                        class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300 focus:outline-none"
                        required>
                </div>

                <div class="flex flex-col mb-5">
                    <label for="image" class="font-semibold text-xl mb-2">Gambar</label>
                    <input type="file" name="image" id="image" class="px-4 py-2 w-full rounded-lg bg-white"
                        required>
                </div>

                <div>

                    <label for="image" class="font-semibold text-xl">Konten</label>
                    <!-- Elemen untuk Quill Editor -->
                    <div id="konten-container"></div>
                    <!-- Input tersembunyi untuk mengirimkan data Quill -->
                    <input type="hidden" id="konten" name="konten">

                </div>
                <!-- Kategori -->
                <div>
                    <label for="category_id" class="block text-gray-700 font-medium">Kategori</label>
                    <select id="category_id" name="category_id"
                        class="w-full border rounded-lg p-2 mt-1 focus:ring focus:ring-blue-300 focus:outline-none"
                        onchange="setMaxValue()">
                        @foreach ($categories as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:ring focus:ring-blue-300 transition">
                        Simpan
                    </button>
                </div>
            </form>
        </section>
    </section>

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
