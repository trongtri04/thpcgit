@extends('admin.main')
@section('content')
<div class="admin-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Tùy biến</th>
            </tr>
        </thead>
        <tbody>
            @php
            $total = 0;
            @endphp
            @foreach($products as $product)


            @php
            $price = $product -> price_sale * $order_detail[$product-> id];
            $total += $price;
            @endphp

            <tr>
                <td>{{$product-> id}}</td>
                <td><img style="width: 70px;" src="{{asset($product-> image)}}" alt=""></td>
                <td>{{$product-> name}} </td>
                <td>{{number_format($product-> price_sale)}}</td>
                <td>{{$order_detail[$product-> id]}}</td>
                <td>{{number_format($price)}}</td>
                <td>
                    <a onclick="removeRow(product_id = {{$product -> id}},url='/admin/order/delete_detail' )" class="delete-btn" href="">Xóa</a>
                </td>
            </tr>
            @endforeach


            <tr>
                <td style="font-weight: 700;" colspan="5">Tổng cộng</td>
                <td style="font-weight: 700;">{{number_format($total)}}</td>
            </tr>

        </tbody>
    </table>
</div>
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
@endsection()