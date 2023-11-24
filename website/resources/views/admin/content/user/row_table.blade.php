@foreach($users as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>

        <td>
            <a href="{{route('admin.user.edit',$item->id )}}">
                <button type="button" class="btn btn-warning mb-3"><i class="las la-pen" style="margin:0;"></i></button>
            </a>
            <a href="{{route('admin.user.destroy',$item->id )}}" onclick="return confirm('Bạn có muốn xóa không?');">
                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true" style="margin:0;"></i></button>
            </a>
        </td>
    </tr>
@endforeach
