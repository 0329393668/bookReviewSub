@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Sửa Thông Tin Sản Phẩm:</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <form action="{{route('admin.menu.edit',$item->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="menuName">Menu_name:</label>
                                <input type="text" class="form-control" id="menuName" name="menu_name" placeholder="Nhập tên ..." value="{{$item->menu_name}}">
                            </div>
                            <div class="form-group">
                                <label for="menuUrl">Menu_url:</label>
                                <input type="text" class="form-control" id="menuUrl" name="menu_url" placeholder="Nhập img ..." value="{{$item->menu_url}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
