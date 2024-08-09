<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{asset('fontend/asset/hinh/logopc.png')}}" alt="Logo" width="100px" height="100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">TRANG CHỦ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        DANH MỤC SẢN PHẨM
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/productMainboard">Mainboard</a></li>
                        <li><a class="dropdown-item" href="/productCpu">CPU</a></li>
                        <li><a class="dropdown-item" href="/productSsd">SSD</a></li>
                        <li><a class="dropdown-item" href="/productHdd">HDD</a></li>
                        <li><a class="dropdown-item" href="/productVga">VGA</a></li>
                        <li><a class="dropdown-item" href="/productNguon">Nguồn</a></li>
                        <li><a class="dropdown-item" href="/productRam">Ram</a></li>
                        <li><a class="dropdown-item" href="/productCase">Vỏ Case</a></li>
                        <li><a class="dropdown-item" href="/productManhinh">Màn Hình</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="hotline d-flex align-items-center">
                        <button class="logohotline_btn">
                            <img src="{{asset('fontend/asset/hinh/logohotline.jpg')}}" alt="hotline">
                        </button>
                        <div class="h6">
                            HOTLINE HỖ TRỢ <br>
                            <span style="color:  #0099ff;">0987654321</span>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="hotline d-flex align-items-center">
                        <button class="logohotline_btn">
                            <img src="{{asset('fontend/asset/hinh/logoship.jpg')}}" alt="SHIP">
                        </button>
                        <div class="h6">
                            GIAO HÀNG TOÀN QUỐC <br>
                            <span style="color:  #0099ff;">FREE SHIP HCM</span>
                        </div>
                    </div>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <div class="search-box">
                    <input class="search-box_input" type="text" placeholder="Nhập thông tin cần tìm" aria-label="Search">
                    <button class="search-box__btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>



<div class="menu">
    <nav class="navbar">
        <ul class="list">
            <li><a href="#">PC Gaming cũ</a></li>
            <li><a href="#">Thu cũ đổi mới</a></li>
            <li><a href="#">Hệ thống Showroom</a></li>
            <li><a href="#">Khuyến mãi</a></li>
            <li><a href="#">Chính sách</a></li>
            <li><a href="#">Tin tức</a></li>
        </ul>
        <ul class="icon">
            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
            <li>|</li>
            <li><a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
            <li><a href="/admin"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </nav>

</div>