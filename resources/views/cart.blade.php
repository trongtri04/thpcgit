@extends('main')
@section('content')
<section class="cart-section p-to-top">
    <form action="/cart/send" method="post">
        <div class="container">
            <h2 class="mt-4" style="text-align: left; color: #0099ff;">Giỏ hàng</h2>

            <div class="row">
                <div class="cart-section-left col-12 col-sm-12 col-md-12 col-lg-7">
                    <h4 class="main-h4">Chi tiết Đơn hàng</h4>
                    <div class="cart-section-left-detail">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Thành tiền</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total = 0;
                                @endphp
                                @foreach($products as $product)
                                @php
                                $price = $product -> price_sale * Session::get('cart')[$product -> id];
                                $total+=$price;
                                @endphp
                                <tr>
                                    <td><img style="width: 70px;" src="{{asset($product -> image)}}" alt=""></td>
                                    <td>
                                        {{$product -> name}}
                                        <p><span style="color: #c0c0c0;font-size: small;"><del>{{number_format($product->price_nomal) }}</del></span>
                                            <span style="color: #0099ff;font-weight: bolder;">{{number_format($product->price_sale) }}</span>
                                        </p>

                                        <div class="productcpu_detail_right_quantity_input">
                                            <i class="ri-subtract-fill"></i>
                                            <input onkeydown="return false" class="quantity-input" name="product_id[{{$product -> id}}]" type="number" value="{{Session::get('cart')[$product ->id]}}">
                                            <i class="ri-add-line"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{number_format($price)}}</p>
                                    </td>
                                    <td><a href="/cart/delete/{{$product -> id}}"><i class="ri-delete-bin-fill">Xóa</i></a></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td style="font-weight: bold;" colspan="2">Tổng tiền</td>
                                    <td style="font-weight: bold; text-align: center;">{{number_format($total)}}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <button formaction="/cart/update" class="main-btn">Cập Nhật Giỏ Hàng</button>
                        <a style="text-decoration: none; font-style: italic; font-size: large; color: red;" href="/">Tiếp tục Mua hàng <i class="ri-arrow-go-back-line"></i></a>
                    </div>
                </div>


                <div class="cart-section-right col-12 col-sm-12 col-md-12 col-lg-5">
                    <h4>Thông tin Giao hàng</h4>
                    <span style="color: red;">
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </span>
                    <div class="cart-section-right-input-name-phone">
                        <input type="text" placeholder="Tên" name="name" id="">
                        <input type="text" placeholder="Điện thoại" name="phone" id="">
                    </div>
                    <div class="cart-section-right-input-email">
                        <input style="width: 49%;" type="email" placeholder="Email" name="email" id="">
                    </div>
                    <div class="cart-section-right-select">
                        <select name="city" id="tinh">
                            <option value="">Tỉnh/Tp</option>
                        </select>
                        <select name="district" id="quan">
                            <option value="">Quận/Huyện</option>
                        </select>
                        <select name="ward" id="phuong">
                            <option value="">Phường/Xã</option>
                        </select>
                    </div>
                    <div class="cart-section-right-input-address">
                        <input style="width: 49%;" type="text" placeholder="Địa chỉ" name="address" id="">
                    </div>
                    <div class="cart-section-right-input-note">
                        <input style="width: 49%;" type="text" placeholder="Ghi chú" name="note" id="">
                    </div>
                    <button class="main-btn">Gửi Đơn Hàng</button>


                </div>
            </div>
        </div>
        @csrf
    </form>

</section>
@endsection
@section('footer')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
<script src="https://esgoo.net/scripts/jquery.js"></script>
@endsection