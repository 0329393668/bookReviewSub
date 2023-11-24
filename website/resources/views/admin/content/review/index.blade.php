@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách Reviews:</h4>
                        </div>
                        <a href="{{route('admin.review.add')}}"><button type="button" class="btn btn-success">Thêm Đánh Giá</button></a>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Preview_image</th>
                                    <th>Content</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include("admin.content.review.row_table",["reviews"=>$reviews])
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
