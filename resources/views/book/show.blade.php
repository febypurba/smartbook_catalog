
 @include('layout.header')
    <h3>Book</h3>
    <a href="{{route('book.create')}}" class="tombol">Add</a>
    <table>
        <tbody>
            <tr>
                <td width="150px">Title</td>
                <td width="2px">:</td>
                <td>{{ $book->title }}</td>
            </tr>
            <tr>
                <td>Author</td>
                <td>:</td>
                <td>{{ $book->author }}</td>
            </tr>
            <tr>
                <td>Publication Year</td>
                <td>:</td>
                <td>{{ $book->publication_name }}</td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td>:</td>
                <td>{{ $book->publisher->publisher_name ?? '-' }}</td>
            </tr>
            <tr>
                <td>Category</td>
                <td>:</td>
                <td>{{ $book->category->category_name ?? '-' }}</td>
            </tr>
        </tbody>
    </table>
@include('layout.footer')