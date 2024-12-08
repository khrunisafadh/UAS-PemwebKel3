<form action="{{ isset($news) ? route('news.update', $news) : route('news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(isset($news))
        @method('PUT')
    @endif
    
    <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ $news->title ?? '' }}">
    </div>
    
    <div>
        <label>Content</label>
        <textarea name="content">{{ $news->content ?? '' }}</textarea>
    </div>
    
    <div>
        <label>Image</label>
        <input type="file" name="image">
    </div>
    
    <div>
        <label>Category</label>
        <select name="category">
            <option value="international">International</option>
            <option value="national">National</option>
        </select>
    </div>
    
    <button type="submit">Save</button>
</form>
