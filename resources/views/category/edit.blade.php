
 @include('layout.header')
    <h3>Edit Category</h3>
    <form action="{{route('category.update', $category->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" name="category_name" id="category_name" value="{{ $category->category_name }}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>
    
@include('layout.footer')