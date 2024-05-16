<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\ProductController;

//Trang nguoi dung
Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('sanpham',[ProductController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'product-detail'])->name('site.product.detail');
Route::get('lienhe',[ContactController::class,'contact'])->name('site.contact');