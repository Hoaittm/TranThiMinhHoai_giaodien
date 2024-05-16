<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css.map') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> --}}
    <title>@yield('title')</title>

    <style>

        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
            height: auto;
        }
        .owl-carousel .owl-item .card-text {
            text-align: center;
            margin-top: 10px;
        }
        .owl-carousel .owl-item .sale-price {
            color: red;
            text-align: center;
        }
    </style>
        @yield('header')
</head>
<body>
 
        <header class="header">

            <div class="wrap_top_bar">
                <div class="container">
                    <div class="row">
                        <div class="topbar d-flex align-items-center justify-content-between">
                            <div class="topnar_left col-lg-7 col-md-7 col-sm-6">
                                <ul class="d-flex list-inline ml-2  ">
                                    <li>
                                        <span class="icon_style_base p-2">
                                            <i class="fa-solid fa-phone-volume"></i>
                                        </span>
                                        <a class="hai01" href="#">19006750</a>
                                    </li>
                                    <li class="hidden-xs">
                                        <span class="icon_style_base p-2">
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                        <a class="hai02" href="#">coolteam@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topbar_right col-lg-5 col-md-5 col-sm-6 col-xs-12 a-right">
                                <ul class=" d-flex list-inline ">
                                    <li class="hidden-xs ">
                                        <a href="#" title="Kiểm tra đơn hàng">
                                            <span class="icon_style_base p-2">
                                                <i class="fa-solid fa-clipboard" style="color: #000000;"></i>
                                            </span>
                                            Kiểm tra đơn hàng
                                        </a>
                                    </li>
                                    <li class="hidden-xs">
                                        <a href="#" title="Hệ thống cửa hàng">
                                            <span class="icon_style_base p-2">
                                                <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
                                            </span>
                                            Hệ thống cửa hàng
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-header wid_100  ">
                <div class="container "> 
                    <div class="row">
                        <div class="content_header">
                            <div class="header-main pt-3 pb-3">
                                <div class="col-lg-3 col-md-3">
                                    <div class="logo flex_155">
                                        <a href="/">
                                            <img src="{{ asset('images/logo.webp') }}" alt="">
                                        </a>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
                                    <div class="flex_155">
                                        <div class="header_search header_searchs hidden-sm hidden-xs">
                                            <form  action="/" method="post">
                                                <input style="width: 400px;border:1px solid #ff9897;padding:10px" type="text" name="search_query" placeholder="Tìm kiếm...">
                                                <button style="border:none;padding:10px;background:#ff9897;color:#fff" type="text" type="submit">Tìm kiếm</button>
                                              </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                    <div class="top-cart-contain f-right flex_155 topbar_right">
                                        <ul class="ul-account hidden-xs">
                                            <li class="login_content dropdown">
                                                <a href="#" class="hidden-xs hidden-sm hidden-md dropdown-toggle">
                                                    <img class="hinh" src="{{ asset ('images/businessman.svg') }}" alt="Tạo tài khoản & Đăng nhập">
                                                </a>
                                                <ul class="ul_account dropdown-content">
                                                    <div class="arrow-up"></div> <!-- Mũi tên -->
                                                    <li class="login">
                                                        <a href="#">Đăng nhập</a>
                                                    </li>
                                                    <li class="signin">
                                                        <a href="#">Đăng ký</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                        <div class="mini-cart text-xs-center">
                                            <div class="heading-cart cart_header">
                                                <a href="#" class="img_hover_cart" title="Giỏ hàng">
                                                    <div class="icon_hotline">
                                                        <img class= "hinh"src="{{ asset ('images/shopping-cart.svg') }}" alt="Cool Beauty" >
                                                        <span class="count_item count_item_pr">0</span>
                                                    </div>
                                                </a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #ff6564" class="wrap_main hidden-xs hidden-sm">
                <div style=" padding:20px" class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row row-noGutter-2">
                                <div class="header-nav">
                                    <ul class="item_big">
                                        <li class="nav-item active">
                                            <a href="#"class="a-img">
                                                <span>TRANG CHỦ</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#"class="a-img">
                                                <span>GIỚI THIỆU</span>
                                            </a>
                                        </li>
                                        <li class="nav-item has-mega ">
                                            <a href="#"class="a-img">
                                                <span>SẢN PHẨM</span>
                                            </a>
                                            <div class="mega-content">
                                                <div class="level0-wrapper2">
                                                    <div class="nav-block nav-block-center">
                                                        <div class=" parent-mega-menu ">
                                                            <ul class="level0">
                                                              <li style="margin-left:10px;margin-top:10px" >Dưỡng da</li>
                                                              <li>Kem chống nắng</li>
                                                              <li>Trang điểm</li>
                                                              <li>Chăm sóc cơ thể</li>
                                                              <li>Sức khỏe & làm đẹp</li>
                                                               
                                                                
                                                                
                                                               
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </li>   
                                        <li class="nav-item">
                                            <a class="a-img" href="#">
                                                <span>KHUYẾN MÃI HOT</span>
                                            </a>
                                            
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="#"class="a-img">
                                                <span>TIN TỨC</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#"class="a-img">
                                                <span>LIÊN HỆ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="awe-section-1">
                <div class="my">
                    <div id="carouselExampleControls" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('images/slider_1.webp')  }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/slider_1.webp')  }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('images/slider_1.webp')  }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            
                    
                </div>
                
               </section>
        </header>

    <main>
        @yield('maincontent')
    </main>
    <footer class="footer">
        <div class="mid-footer lazyload" data-src="//bizweb.dktcdn.net/100/336/334/themes/939194/assets/bg_cosmetics.jpg?1706112573342" data-was-processed="true" style="background-image: url(&quot;//bizweb.dktcdn.net/100/336/334/themes/939194/assets/bg_cosmetics.jpg?1706112573342&quot;);">
            <div class="container">
                <div class="row">
                    <div style="margin-top: 20px;" class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="widget_first_child">
                            <div class="logo_footer" style="margin-bottom: 12px;">
                                <a href="/" class="logo-wrapper">					
                                    <img src="//bizweb.dktcdn.net/100/336/334/themes/939194/assets/logo_footer.png?1706112573342" alt="logo ">					
                                </a>
                            </div>
                            <div class="widget-ft-top">
                                <h5 class="title-menu-top">
                                    <span>
                                        Shop mỹ phẩm Cool Beauty<br>Làm đẹp trở nên dễ dàng hơn
                                    </span>
                                </h5>
                                <div class="hotline_footer">
                                    <ul>
                                        <li>
                                            Địa chỉ: 
                                            Toà nhà Ladeco, 266 Đội Cấn, phường Liễu Giai, Quận Ba Đình, Hà Nội
                                            
                                        </li>
                                        <li>
                                            
                                            Hotline: <a class="hai01" href="tel:19006750">1900 6750</a>
                                            
                                        </li>
                                        <li>
                                            
                                            Email: <a href="mailto:coolteam@gmail.com">coolteam@gmail.com</a>
                                                
    
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 20px;"class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="widget_first_child">
                                    <div class="logo_footer" style="margin-bottom: 12px;">
                                                            
                                            <h6>HỖ TRỢ KHÁCH HÀNG</h6>					
                                        
                                    </div>
                                    <div class="widget-ft-top">
                                        
                                        <div class="hotline_footer">
                                            <ul>
                                                <li>
                                                    Trang chủ
                                                    
                                                </li>
                                                <li>
                                                    
                                                   Giới thiệu
                                                    
                                                </li>
                                                <li>
                                                    
                                                    Sản phẩm
                                                        
            
                                                </li>
                                                <li>
                                                    
                                                    Khuyến mãi hot
                                                        
            
                                                </li>
                                                <li>
                                                    
                                                    Tin tức
                                                        
            
                                                </li>
                                                <li>
                                                    
                                                    Liên hệ
                                                        
            
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="widget_first_child">
                                    <div class="logo_footer" style="margin-bottom: 12px;">
                                                            
                                            <h6>CHÍNH SÁCH</h6>					
                                        
                                    </div>
                                    <div class="widget-ft-top">
                                        
                                        <div class="hotline_footer">
                                            <ul>
                                                <li>
                                                    Trang chủ
                                                    
                                                </li>
                                                <li>
                                                    
                                                   Giới thiệu
                                                    
                                                </li>
                                                <li>
                                                    
                                                    Sản phẩm
                                                        
            
                                                </li>
                                                <li>
                                                    
                                                    Khuyến mãi hot
                                                        
            
                                                </li>
                                                <li>
                                                    
                                                    Tin tức
                                                        
            
                                                </li>
                                                <li>
                                                    
                                                    Liên hệ
                                                        
            
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="widget-ft last social_footer">
                                    <div class="social_footer">
                                        <h6 class="title-menu icon_none_first icon_title_last">
                                            <a>KẾT NỐI VỚI CHÚNG TÔI</a>
                                        </h6>
                                        <ul class="follow_option">	
                                            
                                            <li>
                                                <a href="#" title="Theo dõi Facebook Cool Beauty"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            
                                            
                                            <li>
                                                <a href="#" title="Theo dõi Twitter Cool Beauty"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            
                                            
                                            <li>
                                                <a href="#" title="Theo dõi Google Cool Beauty"><i class="fab fa-google"></i></a>
                                            </li>
                                            
                                            
                                            <li>
                                                <a href="#" title="Theo dõi Instagam Cool Beauty"><i class="fab fa-instagram"></i></a>
                                            </li>
                                            
                                            
                                            <li>
                                                <a href="#" title="Theo dõi Youtube Cool Beauty"><i class="fab fa-youtube"></i></a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <div class="mail_footer">
                                        <h6 class="title-menu icon_none_first title_mail">
                                            <a>PHƯƠNG THỨC THANH TOÁN</a>
                                        </h6>
                                        <ul class="contact" style="margin-left: -15px">
                                            <li>
                                                <a href="#"><img style="width:250px" src="//bizweb.dktcdn.net/100/336/334/themes/939194/assets/i_payment.png?1706112573342" alt="Cool Beauty"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
    @yield('footer')
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    <script src="{{ asset('jquery/jquery-3.7.1.min.map') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>
    <script>
        // Owl Carousel initialization
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
</body>
</html>