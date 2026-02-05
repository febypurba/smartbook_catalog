
 @include('layout.header')
    <h3>Add Category</h3>
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" name="category_name" id="name" placeholder="Add Name Category">
        </div>
        <button type="submit" class="tombol">Submit</button>
    </form>
    
@include('layout.footer')