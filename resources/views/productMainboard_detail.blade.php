@extends('main')
@section('content')
<section class="productcpu_detail">
    <form action="/cart/add" method="post">
        <div class="container">
            <div class="row">
                <div class="productcpu_detail_left col-12 col-sm-12 col-md-12 col-lg-6">
                    <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="text-left">
                        <div class="productcpu_detail_right_info">
                            <h1>{{ $product->name }}</h1>
                            <p><span style="color: #c0c0c0;font-size: small;"><del>{{number_format($product->price_nomal) }}</del></span>
                                <span style="color: #0099ff;font-weight: bolder;">{{number_format($product->price_sale) }}</span>
                            </p>
                        </div>

                        <div class="productcpu_detail_right_decs">
                            <h2>Thông tin chung</h2>
                            <ul>
                                <li><span style="font-weight: bold;">Hãng sản xuất:</span> {{ $product->hangsx }}</li>
                                <li><span style="font-weight: bold;">Bảo hành:</span> {{ $product->baohanh }} tháng</li>
                            </ul>
                            <div class="productcpu_detail_right_quantity">
                                <h2>Số lượng</h2>
                                <div class="productcpu_detail_right_quantity_input">
                                    <i class="ri-subtract-fill"></i>
                                    <input onkeydown="return false" class="quantity-input" type="number" name="product_qty" value="1">
                                    <input type="hidden" name="product_id" value="{{$product -> id}}">
                                    <i class="ri-add-line"></i>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @csrf
    </form>
</section>
@endsection