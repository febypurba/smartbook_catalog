
 @include('layout.header')
    <h3>Add Publisher</h3>
    <form action="{{route('publisher.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Publisher Name:</label>
            <input type="text" name="publisher_name" id="name" placeholder="Add Name Publisher">
        </div>
        <button type="submit" class="tombol">Submit</button>
    </form>
    
@include('layout.footer')