@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách danh mục:</h4>
                        </div>
                        <a href="{{route('admin.category.add')}}"><button type="button" class="btn btn-success">Thêm danh mục</button></a>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include("admin.content.category.row_table",["categories"=>$categories, "level"=>0])
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
