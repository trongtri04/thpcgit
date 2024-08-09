@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    <div class="admin-add-and-list-order-product">
        <div class="admin-add-content">
            <div class="admin-add-left">
                <div class="admin-add-two-input">
                    <input type="text" value="{{old('name')}}" name="name" placeholder="Tên sản phẩm">
                    <input type="text" value="{{old('hangsx')}}" name="hangsx" placeholder="Hãng sản xuất">
                </div>
                <div class="admin-add-two-input">
                    <input type="text" value="{{old('price_nomal')}}" name="price_nomal" placeholder="Giá bán">
                    <input type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Giá giảm">
                </div>
                <div class="admin-add-two-input">
                    <input type="text" value="{{old('baohanh')}}" name="baohanh" placeholder="Thời gian bảo hành">
                    <input type="text" value="{{old('loai')}}" name="loai" placeholder="Loại sản phẩm">
                </div>
                <button type="submit" class="main-btn">Thêm Sản Phẩm</button>
            </div>

            <div class="admin-add-right">
                <div class="admin-add-right-img">
                    <label for="file">Ảnh Sản Phẩm</label>
                    <input type="file" id="file">
                    <input type="hidden" name="image" id="input-file-img-hiden">
                    <div class="img-file" id="input-file-img">

                    </div>
                </div>

            </div>

        </div>

    </div>
    @csrf
</form>
@endsection
@section('footer')
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
@endsection