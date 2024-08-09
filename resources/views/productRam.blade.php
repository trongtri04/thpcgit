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
    <div class="RAM">
        <h2 style="text-align: center; color: #0099ff;">
            <a id="ram"> RAM-Random Access Memory</a>
        </h2>
        <div class="container">
            <div class="row g-3">
                @foreach($ram as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card">
                        <a href="{{ route('productRam_detail', $product->id) }}"><img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}"></a>
                        <div class="card-body">
                            <a style="text-decoration: none; color:inherit" href="{{ route('productRam_detail', $product->id) }}">
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