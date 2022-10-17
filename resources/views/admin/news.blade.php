@foreach($news as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td><a href="/admin/news/{{$row->id}}">{{$row->fullname}}</a></td>
            <td>{{$row->birthday}}</td>
            <td>{{$row->address}}</td>
            <td><a href="/admin/news/edit/{{$row->id}}">Edit</a><br>
                <form method="POST" action="/admin/news/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
@endforeach
