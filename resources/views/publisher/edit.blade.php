
 @include('layout.header')
    <h3>Edit Publisher</h3>
    <form action="{{route('publisher.update', $publisher->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Publisher Name:</label>
            <input type="text" name="publisher_name" id="publisher_name" value="{{ $publisher->publisher_name }}">
        </div>
        <button type="submit" class="tombol">Update</button>
    </form>
    
@include('layout.footer')