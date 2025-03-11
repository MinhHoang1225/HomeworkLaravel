<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;



class PageController extends Controller
{
    // public function getIndex(){
    //     return view('page.trangchu');
    // }
    public function getProduct(){
        return view('page.sanpham', compact('products'));
    }
    public function getTypeProduct(){
        $products = Product::take(10) -> get();
        $countPd = Product::count();
        return view('page.loaisanpham', compact('products','countPd'));
    }
    public function getSlide(){
        $slide = Slide::all();
        return view('page.trangchu', compact('slide'));
    }
}
