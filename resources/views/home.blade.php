<!doctype html>
<html lang="en">

<head>
    @include('parts.head')
</head>

<body>
    <div class="wrapper">
        @include('parts.header')

        <div class="container-fluid">
            <div class="row">
                <div class="main">

                    <div class="sidebar bg-white" id="sidebar">
                        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
                        <h3>Linh Kiện</h3>
                        <a href="/productMainboard">Mainboard</a>
                        <a href="/productCpu">CPU</a>
                        <a href="/productSsd">SSD</a>
                        <a href="/productHdd">HDD</a>
                        <a href="/productVga">VGA</a>
                        <a href="/productNguon">Nguồn</a>
                        <a href="/productRam">Ram</a>
                        <a href="/productCase">Vỏ Case</a>
                        <a href="/productManhinh">Màn hình</a>
                    </div>




                    <div class="maincontent">
                        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('fontend/asset/hinh/hinh1.jpg')}}" class="d-block w-100" alt="dichvu" width="100px" height="450px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('fontend/asset/hinh/hinh2.jpg')}}" class="d-block w-100" alt="dichvu" width="100px" height="450px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('fontend/asset/hinh/hinh3.jpg')}}" class="d-block w-100" alt="dichvu" width="100px" height="450px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('fontend/asset/hinh/hinh4.jpg')}}" class="d-block w-100" alt="dichvu" width="100px" height="450px">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('fontend/asset/hinh/hinh5.jpg')}}" class="d-block w-100" alt="dichvu" width="100px" height="450px">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>




                    </div>
                </div>


            </div>
        </div>







    </div>

    <!-- sẩn phẩm nổi bậc -->
    <div class="noidungchinh bg-white">
        <div style="width: 200px; margin: 0 auto; border-bottom: 1px solid;"></div>
        <H2 style="color: #0099ff;text-align: center; margin-top: 20px;"> SẢN PHẨM NỔI BẬT!</H2>
        <div>
            <div class="container">

                <div class="row g-3 mt-2">
                    @foreach($products as $products)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">

                        <div class="card">
                            <a href="/product_detail/{{$products -> id}}">
                                <img src="{{asset($products -> image)}}" class="card-img-top" alt="cc1"></a>
                            <div class="card-body">
                                <a style="text-decoration: none; color:inherit" href="/product_detail/{{$products -> id}}">
                                    <h5 class="card-title">{{$products -> name}}</h5>
                                </a>
                                <p class="card-text">{{$products -> loai}}</p>
                                <p><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></p>
                                <p><span style="color: #0099ff;"><i class="fa-solid fa-check"></i></span> Còn hàng</p>
                                <p><span style="color: #c0c0c0;font-size: small;"><del>{{number_format($products->price_nomal) }}</del></span>
                                    <span style="color: #0099ff;font-weight: bolder;">{{number_format($products->price_sale) }}</span>
                                </p>

                            </div>
                        </div>
                    </div>
                    @endforeach







                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    @include('parts.footer')
</body>

</html>