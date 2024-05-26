@extends('layout.site')
@section('title','San pham')
@section('maincontent')
<div>
    <div class="container_product">
        <h1 style="text-align: center; padding-top:20px;font-family: Pacifico, cursive;
        font-weight: 400;
        font-style: normal; font-size:80px">Tất cả sản phẩm</h1>
        

        
        <div style="margin-left:70px;margin-top:30px" class="filter-sort">
            <select id="filter" style="width:200p;height:40px">
                <option value="all">All</option>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
            </select>
            <select id="sort"style="width:200px;height:40px">
                <option value="name">Sort by Name</option>
                <option value="price">Sort by Price</option>
                <option value="category">Sort by Category</option>
            </select>
            <select id="sort"style="width:200px;height:40px">
                <option value="name">Sort by Price</option>
                <option value="price">Sort by Price</option>
                <option value="category">Sort by Category</option>
            </select>
            <select id="sort"style="width:200px;height:40px">
                <option value="name">Sort by Name</option>
                <option value="price">Sort by Price</option>
                <option value="category">Sort by Category</option>
            </select>
        </div>
       
            <div style="margin-left:100px; display: flex; flex-wrap: wrap; gap: 20px;margin-top:30px;margin-bottom:30px" class="product-grid">
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                        <a href="{{ route('site.product.detail', ['slug' => '1']) }}"><i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i></a>
                    </div>
                </div>
           
            
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                      <a href="{{ route('site.product.detail',['slug' => '1']) }}"> <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i></a>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
                <div style="width: 300px;padding:10px" class="product card">
                    <img src="{{ asset('images/1274ecabd26e54bcabcb0050da454e.webp') }}" alt="Product 1">
                    <div class="title" style="height: 50px; display: flex; align-items: center;">
                        <p class="card-text" style="flex: 1;font-size:18px">Dầu dưỡng da Phytoceuticals Argan</p>
                    </div>
                    <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 10px;">
                        <h5 class="card-text" style="font-weight: bold;color:#ff9897">169.000đ</h5>
                       <i class="fa-solid fa-circle-plus" style="color: #ff6564;font-size:30px;margin-right:30px"></i>
                    </div>
                </div>
        </div>
        
  
</div>
</div>
@endsection