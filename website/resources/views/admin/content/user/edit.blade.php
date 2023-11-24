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
                        <form action="{{route('admin.user.edit',$item->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="userName">Name:</label>
                                <input type="text" class="form-control" id="userName" name="user_name" placeholder="Nhập tên ..." value="{{$item->name}}">
                            </div>
                            <div class="form-group">
                                <label for="userPhone">Phone:</label>
                                <input type="text" class="form-control" id="userPhone" name="user_phone" placeholder="Nhập số điện thoại ..." value="{{$item->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="userEmail">Email:</label>
                                <input type="text" class="form-control" id="userEmail" name="user_email" placeholder="Nhập email ..." value="{{$item->email}}">
                            </div>
                            <div class="form-group">
                                <label for="userAddress">Address:</label>
                                <input type="text" class="form-control" id="userAddress" name="user_address" placeholder="Nhập địa chỉ ..." value="{{$item->address}}">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
