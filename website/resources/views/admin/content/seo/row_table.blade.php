@foreach($seos as $item)
    <tr>
        <th scope="row">{{$item->id }}</th>
        <td>{{$item->seo_keywords}}</td>
        <td>{{$item->seo_title}}</td>
        <td>{{$item->seo_description}}</td>
        <td>{{$item->seo_script}}</td>
{{--        <td>--}}
{{--            <a href="{{route('admin.seo.destroy',$item->id )}}" onclick="return confirm('Bạn có muốn xóa không?');">--}}
{{--                <button type="button" class="btn btn-danger mb-3"><i class="fa fa-trash" aria-hidden="true" style="margin:0;"></i></button>--}}
{{--            </a>--}}
{{--        </td>--}}
    </tr>
@endforeach
