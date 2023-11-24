@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Danh sách Comment:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered" >
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Review_id</th>
                                    <th>Parent_id</th>
                                    <th>User_id</th>
                                    <th>Content</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @include("admin.content.comment.row_table",["comments"=>$comments])
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
