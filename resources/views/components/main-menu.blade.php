<div style=" padding:20px" class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row row-noGutter-2">
                <div class="header-nav">
                    <ul class="item_big">
                        <li class="nav-item active">
                            <a href="{{ route('site.home') }}"class="a-img">
                                <span>TRANG CHỦ</span>
                            </a>
                        </li>
                        @foreach ($list as $item)
                        <li class="nav-item active">
                            <a href="{{ route('site.home') }}"class="a-img">
                                <span>{{ $item->name }}</span>
                            </a>
                        </li>
                        @endforeach
                        <li class="nav-item">
                            <a href="#"class="a-img">
                                <span>GIỚI THIỆU</span>
                            </a>
                        </li>
                        <li class="nav-item has-mega ">
                            <a href="{{ route('site.product') }}"class="a-img">
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
                            <a href="{{ route('site.contact') }}"class="a-img">
                                <span>LIÊN HỆ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>