@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Sửa Thông Tin User</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="{{route('admin.review.edit',$item->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="reviewName">Name:</label>
                                <input type="text" class="form-control" id="reviewName" name="review_name" placeholder="Nhập tên ..." value="{{$item->name}}">
                            </div>
                            <div class="form-group">
                                <label for="reviewPreviewImage">Preview_image:</label>
                                <input type="text" class="form-control" id="reviewPreviewImage" name="review_preview_image" placeholder="Nhập img ..." value="{{$item->preview_image}}">
                            </div>
                            <div class="form-group">
                                <label for="reviewContent">Content:</label>
                                <input type="text" class="form-control" id="reviewContent" name="review_content" placeholder="Nhập nội dung ..." value="{{$item->content}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
