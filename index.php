<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

</head>

<body>

<div class="warpper">
    <div class="header">
        <div class="header-top">
            <div class="clear-fix">
                <div class="col col-50">
                    <div class="header-left">
                        <span>Hotline: 0374196777</span>
                    </div>
                </div>
                <div class="col col-50">
                    <div class="header-right">
                        <ul>
                            <li><a href="#"><i class="fas fa-list-ol"> Kiểm tra đơn hàng</i></a></li>
                            <li><a href="#"><i class="fas fa-shopping-cart"> Giỏ hàng</i></a></li>
                            <li><a href="#"><i class="fas fa-sign-in-alt"> Đăng nhập</i></a></li>
                            <li><a href="#"><i class="fas fa-user-plus"> Đăng ký</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="main-header">
            <div class="clear-fix">
                <div class="col col-50">
                    <div class="image">
                        <img src="img/logo.png">
                    </div>
                </div>
                <div class="col col-50">
                    <div class="search">
                            <input type="text" name="" placeholder="Search..." />
                        <button><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu">
            <ul>
                <li class="page-main"><a href="#">TRANG CHỦ</a></li>
                <li><a href="#">SẢN PHẨM</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
            </ul>
        </div>
    <div class="slideshow-container">
        <h2></h2>
        <div class="mySlides fade">
            <img src="img/banner5.jpg" style="width:100%; height: 80%">
            <div class="text">Nội dung caption của slide đầu tiên!</div>
        </div>

        <div class="mySlides fade">
            <img src="img/banner6.jpg" style="width:100%; height: 80%">
            <div class="text">Nội dung caption của slide thứ 2!</div>
        </div>

        <div class="mySlides fade">
            <img src="img/banner7.jpg" style="width:100%; height: 80%">
            <div class="text">Nội dung caption của slide thứ 3!</div>
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
    </div>

    <div class="content">
        <div class="clear-fix"
            <div class="col col-30">
                <div class="menu-doc">

                    <ul>
                        <span>SẢN PHẨM NỔI BẬT</span>
                        <li><a href="#"</a>Áo
                            <ul class="sub-menu">
                                <li><a href="#"></a>Áo nữ</li>
                                <li><a href="#"></a>Áo nam</li>
                                <li><a href="#"></a>Áo công sở</li>
                            </ul>
                        </li>
                        <li><a href="#"</a>Quần
                            <ul class="sub-menu">
                                <li><a href="#">Quần nữ</a></li>
                                <li><a href="#">Quần nam</a></li>
                                <li><a href="#">Quần công sở</a></li>
                            </ul>
                        </li>
                        <li><a href="#"</a>Váy</li>
                        <li><a href="#"</a>Phụ kiện</li>
                        <li><a href="#"</a>Sản phẩm nổi bật</li>
                    </ul>
                </div>

            </div>
                    <div class="col col-70">
                        <div class="product">
                            <ul>
                                <img src="img/sanpham1.jpg">
                                <span>Đầm 01 <br> Giá: 300.000 VNĐ</span>
                            </ul>
                            <ul>
                                <img src="img/sanpham1.jpg">
                                <span>Đầm 01 <br> Giá: 300.000 VNĐ</span>
                            </ul>
                            <ul>
                                <img src="img/sanpham1.jpg">
                                <span>Đầm 01 <br> Giá: 300.000 VNĐ</span>
                            </ul>
                        </div>
                    </div>
    </div>
</div>
</div>

</div>


</body>
<script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex].style.display = "block";
        dots[slideIndex].className += " active";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
            slideIndex = 0
        }
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 5000);
    }
    //mặc định hiển thị slide đầu tiên
    showSlides(slideIndex = 0);


    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
</script>
</html>