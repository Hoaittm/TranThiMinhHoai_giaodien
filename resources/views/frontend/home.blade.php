@extends('layout.site')
@section('title','Trang chu')
@section('maincontent')
<div>
    {{-- <section class="awe-section-4">
        <div class="container">
            <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:80px">Sản phẩm nổi bật</h1>
            <div class="owl-carousel owl-theme product-carousel">
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dầu dưỡng da Phytoceuticals Argan</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">169.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/3678cdc3759874425a3e920b4a9cd4.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước sơn vẽ móng Mira AROMA art club<p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">500.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/4ef3217c56c404220bdaba5057d92e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dung dịch giúp loại bỏ sơn móng</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">150.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/dolce.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Dolce & Gabbna</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">270.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/nuochoa.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Giorgio Valenti</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">590.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/phan.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Phấn mắt Moonshadow Baked</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">679.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="awe-section-4">
        <div class="container">
            <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:80px">Sản phẩm nổi bật</h1>
            <div class="product-row" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dầu dưỡng da Phytoceuticals Argan</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">169.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/3678cdc3759874425a3e920b4a9cd4.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước sơn vẽ móng Mira AROMA art club<p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">500.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/4ef3217c56c404220bdaba5057d92e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dung dịch giúp loại bỏ sơn móng</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">150.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/dolce.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Dolce & Gabbna</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">270.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/nuochoa.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Giorgio Valenti</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">590.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/phan.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Phấn mắt Moonshadow Baked</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">679.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
    {{-- <section class="awe-section-5">
        <div class="container">
            <h1 style="text-align: center; padding-top:20px; font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:80px">Sản phẩm mới</h1>
            <div class="owl-carousel owl-theme product-carousel">
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dầu dưỡng da Phytoceuticals Argan</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">169.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/3678cdc3759874425a3e920b4a9cd4.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước sơn vẽ móng Mira AROMA art club<p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">500.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/4ef3217c56c404220bdaba5057d92e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dung dịch giúp loại bỏ sơn móng</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">150.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/dolce.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Dolce & Gabbna</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">270.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/nuochoa.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Giorgio Valenti</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">590.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/phan.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Phấn mắt Moonshadow Baked</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">679.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="awe-section-5">
        <div class="container">
            <h1 style="text-align: center; padding-top:20px; font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:80px">Sản phẩm mới</h1>
            <div class="product-row" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dầu dưỡng da Phytoceuticals Argan</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">169.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/3678cdc3759874425a3e920b4a9cd4.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước sơn vẽ móng Mira AROMA art club<p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">500.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/4ef3217c56c404220bdaba5057d92e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dung dịch giúp loại bỏ sơn móng</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">150.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/dolce.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Dolce & Gabbna</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">270.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/nuochoa.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Giorgio Valenti</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">590.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset('images/phan.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Phấn mắt Moonshadow Baked</p>
                            <p class="card-text" style="display: inline-block;font-weight:bold">679.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
       {{-- <section class="awe-section-6">
        <div class="container">
            <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:80px">Sản phẩm khuyến mãi</h1>
            <div class="owl-carousel owl-theme product-carousel">
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dầu dưỡng da Phytoceuticals Argan</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">196.000đ</p>
                            <p style="display: inline-block; margin-left: 95px;font-weight:bold" class="sale-price">169.000đ</p>
                            <button style="display: inline-block; margin-left: 55px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
              
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/4ef3217c56c404220bdaba5057d92e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dung dịch giúp loại bỏ sơn móng</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">150.000đ</p>
                            <p style="display: inline-block; margin-left: 95px;font-weight:bold" class="sale-price">145.000đ</p>
                            <button style="display: inline-block; margin-left: 55px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/dolce.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Dolce & Gabbana</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">270.000đ</p>
                            <p style="display: inline-block; margin-left: 95px;font-weight:bold" class="sale-price">148.000đ</p>
                            <button style="display: inline-block; margin-left: 55px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/nuochoa.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Giorgio Valenti</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">590.000đ</p>
                            <p style="display: inline-block; margin-left: 95px;font-weight:bold" class="sale-price">489.000đ</p>
                            <button style="display: inline-block; margin-left: 55px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/3678cdc3759874425a3e920b4a9cd4.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước sơn vẽ móng Mira AROMA art club</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">500.000đ</p>
                            <p style="display: inline-block; margin-left: 95px;font-weight:bold" class="sale-price">450.000đ</p>
                            <button style="display: inline-block; margin-left: 55px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/phan.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Phấn mắt Moonshadow Baked</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">669.000đ</p>
                            <p style="display: inline-block; margin-left: 95px;font-weight:bold" class="sale-price">450.000đ</p>
                            <button style="display: inline-block; margin-left: 55px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="awe-section-6">
        <div class="container">
            <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:80px">Sản phẩm khuyến mãi</h1>
            <div class="product-row" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dầu dưỡng da Phytoceuticals Argan</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">196.000đ</p>
                            <p style="display: inline-block; margin-left: 20px;font-weight:bold" class="sale-price">169.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/4ef3217c56c404220bdaba5057d92e.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Dung dịch giúp loại bỏ sơn móng</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">150.000đ</p>
                            <p style="display: inline-block; margin-left: 20px;font-weight:bold" class="sale-price">145.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/dolce.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Dolce & Gabbana</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">270.000đ</p>
                            <p style="display: inline-block; margin-left: 20px;font-weight:bold" class="sale-price">148.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/nuochoa.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước hoa Giorgio Valenti</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">590.000đ</p>
                            <p style="display: inline-block; margin-left: 20px;font-weight:bold" class="sale-price">489.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/3678cdc3759874425a3e920b4a9cd4.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Nước sơn vẽ móng Mira AROMA art club</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">500.000đ</p>
                            <p style="display: inline-block; margin-left: 20px;font-weight:bold" class="sale-price">450.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="product" style="flex: 1; min-width: 200px; margin: 10px;">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <img src="{{ asset ('images/phan.webp') }}" alt="">
                            <p class="card-text" style="display: inline-block;">Phấn mắt Moonshadow Baked</p>
                            <p class="card-text" style="display: inline-block; text-decoration: line-through;font-weight:bold">669.000đ</p>
                            <p style="display: inline-block; margin-left: 20px;font-weight:bold" class="sale-price">450.000đ</p>
                            <button style="display: inline-block; margin-left: 25px;background: #ff9897;border:none;color:#fff;padding:10px;font-weight:bold">Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    
    <section class="awe-section-7">
        <div class="container">
            <div class="row">
                <div style="text-align: center; margin: 10px;padding-top:20px;" class="title">
                    <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
            font-weight: 400;
            font-style: normal; font-size:60px">Tin tức & Khuyến mãi</h1>
                </div>
                <div class="product ">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset ('images/img-2275.webp') }}" alt="" srcset="">
                            <h6 class="card-text">Mách cho bạn bí quyết trị nám tại nhà hiệu quả nhất</h6>
                            <p class="card-text">Đăng bởi: Cool Team</p>
                            <p class="card-text">Da chúng ta dễ bị thâm nám là so tiếp xúc với ánh nắng mặt
                                 trời thường xuyên, chế đọi ăn uống nghỉ...</p>
                            <!-- Thêm hình ảnh sản phẩm 1 nếu có -->
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset ('images/marks-and-spencer-gift-sets.webp') }}" alt="" srcset="">
                            <h6 class="card-text">Xu hướng lông mày năm 2018 không thể không biết</h6>
                            <p class="card-text">Đăng bởi: Cool Team</p>
                            <p class="card-text">Nếu bạn đang có ý định làm đẹp đôi chân mày của mình nhưng không biết mẫu nào hot nhất trong năm...</p>
                            <!-- Thêm hình ảnh sản phẩm 2 nếu có -->
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset ('images/dsc-0863.webp') }}" alt="" srcset="">
                            <h6 class="card-text">Top 3 cushion chống nắng HOT nhất 2018 bạn gái sành điệu không thể bỏ qua</h6>
                            <p class="card-text">Đăng bởi: Cool Team</p>
                            <p class="card-text">Ngoài sự tiện dụng chỉ sau vài phút là có một lớp trang điểm thật đẹp thì 3 loại cushion dưới đây...</p>
                            <!-- Thêm hình ảnh sản phẩm 3 nếu có -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
    
</div>
    
@endsection