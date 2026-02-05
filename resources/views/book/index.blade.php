
 @include('layout.header')
    <h3>Book</h3>
    <a href="{{route('book.create')}}" class="tombol">Add</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Publisher</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allBook as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->title}}</td>
                <td>{{ $r->author }}</td>
                <td>{{ $r->publication_name }}</td>
                <td>{{ $r->publisher->publisher_name ?? '-' }}</td>
                <td>{{ $r->category->category_name ?? '-' }}</td>
                <td>
                    <form action="{{ route('book.destroy', $r->id) }}" method="POST">
                        <a href="{{route('book.show', $r->id)}}" class="tombol">Detail</a>
                        <a href="{{route('book.edit', $r->id)}}" class="tombol">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="tombol">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@include('layout.footer')