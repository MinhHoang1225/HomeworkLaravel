<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CovidController;




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