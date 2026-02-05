
 @include('layout.header')
    <h3>Category</h3>
    <a href="{{route('category.create')}}" class="tombol">Add</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allCategories as $key => $r)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $r->category_name}}</td>
                <td>
                    <form action="{{ route('category.destroy', $r->id) }}" method="POST">
                        <a href="{{route('category.show', $r->id)}}" class="tombol">Detail</a>
                        <a href="{{route('category.edit', $r->id)}}" class="tombol">Edit</a>
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