<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CovidController;
use App\Http\Controllers\ProductController;				
use App\Http\Controllers\PageController;				
use App\Http\Controllers\EshopperController;	
use App\Http\Controllers\DatabaseController;				



Route::resource('products', ProductController::class);										
Route::get('/', function () {
    return view('homepage');
});

Route::get('/sum_form', [CalculatorController::class, 'hello']);
Route::get('/sum-form', [CalculatorController::class, 'showForm']);
Route::post('/calculate-sum', [CalculatorController::class, 'calculateSum'])->name('calculate.sum');

Route::get('/index', [PostController::class, 'index']);

Route::get('/form', [InformationController::class, 'ifForm'])->name('ifForm');
Route::post('/form', [InformationController::class, 'displayInfor'])->name('displayInfor');

Route::get('/covid', [CovidController::class, 'getData']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PageController::class, 'getSlide'])->name('trang-chu');
Route::get('products',[PageController::class, 'getProduct'])->name('san-pham');
Route::get('typeproducts',[PageController::class, 'getTypeProduct'])->name('loai-san-pham');

Route::get('/EshopperIndex', [EshopperController::class, 'getEshopperIndex'])->name('Eshopper-trang-chu');
Route::get('/EshopperLogin', [EshopperController::class, 'getEshopperLogin'])->name('Eshopper-login');
Route::get('/EshopperProductDetail', [EshopperController::class, 'getEshopperDetail'])->name('detail');
Route::get('/EshopperShop', [EshopperController::class, 'getEshopperShop']) -> name('Eshopper-shop');
Route::get('/EshopperBlog', [EshopperController::class, 'getEshopperBlog']) -> name('Eshopper-blog');
Route::get('/Eshopper404', [EshopperController::class, 'getEshopper404']) -> name('Eshopper-404');
Route::get('/EshopperContact', [EshopperController::class, 'getEshopperContact']) -> name('Eshopper-contact');
Route::get('/EshopperCart', [EshopperController::class, 'getEshopperCart']) -> name('Eshopper-cart');
Route::get('/EshopperBlogSingle', [EshopperController::class, 'getEshopperBlogSingle']) -> name('Eshopper-blog-single');


