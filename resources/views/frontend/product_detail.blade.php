@extends('layout.site')
@section('title','Chi tiet san pham')
@section('maincontent')
<div>
    <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
    font-weight: 400;
    font-style: normal; font-size:80px">Chi tiết sản phẩm</h1>
    <div class="product-container" >
       
        <div class="card_img" style="width:0px">
            <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Suz Product Image">
        </div>
        <div class="product-info" >
            <h2>Dầu dưỡng da Phytoceuticals Argan</h2>
            <p class="brand">Thương hiệu: USA store Salon</p>
            <p class="price_detail" style="color: #ff9897;margin-bottom:20px;font-weight:bold;font-size:20px">169.000đ</p>
            <div class="quantity-controls">
                <button onclick="decreaseQuantity()">-</button>
                <input type="number" id="quantity" value="1" min="1">
                <button onclick="increaseQuantity()">+</button>
            </div>
            <div class="description" style="margin-top:20px">
                <span>
                    Mô tả: 
                </span>
            </div>
            <button class="add-to-cart"style = "border:none;background-color:#ff9897;color:#fff;padding:10px;font-weight:bold;margin-top:20px">Cho vào giỏ hàng</button>

           
        </div>
    </div>
</div>
@endsection