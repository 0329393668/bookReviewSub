@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách Sản Phẩm:</h4>
                        </div>
                        <a href="{{route('admin.menu.add')}}"><button type="button" class="btn btn-success">Thêm Sản Phẩm</button></a>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Menu_name</th>
                                    <th>Menu_url</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include("admin.content.menu.row_table",["menus"=>$menus])
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
