<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController as ContactController;
use App\Http\Controllers\frontend\ProductController as ProductController;

//backend
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProductController as BackendProductController;
use App\Http\Controllers\backend\CategoryController as BackendCategoryController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\frontend\BrandController as BackendBrandController;
use App\Http\Controllers\backend\ContactController as BackendContactController;
use App\Http\Controllers\backend\MenuController as BackendMenuController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\TopicController;
use App\Http\Controllers\backend\UserController;

//Trang nguoi dung
Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('sanpham',[ProductController::class,'index'])->name('site.product');
Route::get('chi-tiet-san-pham/{slug}',[ProductController::class,'product_detail'])->name('site.product.detail');
Route::get('lienhe',[ContactController::class,'index'])->name('site.contact');

//Admin
route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
// 1.Banner
route::prefix('banner')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\BannerController::class, "index"])->name('admin.banner.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\BannerController::class, "trash"])->name('admin.banner.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\BannerController::class, "show"])->name('admin.banner.show' );//chi tiet
    Route::get('create', [BannerController::class, "create"])->name('admin.banner.create' );//form them
    Route::post('store', [BannerController::class, "store"])->name('admin.banner.store' );//Xu ly them
    Route::get('edit{id}', [BannerController::class, "edit"])->name('admin.banner.edit' );
    Route::put('update{id}', [BannerController::class, "update"])->name('admin.banner.update' );
    Route::get('status{id}', [BannerController::class, "status"])->name('admin.banner.status' );
    Route::get('restore{id}', [BannerController::class, "restore"])->name('admin.banner.restore' );
    Route::delete('destroy{id}', [BannerController::class, "destroy"])->name('admin.banner.destroy' );
    Route::get('delete/{id}', [BannerController::class, "delete"])->name('admin.banner.delete' );
});

// 2.Brand
route::prefix('brand')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\BrandController::class, "index"])->name('admin.brand.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\BrandController::class, "trash"])->name('admin.brand.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\BrandController::class, "show"])->name('admin.brand.show' );//chi tiet
    Route::get('create', [BrandController::class, "create"])->name('admin.brand.create' );//form them
    Route::post('store', [BrandController::class, "store"])->name('admin.brand.store' );//Xu ly them
    Route::get('edit{id}', [BrandController::class, "edit"])->name('admin.brand.edit' );
    Route::put('update{id}', [BrandController::class, "update"])->name('admin.brand.update' );
    Route::get('status{id}', [BrandController::class, "status"])->name('admin.brand.status' );
    Route::get('restore{id}', [BrandController::class, "restore"])->name('admin.brand.restore' );
    Route::delete('destroy{id}', [BrandController::class, "destroy"])->name('admin.brand.destroy' );
    Route::get('delete/{id}', [BrandController::class, "delete"])->name('admin.brand.delete' );
});

    // 3.category
    route::prefix('category')->group(function(){

        Route::get('/', [App\Http\Controllers\backend\CategoryController::class, "index"])->name('admin.category.index' );//danh sach
        Route::get('trash', [App\Http\Controllers\backend\CategoryController::class, "trash"])->name('admin.category.trash' );//thung rac
        Route::get('show/{id}', [App\Http\Controllers\backend\CategoryController::class, "show"])->name('admin.category.show' );//chi tiet
        Route::get('create', [CategoryController::class, "create"])->name('admin.category.create' );//form them
        Route::post('store', [CategoryController::class, "store"])->name('admin.category.store' );//Xu ly them
        Route::get('edit{id}', [CategoryController::class, "edit"])->name('admin.category.edit' );
        Route::put('update{id}', [CategoryController::class, "update"])->name('admin.category.update' );
        Route::get('status{id}', [CategoryController::class, "status"])->name('admin.category.status' );
        Route::get('restore{id}', [CategoryController::class, "restore"])->name('admin.category.restore' );
        Route::delete('destroy{id}', [CategoryController::class, "destroy"])->name('admin.category.destroy' );
        Route::get('delete/{id}', [CategoryController::class, "delete"])->name('admin.category.delete' );
    });
   //4.Contact
   
   route::prefix('contact')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\ContactController::class, "index"])->name('admin.contact.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\ContactController::class, "trash"])->name('admin.contact.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\ContactController::class, "show"])->name('admin.contact.show' );//chi tiet
    Route::get('create', [ContactController::class, "create"])->name('admin.contact.create' );//form them
    Route::post('store', [ContactController::class, "store"])->name('admin.contact.store' );//Xu ly them
    Route::get('edit{id}', [ContactController::class, "edit"])->name('admin.contact.edit' );
    Route::put('update{id}', [ContactController::class, "update"])->name('admin.contact.update' );
    Route::get('status{id}', [ContactController::class, "status"])->name('admin.contact.status' );
    Route::get('restore{id}', [ContactController::class, "restore"])->name('admin.contact.restore' );
    Route::delete('destroy{id}', [ContactController::class, "destroy"])->name('admin.contact.destroy' );
    Route::get('delete/{id}', [ContactController::class, "delete"])->name('admin.contact.delete' );
});
//5.Menu

route::prefix('menu')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\MenuController::class, "index"])->name('admin.menu.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\MenuController::class, "trash"])->name('admin.menu.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\MenuController::class, "show"])->name('admin.menu.show' );//chi tiet
    Route::get('create', [MenuController::class, "create"])->name('admin.menu.create' );//form them
    Route::post('store', [MenuController::class, "store"])->name('admin.menu.store' );//Xu ly them
    Route::get('edit{id}', [MenuController::class, "edit"])->name('admin.menu.edit' );
    Route::put('update{id}', [MenuController::class, "update"])->name('admin.menu.update' );
    Route::get('status{id}', [MenuController::class, "status"])->name('admin.menu.status' );
    Route::get('restore{id}', [MenuController::class, "restore"])->name('admin.menu.restore' );
    Route::delete('destroy{id}', [MenuController::class, "destroy"])->name('admin.menu.destroy' );
    Route::get('delete/{id}', [MenuController::class, "delete"])->name('admin.menu.delete' );
});
//6.order

route::prefix('order')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\OrderController::class, "index"])->name('admin.order.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\OrderController::class, "trash"])->name('admin.order.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\OrderController::class, "show"])->name('admin.order.show' );//chi tiet
    Route::get('create', [OrderController::class, "create"])->name('admin.order.create' );//form them
    Route::post('store', [OrderController::class, "store"])->name('admin.order.store' );//Xu ly them
    Route::get('edit{id}', [OrderController::class, "edit"])->name('admin.order.edit' );
    Route::put('update{id}', [OrderController::class, "update"])->name('admin.order.update' );
    Route::get('status{id}', [OrderController::class, "status"])->name('admin.order.status' );
    Route::get('restore{id}', [OrderController::class, "restore"])->name('admin.order.restore' );
    Route::delete('destroy{id}', [OrderController::class, "destroy"])->name('admin.order.destroy' );
    Route::get('delete/{id}', [OrderController::class, "delete"])->name('admin.order.delete' );
});
//7.post

route::prefix('post')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\PostController::class, "index"])->name('admin.post.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\PostController::class, "trash"])->name('admin.post.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\PostController::class, "show"])->name('admin.post.show' );//chi tiet
    Route::get('create', [PostController::class, "create"])->name('admin.post.create' );//form them
    Route::post('store', [PostController::class, "store"])->name('admin.post.store' );//Xu ly them
    Route::get('edit{id}', [PostController::class, "edit"])->name('admin.post.edit' );
    Route::put('update{id}', [PostController::class, "update"])->name('admin.post.update' );
    Route::get('status{id}', [PostController::class, "status"])->name('admin.post.status' );
    Route::get('restore{id}', [PostController::class, "restore"])->name('admin.post.restore' );
    Route::delete('destroy{id}', [PostController::class, "destroy"])->name('admin.post.destroy' );
    Route::get('delete/{id}', [PostController::class, "delete"])->name('admin.post.delete' );
});
//8.product
    route::prefix('product')->group(function(){

        Route::get('/', [App\Http\Controllers\backend\ProductController::class, "index"])->name('admin.product.index' );//danh sach
        Route::get('trash', [App\Http\Controllers\backend\ProductController::class, "trash"])->name('admin.product.trash' );//thung rac
        Route::get('show/{id}', [App\Http\Controllers\backend\ProductController::class, "show"])->name('admin.product.show' );//chi tiet
        Route::get('create', [ProductController::class, "create"])->name('admin.product.create' );//form them
        Route::post('store', [ProductController::class, "store"])->name('admin.product.store' );//Xu ly them
        Route::get('edit{id}', [ProductController::class, "edit"])->name('admin.product.edit' );
        Route::put('update{id}', [ProductController::class, "update"])->name('admin.product.update' );
        Route::get('status{id}', [ProductController::class, "status"])->name('admin.product.status' );
        Route::get('restore{id}', [ProductController::class, "restore"])->name('admin.product.restore' );
        Route::delete('destroy{id}', [ProductController::class, "destroy"])->name('admin.product.destroy' );
        Route::get('delete/{id}', [ProductController::class, "delete"])->name('admin.product.delete' );
    });
//9.topic

route::prefix('topic')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\TopicController::class, "index"])->name('admin.topic.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\TopicController::class, "trash"])->name('admin.topic.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\TopicController::class, "show"])->name('admin.topic.show' );//chi tiet
    Route::get('create', [TopicController::class, "create"])->name('admin.topic.create' );//form them
    Route::post('store', [TopicController::class, "store"])->name('admin.topic.store' );//Xu ly them
    Route::get('edit{id}', [TopicController::class, "edit"])->name('admin.topic.edit' );
    Route::put('update{id}', [TopicController::class, "update"])->name('admin.topic.update' );
    Route::get('status{id}', [TopicController::class, "status"])->name('admin.topic.status' );
    Route::get('restore{id}', [TopicController::class, "restore"])->name('admin.topic.restore' );
    Route::delete('destroy{id}', [TopicController::class, "destroy"])->name('admin.topic.destroy' );
    Route::get('delete/{id}', [TopicController::class, "delete"])->name('admin.topic.delete' );
});
//10.User

route::prefix('user')->group(function(){

    Route::get('/', [App\Http\Controllers\backend\UserController::class, "index"])->name('admin.user.index' );//danh sach
    Route::get('trash', [App\Http\Controllers\backend\UserController::class, "trash"])->name('admin.user.trash' );//thung rac
    Route::get('show/{id}', [App\Http\Controllers\backend\UserController::class, "show"])->name('admin.user.show' );//chi tiet
    Route::get('create', [UserController::class, "create"])->name('admin.user.create' );//form them
    Route::post('store', [UserController::class, "store"])->name('admin.user.store' );//Xu ly them
    Route::get('edit{id}', [UserController::class, "edit"])->name('admin.user.edit' );
    Route::put('update{id}', [UserController::class, "update"])->name('admin.user.update' );
    Route::get('status{id}', [UserController::class, "status"])->name('admin.user.status' );
    Route::get('restore{id}', [UserController::class, "restore"])->name('admin.user.restore' );
    Route::delete('destroy{id}', [UserController::class, "destroy"])->name('admin.user.destroy' );
    Route::get('delete/{id}', [UserController::class, "delete"])->name('admin.user.delete' );
});
});