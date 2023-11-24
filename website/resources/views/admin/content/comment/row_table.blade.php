@foreach($comments as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{$item->review_id}}</td>
        <td>{{$item->user_id}}</td>
        <td>{{$item->parent_id}}</td>
        <td>{{$item->content}}</td>
        <td>
            <a href="{{route('admin.comment.destroy',$item->id )}}" onclick="return confirm('Bạn có muốn xóa không?');">
                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true" style="margin:0;"></i></button>
            </a>
        </td>
    </tr>
@endforeach
