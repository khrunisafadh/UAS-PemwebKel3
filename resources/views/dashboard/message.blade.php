<x-layout-dashboard>

    <section>
        <section class="my-10">
            <a href="{{ url('/dashboard/add') }}" class="px-5 py-3 bg-gray-100 rounded-lg hover:bg-gray-200">Tambah
                Berita</a>
        </section>
        <section class="ml-0 sm:ml-5 ">
            <section class="rounded-lg border-1 border-gray-200 bg-gray-50 w-full p-5 overflow-x-auto">
                <table id="myTable" class="table-auto" style="width:100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $new)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $new->created_at->diffForHumans() }}</td>
                                <td>{{ $new->name }}</td>
                                <td>{{ $new->email }}</td>
                                <td>{{ $new->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </section>
    </section>
    <script>
        const table = new DataTable('#myTable')
    </script>
</x-layout-dashboard>
