@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách Blog:</h4>
                        </div>
                        <a href="{{route('post.add')}}"><button type="button" class="btn btn-success">Thêm bài viết</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">{{$post->name}}</h4>
                            </div>
                            <a href="{{route('post.edit',$post->id)}}"><button type="button" class="btn btn-success">Sửa bài viết</button></a>
                        </div>
                        <div class="iq-card-body" style="overflow: auto;">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
