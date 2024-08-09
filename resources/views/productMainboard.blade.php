<!doctype html>
<html lang="en">

<head>
    @include('parts.head')
</head>

<body>
    <div class="wrapper">
        @include('parts.header')









    </div>
    <!-- sản phẩm mainboard -->
    <div class="Mainboard mt-4">
        <div class="container">
            <h2 class="text-center" style="color: #0099ff; font-weight: bold;">
                <a id="ProductMainboard"> Mainboard</a>
            </h2>
            <div class="mt-4" style="width: 200px; margin: 0 auto; border-bottom: 1px solid; margin-top: 20px;"></div>
            <div class="row mt-4">
                @foreach($mainboards as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ route('productMainboard_detail', $product->id) }}"><img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}"></a>
                        <div class="card-body">
                            <a style="text-decoration: none; color:inherit" href="{{ route('productMainboard_detail', $product->id) }}">
                                <h5 class="card-title">{{ $product->name }}</h5>
                            </a>
                            <p class="card-text">{{ $product->loai }}</p>
                            <p><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
                            <p><span style="color: #0099ff;"><i class="fa-solid fa-check"></i></span> Còn hàng</p>
                            <p><span style="color: #c0c0c0;font-size: small;"><del>{{number_format($product->price_nomal) }}</del></span>
                                <span style="color: #0099ff;font-weight: bolder;">{{number_format($product->price_sale) }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- sẩn phẩm nổi bậc -->

    <!-- footer -->
    @include('parts.footer')
</body>

</html>