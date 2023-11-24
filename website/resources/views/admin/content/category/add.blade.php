@extends("layout.adminLayoutPage")
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Thêm Danh Mục Mới</h4>
                    </div>
                </div>
                <div class="iq-card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                    <form action="{{route('admin.category.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="categoryName">Tên danh mục:</label>
                            <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Nhập tên danh mục ...">
                        </div>
                        <div class="form-group">
                            <label for="categorySlug">Slug:</label>
                            <input type="text" class="form-control" id="categorySlug" name="category_slug" placeholder="Nhập slug của danh mục ...">
                        </div>
                        <div class="form-group">
                            <label for="categoryParentId">Danh mục cha:</label>
                            <select class="form-control" id="categoryParentId" name="category_parent_id">
                                <option value="0">Không có danh mục cha</option>
                                @include('admin.content.category.category_option', ["categories" =>$categories, 'level' => 0])
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection
