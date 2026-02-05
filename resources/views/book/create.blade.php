
 @include('layout.header')
    <h3>Add Book</h3>
    <form action="{{ route('book.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Add Book Title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" placeholder="Add Author Name" value="{{ old('author') }}">
        </div>

        <div class="form-group">
            <label for="publication_name">Publication Year:</label>
            <input type="text" name="publication_name" id="publication_name" placeholder="Add Publication Year" value="{{ old('publication_name') }}">
        </div>

        <div class="form-group">
            <label for="publisher_id">Publisher:</label>
            <select name="publisher_id" id="publisher_id">
                <option value="">-- Select Publisher --</option>
                @foreach($publisher as $p)
                    <option value="{{ $p->id }}">{{ $p->publisher_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                <option value="">-- Select Category --</option>
                @foreach($category as $c)
                    <option value="{{ $c->id }}">{{ $c->category_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="tombol">Submit</button>
    </form>
@include('layout.footer')
