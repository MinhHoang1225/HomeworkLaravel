<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InformationController;



Route::get('/', function () {
    return view('homepage');
});

Route::get('/sum_form', [CalculatorController::class, 'hello']);
Route::get('/sum-form', [CalculatorController::class, 'showForm']);
Route::post('/calculate-sum', [CalculatorController::class, 'calculateSum'])->name('calculate.sum');

Route::get('/index', [PostController::class, 'index']);

Route::get('/formInfo', [InformationController::class, 'ifForm'])->name('form.info');
Route::post('/formInfo', [InformationController::class, 'displayInfor'])->name('display.infor');
