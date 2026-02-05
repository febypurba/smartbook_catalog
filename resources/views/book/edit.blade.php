
 @include('layout.header')
    <h3>Edit Book</h3>
    <form action="{{route('book.update', $book->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}">
        </div>

        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}">
        </div>

        <div class="form-group">
            <label for="publication_name">Publication Year:</label>
            <input type="text" name="publication_name" id="publication_name" value="{{ old('publication_name', $book->publication_name) }}">
        </div>

        <div class="form-group">
            <label for="publisher_id">Publisher:</label>
            <select name="publisher_id" id="publisher_id">
                <option value="">-- Select Publisher --</option>
                @foreach($publisher as $p)
                    <option value="{{ $p->id }}" @if($p->id == $book->publisher_id) selected @endif>{{ $p->publisher_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                <option value="">-- Select Category --</option>
                @foreach($category as $c)
                    <option value="{{ $c->id }}" @if($c->id == $book->category_id) selected @endif>{{ $c->category_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="tombol">Update</button>
    </form>
    
@include('layout.footer')