@extends('admin.main')
@section('content')
<div class="admin-add-and-list-order-product">
    <div class="admin-product-list">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Giá bán</th>
                    <th>Giá giảm</th>
                    <th>Ngày đăng</th>
                    <th>Tùy chỉnh</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product -> id}}</td>
                    <td><img style="width: 70px;" src="{{asset($product -> image)}}" alt=""></td>
                    <td>{{$product -> name}}</td>
                    <td>{{$product -> price_nomal}}</td>
                    <td>{{$product -> price_sale}}</td>
                    <td>{{$product -> created_at}}</td>
                    <td>
                        <a href="/admin/product/edit/{{$product -> id}}" class="edit-btn" href="">Sửa</a>
                        |
                        <a onclick="removeRow(product_id = {{$product -> id}},url='/admin/product/delete' )" class="delete-btn" href="#">Xóa</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
@section('footer')
<script>
    function removeRow(product_id, url) {
        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')) {
            $.ajax({
                url: url,
                data: {
                    product_id
                },
                method: 'GET',
                dataType: 'JSON',
                success: function(res) {
                    if (res.success == true) {
                        location.reload();
                    }
                }
            })
        }
    }
</script>
@endsection