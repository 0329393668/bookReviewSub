@foreach($categories as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{str_repeat("----", $level)}}  {{$item->category_name}}</td>
        <td>{{$item->category_slug}}</td>

        <td>
            <a href="{{route('admin.category.edit',$item->id )}}">
                <button type="button" class="btn btn-warning mb-3"><i class="las la-pen" style="margin:0;"></i></button>
            </a>
            <a href="{{route('admin.category.destroy',$item->id )}}"
               onclick="return confirm('Bạn có muốn xóa không?');">
                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true" style="margin:0;"></i></button>
            </a>
        </td>
    </tr>
    @if($item->childs)
        @include('admin.content.category.row_table', ["categories"=>$item->childs, "level"=>$level+1])
    @endif
@endforeach
