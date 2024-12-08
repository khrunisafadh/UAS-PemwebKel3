<div class="container">
    <h1>Manage News</h1>
    <a href="{{ route('news.create') }}" class="btn">Add News</a>
    
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category }}</td>
                    <td>
                        <a href="{{ route('news.edit', $item) }}">Edit</a>
                        <form action="{{ route('news.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
