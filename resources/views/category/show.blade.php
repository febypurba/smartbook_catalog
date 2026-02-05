
 @include('layout.header')
    <h3>Category</h3>
    <a href="{{route('category.create')}}" class="tombol">Add</a>
    <table>
        <tbody>
            <tr>
                <td width="150px">Category Name</td>
                <td width="2px">:</td>
                <td>{{$category->category_name}}</td>
            </tr>
        </tbody>
    </table>
@include('layout.footer')