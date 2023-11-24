@foreach($configs as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{$item->key}}</td>
        <td>{{$item->value}}</td>
{{--        <td>--}}
{{--            <a href="{{route('admin.config.destroy',$item->id )}}" onclick="return confirm('Bạn có muốn xóa không?');">--}}
{{--                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true" style="margin:0;"></i></button>--}}
{{--            </a>--}}
{{--        </td>--}}
    </tr>
@endforeach
