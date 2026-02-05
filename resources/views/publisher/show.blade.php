
 @include('layout.header')
    <h3>Publisher</h3>
    <a href="{{route('publisher.create')}}" class="tombol">Add</a>
    <table>
        <tbody>
            <tr>
                <td width="150px">Publisher Name</td>
                <td width="2px">:</td>
                <td>{{$publisher->publisher_name}}</td>
            </tr>
        </tbody>
    </table>
@include('layout.footer')