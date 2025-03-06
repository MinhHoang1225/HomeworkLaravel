<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;


class PageController extends Controller
{
    // public function getIndex(){
    //     return view('page.trangchu');
    // }
    // public function getProduct(){
    //     return view('page.sanpham');
    // }
    // public function getTypeProduct(){
    //     return view('page.loaisanpham');
    // }
    public function getSlide(){
        $slide = Slide::all();
        return view('page.trangchu', compact('slide'));
    }
}
